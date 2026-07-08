<?php

use backend\models\Admissions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AdmissionsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Admissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admissions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Admissions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AdmissionId',
            'PatientId',
            'DoctorId',
            'RoomId',
            'AdmissionDate',
            //'DischargeDate',
            //'AdmissionReason:ntext',
            //'Diagnosis:ntext',
            //'Treatment:ntext',
            //'Notes:ntext',
            //'Created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Admissions $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'AdmissionId' => $model->AdmissionId]);
                 }
            ],
        ],
    ]); ?>


</div>
