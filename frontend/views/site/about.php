<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About TopCare Hospital';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta description'] = 'TopCare Hospital in Subukia, Nakuru County provides 24/7 quality healthcare including maternity, general outpatient, laboratory, pharmacy, and inpatient services.';
$this->params['meta_keywords'] = 'TopCare Hospital, Subukia hospital, Nakuru healthcare, maternity Subukia, 24 hour hospital Kenya, medical centre Subukia, Rift Valley hospital';
?>

<div class="site-about">
    <!-- Hero Section -->
    <div class="about-hero bg-primary text-white py-5 mb-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3"><?= Html::encode($this->title) ?></h1>
            <p class="lead mb-0">Compassionate Healthcare in the Heart of Subukia</p>
        </div>
    </div>

    <div class="container">
        <!-- Mission & Vision -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-bullseye text-primary fs-4"></i>
                            </div>
                            <h3 class="h4 mb-0">Our Mission</h3>
                        </div>
                        <p class="text-body-secondary mb-0">
                            To provide accessible, affordable, and high-quality healthcare services to the residents of Subukia 
                            and surrounding communities in Nakuru County. We are committed to delivering patient-centered care 
                            with professionalism, integrity, and compassion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-eye text-success fs-4"></i>
                            </div>
                            <h3 class="h4 mb-0">Our Vision</h3>
                        </div>
                        <p class="text-body-secondary mb-0">
                            To be the leading healthcare provider in Subukia Sub-County and the greater Rift Valley region, 
                            recognized for excellence in clinical care, innovation in health services, and unwavering dedication 
                            to community wellness.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Content -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-4">
                    <h2 class="h3 fw-bold">Who We Are</h2>
                    <div class="divider mx-auto bg-primary" style="width: 60px; height: 3px;"></div>
                </div>
                <p class="lead text-center text-body-secondary mb-4">
                    Welcome to <strong>TopCare Hospital</strong> — your trusted healthcare partner in Subukia, Nakuru County.
                </p>
                <p class="text-body-secondary">
                    Located conveniently at <strong>Subukia Center, just 150 meters from the main matatu stage</strong>, 
                    TopCare Hospital has been serving the community with dedication and excellence. Our facility is easily 
                    accessible from all areas within Subukia Sub-County, including Waseges and Kabazi wards, and we remain 
                    open <strong>24 hours a day, 7 days a week</strong> to ensure healthcare is always available when you need it most.
                </p>
                <p class="text-body-secondary">
                    We operate in a secure environment with the highest standards of cleanliness. Our facility features 
                    adequate clean water supply, a functional internal sewerage system, and a working incinerator for 
                    safe medical waste management — ensuring a safe and hygienic environment for all our patients and staff.
                </p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <h2 class="h3 fw-bold">Our Core Values</h2>
                <div class="divider mx-auto bg-primary" style="width: 60px; height: 3px;"></div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-heart-pulse text-danger fs-1"></i>
                    </div>
                    <h4 class="h5">Compassionate Care</h4>
                    <p class="text-body-secondary mb-0">We treat every patient with empathy, dignity, and respect, ensuring a comforting experience during every visit.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-shield-check text-success fs-1"></i>
                    </div>
                    <h4 class="h5">Quality & Safety</h4>
                    <p class="text-body-secondary mb-0">We maintain rigorous clinical standards, proper waste management, and a clean environment to ensure patient safety.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-people text-primary fs-1"></i>
                    </div>
                    <h4 class="h5">Community Focus</h4>
                    <p class="text-body-secondary mb-0">We are deeply rooted in Subukia and committed to improving the health and wellbeing of our local community.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-clock-history text-warning fs-1"></i>
                    </div>
                    <h4 class="h5">24/7 Availability</h4>
                    <p class="text-body-secondary mb-0">Healthcare emergencies don't wait — neither do we. Our doors are always open, day and night.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-currency-dollar text-info fs-1"></i>
                    </div>
                    <h4 class="h5">Affordable Healthcare</h4>
                    <p class="text-body-secondary mb-0">We believe quality medical care should be accessible to everyone in Subukia, regardless of financial status.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-award text-primary fs-1"></i>
                    </div>
                    <h4 class="h5">Professional Excellence</h4>
                    <p class="text-body-secondary mb-0">Our team of qualified medical professionals delivers evidence-based care with the highest ethical standards.</p>
                </div>
            </div>
        </div>

        <!-- Services Overview -->
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <h2 class="h3 fw-bold">What We Do</h2>
                <div class="divider mx-auto bg-primary" style="width: 60px; height: 3px;"></div>
                <p class="text-body-secondary mt-3">Comprehensive healthcare services tailored for the Subukia community</p>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="bi bi-hospital text-primary me-2"></i>General Outpatient</h5>
                        <p class="card-text text-body-secondary">Consultation and treatment for common illnesses, chronic disease management, and general health check-ups for all age groups.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="bi bi-heart-fill text-danger me-2"></i>Maternity & Child Health</h5>
                        <p class="card-text text-body-secondary">Antenatal care, safe delivery services, postnatal care, immunization, and child wellness programs for mothers and babies in Subukia.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="bi bi-droplet-half text-info me-2"></i>Laboratory Services</h5>
                        <p class="card-text text-body-secondary">Comprehensive diagnostic testing including blood tests, urinalysis, malaria testing, HIV screening, and other essential investigations.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="bi bi-capsule-pill text-success me-2"></i>Pharmacy & Dispensing</h5>
                        <p class="card-text text-body-secondary">Well-stocked pharmacy providing genuine medications, prescription services, and professional pharmaceutical advice.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="bi bi-bed text-warning me-2"></i>Inpatient Care</h5>
                        <p class="card-text text-body-secondary">Comfortable inpatient wards with 24-hour nursing care for patients requiring admission, observation, and recovery.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="bi bi-bandaid text-danger me-2"></i>Minor Procedures</h5>
                        <p class="card-text text-body-secondary">Wound dressing, stitching, incision and drainage, and other minor surgical procedures performed by qualified clinicians.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Location & Contact Info -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h3 class="h5 mb-0"><i class="bi bi-geo-alt me-2"></i>Find Us</h3>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex">
                                <i class="bi bi-building text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Physical Address:</strong><br>
                                    Subukia Center, next to Matatu Stage<br>
                                    Subukia Ward, Subukia Sub-County<br>
                                    Nakuru County, Kenya
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-envelope text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Email:</strong><br>
                                    tmc@topcarelimited.co.ke<br>
                                    topcaresbk@gmail.com
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-telephone text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Phone:</strong><br>
                                    +254 716 221 855
                                </div>
                            </li>
                            <li class="mb-0 d-flex">
                                <i class="bi bi-mailbox text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Postal Address:</strong><br>
                                    P.O. Box 81-20109, Subukia<br>
                                    P.O. Box 365-00242, Kitengela
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-success text-white">
                        <h3 class="h5 mb-0"><i class="bi bi-clock me-2"></i>Visiting Hours</h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="alert alert-info mb-3">
                            <i class="bi bi-info-circle me-2"></i>
                            <strong>We are open 24 hours</strong> for emergency and inpatient services.
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span><i class="bi bi-sunrise text-warning me-2"></i>Morning Visits</span>
                                <span class="badge bg-primary rounded-pill">6:00 AM - 7:00 AM</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span><i class="bi bi-sun text-warning me-2"></i>Midday Visits</span>
                                <span class="badge bg-primary rounded-pill">12:30 PM - 2:00 PM</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span><i class="bi bi-moon text-primary me-2"></i>Evening Visits</span>
                                <span class="badge bg-primary rounded-pill">5:00 PM - 7:00 PM</span>
                            </li>
                        </ul>
                        <div class="mt-3 text-center">
                            <?= Html::a(
                                '<i class="bi bi-calendar-check me-2"></i>Make an Appointment',
                                ['site/contact'],
                                ['class' => 'btn btn-outline-primary w-100']
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card bg-primary text-white border-0">
                    <div class="card-body p-5 text-center">
                        <h3 class="h4 mb-3">Your Health is Our Priority</h3>
                        <p class="mb-4 opacity-75">
                            Whether you need emergency care, maternity services, or a routine check-up, 
                            TopCare Hospital is here for you. Visit us today at Subukia Center.
                        </p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <?= Html::a(
                                'Contact Us',
                                ['site/contact'],
                                ['class' => 'btn btn-light btn-lg px-4']
                            ) ?>
                            <?= Html::a(
                                'Our Services',
                                ['site/services'],
                                ['class' => 'btn btn-outline-light btn-lg px-4']
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (YII_DEBUG): ?>
            <div class="alert alert-secondary mt-4">
                <small class="text-muted">
                    <i class="bi bi-bug me-2"></i>
                    Debug Mode: Current file — <code><?= __FILE__ ?></code>
                </small>
            </div>
        <?php endif; ?>
    </div>
</div>