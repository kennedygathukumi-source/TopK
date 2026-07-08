<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
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

<?php
NavBar::begin([
    'brandLabel' => '<div class="d-flex align-items-center gap-2">
        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
            <i class="bi bi-heart-pulse-fill text-primary fs-5"></i>
        </div>
        <div class="d-flex flex-column">
            <span class="fw-bold fs-5 text-primary" style="line-height: 1.1;">TOPCARE</span>
            <span class="small text-muted" style="font-size: 0.65rem; letter-spacing: 2px;">HOSPITAL</span>
        </div>
    </div>',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top',
    ],
]);

$items = [
    [
        'label' => 'Home',
        'url' => ['/site/index'],
    ],
    [
        'label' => 'About',
        'url' => ['/site/about'],
    ],
    [
        'label' => 'Services',
        'url' => ['/site/services'],
    ],
    [
        'label' => 'Doctors',
        'url' => ['/site/doctors'],
    ],
    [
        'label' => 'Contact',
        'url' => ['/site/contact'],
    ],
    [
        'label' => '<i class="bi bi-calendar-check me-1"></i> Book Appointment',
        'url' => ['/site/contact'],
        'linkOptions' => ['class' => 'btn btn-primary text-white fw-semibold px-3'],
    ],
    [
        'label' => 'Signup',
        'url' => ['/site/signup'],
        'visible' => Yii::$app->user->isGuest,
    ],
    [
        'label' => 'Login',
        'url' => ['/site/login'],
        'visible' => Yii::$app->user->isGuest,
    ],
    [
        'label' => 'Logout (' . Html::encode(Yii::$app->user->identity?->username) . ')',
        'url' => ['/site/logout'],
        'linkOptions' => [
            'data-method' => 'post',
            'class' => 'logout',
        ],
        'visible' => !Yii::$app->user->isGuest,
    ],
];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav ms-auto align-items-lg-center'],
    'items' => $items,
    'encodeLabels' => false,
]);

NavBar::end();
?>

<?php
$this->registerCss("
    .top-bar {
        font-size: 0.85rem;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .navbar-brand {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    .navbar-brand:hover .bg-primary {
        background-color: rgba(0, 102, 204, 0.2) !important;
    }
    .nav-link {
        color: #333 !important;
        transition: all 0.2s ease;
        position: relative;
        font-weight: 600;
    }
    .nav-link:hover {
        color: #0066CC !important;
    }
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background-color: #0066CC;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    .nav-link:hover::after {
        width: 60%;
    }
    .nav-item .btn-primary {
        margin-left: 0.5rem;
    }
    @media (max-width: 991px) {
        .nav-item .btn-primary {
            margin-left: 0;
            margin-top: 0.5rem;
            width: 100%;
            text-align: center;
        }
    }
");
?>