<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Admissions $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admissions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'doctor_id')->textInput() ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'admission_date')->textInput() ?>

    <?= $form->field($model, 'discharge_date')->textInput() ?>

    <?= $form->field($model, 'AdmissionReason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnosis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'treatment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
