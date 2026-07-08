<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "doctors".
 *
 * @property int $id
 * @property int $user_id
 * @property string $specialization
 * @property int $dept_id
 * @property string $qualification
 * @property int $experience_years
 * @property float $consultation_fee
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Admissions[] $admissions
 * @property MedicalRecords[] $medicalRecords
 * @property User $user
 */
class Doctors extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'specialization', 'dept_id', 'qualification', 'experience_years', 'consultation_fee', 'created_at', 'updated_at'], 'required'],
            [['id', 'user_id', 'dept_id', 'experience_years'], 'integer'],
            [['consultation_fee'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['specialization', 'qualification'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'specialization' => 'Specialization',
            'dept_id' => 'Dept ID',
            'qualification' => 'Qualification',
            'experience_years' => 'Experience Years',
            'consultation_fee' => 'Consultation Fee',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Admissions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdmissions()
    {
        return $this->hasMany(Admissions::class, ['doctor_id' => 'id']);
    }

    /**
     * Gets query for [[MedicalRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecords::class, ['doctor_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

}
