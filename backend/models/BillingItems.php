<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "billing items".
 *
 * @property int $id
 * @property int $invoice_id
 * @property string $item_type
 * @property string $description
 * @property int $quantity
 * @property float $unit_price
 * @property float $total_price
 * @property string $create_at
 * @property string $updated_at
 *
 * @property Invoices $invoice
 */
class BillingItems extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'invoice_id', 'item_type', 'description', 'quantity', 'unit_price', 'total_price', 'create_at', 'updated_at'], 'required'],
            [['id', 'invoice_id', 'quantity'], 'integer'],
            [['unit_price', 'total_price'], 'number'],
            [['create_at', 'updated_at'], 'safe'],
            [['item_type', 'description'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => Invoices::class, 'targetAttribute' => ['invoice_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invoice_id' => 'Invoice ID',
            'item_type' => 'Item Type',
            'description' => 'Description',
            'quantity' => 'Quantity',
            'unit_price' => 'Unit Price',
            'total_price' => 'Total Price',
            'create_at' => 'Create At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Invoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(Invoices::class, ['id' => 'invoice_id']);
    }

}
