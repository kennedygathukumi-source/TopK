<?php
use yii\helpers\Html;
use common\models\MedicalRecords;

/** @var yii\web\View $this */
/** @var MedicalRecords[] $records */

$this->title = 'My Medical Records';
?>

<div class="container py-4">
    <h2 class="mb-4"><?= Html::encode($this->title) ?></h2>

    <?php foreach ($records as $record): ?>
        <div class="card mb-3">
            <div class="card-header bg-light">
                <div class="d-flex justify-content-between">
                    <span>
                        <i class="fas fa-file-medical text-primary"></i>
                        <strong><?= date('F d, Y', strtotime($record->created_at)) ?></strong>
                    </span>
                    <span class="text-muted">
                        Dr. <?= Html::encode($record->doctor->staff->first_name ?? '') ?> 
                        <?= Html::encode($record->doctor->staff->last_name ?? '') ?>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <h6>Diagnosis</h6>
                <p><?= Html::encode($record->diagnosis ?? 'No diagnosis recorded') ?></p>

                <h6>Treatment</h6>
                <p><?= Html::encode($record->treatment ?? 'No treatment recorded') ?></p>

                <?php if (!empty($record->prescriptions)): ?>
                    <h6>Prescriptions</h6>
                    <ul>
                        <?php foreach ($record->prescriptions as $prescription): ?>
                            <li>
                                <?= Html::encode($prescription->medication_name ?? 'N/A') ?> - 
                                <?= Html::encode($prescription->dosage ?? '') ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if (!empty($record->labResults)): ?>
                    <h6>Lab Results</h6>
                    <ul>
                        <?php foreach ($record->labResults as $lab): ?>
                            <li>
                                <?= Html::encode($lab->test_name ?? 'N/A') ?> - 
                                <?= Html::encode($lab->result ?? 'Pending') ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>