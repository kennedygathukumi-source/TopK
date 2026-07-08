<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property int $user_id
 * @property int $dept_id
 * @property string $gender_id
 * @property int $role_id
 * @property string $name
 * @property string $specialization
 * @property string $created_at
 *
 * @property Departments $dept
 * @property Roles $role
 * @property User $user
 */
class Staff extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'dept_id', 'gender_id', 'role_id', 'name', 'specialization', 'created_at'], 'required'],
            [['id', 'user_id', 'dept_id', 'role_id'], 'integer'],
            [['created_at'], 'safe'],
            [['gender_id', 'name', 'specialization'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::class, 'targetAttribute' => ['role_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::class, 'targetAttribute' => ['dept_id' => 'id']],
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
            'dept_id' => 'Dept ID',
            'gender_id' => 'Gender ID',
            'role_id' => 'Role ID',
            'name' => 'Name',
            'specialization' => 'Specialization',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Dept]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Departments::class, ['id' => 'dept_id']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::class, ['id' => 'role_id']);
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
