<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;

?>

<footer id="footer" class="footer-main pt-5 pb-3" style="background-color:#e8f4fd !important; color:#1a1a2e !important;">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row g-4 mb-5">

            <!-- Column 1: About & Logo -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="footer-logo-icon rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: #bde0f7;">
                            <i class="bi bi-heart-pulse-fill fs-4" style="color:#1565c0;"></i>
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold footer-text-dark">TOPCARE</h5>
                            <small class="footer-text-muted">HOSPITAL</small>
                        </div>
                    </div>
                    <p class="footer-text-dark" style="font-size: 0.95rem; line-height: 1.7;">
                        Providing compassionate, affordable, and professional 24/7 healthcare services
                        to Subukia and surrounding communities in Nakuru County, Kenya.
                    </p>
                    <div class="d-flex gap-2">
                        <?= Html::a(
                            '<i class="bi bi-facebook"></i>',
                            'https://facebook.com/topcarehospital',
                            [
                                'class' => 'btn btn-sm rounded-circle social-btn',
                                'style' => 'width: 38px; height: 38px; padding: 0; display: flex; align-items: center; justify-content: center;',
                                'target' => '_blank',
                                'rel' => 'noopener',
                                'aria-label' => 'Facebook'
                            ]
                        ) ?>
                        <?= Html::a(
                            '<i class="bi bi-whatsapp"></i>',
                            'https://wa.me/254716221855',
                            [
                                'class' => 'btn btn-sm rounded-circle social-btn',
                                'style' => 'width: 38px; height: 38px; padding: 0; display: flex; align-items: center; justify-content: center;',
                                'target' => '_blank',
                                'rel' => 'noopener',
                                'aria-label' => 'WhatsApp'
                            ]
                        ) ?>
                        <?= Html::a(
                            '<i class="bi bi-envelope"></i>',
                            'mailto:tmc@topcarelimited.co.ke',
                            [
                                'class' => 'btn btn-sm rounded-circle social-btn',
                                'style' => 'width: 38px; height: 38px; padding: 0; display: flex; align-items: center; justify-content: center;',
                                'aria-label' => 'Email'
                            ]
                        ) ?>
                        <?= Html::a(
                            '<i class="bi bi-telephone"></i>',
                            'tel:+254716221855',
                            [
                                'class' => 'btn btn-sm rounded-circle social-btn',
                                'style' => 'width: 38px; height: 38px; padding: 0; display: flex; align-items: center; justify-content: center;',
                                'aria-label' => 'Phone'
                            ]
                        ) ?>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase footer-heading" style="font-size: 0.85rem; letter-spacing: 1px;">
                    <i class="bi bi-link-45deg me-1"></i> Quick Links
                </h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2">
                        <?= Html::a(
                            '<i class="bi bi-chevron-right small me-1"></i>Home',
                            ['site/index'],
                            ['class' => 'footer-link text-decoration-none']
                        ) ?>
                    </li>
                    <li class="mb-2">
                        <?= Html::a(
                            '<i class="bi bi-chevron-right small me-1"></i>About Us',
                            ['site/about'],
                            ['class' => 'footer-link text-decoration-none']
                        ) ?>
                    </li>
                    <li class="mb-2">
                        <?= Html::a(
                            '<i class="bi bi-chevron-right small me-1"></i>Our Services',
                            ['site/services'],
                            ['class' => 'footer-link text-decoration-none']
                        ) ?>
                    </li>
                    <li class="mb-2">
                        <?= Html::a(
                            '<i class="bi bi-chevron-right small me-1"></i>Doctors',
                            ['site/doctors'],
                            ['class' => 'footer-link text-decoration-none']
                        ) ?>
                    </li>
                    <li class="mb-2">
                        <?= Html::a(
                            '<i class="bi bi-chevron-right small me-1"></i>Contact',
                            ['site/contact'],
                            ['class' => 'footer-link text-decoration-none']
                        ) ?>
                    </li>
                    <li class="mb-0">
                        <?= Html::a(
                            '<i class="bi bi-chevron-right small me-1"></i>Book Appointment',
                            ['site/contact'],
                            ['class' => 'footer-link text-decoration-none']
                        ) ?>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Our Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase footer-heading" style="font-size: 0.85rem; letter-spacing: 1px;">
                    <i class="bi bi-heart-pulse me-1"></i> Our Services
                </h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2">
                        <a href="#" class="footer-link text-decoration-none">
                            <i class="bi bi-chevron-right small me-1"></i>General Outpatient
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="footer-link text-decoration-none">
                            <i class="bi bi-chevron-right small me-1"></i>Maternity &amp; Child Health
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="footer-link text-decoration-none">
                            <i class="bi bi-chevron-right small me-1"></i>Laboratory Services
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="footer-link text-decoration-none">
                            <i class="bi bi-chevron-right small me-1"></i>Pharmacy &amp; Dispensing
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="footer-link text-decoration-none">
                            <i class="bi bi-chevron-right small me-1"></i>Inpatient Care
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="#" class="footer-link text-decoration-none">
                            <i class="bi bi-chevron-right small me-1"></i>Minor Procedures
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase footer-heading" style="font-size: 0.85rem; letter-spacing: 1px;">
                    <i class="bi bi-geo-alt me-1"></i> Contact Us
                </h6>
                <ul class="list-unstyled footer-contact">
                    <li class="mb-3 d-flex gap-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-geo-alt-fill footer-icon-blue"></i>
                        </div>
                        <div class="footer-text-dark" style="font-size: 0.9rem; line-height: 1.6;">
                            Subukia Center, next to Matatu Stage<br>
                            Subukia Ward, Subukia Sub-County<br>
                            Nakuru County, Kenya
                        </div>
                    </li>
                    <li class="mb-3 d-flex gap-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-telephone-fill footer-icon-blue"></i>
                        </div>
                        <div>
                            <?= Html::a(
                                '+254 716 221 855',
                                'tel:+254716221855',
                                ['class' => 'footer-link text-decoration-none']
                            ) ?><br>
                            <small class="footer-text-muted">Emergency Hotline</small>
                        </div>
                    </li>
                    <li class="mb-3 d-flex gap-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-envelope-fill footer-icon-blue"></i>
                        </div>
                        <div>
                            <?= Html::a(
                                'tmc@topcarelimited.co.ke',
                                'mailto:tmc@topcarelimited.co.ke',
                                ['class' => 'footer-link text-decoration-none']
                            ) ?><br>
                            <?= Html::a(
                                'topcaresbk@gmail.com',
                                'mailto:topcaresbk@gmail.com',
                                ['class' => 'footer-link text-decoration-none']
                            ) ?>
                        </div>
                    </li>
                    <li class="mb-0 d-flex gap-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-clock-fill footer-icon-blue"></i>
                        </div>
                        <div class="footer-text-dark">
                            <strong class="footer-text-dark">Open 24 Hours</strong><br>
                            <small class="footer-text-muted">Emergency &amp; Inpatient</small><br>
                            <small class="footer-text-muted">Visiting: 6-7AM, 12:30-2PM, 5-7PM</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Emergency Banner -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="rounded-3 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3" style="background-color:#bde0f7;">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-danger rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                            <i class="bi bi-telephone-fill text-white fs-5"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold footer-text-dark">24/7 Emergency Line</h6>
                            <p class="mb-0 footer-text-muted small">Always available for critical care</p>
                        </div>
                    </div>
                    <?= Html::a(
                        '<i class="bi bi-telephone me-2"></i>+254 716 221 855',
                        'tel:+254716221855',
                        ['class' => 'btn btn-danger fw-bold px-4']
                    ) ?>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr style="border-color:#90caf9; opacity:1;" class="my-4">

        <!-- Bottom Bar -->
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 footer-text-dark" style="font-size: 0.85rem;">
                    <i class="bi bi-shield-check me-1 text-success"></i>
                    &copy; <?= date('Y') ?> TopCare Hospital. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex flex-wrap justify-content-center justify-content-md-end gap-3" style="font-size: 0.85rem;">
                    <?= Html::a(
                        'Privacy Policy',
                        ['site/privacy'],
                        ['class' => 'footer-link text-decoration-none']
                    ) ?>
                    <?= Html::a(
                        'Terms of Service',
                        ['site/terms'],
                        ['class' => 'footer-link text-decoration-none']
                    ) ?>
                    <?= Html::a(
                        'Patient Rights',
                        ['site/patient-rights'],
                        ['class' => 'footer-link text-decoration-none']
                    ) ?>
                    <span class="footer-text-muted">
                        Licensed by Ministry of Health
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
$this->registerCss("
    /* ── Light-blue footer theme ── */
    #footer.footer-main,
    footer#footer {
        background-color: #e8f4fd !important;
        color: #1a1a2e !important;
        border-top: 2px solid #90caf9 !important;
    }

    /* All text black by default */
    #footer.footer-main .footer-text-dark,
    #footer.footer-main h5.footer-text-dark,
    #footer.footer-main h6.footer-text-dark,
    #footer.footer-main strong.footer-text-dark,
    #footer.footer-main p.footer-text-dark,
    #footer.footer-main div.footer-text-dark {
        color: #1a1a2e !important;
    }

    #footer.footer-main .footer-text-muted {
        color: #37474f !important;
    }

    /* Column headings — deep blue */
    #footer.footer-main .footer-heading {
        color: #1565c0 !important;
    }

    /* Icons */
    #footer.footer-main .footer-icon-blue {
        color: #1565c0 !important;
    }

    /* Links — black, hover to deep blue */
    #footer.footer-main .footer-link {
        color: #1a1a2e !important;
        transition: all 0.2s ease;
        display: inline-block;
    }
    #footer.footer-main .footer-links li a.footer-link:hover,
    #footer.footer-main .footer-contact li a.footer-link:hover,
    #footer.footer-main .footer-link:hover {
        color: #1565c0 !important;
        transform: translateX(3px);
    }

    /* Social buttons */
    #footer.footer-main .social-btn {
        background-color: #bde0f7 !important;
        border: 1px solid #90caf9 !important;
        color: #1565c0 !important;
        transition: all 0.3s ease;
    }
    #footer.footer-main .social-btn:hover {
        background-color: #1565c0 !important;
        border-color: #1565c0 !important;
        color: #ffffff !important;
        transform: translateY(-2px);
    }

    /* Logo icon hover */
    #footer.footer-main .footer-brand:hover .footer-logo-icon {
        transform: scale(1.1);
        background-color: #90caf9 !important;
    }
");
?>