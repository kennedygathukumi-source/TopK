<?php

declare(strict_types=1);

namespace frontend\models;

use common\models\User;
use Yii;
use yii\base\Model;
use yii\mail\MailerInterface;

class PasswordResetRequestForm extends Model
{
    public string $email = '';

    public function rules(): array
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist', 'targetClass' => User::class, 'filter' => ['status' => 10], 'message' => 'There is no user with this email address.'],
        ];
    }

    public function sendEmail(MailerInterface $mailer, string $supportEmail, string $appName): bool
    {
        $user = User::findOne(['email' => $this->email]);
        if ($user === null) {
            return false;
        }

        $user->generatePasswordResetToken();
        if (!$user->save()) {
            return false;
        }

        return $mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
            ->setFrom([$supportEmail => $appName . ' robot'])
            ->setTo($this->email)
            ->setSubject('Password reset for ' . $appName)
            ->send();
    }
}
