<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Admissions $model */

$this->title = 'Update Admissions: ' . $model->AdmissionId;
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AdmissionId, 'url' => ['view', 'AdmissionId' => $model->AdmissionId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admissions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
