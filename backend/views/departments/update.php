<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Departments $model */

$this->title = 'Update Departments: ' . $model->dept_id;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dept_id, 'url' => ['view', 'dept_id' => $model->dept_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
