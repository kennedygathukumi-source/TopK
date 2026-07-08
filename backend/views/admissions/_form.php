<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Admissions $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admissions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AdmissionId')->textInput() ?>

    <?= $form->field($model, 'PatientId')->textInput() ?>

    <?= $form->field($model, 'DoctorId')->textInput() ?>

    <?= $form->field($model, 'RoomId')->textInput() ?>

    <?= $form->field($model, 'AdmissionDate')->textInput() ?>

    <?= $form->field($model, 'DischargeDate')->textInput() ?>

    <?= $form->field($model, 'AdmissionReason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Diagnosis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Treatment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
