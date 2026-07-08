<?php

/** @var yii\web\View $this */
/** @var \common\models\Doctors[] $doctors */

use yii\helpers\Html;

$this->title = 'Our Doctors';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-doctors">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <?php foreach ($doctors as $doctor): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Dr. <?= Html::encode($doctor->staff->first_name ?? '') ?> 
                            <?= Html::encode($doctor->staff->last_name ?? '') ?>
                        </h5>
                        <p class="card-text">
                            <strong>Department:</strong> 
                            <?= Html::encode($doctor->department->name ?? 'General') ?><br>
                            <strong>Specialization:</strong> 
                            <?= Html::encode($doctor->specialization ?? 'N/A') ?><br>
                            <strong>Email:</strong> 
                            <?= Html::encode($doctor->staff->email ?? 'N/A') ?>
                        </p>
                        <?= Html::a('Book Appointment', 
                            ['site/book-appointment', 'doctor_id' => $doctor->id], 
                            ['class' => 'btn btn-primary']) 
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>