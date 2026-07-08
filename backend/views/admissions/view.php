<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Admissions $model */

$this->title = $model->AdmissionId;
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admissions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'AdmissionId' => $model->AdmissionId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'AdmissionId' => $model->AdmissionId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AdmissionId',
            'PatientId',
            'DoctorId',
            'RoomId',
            'AdmissionDate',
            'DischargeDate',
            'AdmissionReason:ntext',
            'Diagnosis:ntext',
            'Treatment:ntext',
            'Notes:ntext',
            'Created_at',
        ],
    ]) ?>

</div>
