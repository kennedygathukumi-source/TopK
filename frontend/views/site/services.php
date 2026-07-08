<?php
use yii\helpers\Html;

$this->title = 'Our Services';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-services">
    <!-- Hero Section -->
    <div class="services-hero text-center py-5 mb-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3"><?= Html::encode($this->title) ?></h1>
            <p class="lead">Comprehensive healthcare services for you and your family</p>
        </div>
    </div>

    <div class="container">
        <!-- Services Grid -->
        <div class="row g-4">
            
            <!-- General Outpatient -->
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-stethoscope fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">General Outpatient</h5>
                        <p class="card-text text-muted">
                            Comprehensive outpatient consultations, diagnosis, and treatment for common illnesses and chronic conditions.
                        </p>
                        <?= Html::a('Learn More', ['site/book-appointment'], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    </div>
                </div>
            </div>

            <!-- Maternity & Child Health -->
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-baby fa-3x text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold">Maternity & Child Health</h5>
                        <p class="card-text text-muted">
                            Prenatal care, safe delivery services, postnatal care, immunization, and pediatric health services.
                        </p>
                        <?= Html::a('Learn More', ['site/book-appointment'], ['class' => 'btn btn-outline-success btn-sm']) ?>
                    </div>
                </div>
            </div>

            <!-- Laboratory Services -->
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-flask fa-3x text-info"></i>
                        </div>
                        <h5 class="card-title fw-bold">Laboratory Services</h5>
                        <p class="card-text text-muted">
                            Full range of diagnostic tests including blood work, urinalysis, microbiology, and pathology services.
                        </p>
                        <?= Html::a('Learn More', ['site/book-appointment'], ['class' => 'btn btn-outline-info btn-sm']) ?>
                    </div>
                </div>
            </div>

            <!-- Pharmacy & Dispensing -->
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-pills fa-3x text-warning"></i>
                        </div>
                        <h5 class="card-title fw-bold">Pharmacy & Dispensing</h5>
                        <p class="card-text text-muted">
                            In-house pharmacy with quality medications, prescription services, and professional pharmaceutical counseling.
                        </p>
                        <?= Html::a('Learn More', ['site/book-appointment'], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                    </div>
                </div>
            </div>

            <!-- Inpatient Care -->
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-procedures fa-3x text-danger"></i>
                        </div>
                        <h5 class="card-title fw-bold">Inpatient Care</h5>
                        <p class="card-text text-muted">
                            24/7 inpatient admission services with comfortable wards, skilled nursing care, and round-the-clock monitoring.
                        </p>
                        <?= Html::a('Learn More', ['site/book-appointment'], ['class' => 'btn btn-outline-danger btn-sm']) ?>
                    </div>
                </div>
            </div>

            <!-- Minor Procedures -->
            <div class="col-md-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-syringe fa-3x text-secondary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Minor Procedures</h5>
                        <p class="card-text text-muted">
                            Outpatient minor surgical procedures, wound care, suturing, injections, and other clinical procedures.
                        </p>
                        <?= Html::a('Learn More', ['site/book-appointment'], ['class' => 'btn btn-outline-secondary btn-sm']) ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5 py-5">
            <h3 class="mb-3">Need Medical Attention?</h3>
            <p class="text-muted mb-4">Our team of qualified professionals is ready to serve you 24/7</p>
            <?= Html::a('Book an Appointment', ['site/book-appointment'], ['class' => 'btn btn-primary btn-lg px-5']) ?>
            <span class="mx-2">or</span>
            <?= Html::a('Contact Us', ['site/contact'], ['class' => 'btn btn-outline-primary btn-lg px-5']) ?>
        </div>

        <!-- Emergency Banner -->
        <div class="alert alert-danger text-center mt-4" role="alert">
            <i class="fas fa-phone-alt me-2"></i>
            <strong>Emergency Hotline:</strong> +254 716 221 855 — Available 24/7
        </div>
    </div>
</div>