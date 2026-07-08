<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Patients;
use common\models\Appointments;
use common\models\MedicalRecords;

/** @var yii\web\View $this */
/** @var Patients $patient */
/** @var Appointments[] $upcomingAppointments */
/** @var Appointments[] $pastAppointments */
/** @var MedicalRecords[] $medicalRecords */

$this->title = 'My Dashboard';
?>

<div class="patient-dashboard">
    <div class="container py-4">
        <h2 class="mb-4">Welcome, <?= Html::encode($patient->first_name ?? 'Patient') ?>!</h2>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5>Upcoming</h5>
                        <h2><?= count($upcomingAppointments) ?></h2>
                        <small>Appointments</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5>Medical</h5>
                        <h2><?= count($medicalRecords) ?></h2>
                        <small>Records</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5>Prescriptions</h5>
                        <h2><?= count($patient->prescriptions ?? []) ?></h2>
                        <small>Active</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5>Visits</h5>
                        <h2><?= count($pastAppointments) ?></h2>
                        <small>Total</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Upcoming Appointments -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Upcoming Appointments</h5>
                        <?= Html::a('View All', ['patient/appointments'], ['class' => 'btn btn-sm btn-outline-primary']) ?>
                    </div>
                    <div class="card-body">
                        <?php if (empty($upcomingAppointments)): ?>
                            <p class="text-muted">No upcoming appointments.</p>
                            <?= Html::a('Book Appointment', ['site/book-appointment'], ['class' => 'btn btn-primary']) ?>
                        <?php else: ?>
                            <?php foreach ($upcomingAppointments as $apt): ?>
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                                    <div>
                                        <strong><?= date('M d, Y', strtotime($apt->appointment_date)) ?></strong>
                                        <div class="text-muted">
                                            Dr. <?= Html::encode($apt->doctor->staff->first_name ?? '') ?> 
                                            <?= Html::encode($apt->doctor->staff->last_name ?? '') ?>
                                        </div>
                                        <small class="badge bg-<?= $apt->statusId == 1 ? 'warning' : ($apt->statusId == 2 ? 'success' : 'secondary') ?>">
                                            <?= $apt->status->name ?? 'Pending' ?>
                                        </small>
                                    </div>
                                    <?= Html::a('Details', ['patient/view-appointment', 'id' => $apt->id], ['class' => 'btn btn-sm btn-outline-secondary']) ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Recent Medical Records -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Medical Records</h5>
                        <?= Html::a('View All', ['patient/medical-records'], ['class' => 'btn btn-sm btn-outline-primary']) ?>
                    </div>
                    <div class="card-body">
                        <?php if (empty($medicalRecords)): ?>
                            <p class="text-muted">No medical records yet.</p>
                        <?php else: ?>
                            <?php foreach ($medicalRecords as $record): ?>
                                <div class="border-bottom py-2">
                                    <strong><?= date('M d, Y', strtotime($record->created_at)) ?></strong>
                                    <div class="text-muted">
                                        Dr. <?= Html::encode($record->doctor->staff->first_name ?? '') ?> 
                                        <?= Html::encode($record->doctor->staff->last_name ?? '') ?>
                                    </div>
                                    <p class="mb-0 small"><?= Html::encode(substr($record->diagnosis ?? 'No diagnosis', 0, 100)) ?>...</p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>