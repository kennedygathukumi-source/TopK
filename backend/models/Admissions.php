<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admissions".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property int $room_id
 * @property string $admission_date
 * @property string $discharge_date
 * @property string $AdmissionReason
 * @property string $diagnosis
 * @property string $treatment
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Doctors $doctor
 * @property Patients $patient
 * @property Rooms $room
 */
class Admissions extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admissions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'doctor_id', 'room_id', 'admission_date', 'discharge_date', 'AdmissionReason', 'diagnosis', 'treatment', 'notes', 'created_at', 'updated_at'], 'required'],
            [['id', 'patient_id', 'doctor_id', 'room_id'], 'integer'],
            [['admission_date', 'discharge_date', 'created_at', 'updated_at'], 'safe'],
            [['AdmissionReason', 'diagnosis', 'treatment', 'notes'], 'string'],
            [['id'], 'unique'],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::class, 'targetAttribute' => ['room_id' => 'id']],
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
            'room_id' => 'Room ID',
            'admission_date' => 'Admission Date',
            'discharge_date' => 'Discharge Date',
            'AdmissionReason' => 'Admission Reason',
            'diagnosis' => 'Diagnosis',
            'treatment' => 'Treatment',
            'notes' => 'Notes',
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
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::class, ['id' => 'room_id']);
    }

}
