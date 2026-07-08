<?php

namespace frontend\models;

use common\models\AuditLogs;
use common\models\Doctors;
use common\models\Notification;
use common\models\Patients;
use common\models\Staff;
use common\models\Status;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status_id
 * @property int $roleId
 * @property string $phonenumber
 * @property string $created_at
 * @property string $updated_at
 *
 * @property AuditLogs[] $auditLogs
 * @property Doctors[] $doctors
 * @property Notification[] $notifications
 * @property Patients[] $patients
 * @property Staff[] $staff
 * @property Status $status
 */
class User extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'statusId', 'roleId', 'phonenumber', 'created_at', 'updated_at'], 'required'],
            [['id', 'statusId', 'roleId'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'auth_key', 'password_hash', 'email', 'phonenumber'], 'string', 'max' => 50],
            [['password_reset_token'], 'string', 'max' => 10],
            [['id'], 'unique'],
            [['statusId'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['statusId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'statusId' => 'Status ID',
            'roleId' => 'Role ID',
            'phonenumber' => 'Phonenumber',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[AuditLogs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditLogs()
    {
        return $this->hasMany(AuditLogs::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Doctors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctors()
    {
        return $this->hasMany(Doctors::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Notifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasMany(Notification::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patients::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'statusId']);
    }

}
