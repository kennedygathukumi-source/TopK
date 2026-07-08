<?php

declare(strict_types=1);

namespace frontend\models;

use common\models\User;
use yii\base\InvalidArgumentException;
use yii\base\Model;

class VerifyEmailForm extends Model
{
    private User $_user;

    public function __construct(string $token, array $config = [])
    {
        if (empty($token)) {
            throw new InvalidArgumentException('Email verification token cannot be blank.');
        }

        $user = User::findOne(['verification_token' => $token]);
        if ($user === null) {
            throw new InvalidArgumentException('Wrong email verification token.');
        }

        $this->_user = $user;
        parent::__construct($config);
    }

    public function verifyEmail(): bool
    {
        $this->_user->statusId = 10;

        return $this->_user->save(false);
    }
}
