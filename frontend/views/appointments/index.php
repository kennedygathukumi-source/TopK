<?php
use yii\helpers\Html;
use common\models\Appointments;

/** @var yii\web\View $this */
/** @var Appointments[] $appointments */

$this->title = 'My Appointments';
?>

<div class="patient-appointments">
    <div class="container py-4">
        <h2 class="mb-4"><?= Html::encode($this->title) ?></h2>

        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Date & Time</th>
                            <th>Doctor</th>
                            <th>Department</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appointments as $apt): ?>
                            <tr>
                                <td>
                                    <?= date('M d, Y', strtotime($apt->appointment_date)) ?><br>
                                    <small class="text-muted"><?= date('h:i A', strtotime($apt->appointment_date)) ?></small>
                                </td>
                                <td>
                                    Dr. <?= Html::encode($apt->doctor->staff->first_name ?? '') ?> 
                                    <?= Html::encode($apt->doctor->staff->last_name ?? '') ?>
                                </td>
                                <td><?= Html::encode($apt->department->name ?? 'N/A') ?></td>
                                <td><?= Html::encode($apt->service ?? 'General') ?></td>
                                <td>
                                    <span class="badge bg-<?= 
                                        $apt->statusId == 1 ? 'warning' : 
                                        ($apt->statusId == 2 ? 'success' : 
                                        ($apt->statusId == 3 ? 'danger' : 'secondary')) 
                                    ?>">
                                        <?= $apt->status->name ?? 'Unknown' ?>
                                    </span>
                                </td>
                                <td>
                                    <?= Html::a('View', ['patient/view-appointment', 'id' => $apt->id], ['class' => 'btn btn-sm btn-outline-primary']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>