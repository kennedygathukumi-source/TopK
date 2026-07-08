<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // Create permissions
        $managePatients = $auth->createPermission('managePatients');
        $managePatients->description = 'Manage patients';
        $auth->add($managePatients);

        $manageAppointments = $auth->createPermission('manageAppointments');
        $manageAppointments->description = 'Manage appointments';
        $auth->add($manageAppointments);

        // Create roles
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $managePatients);
        $auth->addChild($admin, $manageAppointments);

        $doctor = $auth->createRole('doctor');
        $auth->add($doctor);
        $auth->addChild($doctor, $managePatients);

        // Assign roles to users
        $auth->assign($admin, 1);  // User ID 1 = admin
        $auth->assign($doctor, 2); // User ID 2 = doctor

        echo "RBAC initialized successfully!\n";
    }
}