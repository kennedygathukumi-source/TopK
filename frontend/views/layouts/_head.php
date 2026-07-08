<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;

?>

<!-- Top Bar -->
<div class="top-bar bg-primary text-white py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <small class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                    <span><i class="bi bi-telephone-fill me-1"></i> Emergency: +254 716 221 855</span>
                    <span class="d-none d-sm-inline"><i class="bi bi-envelope-fill me-1"></i> tmc@topcarelimited.co.ke</span>
                </small>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <small class="d-flex align-items-center justify-content-center justify-content-md-end gap-3">
                    <span><i class="bi bi-clock-fill me-1"></i> Open 24/7</span>
                    <span><i class="bi bi-geo-alt-fill me-1"></i> Subukia Center, Nakuru</span>
                </small>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <?= Html::a(
            '<div class="d-flex align-items-center gap-2">
                <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="bi bi-heart-pulse-fill text-primary fs-4"></i>
                </div>
                <div class="d-flex flex-column">
                    <span class="fw-bold fs-5 text-primary" style="line-height: 1.1;">TOPCARE</span>
                    <span class="small text-muted" style="font-size: 0.7rem; letter-spacing: 2px;">HOSPITAL</span>
                </div>
            </div>',
            Yii::$app->homeUrl,
            ['class' => 'navbar-brand']
        ) ?>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <?= Html::a('Home', ['site/index'], ['class' => 'nav-link fw-semibold px-3']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('About', ['site/about'], ['class' => 'nav-link fw-semibold px-3']) ?>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold px-3" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg rounded-3 mt-2" aria-labelledby="servicesDropdown">
                        <li><?= Html::a('<i class="bi bi-hospital me-2 text-primary"></i>General Outpatient', ['site/services'], ['class' => 'dropdown-item py-2']) ?></li>
                        <li><?= Html::a('<i class="bi bi-heart-pulse-fill me-2 text-danger"></i>Maternity & Child Health', ['site/services'], ['class' => 'dropdown-item py-2']) ?></li>
                        <li><?= Html::a('<i class="bi bi-droplet-half me-2 text-info"></i>Laboratory Services', ['site/services'], ['class' => 'dropdown-item py-2']) ?></li>
                        <li><?= Html::a('<i class="bi bi-capsule-pill me-2 text-success"></i>Pharmacy & Dispensing', ['site/services'], ['class' => 'dropdown-item py-2']) ?></li>
                        <li><?= Html::a('<i class="bi bi-bed me-2 text-warning"></i>Inpatient Care', ['site/services'], ['class' => 'dropdown-item py-2']) ?></li>
                        <li><?= Html::a('<i class="bi bi-bandaid me-2 text-secondary"></i>Minor Procedures', ['site/services'], ['class' => 'dropdown-item py-2']) ?></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <?= Html::a('Doctors', ['site/doctors'], ['class' => 'nav-link fw-semibold px-3']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Contact', ['site/contact'], ['class' => 'nav-link fw-semibold px-3']) ?>
                </li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <?= Html::a('<i class="bi bi-calendar-check me-2"></i>Book Appointment', ['site/contact'], ['class' => 'btn btn-primary fw-semibold px-4']) ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
$this->registerCss("
    .top-bar {
        font-size: 0.85rem;
        border-bottom: 1px solid rgba(183, 28, 28, 0.1);
    }
    .navbar {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        transition: all 0.3s ease;
    }
    .nav-link {
        color: #a92121 !important;
        transition: all 0.2s ease;
        position: relative;
    }
    .nav-link:hover {
        color: #cc0000 !important;
    }
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background-color: #cc0000;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    .nav-link:hover::after {
        width: 60%;
    }
    .dropdown-menu {
        min-width: 280px;
        padding: 0.5rem;
    }
    .dropdown-item {
        border-radius: 0.5rem;
        transition: all 0.2s ease;
    }
    .dropdown-item:hover {
        background-color: rgba(204, 0, 0, 0.05);
        color: #d8e8e9;
        transform: translateX(3px);
    }
    .dropdown-item i {
        transition: all 0.2s ease;
    }
    .dropdown-item:hover i {
        transform: scale(1.1);
    }
    .navbar-toggler:focus {
        box-shadow: none;
    }
    @media (max-width: 991px) {
        .navbar-collapse {
            background: white;
            padding: 1rem;
            border-radius: 1rem;
            margin-top: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
        }
        .dropdown-menu {
            border: none;
            box-shadow: none;
            padding-left: 1rem;
        }
    }
");
?>