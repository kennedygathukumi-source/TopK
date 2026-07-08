<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BillingItems $model */

$this->title = 'Create Billing Items';
$this->params['breadcrumbs'][] = ['label' => 'Billing Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billing-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
