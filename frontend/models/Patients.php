<?php

namespace frontend\models;

use common\models\Admissions;
use common\models\Gender;
use common\models\Insurances;
use common\models\LabResults;
use common\models\MedicalRecords;
use common\models\User;
use Yii;

/**
 * This is the model class for table "patients".
 *
 * @property int $id
 * @property int $user_id
 * @property int $insurance_id
 * @property int $gender_id
 * @property string $created_at
 * @property string $created_by
 * @property string $blood_type
 *
 * @property Admissions[] $admissions
 * @property Gender $gender
 * @property Insurances $insurance
 * @property LabResults[] $labResults
 * @property MedicalRecords[] $medicalRecords
 * @property User $user
 */
class Patients extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'insurance_id', 'gender_id', 'created_at', 'created_by', 'blood_type'], 'required'],
            [['id', 'user_id', 'insurance_id', 'gender_id'], 'integer'],
            [['created_at'], 'safe'],
            [['created_by', 'blood_type'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['gender_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gender::class, 'targetAttribute' => ['gender_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['insurance_id'], 'exist', 'skipOnError' => true, 'targetClass' => Insurances::class, 'targetAttribute' => ['insurance_id' => 'id']],
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
            'insurance_id' => 'Insurance ID',
            'gender_id' => 'Gender ID',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'blood_type' => 'Blood Type',
        ];
    }

    /**
     * Gets query for [[Admissions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdmissions()
    {
        return $this->hasMany(Admissions::class, ['patient_id' => 'id']);
    }

    /**
     * Gets query for [[Gender]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::class, ['id' => 'gender_id']);
    }

    /**
     * Gets query for [[Insurance]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInsurance()
    {
        return $this->hasOne(Insurances::class, ['id' => 'insurance_id']);
    }

    /**
     * Gets query for [[LabResults]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLabResults()
    {
        return $this->hasMany(LabResults::class, ['patient_id' => 'id']);
    }

    /**
     * Gets query for [[MedicalRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecords::class, ['patient_id' => 'id']);
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
