<?php
use yii\helpers\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Alert;

/** @var yii\web\View $this */
/** @var string $content */

\yii\bootstrap5\BootstrapAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - TOPCARE Hospital</title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* ── Global light-blue theme variables ── */
        :root {
            --tc-blue-light:  #e8f4fd;
            --tc-blue-mid:    #bde0f7;
            --tc-blue-border: #90caf9;
            --tc-blue-deep:   #1565c0;
            --tc-text:        #1a1a2e;
            --tc-muted:       #37474f;
        }

        /* Top bar */
        .topbar {
            background-color: var(--tc-blue-deep) !important;
            color: #ffffff !important;
        }
        .topbar small, .topbar a {
            color: #ffffff !important;
            text-decoration: none;
        }
        .topbar a:hover { text-decoration: underline; }

        /* Navbar */
        .navbar-topcare {
            background-color: #ffffff !important;
            border-bottom: 2px solid var(--tc-blue-border) !important;
        }
        .navbar-topcare .navbar-brand {
            color: var(--tc-blue-deep) !important;
            font-weight: 700;
        }
        .navbar-topcare .nav-link {
            color: var(--tc-text) !important;
            font-weight: 500;
            transition: color 0.2s;
        }
        .navbar-topcare .nav-link:hover,
        .navbar-topcare .nav-link.active {
            color: var(--tc-blue-deep) !important;
        }
        .navbar-topcare .dropdown-menu {
            border: 1px solid var(--tc-blue-border);
        }
        .navbar-topcare .dropdown-item {
            color: var(--tc-text) !important;
        }
        .navbar-topcare .dropdown-item:hover {
            background-color: var(--tc-blue-light) !important;
            color: var(--tc-blue-deep) !important;
        }

        /* Footer */
        #main-footer {
            background-color: var(--tc-blue-light) !important;
            color: var(--tc-text) !important;
            border-top: 2px solid var(--tc-blue-border) !important;
        }
        #main-footer h5 {
            color: var(--tc-blue-deep) !important;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }
        #main-footer p,
        #main-footer li,
        #main-footer small {
            color: var(--tc-text) !important;
        }
        #main-footer .footer-muted {
            color: var(--tc-muted) !important;
        }
        #main-footer a {
            color: var(--tc-text) !important;
            text-decoration: none;
            transition: color 0.2s, transform 0.2s;
            display: inline-block;
        }
        #main-footer a:hover {
            color: var(--tc-blue-deep) !important;
            transform: translateX(3px);
        }
        #main-footer .footer-icon {
            color: var(--tc-blue-deep) !important;
        }
        #main-footer .emergency-banner {
            background-color: var(--tc-blue-mid) !important;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
        }
        #main-footer hr {
            border-color: var(--tc-blue-border) !important;
            opacity: 1;
        }
        #main-footer .bottom-bar {
            font-size: 0.85rem;
            color: var(--tc-text) !important;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Top Bar -->
<div class="topbar py-2">
    <div class="container d-flex justify-content-between">
        <small>
            <i class="fas fa-phone me-1"></i>
            <a href="tel:+254716221855">Emergency: +254 716 221 855</a>
        </small>
        <small>
            <i class="fas fa-envelope me-1"></i>
            <a href="mailto:tmc@topcarelimited.co.ke">tmc@topcarelimited.co.ke</a>
        </small>
    </div>
</div>

<!-- Navigation -->
<?php
NavBar::begin([
    'brandLabel' => '<strong>TOPCARE</strong> HOSPITAL',
    'brandUrl'   => Yii::$app->homeUrl,
    'options'    => ['class' => 'navbar-expand-lg navbar-topcare shadow-sm'],
]);

$menuItems = [
    ['label' => 'Home',             'url' => ['/site/index']],
    ['label' => 'About',            'url' => ['/site/about']],
    ['label' => 'Services',         'url' => ['/site/services']],
    ['label' => 'Doctors',          'url' => ['/site/doctors']],
    ['label' => 'Contact',          'url' => ['/site/contact']],
    ['label' => 'Book Appointment', 'url' => ['/site/book-appointment']],
];

if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login',  'url' => ['/site/login']];
} else {
    $menuItems[] = [
        'label' => '<i class="fas fa-user-circle"></i> My Account',
        'items' => [
            ['label' => 'Dashboard',       'url' => ['/patient']],
            ['label' => 'My Appointments', 'url' => ['/patient/appointments']],
            ['label' => 'Medical Records', 'url' => ['/patient/medical-records']],
            ['label' => 'Prescriptions',   'url' => ['/patient/prescriptions']],
            '<hr class="dropdown-divider">',
            ['label' => 'Profile', 'url' => ['/patient/profile']],
            ['label' => 'Logout',  'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
        ],
    ];
}

echo Nav::widget([
    'options'      => ['class' => 'navbar-nav ms-auto'],
    'items'        => $menuItems,
    'encodeLabels' => false,
]);
NavBar::end();
?>

<!-- Breadcrumbs -->
<div class="container mt-3">
    <?= Breadcrumbs::widget([
        'links' => $this->params['breadcrumbs'] ?? [],
    ]) ?>
</div>

<!-- Flash Messages -->
<div class="container">
    <?php foreach (Yii::$app->session->getAllFlashes() as $type => $message): ?>
        <?= Alert::widget([
            'options' => ['class' => 'alert-' . $type],
            'body'    => $message,
        ]) ?>
    <?php endforeach; ?>
</div>

<!-- Main Content -->
<div class="wrap">
    <?= $content ?>
</div>

<!-- Footer -->
<footer id="main-footer" class="mt-auto pt-5 pb-3">
    <div class="container">
        <div class="row g-4 mb-4">

            <!-- About -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                         style="width:50px;height:50px;background-color:#bde0f7;">
                        <i class="bi bi-heart-pulse-fill fs-4 footer-icon"></i>
                    </div>
                    <div>
                        <h5 class="mb-0" style="margin-bottom:0 !important;">TOPCARE HOSPITAL</h5>
                        <small class="footer-muted">Nakuru County, Kenya</small>
                    </div>
                </div>
                <p class="footer-muted" style="font-size:0.95rem;line-height:1.7;">
                    Providing compassionate, affordable, and professional 24/7 healthcare services
                    to Subukia and surrounding communities.
                </p>
                <!-- Social icons -->
                <div class="d-flex gap-2 mt-3">
                    <?php
                    $socials = [
                        ['icon'=>'bi-facebook','href'=>'https://facebook.com/topcarehospital','label'=>'Facebook'],
                        ['icon'=>'bi-whatsapp','href'=>'https://wa.me/254716221855','label'=>'WhatsApp'],
                        ['icon'=>'bi-envelope','href'=>'mailto:tmc@topcarelimited.co.ke','label'=>'Email'],
                        ['icon'=>'bi-telephone','href'=>'tel:+254716221855','label'=>'Phone'],
                    ];
                    foreach ($socials as $s): ?>
                        <a href="<?= $s['href'] ?>" aria-label="<?= $s['label'] ?>"
                           style="width:38px;height:38px;border-radius:50%;background:#bde0f7;border:1px solid #90caf9;
                                  display:flex;align-items:center;justify-content:center;color:#1565c0;
                                  transition:all 0.3s;text-decoration:none;"
                           onmouseover="this.style.background='#1565c0';this.style.color='#fff';"
                           onmouseout="this.style.background='#bde0f7';this.style.color='#1565c0';"
                           <?= isset($s['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
                            <i class="bi <?= $s['icon'] ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5><i class="bi bi-link-45deg me-1"></i>Quick Links</h5>
                <ul class="list-unstyled">
                    <?php
                    $links = [
                        'Home'             => ['/site/index'],
                        'About Us'         => ['/site/about'],
                        'Our Services'     => ['/site/services'],
                        'Doctors'          => ['/site/doctors'],
                        'Contact'          => ['/site/contact'],
                        'Book Appointment' => ['/site/book-appointment'],
                        'login'=> ['/site/login'],  
                    ];
                    foreach ($links as $label => $url): ?>
                        <li class="mb-2">
                            <?= Html::a(
                                '<i class="bi bi-chevron-right small me-1"></i>' . $label,
                                $url,
                                ['class' => 'footer-link']
                            ) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Our Services -->
            <div class="col-lg-3 col-md-6">
                <h5><i class="bi bi-heart-pulse me-1"></i>Our Services</h5>
                <ul class="list-unstyled">
                    <?php
                    $services = [
                        'General Outpatient',
                        'Maternity & Child Health',
                        'Laboratory Services',
                        'Pharmacy & Dispensing',
                        'Inpatient Care',
                        'Minor Procedures',
                    ];
                    foreach ($services as $svc): ?>
                        <li class="mb-2 footer-muted">
                            <i class="bi bi-chevron-right small me-1 footer-icon"></i><?= $svc ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h5><i class="bi bi-geo-alt me-1"></i>Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex gap-3">
                        <i class="bi bi-geo-alt-fill footer-icon mt-1"></i>
                        <span class="footer-muted" style="font-size:0.9rem;line-height:1.6;">
                            Subukia Center, next to Matatu Stage<br>
                            Subukia Ward, Subukia Sub-County<br>
                            Nakuru County, Kenya
                        </span>
                    </li>
                    <li class="mb-2 d-flex gap-3 align-items-center">
                        <i class="bi bi-telephone-fill footer-icon"></i>
                        <a href="tel:+254716221855" class="footer-link">+254 716 221 855</a>
                    </li>
                    <li class="mb-2 d-flex gap-3 align-items-center">
                        <i class="bi bi-envelope-fill footer-icon"></i>
                        <a href="mailto:tmc@topcarelimited.co.ke" class="footer-link" style="font-size:0.85rem;">tmc@topcarelimited.co.ke</a>
                    </li>
                    <li class="mt-3 d-flex gap-3">
                        <i class="bi bi-clock-fill footer-icon mt-1"></i>
                        <div>
                            <strong>Open 24 Hours</strong><br>
                            <small class="footer-muted">Emergency &amp; Inpatient</small><br>
                            <small class="footer-muted">Visiting: 6-7AM, 12:30-2PM, 5-7PM</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Emergency Banner -->
        <div class="emergency-banner d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center"
                     style="width:45px;height:45px;">
                    <i class="bi bi-telephone-fill text-white fs-5"></i>
                </div>
                <div>
                    <strong style="color:var(--tc-text);">24/7 Emergency Line</strong><br>
                    <small class="footer-muted">Always available for critical care</small>
                </div>
            </div>
            <?= Html::a(
                '<i class="bi bi-telephone me-2"></i>+254 716 221 855',
                'tel:+254716221855',
                ['class' => 'btn btn-danger fw-bold px-4']
            ) ?>
        </div>

        <hr>

        <!-- Bottom Bar -->
        <div class="row align-items-center bottom-bar">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <i class="bi bi-shield-check text-success me-1"></i>
                &copy; <?= date('Y') ?> TopCare Hospital. All rights reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex flex-wrap justify-content-center justify-content-md-end gap-3">
                    <?= Html::a('Privacy Policy',   ['site/privacy'],        ['class' => 'footer-link']) ?>
                    <?= Html::a('Terms of Service', ['site/terms'],          ['class' => 'footer-link']) ?>
                    <?= Html::a('Patient Rights',   ['site/patient-rights'], ['class' => 'footer-link']) ?>
                    <span class="footer-muted">Licensed by Ministry of Health</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>