<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MedicalRecords $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="medical-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'doctor_id')->textInput() ?>

    <?= $form->field($model, 'appointment_id')->textInput() ?>

    <?= $form->field($model, 'record_date')->textInput() ?>

    <?= $form->field($model, 'Symptoms')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_results')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
