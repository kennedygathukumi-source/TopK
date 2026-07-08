<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Dashboard';
$username = Yii::$app->user->identity?->username;
?>
<div class="site-index">

    <!-- Welcome banner -->
    <div class="dashboard-banner text-white rounded-4 p-4 p-lg-5 mb-4" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="fw-bold mb-2">Welcome back, <?= Html::encode($username) ?></h1>
                <p class="opacity-75 mb-0">
                    TopCare Hospital Administration Panel. Manage patients, staff, and operations from here.
                </p>
            </div>

            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <h2 class="fw-bold mb-0">
                    <i class="bi bi-hospital me-2"></i> TopCare Hospital
                </h2>
                <p class="opacity-75 mb-0">Compassionate Care, Trusted Always</p>
            </div>
        </div>
    </div>

    <!-- Quick stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Total Patients</p>
                        <h3 class="fw-bold mb-0">1,248</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;">
                        <i class="bi bi-person-badge-fill fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Doctors on Duty</p>
                        <h3 class="fw-bold mb-0">36</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;">
                        <i class="bi bi-calendar-check-fill fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Today's Appointments</p>
                        <h3 class="fw-bold mb-0">87</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;">
                        <i class="bi bi-hospital-fill fs-3"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Beds Occupied</p>
                        <h3 class="fw-bold mb-0">142 / 200</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick actions -->
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h5 class="fw-bold mb-0">Recent Activity</h5>
                </div>
                <div class="card-body px-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            New patient registered — <strong>Jane Mwangi</strong>
                            <span class="badge bg-primary rounded-pill">2 min ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Appointment confirmed — <strong>Dr. Otieno</strong>
                            <span class="badge bg-success rounded-pill">15 min ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Lab results uploaded — <strong>Patient #1042</strong>
                            <span class="badge bg-secondary rounded-pill">1 hr ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            New staff added — <strong>Nurse Achieng</strong>
                            <span class="badge bg-info rounded-pill">3 hrs ago</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h5 class="fw-bold mb-0">Quick Actions</h5>
                </div>
                <div class="card-body px-4 d-grid gap-2">
                    <?= Html::a('<i class="bi bi-person-plus me-2"></i> Register Patient', ['patient/create'], ['class' => 'btn btn-primary text-start']) ?>
                    <?= Html::a('<i class="bi bi-calendar-plus me-2"></i> New Appointment', ['appointment/create'], ['class' => 'btn btn-outline-primary text-start']) ?>
                    <?= Html::a('<i class="bi bi-person-badge me-2"></i> Manage Staff', ['staff/index'], ['class' => 'btn btn-outline-secondary text-start']) ?>
                    <?= Html::a('<i class="bi bi-gear me-2"></i> Settings', ['site/settings'], ['class' => 'btn btn-outline-secondary text-start']) ?>
                </div>
            </div>
        </div>
    </div>

</div>