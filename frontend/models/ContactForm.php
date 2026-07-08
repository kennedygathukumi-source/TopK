<?php

declare(strict_types=1);

namespace frontend\models;

use yii\base\Model;
use yii\mail\MailerInterface;

class ContactForm extends Model
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $body = '';
    public string $verifyCode = '';

    public function rules(): array
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
            [['name', 'subject'], 'string', 'max' => 255],
        ];
    }

    public function sendEmail(MailerInterface $mailer, string $adminEmail, string $senderEmail, string $senderName): bool
    {
        return $mailer->compose()
            ->setTo($adminEmail)
            ->setFrom([$senderEmail => $senderName])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
