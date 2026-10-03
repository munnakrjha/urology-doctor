@extends('layouts.app')

@section('title', 'Dr. Mriganka Deuri Bharali | Consultant Urologist')

@section('content')
{{-- =====================================================
     SERVICES & CLINICAL EXPERTISE PAGE SECTION
====================================================== --}}

<section class="services-hero-section">
    <div class="services-hero-container">
        <span class="services-badge">Specialized Urological Care</span>
        <h1 class="services-hero-title">Comprehensive Urology & Endourology Services</h1>
        <p class="services-hero-desc">
            Delivering advanced surgical solutions, laser treatments, and minimally invasive procedures with a patient-first approach at Down Town Hospital, Guwahati.
        </p>
    </div>
</section>

<section class="services-grid-section">
    <div class="services-container">

        {{-- Section Header --}}
        <div class="services-header" data-aos="fade-up">
            <h2 class="services-main-title">Clinical & Surgical Expertise</h2>
            <p class="services-sub-title">Tailored treatment plans utilizing state-of-the-art diagnostic and surgical technology.</p>
            <span class="services-underline"></span>
        </div>

        {{-- Services Grid --}}
        <div class="services-grid">

            {{-- Service Card 1 --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon-wrapper">
                    <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v10M8 12h8"></path>
                    </svg>
                </div>
                <div class="service-content">
                    <span class="service-tag">Endourology & Lasers</span>
                    <h3 class="service-card-title">Kidney & Urinary Stone Management</h3>
                    <p class="service-card-desc">
                        Advanced minimally invasive endoscopic procedures for complete stone clearance with minimal recovery time.
                    </p>
                    <ul class="service-bullets">
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>RIRS:</strong> Retrograde Intrarenal Surgery with Holmium Laser</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>PCNL & Mini-PCNL:</strong> Percutaneous Nephrolithotomy</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>URS:</strong> Ureteroscopic Lithotripsy for ureteral stones</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Service Card 2 --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="150">
                <div class="service-icon-wrapper">
                    <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <div class="service-content">
                    <span class="service-tag">Prostate Care</span>
                    <h3 class="service-card-title">Prostate Disorders & BPH Treatment</h3>
                    <p class="service-card-desc">
                        Comprehensive management for Benign Prostatic Hyperplasia (BPH) and lower urinary tract symptoms (LUTS).
                    </p>
                    <ul class="service-bullets">
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>TURP:</strong> Transurethral Resection of the Prostate</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Laser Prostatectomy:</strong> Minimal bleeding & quick recovery</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Screening & management for Prostate Cancer</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon-wrapper">
                    <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                </div>
                <div class="service-content">
                    <span class="service-tag">Advanced Surgery</span>
                    <h3 class="service-card-title">Robotic & Laparoscopic Urology</h3>
                    <p class="service-card-desc">
                        Precision surgical care utilizing minimally invasive techniques for complex kidney and pelvic conditions.
                    </p>
                    <ul class="service-bullets">
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Laparoscopic Radical & Partial Nephrectomy</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Laparoscopic Pyeloplasty for PUJ Obstruction</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Robotic-assisted pelvic and renal reconstructions</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Service Card 4 --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="250">
                <div class="service-icon-wrapper">
                    <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                    </svg>
                </div>
                <div class="service-content">
                    <span class="service-tag">Uro-Oncology</span>
                    <h3 class="service-card-title">Urological Cancer Care</h3>
                    <p class="service-card-desc">
                        Multidisciplinary surgical management for malignant tumors of the genitourinary system.
                    </p>
                    <ul class="service-bullets">
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Bladder Cancer: TURBT & Radical Cystectomy</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Renal Cell Carcinoma (Kidney Cancer) Resection</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Testicular & Penile Cancer Surgeries</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Service Card 5 --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon-wrapper">
                    <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 8v8M8 12h8"></path>
                    </svg>
                </div>
                <div class="service-content">
                    <span class="service-tag">Reconstructive Surgery</span>
                    <h3 class="service-card-title">Stricture & Reconstructive Urology</h3>
                    <p class="service-card-desc">
                        Specialized reconstructive surgical techniques for urethral strictures and traumatic injuries.
                    </p>
                    <ul class="service-bullets">
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Urethroplasty:</strong> Anastomotic & Buccal Mucosal Graft (BMG)</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Optical Internal Urethrotomy (OIU)</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Ureteral Reimplantation & Reconstruction</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Service Card 6 --}}
            <div class="service-card" data-aos="fade-up" data-aos-delay="350">
                <div class="service-icon-wrapper">
                    <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div class="service-content">
                    <span class="service-tag">Men's & General Health</span>
                    <h3 class="service-card-title">Andrology & General Urology</h3>
                    <p class="service-card-desc">
                        Targeted treatment for male reproductive health, infertility, urinary infections, and voiding dysfunction.
                    </p>
                    <ul class="service-bullets">
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Evaluation & Treatment of Male Infertility & Erectile Dysfunction</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Varicocele Repair (Microscopic / Laparoscopic)</span>
                        </li>
                        <li>
                            <svg class="bullet-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Recurrent Urinary Tract Infections (UTI) Management</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- Integrated CTA Block --}}
<section class="services-cta-section">
    <div class="cta-container" data-aos="fade-up">
        <div class="cta-content">
            <span class="cta-badge">Consultation & Care</span>
            <h2 class="cta-title">Need Expert Advice for Your Urological Condition?</h2>
            <p class="cta-description">
                Book a consultation with Dr. Mriganka Deuri at Down Town Hospital, Guwahati, for accurate diagnosis and personalized surgical treatment.
            </p>
        </div>
        <div class="cta-actions">
            <a href="#appointment-form" class="cta-btn primary-btn">
                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span>Book Appointment</span>
            </a>
            <a href="tel:+919876543210" class="cta-btn secondary-btn">
                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>Call Hospital</span>
            </a>
        </div>
    </div>
</section>

<style>
    /* ===================================
   SERVICES PAGE STYLES (NON-WHITE THEME)
=================================== */

:root {
    --teal-dark: #0f4c5c;
    --teal-primary: #007a87;
    --teal-accent: #00a896;
    --teal-light: #d1f2eb;
    --teal-bg-top: #edf7f6;
    --teal-bg-bottom: #e2f2f0;
    --teal-card-bg: #f5fbfb;
    --text-dark: #111827;
    --text-muted: #374151;
    --border-subtle: #bce3de;
}

body {
    font-family: 'Poppins', 'Segoe UI', system-ui, sans-serif;
}

/* Hero Banner */
.services-hero-section {
    padding: 72px 24px 48px;
    background: linear-gradient(180deg, var(--teal-dark) 0%, #135d70 100%);
    color: #ffffff;
    text-align: center;
}

.services-hero-container {
    max-width: 800px;
    margin: 0 auto;
}

.services-badge {
    display: inline-block;
    padding: 6px 18px;
    background: rgba(0, 168, 150, 0.25);
    border: 1px solid rgba(128, 237, 153, 0.4);
    border-radius: 999px;
    color: #80ed99;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 16px;
}

.services-hero-title {
    margin: 0 0 16px;
    font-size: clamp(30px, 4vw, 44px);
    font-weight: 700;
    line-height: 1.2;
}

.services-hero-desc {
    margin: 0;
    font-size: 16.5px;
    line-height: 1.7;
    color: #d1f2eb;
}

/* Main Services Grid Area */
.services-grid-section {
    padding: 80px 24px;
    background: linear-gradient(180deg, var(--teal-bg-top) 0%, var(--teal-bg-bottom) 100%);
}

.services-container {
    max-width: 1140px;
    margin: 0 auto;
}

.services-header {
    text-align: center;
    margin-bottom: 56px;
}

.services-main-title {
    margin: 0 0 10px;
    color: var(--teal-dark);
    font-size: clamp(26px, 3.2vw, 36px);
    font-weight: 700;
}

.services-sub-title {
    margin: 0;
    color: var(--text-muted);
    font-size: 16px;
}

.services-underline {
    display: block;
    width: 72px;
    height: 4px;
    background: linear-gradient(90deg, var(--teal-accent), var(--teal-primary));
    border-radius: 4px;
    margin: 16px auto 0;
}

/* Grid Layout */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
}

/* Service Card */
.service-card {
    background: var(--teal-card-bg);
    border: 1px solid var(--border-subtle);
    border-top: 4px solid var(--teal-primary);
    border-radius: 14px;
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    box-shadow: 0 6px 18px rgba(15, 76, 92, 0.04);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.service-card:hover {
    background: #ffffff;
    border-top-color: var(--teal-accent);
    border-color: var(--teal-accent);
    box-shadow: 0 16px 32px rgba(15, 76, 92, 0.12);
    transform: translateY(-6px);
}

/* Icon Styling */
.service-icon-wrapper {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: var(--teal-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--teal-dark);
    transition: background 0.3s ease, color 0.3s ease;
}

.service-card:hover .service-icon-wrapper {
    background: var(--teal-accent);
    color: #ffffff;
}

.service-icon {
    width: 26px;
    height: 26px;
}

/* Card Typography & Badges */
.service-tag {
    display: inline-block;
    padding: 4px 12px;
    background: var(--teal-light);
    border-radius: 6px;
    color: var(--teal-dark);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 8px;
}

.service-card-title {
    margin: 0 0 10px;
    color: var(--text-dark);
    font-size: 20px;
    font-weight: 700;
    line-height: 1.3;
}

.service-card-desc {
    margin: 0 0 16px;
    color: var(--text-muted);
    font-size: 14.5px;
    line-height: 1.6;
}

/* Bullet Items inside Cards */
.service-bullets {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.service-bullets li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: var(--text-muted);
    font-size: 14px;
    line-height: 1.5;
}

.bullet-check {
    width: 17px;
    height: 17px;
    color: var(--teal-accent);
    flex-shrink: 0;
    margin-top: 2px;
}

.service-bullets strong {
    color: var(--teal-dark);
}

/* Page End CTA Section */
.services-cta-section {
    padding: 64px 24px;
    background: var(--teal-dark);
    color: #ffffff;
}

.services-cta-section .cta-container {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    flex-wrap: wrap;
}

.services-cta-section .cta-content {
    max-width: 650px;
}

.services-cta-section .cta-title {
    margin: 8px 0 12px;
    font-size: clamp(24px, 3vw, 32px);
    font-weight: 700;
}

.services-cta-section .cta-description {
    margin: 0;
    color: #d1f2eb;
    font-size: 15px;
    line-height: 1.6;
}

.services-cta-section .cta-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
}

.services-cta-section .cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 22px;
    border-radius: 8px;
    font-size: 14.5px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.services-cta-section .primary-btn {
    background: var(--teal-accent);
    color: #ffffff;
}

.services-cta-section .primary-btn:hover {
    background: #00bfaa;
    transform: translateY(-2px);
}

.services-cta-section .secondary-btn {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.services-cta-section .secondary-btn:hover {
    background: rgba(255, 255, 255, 0.2);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .services-hero-section {
        padding: 52px 16px 36px;
    }

    .services-grid-section {
        padding: 56px 16px;
    }

    .services-grid {
        grid-template-columns: 1fr;
    }

    .services-cta-section .cta-container {
        flex-direction: column;
        align-items: flex-start;
    }
}
    </style>

    @endsection