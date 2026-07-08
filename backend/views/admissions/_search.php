<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\AdmissionsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admissions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AdmissionId') ?>

    <?= $form->field($model, 'PatientId') ?>

    <?= $form->field($model, 'DoctorId') ?>

    <?= $form->field($model, 'RoomId') ?>

    <?= $form->field($model, 'AdmissionDate') ?>

    <?php // echo $form->field($model, 'DischargeDate') ?>

    <?php // echo $form->field($model, 'AdmissionReason') ?>

    <?php // echo $form->field($model, 'Diagnosis') ?>

    <?php // echo $form->field($model, 'Treatment') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <?php // echo $form->field($model, 'Created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
