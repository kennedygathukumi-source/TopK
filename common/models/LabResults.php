<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lab results".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $record_id
 * @property int $test_id
 * @property int $doctor_id
 * @property string $findings
 * @property string $result_date
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Patients $patient
 * @property Test $test
 */
class LabResults extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lab results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'record_id', 'test_id', 'doctor_id', 'findings', 'result_date', 'created_at', 'updated_at'], 'required'],
            [['id', 'patient_id', 'record_id', 'test_id', 'doctor_id'], 'integer'],
            [['findings'], 'string'],
            [['result_date', 'created_at', 'updated_at'], 'safe'],
            [['id'], 'unique'],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patients::class, 'targetAttribute' => ['patient_id' => 'id']],
            [['test_id'], 'exist', 'skipOnError' => true, 'targetClass' => Test::class, 'targetAttribute' => ['test_id' => 'id']],
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
            'record_id' => 'Record ID',
            'test_id' => 'Test ID',
            'doctor_id' => 'Doctor ID',
            'findings' => 'Findings',
            'result_date' => 'Result Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
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
     * Gets query for [[Test]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTest()
    {
        return $this->hasOne(Test::class, ['id' => 'test_id']);
    }

}
