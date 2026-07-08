<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property int $id
 * @property string $room_number
 * @property string $room_type
 * @property string $capacity
 * @property int $dept_id
 * @property int $occupied_beds
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Admissions[] $admissions
 */
class Rooms extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'room_number', 'room_type', 'capacity', 'dept_id', 'occupied_beds', 'created_at', 'updated_at'], 'required'],
            [['id', 'dept_id', 'occupied_beds'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['room_number'], 'string', 'max' => 20],
            [['room_type', 'capacity'], 'string', 'max' => 50],
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
            'room_number' => 'Room Number',
            'room_type' => 'Room Type',
            'capacity' => 'Capacity',
            'dept_id' => 'Dept ID',
            'occupied_beds' => 'Occupied Beds',
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
        return $this->hasMany(Admissions::class, ['room_id' => 'id']);
    }

}
