<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Test".
 *
 * @property int $id
 * @property string $test_type
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LabResults[] $labResults
 */
class Test extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'test_type', 'created_at', 'updated_at'], 'required'],
            [['id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['test_type'], 'string', 'max' => 50],
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
            'test_type' => 'Test Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[LabResults]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLabResults()
    {
        return $this->hasMany(LabResults::class, ['test_id' => 'id']);
    }

}
