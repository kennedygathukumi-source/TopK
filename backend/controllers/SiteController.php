<?php

declare(strict_types=1);

namespace backend\controllers;

use common\models\LoginForm;
use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'create-admin'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin(): string|Response
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout(): Response
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * TEMPORARY action to bootstrap the first admin user.
     * DELETE THIS ACTION (and its access rule above) once the admin has been created.
     *
     * @return string
     */
    public function actionCreateAdmin(): string
    {
        $message = '';

        if (Yii::$app->request->isPost) {
            $user = new User();
            $user->username = Yii::$app->request->post('username');
            $user->email = Yii::$app->request->post('email');
            $user->setPassword(Yii::$app->request->post('password'));
            $user->generateAuthKey();
            $user->status = User::STATUS_ACTIVE;
            // This project's user.password_reset_token column is NCHAR(10) NOT NULL
            // with no default, so it must be set explicitly on insert.
            $user->password_reset_token = '';

            if ($user->save()) {
                $message = 'Admin created: ' . Html::encode($user->username);
            } else {
                $message = 'Failed: ' . implode(', ', $user->getErrorSummary(true));
            }
        }

        return $this->renderContent('
            <h3>Create First Admin</h3>
            <form method="post">
                <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->csrfToken . '">
                Username: <input type="text" name="username"><br>
                Email: <input type="email" name="email"><br>
                Password: <input type="password" name="password"><br>
                <button type="submit">Create</button>
            </form>
            <p>' . $message . '</p>
        ');
    }
}