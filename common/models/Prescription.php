<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prescription".
 *
 * @property string $id
 * @property int $record_id
 * @property int $patient_id
 * @property int $doctor_id
 * @property string $medication
 * @property string $dosage
 * @property string $instructions
 * @property int $quantity
 * @property string $Created_at
 * @property string $updated_at
 *
 * @property MedicalRecords $record
 */
class Prescription extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prescription';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'record_id', 'patient_id', 'doctor_id', 'medication', 'dosage', 'instructions', 'quantity', 'Created_at', 'updated_at'], 'required'],
            [['record_id', 'patient_id', 'doctor_id', 'quantity'], 'integer'],
            [['instructions'], 'string'],
            [['Created_at', 'updated_at'], 'safe'],
            [['id'], 'string', 'max' => 10],
            [['medication', 'dosage'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => MedicalRecords::class, 'targetAttribute' => ['record_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'record_id' => 'Record ID',
            'patient_id' => 'Patient ID',
            'doctor_id' => 'Doctor ID',
            'medication' => 'Medication',
            'dosage' => 'Dosage',
            'instructions' => 'Instructions',
            'quantity' => 'Quantity',
            'Created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Record]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(MedicalRecords::class, ['id' => 'record_id']);
    }

}
