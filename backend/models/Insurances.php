<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "insurances".
 *
 * @property int $id
 * @property string $insurance_name
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Invoices[] $invoices
 * @property Patients[] $patients
 */
class Insurances extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insurances';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'insurance_name', 'created_at', 'updated_at'], 'required'],
            [['id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['insurance_name'], 'string', 'max' => 50],
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
            'insurance_name' => 'Insurance Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoices::class, ['insurance_id' => 'id']);
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patients::class, ['insurance_id' => 'id']);
    }

}
