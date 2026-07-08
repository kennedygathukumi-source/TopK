<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "appointments".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $staff_id
 * @property int $doctor_id
 * @property string $appointment_date
 * @property string $appointment_time
 * @property string $created_at
 * @property string $updated_at
 */
class Appointments extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'staff_id', 'doctor_id', 'appointment_date', 'appointment_time', 'created_at', 'updated_at'], 'required'],
            [['id', 'patient_id', 'staff_id', 'doctor_id'], 'integer'],
            [['appointment_date', 'appointment_time', 'created_at', 'updated_at'], 'safe'],
            [['id'], 'unique'],
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
            'staff_id' => 'Staff ID',
            'doctor_id' => 'Doctor ID',
            'appointment_date' => 'Appointment Date',
            'appointment_time' => 'Appointment Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
