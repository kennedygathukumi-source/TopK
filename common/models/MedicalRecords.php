<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "medical records".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property int $appointment_id
 * @property string $record_date
 * @property string $Symptoms
 * @property string $diagnosis
 * @property string $prescription
 * @property string $lab_results
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Doctors $doctor
 * @property Patients $patient
 * @property Prescription[] $prescriptions
 */
class MedicalRecords extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medical records';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'doctor_id', 'appointment_id', 'record_date', 'Symptoms', 'diagnosis', 'prescription', 'lab_results', 'created_at', 'updated_at'], 'required'],
            [['id', 'patient_id', 'doctor_id', 'appointment_id'], 'integer'],
            [['record_date', 'created_at', 'updated_at'], 'safe'],
            [['Symptoms', 'diagnosis', 'prescription', 'lab_results'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patients::class, 'targetAttribute' => ['patient_id' => 'id']],
            [['doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::class, 'targetAttribute' => ['doctor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'doctor_id' => 'Doctor ID',
            'appointment_id' => 'Appointment ID',
            'record_date' => 'Record Date',
            'Symptoms' => 'Symptoms',
            'diagnosis' => 'Diagnosis',
            'prescription' => 'Prescription',
            'lab_results' => 'Lab Results',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Doctor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctors::class, ['id' => 'doctor_id']);
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patients::class, ['id' => 'patient_id']);
    }

    /**
     * Gets query for [[Prescriptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::class, ['record_id' => 'id']);
    }

}
