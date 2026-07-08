<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\MedicalRecords $model */

$this->title = 'Create Medical Records';
$this->params['breadcrumbs'][] = ['label' => 'Medical Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
