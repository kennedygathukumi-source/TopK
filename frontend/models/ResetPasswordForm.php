<?php

declare(strict_types=1);

namespace frontend\models;

use common\models\User;
use yii\base\InvalidArgumentException;
use yii\base\Model;

class ResetPasswordForm extends Model
{
    public string $password = '';

    private User $_user;

    public function __construct(string $token, array $config = [])
    {
        if (empty($token)) {
            throw new InvalidArgumentException('Password reset token cannot be blank.');
        }

        $user = User::findOne(['password_reset_token' => $token]);
        if ($user === null) {
            throw new InvalidArgumentException('Wrong password reset token.');
        }

        $this->_user = $user;
        parent::__construct($config);
    }

    public function rules(): array
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function resetPassword(): bool
    {
        $this->_user->setPassword($this->password);
        $this->_user->removePasswordResetToken();

        return $this->_user->save(false);
    }
}
