<?php
namespace common\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    /** @var string */
    public $name = '';
    /** @var string */
    public $email = '';
    /** @var string */
    public $subject = '';
    /** @var string */
    public $body = '';
    /** @var string */
    public $verifyCode = '';

    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    public function contact(string $email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }
}