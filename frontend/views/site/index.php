<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'TopCare Hospital - 24/7 Healthcare in Subukia, Nakuru County';
$this->params['meta_description'] = 'TopCare Hospital in Subukia, Nakuru County provides 24/7 quality healthcare including maternity, general outpatient, laboratory, pharmacy, and inpatient services.';
$this->params['meta_keywords'] = 'TopCare Hospital, Subukia hospital, Nakuru healthcare, 24 hour hospital Kenya, maternity Subukia, medical centre Nakuru, Rift Valley hospital, emergency care Subukia';
?>

<div class="site-index">

    <!-- ===== HERO SECTION ===== -->
    <section class="hero-section position-relative overflow-hidden">
        <div class="hero-bg-overlay"></div>
        <div class="container position-relative z-2 py-5">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-7 text-white">
                    <div class="badge bg-white bg-opacity-25 text-white mb-3 px-3 py-2 rounded-pill">
                        <i class="bi bi-geo-alt-fill me-1"></i> Subukia Center, Nakuru County
                    </div>
                    <h1 class="display-3 fw-bold mb-4 hero-title">
                        Your Health,<br>
                        <span class="text-accent">Our Priority</span>
                    </h1>
                    <p class="lead mb-4 opacity-90 hero-subtitle">
                        TopCare Hospital provides compassionate, affordable, and professional 
                        24/7 healthcare services to Subukia and surrounding communities in the Rift Valley.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span>24/7 Emergency</span>
                        </span>
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span>Maternity Care</span>
                        </span>
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span>Laboratory Services</span>
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <?= Html::a(
                            '<i class="bi bi-calendar-check me-2"></i>Book Appointment',
                            ['site/contact'],
                            ['class' => 'btn btn-light btn-lg fw-semibold px-4']
                        ) ?>
                        <?= Html::a(
                            '<i class="bi bi-telephone me-2"></i>Emergency: 0716 221 855',
                            'tel:+254716221855',
                            ['class' => 'btn btn-outline-light btn-lg fw-semibold px-4']
                        ) ?>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-card bg-white bg-opacity-10 backdrop-blur rounded-4 p-4 text-white">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                <i class="bi bi-clock fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">Open 24 Hours</h5>
                                <small class="opacity-75">Always here for you</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                <i class="bi bi-heart-pulse fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">Emergency Ready</h5>
                                <small class="opacity-75">Immediate critical care</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                <i class="bi bi-shield-check fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">Licensed & Certified</h5>
                                <small class="opacity-75">Ministry of Health approved</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wave divider -->
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="var(--bs-body-bg)"/>
            </svg>
        </div>
    </section>

    <!-- ===== QUICK STATS ===== -->
    <section class="py-4 bg-light border-bottom">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h3 class="text-primary fw-bold mb-1">24/7</h3>
                        <p class="text-muted mb-0 small">Hours Open</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h3 class="text-primary fw-bold mb-1">10+</h3>
                        <p class="text-muted mb-0 small">Years Serving</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h3 class="text-primary fw-bold mb-1">15K+</h3>
                        <p class="text-muted mb-0 small">Patients Treated</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h3 class="text-primary fw-bold mb-1">15+</h3>
                        <p class="text-muted mb-0 small">Medical Staff</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES SECTION ===== -->
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2">Our Services</span>
                <h2 class="display-6 fw-bold">Comprehensive Healthcare<br>for Subukia Community</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    From emergency care to maternity services, we provide a full range of medical services 
                    tailored to meet the health needs of Subukia and surrounding areas.
                </p>
            </div>

            <div class="row g-4">
                <!-- General Outpatient -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 mb-3 d-inline-flex p-3">
                                <i class="bi bi-hospital fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">General Outpatient</h4>
                            <p class="text-muted mb-3">
                                Consultation and treatment for common illnesses, chronic disease management, 
                                and general health check-ups for all age groups in Subukia.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-semibold small">
                                Learn more <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Maternity -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="service-icon bg-danger bg-opacity-10 text-danger rounded-3 mb-3 d-inline-flex p-3">
                                <i class="bi bi-heart-pulse-fill fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Maternity & Child Health</h4>
                            <p class="text-muted mb-3">
                                Antenatal care, safe delivery services, postnatal care, immunization, 
                                and child wellness programs for mothers and babies in Subukia.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-semibold small">
                                Learn more <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Laboratory -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="service-icon bg-info bg-opacity-10 text-info rounded-3 mb-3 d-inline-flex p-3">
                                <i class="bi bi-droplet-half fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Laboratory Services</h4>
                            <p class="text-muted mb-3">
                                Comprehensive diagnostic testing including blood tests, urinalysis, malaria testing, 
                                HIV screening, and other essential investigations.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-semibold small">
                                Learn more <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pharmacy -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="service-icon bg-success bg-opacity-10 text-success rounded-3 mb-3 d-inline-flex p-3">
                                <i class="bi bi-capsule-pill fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Pharmacy & Dispensing</h4>
                            <p class="text-muted mb-3">
                                Well-stocked pharmacy providing genuine medications, prescription services, 
                                and professional pharmaceutical advice at affordable prices.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-semibold small">
                                Learn more <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Inpatient -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="service-icon bg-warning bg-opacity-10 text-warning rounded-3 mb-3 d-inline-flex p-3">
                                <i class="bi bi-bed fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Inpatient Care</h4>
                            <p class="text-muted mb-3">
                                Comfortable inpatient wards with 24-hour nursing care for patients requiring 
                                admission, observation, and recovery in a clean, safe environment.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-semibold small">
                                Learn more <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Minor Procedures -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="service-icon bg-secondary bg-opacity-10 text-secondary rounded-3 mb-3 d-inline-flex p-3">
                                <i class="bi bi-bandaid fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-2">Minor Procedures</h4>
                            <p class="text-muted mb-3">
                                Wound dressing, stitching, incision and drainage, and other minor surgical 
                                procedures performed by qualified clinicians in sterile conditions.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-semibold small">
                                Learn more <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2">Why TopCare</span>
                    <h2 class="display-6 fw-bold mb-4">Trusted Healthcare<br>in the Heart of Subukia</h2>
                    <p class="text-muted mb-4">
                        Located just 150 meters from the main matatu stage at Subukia Center, we are easily 
                        accessible to all residents of Subukia Sub-County, including Waseges and Kabazi wards.
                    </p>

                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-inline-flex">
                                    <i class="bi bi-shield-check text-primary fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Safe & Clean Environment</h5>
                                <p class="text-muted mb-0 small">
                                    High cleanliness standards, clean water supply, internal sewerage system, 
                                    and functional incinerator for safe medical waste management.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-inline-flex">
                                    <i class="bi bi-people text-primary fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Experienced Medical Team</h5>
                                <p class="text-muted mb-0 small">
                                    Our qualified doctors, nurses, and support staff are dedicated to providing 
                                    patient-centered care with professionalism and compassion.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-2 d-inline-flex">
                                    <i class="bi bi-currency-dollar text-primary fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Affordable Healthcare</h5>
                                <p class="text-muted mb-0 small">
                                    We believe quality medical care should be accessible to everyone in Subukia, 
                                    regardless of financial status. Transparent pricing, no hidden fees.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="bg-primary rounded-4 p-5 text-white">
                            <h3 class="fw-bold mb-4">Operating Hours</h3>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-white border-opacity-25">
                                    <span><i class="bi bi-clock me-2"></i>Emergency Services</span>
                                    <span class="badge bg-white text-primary">24 Hours</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-white border-opacity-25">
                                    <span><i class="bi bi-sunrise me-2"></i>Morning Visits</span>
                                    <span class="badge bg-white text-primary">6:00 - 7:00 AM</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-white border-opacity-25">
                                    <span><i class="bi bi-sun me-2"></i>Midday Visits</span>
                                    <span class="badge bg-white text-primary">12:30 - 2:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-moon me-2"></i>Evening Visits</span>
                                    <span class="badge bg-white text-primary">5:00 - 7:00 PM</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 border-top border-white border-opacity-25">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-telephone-fill fs-4"></i>
                                    <div>
                                        <p class="mb-0 small opacity-75">Emergency Hotline</p>
                                        <p class="mb-0 fw-bold fs-5">+254 716 221 855</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Decorative element -->
                        <div class="position-absolute top-0 end-0 translate-middle-y bg-success rounded-circle p-3 shadow" style="z-index: 10;">
                            <i class="bi bi-heart-pulse-fill text-white fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2">Testimonials</span>
                <h2 class="display-6 fw-bold">What Our Patients Say</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Real stories from real patients in Subukia who trust TopCare Hospital with their health.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card testimonial-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex text-warning mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="text-muted mb-4">
                                "TopCare Hospital saved my life during an emergency at 2 AM. The doctors were 
                                professional and the facility is very clean. Best hospital in Subukia!"
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                    <span class="fw-bold">JM</span>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">John Mwangi</h6>
                                    <small class="text-muted">Subukia Ward</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card testimonial-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex text-warning mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="text-muted mb-4">
                                "I delivered my baby here and the maternity staff were so caring. The nurses 
                                checked on us every hour. I recommend TopCare to all mothers in Nakuru County."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                    <span class="fw-bold">SN</span>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Sarah Njeri</h6>
                                    <small class="text-muted">Waseges Ward</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card testimonial-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex text-warning mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p class="text-muted mb-4">
                                "The laboratory services are fast and accurate. I got my malaria test results 
                                in 30 minutes. Very affordable compared to other hospitals in the Rift Valley."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                    <span class="fw-bold">PK</span>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Peter Kipchirchir</h6>
                                    <small class="text-muted">Kabazi Ward</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="py-5 py-lg-6 bg-primary text-white position-relative overflow-hidden">
        <div class="position-absolute top-0 end-0 opacity-10">
            <i class="bi bi-plus-circle" style="font-size: 300px;"></i>
        </div>
        <div class="position-absolute bottom-0 start-0 opacity-10">
            <i class="bi bi-heart-pulse" style="font-size: 200px;"></i>
        </div>
        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-3">Ready to Experience Quality Healthcare?</h2>
                    <p class="lead mb-0 opacity-90">
                        Visit us at Subukia Center, just 150 meters from the matatu stage. 
                        We are open 24/7 for all your medical needs.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-column gap-3">
                        <?= Html::a(
                            '<i class="bi bi-calendar-check me-2"></i>Book Appointment',
                            ['site/contact'],
                            ['class' => 'btn btn-light btn-lg fw-bold px-4']
                        ) ?>
                        <?= Html::a(
                            '<i class="bi bi-telephone me-2"></i>Call Now',
                            'tel:+254716221855',
                            ['class' => 'btn btn-outline-light btn-lg fw-bold px-4']
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LOCATION & CONTACT SECTION ===== -->
    <section class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2">Find Us</span>
                    <h2 class="display-6 fw-bold mb-4">Visit TopCare Hospital<br>in Subukia</h2>
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="d-flex gap-3">
                            <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Physical Address</h6>
                                <p class="text-muted mb-0">
                                    Subukia Center, next to Matatu Stage<br>
                                    Subukia Ward, Subukia Sub-County<br>
                                    Nakuru County, Kenya
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-envelope-fill text-primary fs-4"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Email Us</h6>
                                <p class="text-muted mb-0">
                                    tmc@topcarelimited.co.ke<br>
                                    topcaresbk@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-telephone-fill text-primary fs-4"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Call Us</h6>
                                <p class="text-muted mb-0">
                                    +254 716 221 855
                                </p>
                            </div>
                        </div>
                    </div>
                    <?= Html::a(
                        '<i class="bi bi-map me-2"></i>Get Directions',
                        'https://maps.google.com/?q=Subukia+Kenya',
                        [
                            'class' => 'btn btn-primary fw-bold px-4',
                            'target' => '_blank',
                            'rel' => 'noopener'
                        ]
                    ) ?>
                </div>
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="text-center py-5">
                            <i class="bi bi-geo-alt text-primary" style="font-size: 4rem;"></i>
                            <h4 class="mt-3 fw-bold">Subukia Center, Nakuru County</h4>
                            <p class="text-muted mb-4">
                                Located just 150 meters from the main matatu stage<br>
                                Easily accessible from Waseges and Kabazi wards
                            </p>
                            <div class="d-flex justify-content-center gap-3 flex-wrap">
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">
                                    <i class="bi bi-clock me-1"></i> Open 24/7
                                </span>
                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">
                                    <i class="bi bi-shield-check me-1"></i> Licensed
                                </span>
                                <span class="badge bg-info bg-opacity-10 text-info px-3 py-2">
                                    <i class="bi bi-award me-1"></i> Certified
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
// Add custom CSS for this page - using clean syntax without data URIs
$this->registerCss("
    .hero-section {
        background: linear-gradient(135deg, #0066CC 0%, #00A8A8 100%);
        min-height: 85vh;
        display: flex;
        align-items: center;
    }
    .hero-bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.1;
    }
    .text-accent {
        color: #FFD700;
    }
    .min-vh-75 {
        min-height: 75vh;
    }
    .hero-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        line-height: 0;
    }
    .hero-wave svg {
        position: relative;
        display: block;
        width: calc(130%);
        height: 60px;
    }
    .backdrop-blur {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
    .service-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
    }
    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
    }
    .service-icon {
        transition: all 0.3s ease;
    }
    .service-card:hover .service-icon {
        transform: scale(1.1);
    }
    .testimonial-card {
        border-radius: 1rem;
        transition: all 0.3s ease;
    }
    .testimonial-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
    }
    .hover-lift {
        transition: all 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    .stat-item h3 {
        font-size: 2.5rem;
    }
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        .hero-subtitle {
            font-size: 1.1rem;
        }
    }
");
?>