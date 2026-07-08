<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\Appointments;
use common\models\MedicalRecords;
use common\models\Prescription;
use common\models\Patients;

class PatientController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // Only logged-in users
                    ],
                ],
            ],
        ];
    }

    /**
     * Patient Dashboard
     */
    public function actionIndex()
    {
        $userId = Yii::$app->user->id;
        
        // Find patient record linked to user
        $patient = Patients::findOne(['user_id' => $userId]);
        
        if (!$patient) {
            Yii::$app->session->setFlash('warning', 'Please complete your patient profile.');
            return $this->redirect(['patient/profile']);
        }

        // Get upcoming appointments
        $upcomingAppointments = Appointments::find()
            ->where(['patient_id' => $patient->id])
            ->andWhere(['>=', 'appointment_date', date('Y-m-d')])
            ->with(['doctor', 'department'])
            ->orderBy(['appointment_date' => SORT_ASC])
            ->all();

        // Get past appointments
        $pastAppointments = Appointments::find()
            ->where(['patient_id' => $patient->id])
            ->andWhere(['<', 'appointment_date', date('Y-m-d')])
            ->with(['doctor', 'department'])
            ->orderBy(['appointment_date' => SORT_DESC])
            ->limit(5)
            ->all();

        // Get medical records
        $medicalRecords = MedicalRecords::find()
            ->where(['patient_id' => $patient->id])
            ->with(['doctor'])
            ->orderBy(['created_at' => SORT_DESC])
            ->limit(5)
            ->all();

        return $this->render('index', [
            'patient' => $patient,
            'upcomingAppointments' => $upcomingAppointments,
            'pastAppointments' => $pastAppointments,
            'medicalRecords' => $medicalRecords,
        ]);
    }

    /**
     * My Appointments
     */
    public function actionAppointments()
    {
        $userId = Yii::$app->user->id;
        $patient = Patients::findOne(['user_id' => $userId]);
        
        if (!$patient) {
            return $this->redirect(['patient/profile']);
        }

        $appointments = Appointments::find()
            ->where(['patient_id' => $patient->id])
            ->with(['doctor', 'department', 'status'])
            ->orderBy(['appointment_date' => SORT_DESC])
            ->all();

        return $this->render('appointments', [
            'appointments' => $appointments,
        ]);
    }

    /**
     * View Single Appointment
     */
    public function actionViewAppointment(int $id)
    {
        $userId = Yii::$app->user->id;
        $patient = Patients::findOne(['user_id' => $userId]);
        
        $appointment = Appointments::findOne([
            'id' => $id,
            'patient_id' => $patient->id,
        ]);

        if (!$appointment) {
            throw new \yii\web\NotFoundHttpException('Appointment not found.');
        }

        return $this->render('view-appointment', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * My Medical Records
     */
    public function actionMedicalRecords()
    {
        $userId = Yii::$app->user->id;
        $patient = Patients::findOne(['user_id' => $userId]);
        
        if (!$patient) {
            return $this->redirect(['patient/profile']);
        }

        $records = MedicalRecords::find()
            ->where(['patient_id' => $patient->id])
            ->with(['doctor', 'labResults', 'prescriptions'])
            ->orderBy(['created_at' => SORT_DESC])
            ->all();

        return $this->render('medical-records', [
            'records' => $records,
        ]);
    }

    /**
     * My Prescriptions
     */
    public function actionPrescriptions()
    {
        $userId = Yii::$app->user->id;
        $patient = Patients::findOne(['user_id' => $userId]);
        
        if (!$patient) {
            return $this->redirect(['patient/profile']);
        }

        $prescriptions = Prescription::find()
            ->where(['patient_id' => $patient->id])
            ->with(['doctor', 'medicalRecord'])
            ->orderBy(['created_at' => SORT_DESC])
            ->all();

        return $this->render('prescriptions', [
            'prescriptions' => $prescriptions,
        ]);
    }

    /**
     * Patient Profile
     */
    public function actionProfile()
    {
        $userId = Yii::$app->user->id;
        $patient = Patients::findOne(['user_id' => $userId]) ?: new Patients();
        
        if ($patient->load(Yii::$app->request->post()) && $patient->save()) {
            Yii::$app->session->setFlash('success', 'Profile updated successfully.');
            return $this->redirect(['patient/index']);
        }

        return $this->render('profile', [
            'patient' => $patient,
        ]);
    }
}