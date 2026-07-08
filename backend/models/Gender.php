<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gender".
 *
 * @property int $id
 * @property string $description
 * @property string $name
 * @property string $CreatedDate
 * @property int $CreatedBy
 *
 * @property Patients[] $patients
 */
class Gender extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'name', 'CreatedDate', 'CreatedBy'], 'required'],
            [['CreatedDate'], 'safe'],
            [['CreatedBy'], 'integer'],
            [['description', 'name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'name' => 'Name',
            'CreatedDate' => 'Created Date',
            'CreatedBy' => 'Created By',
        ];
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patients::class, ['gender_id' => 'id']);
    }

}
