<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Sign in to your TOPCARE HOSPITAL account';

$htmlIcon = <<<HTML
{label}<div class="input-group tc-input-group"><span class="input-group-text tc-input-icon" aria-hidden="true">%s</span>{input}</div>{error}{hint}
HTML;
$labelOptions = ['class' => 'form-label tc-label'];
?>

<div class="tc-login-wrapper">
    <div class="card border-0 overflow-hidden tc-login-card">
        <div class="row g-0">

            <!-- ── Left: Brand panel ── -->
            <div class="col-md-5 d-none d-md-flex tc-brand-panel">
                <div class="d-flex flex-column justify-content-between p-4 p-lg-5 w-100">

                    <!-- Logo -->
                    <div class="d-flex align-items-center gap-3">
                        <?= Html::img(
                            Yii::getAlias('@web/images/a66b5fa87e1d127ea013c5f586fe905b914d43d9.png'),
                            ['alt' => 'TOPCARE HOSPITAL', 'height' => 40, 'class' => 'tc-logo-img']
                        ) ?>
                    </div>

                    <!-- Middle content -->
                    <div>
                        <div class="tc-brand-badge mb-4">
                            <i class="bi bi-shield-lock-fill me-2"></i>Admin Access Only
                        </div>
                        <h2 class="tc-brand-headline">
                            Backend<br>Administration
                        </h2>
                        <p class="tc-brand-body mt-3">
                            Manage your TopCare Hospital system — patients, appointments,
                            staff, records, and reports — all from one secure dashboard.
                        </p>

                        <ul class="list-unstyled tc-feature-list mt-4">
                            <li><i class="bi bi-people-fill me-2"></i>Patient &amp; staff management</li>
                            <li><i class="bi bi-calendar2-check me-2"></i>Appointments &amp; scheduling</li>
                            <li><i class="bi bi-file-earmark-medical me-2"></i>Medical records &amp; reports</li>
                            <li><i class="bi bi-bar-chart-fill me-2"></i>Analytics &amp; billing</li>
                        </ul>
                    </div>

                    <!-- Bottom -->
                    <div class="tc-brand-address">
                        <i class="bi bi-geo-alt-fill me-1"></i>
                        Subukia Center, Nakuru County, Kenya<br>
                        <i class="bi bi-telephone-fill me-1 mt-1 d-inline-block"></i>
                        <a href="tel:+254716221855" class="tc-addr-link">+254 716 221 855</a>
                    </div>
                </div>
            </div>

            <!-- ── Right: Form panel ── -->
            <div class="col-md-7">
                <div class="tc-form-panel p-4 p-lg-5">

                    <!-- Mobile logo -->
                    <div class="d-md-none mb-4 d-flex align-items-center gap-3">
                        <div class="tc-logo-circle-sm">
                            <i class="bi bi-heart-pulse-fill tc-logo-icon-sm"></i>
                        </div>
                        <div>
                            <div class="tc-brand-name-sm">TOPCARE HOSPITAL</div>
                            <div class="tc-brand-sub-sm">Backend Administration</div>
                        </div>
                    </div>

                    <!-- Heading -->
                    <div class="mb-4">
                        <div class="tc-admin-badge mb-3">
                            <i class="bi bi-person-badge me-1"></i>Administrator Login
                        </div>
                        <h1 class="tc-form-title"><?= Html::encode($this->title) ?></h1>
                        <p class="tc-form-sub">Enter your credentials to access the admin panel</p>
                    </div>

                    <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'tc-form']]); ?>

                    <!-- Username -->
                    <div class="mb-3">
                        <?= $form->field($model, 'username', [
                            'options'      => ['class' => 'mb-0'],
                            'template'     => sprintf($htmlIcon, '<i class="bi bi-person-fill"></i>'),
                            'inputOptions' => [
                                'class'       => 'form-control tc-input',
                                'placeholder' => 'Enter username',
                                'autofocus'   => true,
                            ],
                        ])->textInput()->label('Username', $labelOptions) ?>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <?= $form->field($model, 'password', [
                            'options'      => ['class' => 'mb-0'],
                            'template'     => sprintf($htmlIcon, '<i class="bi bi-lock-fill"></i>'),
                            'inputOptions' => [
                                'class'       => 'form-control tc-input',
                                'placeholder' => 'Enter password',
                            ],
                        ])->passwordInput()->label('Password', $labelOptions) ?>
                    </div>

                    <!-- Remember me -->
                    <div class="mb-4">
                        <?= $form->field($model, 'rememberMe', [
                            'options' => ['class' => 'mb-0'],
                        ])->checkbox(['label' => 'Keep me signed in on this device']) ?>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid mb-4">
                        <?= Html::submitButton(
                            '<i class="bi bi-box-arrow-in-right me-2"></i>Sign In to Dashboard',
                            [
                                'class' => 'btn tc-btn-primary btn-lg',
                                'name'  => 'login-button',
                            ]
                        ) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <!-- Divider -->
                    <div class="tc-divider"><span>secure access</span></div>

                    <!-- Security note -->
                    <div class="tc-security-note mt-4">
                        <i class="bi bi-shield-check me-2 text-success"></i>
                        <span>This portal is for <strong>authorised staff only</strong>. Unauthorised access is prohibited.</span>
                    </div>

                    <!-- Emergency strip -->
                    <div class="tc-emergency-note mt-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <strong>24/7 Emergency:</strong>
                        <a href="tel:+254716221855" class="tc-link ms-1">+254 716 221 855</a>
                    </div>

                </div>
            </div>

        </div>
    </div><!-- /tc-login-card -->
</div>

<?php
$this->registerCss("
    /* ── Variables ── */
    :root {
        --tc-blue-light:  #e8f4fd;
        --tc-blue-mid:    #bde0f7;
        --tc-blue-border: #90caf9;
        --tc-blue-deep:   #1565c0;
        --tc-blue-hover:  #0d47a1;
        --tc-text:        #1a1a2e;
        --tc-muted:       #37474f;
    }

    /* ── Page wrapper ── */
    .tc-login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(160deg, #e8f4fd 0%, #d0eaf8 50%, #bde0f7 100%);
        padding: 2rem 1rem;
    }

    /* ── Card ── */
    .tc-login-card {
        width: 100%;
        max-width: 900px;
        border-radius: 16px !important;
        box-shadow: 0 8px 40px rgba(21,101,192,0.15) !important;
        border: 1px solid var(--tc-blue-border) !important;
        overflow: hidden;
    }

    /* ── Brand panel (left) ── */
    .tc-brand-panel {
        background: linear-gradient(160deg, #0d47a1 0%, #1565c0 50%, #1976d2 100%);
        color: #ffffff;
    }
    .tc-logo-img { filter: brightness(0) invert(1); }

    .tc-brand-badge {
        display: inline-flex; align-items: center;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 20px;
        padding: 4px 14px;
        font-size: 0.78rem;
        color: #ffffff;
    }
    .tc-brand-headline {
        font-size: 2rem; font-weight: 800;
        color: #ffffff; line-height: 1.2;
    }
    .tc-brand-body {
        color: rgba(255,255,255,0.8);
        font-size: 0.9rem; line-height: 1.65;
    }
    .tc-feature-list li {
        color: rgba(255,255,255,0.85);
        font-size: 0.88rem;
        padding: 0.32rem 0;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .tc-feature-list li:last-child { border-bottom: none; }
    .tc-brand-address {
        font-size: 0.82rem;
        color: rgba(255,255,255,0.7);
        line-height: 1.8;
    }
    .tc-addr-link { color: rgba(255,255,255,0.9) !important; text-decoration: none; }
    .tc-addr-link:hover { text-decoration: underline; }

    /* ── Mobile logo ── */
    .tc-logo-circle-sm {
        width: 44px; height: 44px;
        background: var(--tc-blue-mid);
        border: 2px solid var(--tc-blue-border);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .tc-logo-icon-sm { font-size: 1.2rem; color: var(--tc-blue-deep); }
    .tc-brand-name-sm { font-size: 0.95rem; font-weight: 800; color: var(--tc-text); letter-spacing: 0.5px; }
    .tc-brand-sub-sm  { font-size: 0.7rem; color: var(--tc-muted); text-transform: uppercase; letter-spacing: 1px; }

    /* ── Form panel (right) ── */
    .tc-form-panel { background: #ffffff; }

    .tc-admin-badge {
        display: inline-flex; align-items: center;
        background: var(--tc-blue-light);
        border: 1px solid var(--tc-blue-border);
        border-radius: 20px;
        padding: 4px 14px;
        font-size: 0.78rem;
        color: var(--tc-blue-deep);
        font-weight: 600;
    }
    .tc-form-title {
        font-size: 1.3rem; font-weight: 700;
        color: var(--tc-text) !important;
        margin: 0.4rem 0 0.2rem;
        line-height: 1.3;
    }
    .tc-form-sub {
        color: var(--tc-muted) !important;
        font-size: 0.88rem;
    }

    /* Labels */
    .tc-label {
        font-size: 0.85rem; font-weight: 600;
        color: var(--tc-text) !important;
        margin-bottom: 0.35rem;
    }

    /* Input icon */
    .tc-input-icon {
        background: var(--tc-blue-light) !important;
        border: 1.5px solid var(--tc-blue-border) !important;
        border-right: none !important;
        color: var(--tc-blue-deep) !important;
        border-radius: 8px 0 0 8px !important;
    }
    .tc-input-group { border-radius: 8px; overflow: hidden; }

    /* Inputs */
    .tc-input,
    .tc-form .form-control {
        border: 1.5px solid var(--tc-blue-border) !important;
        border-left: none !important;
        border-radius: 0 8px 8px 0 !important;
        background: #f5faff !important;
        color: var(--tc-text) !important;
        font-size: 0.92rem;
        padding: 0.55rem 0.9rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .tc-input:focus,
    .tc-form .form-control:focus {
        border-color: var(--tc-blue-deep) !important;
        box-shadow: 0 0 0 3px rgba(21,101,192,0.12) !important;
        background: #ffffff !important;
        outline: none;
    }

    /* Checkbox */
    .tc-form .form-check-input:checked {
        background-color: var(--tc-blue-deep) !important;
        border-color: var(--tc-blue-deep) !important;
    }
    .tc-form .form-check-label { color: var(--tc-text) !important; font-size: 0.88rem; }

    /* Submit button */
    .tc-btn-primary {
        background: var(--tc-blue-deep) !important;
        border-color: var(--tc-blue-deep) !important;
        color: #ffffff !important;
        border-radius: 8px !important;
        font-weight: 600;
        transition: background 0.2s, transform 0.1s;
    }
    .tc-btn-primary:hover {
        background: var(--tc-blue-hover) !important;
        transform: translateY(-1px);
    }

    /* Divider */
    .tc-divider {
        display: flex; align-items: center; gap: 1rem;
        color: var(--tc-muted); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;
    }
    .tc-divider::before,
    .tc-divider::after {
        content: ''; flex: 1;
        height: 1px; background: var(--tc-blue-border);
    }

    /* Security note */
    .tc-security-note {
        background: #f0fff4;
        border: 1px solid #a8d5b5;
        border-radius: 8px;
        padding: 0.6rem 1rem;
        font-size: 0.83rem;
        color: var(--tc-text) !important;
    }

    /* Emergency note */
    .tc-emergency-note {
        background: var(--tc-blue-light);
        border: 1px solid var(--tc-blue-border);
        border-radius: 8px;
        padding: 0.6rem 1rem;
        font-size: 0.84rem;
        color: var(--tc-text) !important;
        text-align: center;
    }
    .tc-link { color: var(--tc-blue-deep) !important; text-decoration: none; }
    .tc-link:hover { text-decoration: underline; }
");
?>