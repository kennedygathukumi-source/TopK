<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Book an Appointment';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-book-appointment">

    <!-- Hero -->
    <div class="appt-hero py-5 mb-5">
        <div class="container text-center">
            <div class="hero-icon-wrap mx-auto mb-3">
                <i class="bi bi-calendar-heart-fill hero-icon"></i>
            </div>
            <h1 class="display-5 fw-bold appt-heading mb-2"><?= Html::encode($this->title) ?></h1>
            <p class="lead appt-muted mb-0">Fill in the form below and our team will confirm your appointment within 24 hours.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row justify-content-center g-4">

            <!-- ── Left: Info cards ── -->
            <div class="col-lg-4 col-md-12 order-lg-1 order-2">

                <!-- Why book -->
                <div class="appt-card mb-4">
                    <h5 class="appt-card-heading"><i class="bi bi-patch-check-fill me-2"></i>Why Book With Us?</h5>
                    <ul class="list-unstyled appt-info-list mb-0">
                        <li><i class="bi bi-check-circle-fill appt-icon-blue me-2"></i>Fast confirmation within 24 hours</li>
                        <li><i class="bi bi-check-circle-fill appt-icon-blue me-2"></i>Qualified doctors &amp; specialists</li>
                        <li><i class="bi bi-check-circle-fill appt-icon-blue me-2"></i>Flexible morning, midday &amp; evening slots</li>
                        <li><i class="bi bi-check-circle-fill appt-icon-blue me-2"></i>Affordable, transparent pricing</li>
                        <li><i class="bi bi-check-circle-fill appt-icon-blue me-2"></i>24/7 emergency support available</li>
                    </ul>
                </div>

                <!-- Visiting hours -->
                <div class="appt-card mb-4">
                    <h5 class="appt-card-heading"><i class="bi bi-clock-fill me-2"></i>Visiting Hours</h5>
                    <div class="appt-hours-row">
                        <span><i class="bi bi-sunrise appt-icon-blue me-1"></i>Morning</span>
                        <span class="appt-badge">6:00 AM – 7:00 AM</span>
                    </div>
                    <div class="appt-hours-row">
                        <span><i class="bi bi-sun appt-icon-blue me-1"></i>Midday</span>
                        <span class="appt-badge">12:30 PM – 2:00 PM</span>
                    </div>
                    <div class="appt-hours-row" style="border-bottom:none;">
                        <span><i class="bi bi-moon appt-icon-blue me-1"></i>Evening</span>
                        <span class="appt-badge">5:00 PM – 7:00 PM</span>
                    </div>
                    <p class="appt-muted mt-3 mb-0" style="font-size:0.82rem;">
                        <i class="bi bi-info-circle me-1"></i>
                        Emergency &amp; inpatient services are open <strong>24 hours</strong>.
                    </p>
                </div>

                <!-- Contact -->
                <div class="appt-card">
                    <h5 class="appt-card-heading"><i class="bi bi-headset me-2"></i>Need Help?</h5>
                    <p class="appt-muted mb-3" style="font-size:0.9rem;">Call us directly or reach us on WhatsApp.</p>
                    <a href="tel:+254716221855" class="btn appt-btn-primary w-100 mb-2">
                        <i class="bi bi-telephone-fill me-2"></i>+254 716 221 855
                    </a>
                    <a href="https://wa.me/254716221855" target="_blank" rel="noopener"
                       class="btn appt-btn-outline w-100">
                        <i class="bi bi-whatsapp me-2"></i>Chat on WhatsApp
                    </a>
                </div>
            </div>

            <!-- ── Right: Form ── -->
            <div class="col-lg-8 col-md-12 order-lg-2 order-1">
                <div class="appt-card appt-form-card">
                    <h4 class="appt-card-heading mb-4">
                        <i class="bi bi-pencil-square me-2"></i>Appointment Details
                    </h4>

                    <?php $form = ActiveForm::begin([
                        'id'      => 'appointment-form',
                        'options' => ['class' => 'appt-form'],
                    ]); ?>

                    <!-- Personal info -->
                    <p class="appt-section-label">Personal Information</p>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="appt-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="AppointmentForm[full_name]"
                                   class="form-control appt-input" placeholder="e.g. Jane Muthoni" required>
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" name="AppointmentForm[phone]"
                                   class="form-control appt-input" placeholder="+254 7XX XXX XXX" required>
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Email Address</label>
                            <input type="email" name="AppointmentForm[email]"
                                   class="form-control appt-input" placeholder="your@email.com">
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Date of Birth</label>
                            <input type="date" name="AppointmentForm[dob]"
                                   class="form-control appt-input">
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Gender</label>
                            <select name="AppointmentForm[gender]" class="form-select appt-input">
                                <option value="">-- Select --</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other / Prefer not to say</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">National ID / Passport No.</label>
                            <input type="text" name="AppointmentForm[id_number]"
                                   class="form-control appt-input" placeholder="Optional">
                        </div>
                    </div>

                    <!-- Appointment details -->
                    <p class="appt-section-label">Appointment Details</p>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="appt-label">Service / Department <span class="text-danger">*</span></label>
                            <select name="AppointmentForm[service]" class="form-select appt-input" required>
                                <option value="">-- Select Service --</option>
                                <option value="general">General Outpatient</option>
                                <option value="maternity">Maternity &amp; Child Health</option>
                                <option value="lab">Laboratory Services</option>
                                <option value="pharmacy">Pharmacy &amp; Dispensing</option>
                                <option value="inpatient">Inpatient Care</option>
                                <option value="procedures">Minor Procedures</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Preferred Doctor</label>
                            <select name="AppointmentForm[doctor]" class="form-select appt-input">
                                <option value="">-- No Preference --</option>
                                <option value="any">Any Available Doctor</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Preferred Date <span class="text-danger">*</span></label>
                            <input type="date" name="AppointmentForm[preferred_date]"
                                   class="form-control appt-input" required
                                   min="<?= date('Y-m-d', strtotime('+1 day')) ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Preferred Time Slot <span class="text-danger">*</span></label>
                            <select name="AppointmentForm[time_slot]" class="form-select appt-input" required>
                                <option value="">-- Select Slot --</option>
                                <optgroup label="Morning">
                                    <option value="08:00">8:00 AM</option>
                                    <option value="09:00">9:00 AM</option>
                                    <option value="10:00">10:00 AM</option>
                                    <option value="11:00">11:00 AM</option>
                                </optgroup>
                                <optgroup label="Midday">
                                    <option value="12:30">12:30 PM</option>
                                    <option value="13:00">1:00 PM</option>
                                    <option value="14:00">2:00 PM</option>
                                </optgroup>
                                <optgroup label="Afternoon / Evening">
                                    <option value="15:00">3:00 PM</option>
                                    <option value="16:00">4:00 PM</option>
                                    <option value="17:00">5:00 PM</option>
                                    <option value="18:00">6:00 PM</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="appt-label">Visit Type <span class="text-danger">*</span></label>
                            <div class="d-flex gap-3 flex-wrap mt-1">
                                <div class="form-check appt-radio">
                                    <input class="form-check-input" type="radio"
                                           name="AppointmentForm[visit_type]" id="vt_new" value="new_patient" checked>
                                    <label class="form-check-label" for="vt_new">New Patient</label>
                                </div>
                                <div class="form-check appt-radio">
                                    <input class="form-check-input" type="radio"
                                           name="AppointmentForm[visit_type]" id="vt_returning" value="returning">
                                    <label class="form-check-label" for="vt_returning">Returning Patient</label>
                                </div>
                                <div class="form-check appt-radio">
                                    <input class="form-check-input" type="radio"
                                           name="AppointmentForm[visit_type]" id="vt_followup" value="follow_up">
                                    <label class="form-check-label" for="vt_followup">Follow-up Visit</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Insurance / payment -->
                    <p class="appt-section-label">Insurance &amp; Payment</p>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="appt-label">Payment Method</label>
                            <select name="AppointmentForm[payment]" class="form-select appt-input">
                                <option value="cash">Cash</option>
                                <option value="mpesa">M-Pesa</option>
                                <option value="nhif">NHIF / SHA</option>
                                <option value="insurance">Private Insurance</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="appt-label">Insurance / NHIF No.</label>
                            <input type="text" name="AppointmentForm[insurance_no]"
                                   class="form-control appt-input" placeholder="If applicable">
                        </div>
                    </div>

                    <!-- Symptoms / notes -->
                    <p class="appt-section-label">Additional Information</p>
                    <div class="mb-3">
                        <label class="appt-label">Brief Description of Symptoms or Reason for Visit</label>
                        <textarea name="AppointmentForm[symptoms]" class="form-control appt-input"
                                  rows="4" placeholder="e.g. Persistent headache for 3 days, follow-up for malaria treatment…"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="appt-label">Any Known Allergies or Current Medications?</label>
                        <textarea name="AppointmentForm[allergies]" class="form-control appt-input"
                                  rows="2" placeholder="e.g. Allergic to penicillin, taking metformin…"></textarea>
                    </div>

                    <!-- Terms -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="appt_terms" required>
                        <label class="form-check-label appt-muted" for="appt_terms" style="font-size:0.88rem;">
                            I confirm that the information provided is accurate and I agree to
                            <?= Html::a('TopCare\'s Patient Terms', ['site/terms'], ['class' => 'appt-link']) ?>.
                        </label>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid gap-2 d-md-flex">
                        <button type="submit" class="btn appt-btn-primary px-5 py-2 fw-bold">
                            <i class="bi bi-calendar-check me-2"></i>Book Appointment
                        </button>
                        <button type="reset" class="btn appt-btn-outline px-4 py-2">
                            <i class="bi bi-arrow-counterclockwise me-2"></i>Clear Form
                        </button>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div><!-- /row -->

        <!-- Location strip -->
        <div class="appt-location-strip mt-5">
            <div class="row g-3 text-center">
                <div class="col-md-4">
                    <i class="bi bi-geo-alt-fill appt-icon-blue fs-4 mb-1 d-block"></i>
                    <strong class="d-block appt-text">Location</strong>
                    <small class="appt-muted">Subukia Center, next to Matatu Stage<br>Nakuru County, Kenya</small>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-telephone-fill appt-icon-blue fs-4 mb-1 d-block"></i>
                    <strong class="d-block appt-text">Emergency Line</strong>
                    <small class="appt-muted"><a href="tel:+254716221855" class="appt-link">+254 716 221 855</a></small>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-envelope-fill appt-icon-blue fs-4 mb-1 d-block"></i>
                    <strong class="d-block appt-text">Email Us</strong>
                    <small class="appt-muted">
                        <a href="mailto:tmc@topcarelimited.co.ke" class="appt-link">tmc@topcarelimited.co.ke</a>
                    </small>
                </div>
            </div>
        </div>

    </div><!-- /container -->
</div>

<?php
$this->registerCss("
    :root {
        --appt-bg:       #e8f4fd;
        --appt-mid:      #bde0f7;
        --appt-border:   #90caf9;
        --appt-deep:     #1565c0;
        --appt-text:     #1a1a2e;
        --appt-muted:    #37474f;
    }

    /* Hero */
    .appt-hero {
        background: linear-gradient(135deg, #e8f4fd 0%, #bde0f7 100%);
        border-bottom: 2px solid var(--appt-border);
    }
    .hero-icon-wrap {
        width: 70px; height: 70px;
        background: var(--appt-mid);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        border: 2px solid var(--appt-border);
    }
    .hero-icon { font-size: 2rem; color: var(--appt-deep); }
    .appt-heading { color: var(--appt-deep) !important; }
    .appt-text    { color: var(--appt-text) !important; }
    .appt-muted   { color: var(--appt-muted) !important; }
    .appt-icon-blue { color: var(--appt-deep) !important; }
    .appt-link    { color: var(--appt-deep) !important; text-decoration: none; }
    .appt-link:hover { text-decoration: underline; }

    /* Cards */
    .appt-card {
        background: #ffffff;
        border: 1px solid var(--appt-border);
        border-radius: 12px;
        padding: 1.5rem;
        color: var(--appt-text);
    }
    .appt-form-card {
        border-top: 4px solid var(--appt-deep);
    }
    .appt-card-heading {
        color: var(--appt-deep) !important;
        font-weight: 700;
        font-size: 0.95rem;
        letter-spacing: 0.3px;
        margin-bottom: 1rem;
    }

    /* Info list */
    .appt-info-list li {
        color: var(--appt-text) !important;
        padding: 0.35rem 0;
        font-size: 0.9rem;
        border-bottom: 1px solid var(--appt-bg);
    }
    .appt-info-list li:last-child { border-bottom: none; }

    /* Hours rows */
    .appt-hours-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--appt-bg);
        font-size: 0.88rem;
        color: var(--appt-text);
    }
    .appt-badge {
        background: var(--appt-mid);
        color: var(--appt-deep);
        font-size: 0.78rem;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 20px;
        border: 1px solid var(--appt-border);
    }

    /* Form elements */
    .appt-section-label {
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--appt-deep);
        border-bottom: 2px solid var(--appt-mid);
        padding-bottom: 0.4rem;
        margin-bottom: 1rem;
    }
    .appt-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--appt-text);
        margin-bottom: 0.35rem;
        display: block;
    }
    .appt-input,
    .appt-form .form-control,
    .appt-form .form-select {
        border: 1.5px solid var(--appt-border) !important;
        border-radius: 8px !important;
        background-color: #f5faff !important;
        color: var(--appt-text) !important;
        font-size: 0.9rem;
        padding: 0.5rem 0.85rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .appt-input:focus,
    .appt-form .form-control:focus,
    .appt-form .form-select:focus {
        border-color: var(--appt-deep) !important;
        box-shadow: 0 0 0 3px rgba(21,101,192,0.12) !important;
        background-color: #ffffff !important;
        outline: none;
    }

    /* Radio */
    .appt-radio .form-check-input:checked {
        background-color: var(--appt-deep);
        border-color: var(--appt-deep);
    }
    .appt-radio .form-check-label { color: var(--appt-text); font-size: 0.9rem; }

    /* Buttons */
    .appt-btn-primary {
        background-color: var(--appt-deep) !important;
        border-color: var(--appt-deep) !important;
        color: #ffffff !important;
        border-radius: 8px;
        transition: background 0.2s, transform 0.1s;
    }
    .appt-btn-primary:hover {
        background-color: #0d47a1 !important;
        transform: translateY(-1px);
    }
    .appt-btn-outline {
        background-color: transparent !important;
        border: 1.5px solid var(--appt-deep) !important;
        color: var(--appt-deep) !important;
        border-radius: 8px;
        transition: background 0.2s;
    }
    .appt-btn-outline:hover {
        background-color: var(--appt-mid) !important;
    }

    /* Location strip */
    .appt-location-strip {
        background: var(--appt-bg);
        border: 1px solid var(--appt-border);
        border-radius: 12px;
        padding: 2rem 1.5rem;
    }
    .appt-location-strip .col-md-4 {
        border-right: 1px solid var(--appt-border);
    }
    .appt-location-strip .col-md-4:last-child { border-right: none; }

    @media (max-width: 767px) {
        .appt-location-strip .col-md-4 { border-right: none; border-bottom: 1px solid var(--appt-border); padding-bottom: 1rem; margin-bottom: 1rem; }
        .appt-location-strip .col-md-4:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
    }
");
?>