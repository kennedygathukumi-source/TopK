<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "invoices".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $insurance_id
 * @property int $invoice_number
 * @property float $total_amount
 * @property float $paid_amount
 * @property float $balance
 * @property string $PaymentMethod
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_at
 *
 * @property BillingItems[] $billingItems
 * @property Insurances $insurance
 */
class Invoices extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'insurance_id', 'invoice_number', 'total_amount', 'paid_amount', 'balance', 'PaymentMethod', 'created_by', 'created_at', 'updated_at'], 'required'],
            [['id', 'patient_id', 'insurance_id', 'invoice_number'], 'integer'],
            [['total_amount', 'paid_amount', 'balance'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['PaymentMethod', 'created_by'], 'string', 'max' => 50],
            [['id'], 'unique'],
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
            'patient_id' => 'Patient ID',
            'insurance_id' => 'Insurance ID',
            'invoice_number' => 'Invoice Number',
            'total_amount' => 'Total Amount',
            'paid_amount' => 'Paid Amount',
            'balance' => 'Balance',
            'PaymentMethod' => 'Payment Method',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[BillingItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingItems()
    {
        return $this->hasMany(BillingItems::class, ['invoice_id' => 'id']);
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

}
