@extends('layouts.app')

@section('title', 'Dr. Mriganka Deuri Bharali | Consultant Urologist')

@section('content')

{{-- AOS Library (Animate On Scroll) CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

{{-- =====================================================
     HERO BREADCRUMB BANNER
====================================================== --}}

<section class="about-hero-section">
    <div class="about-hero-container" data-aos="fade-up" data-aos-duration="800">
        <span class="hero-badge">Know Your Doctor</span>
        <h1 class="hero-title">About Dr. Mriganka Deuri Bharali</h1>
        <p class="hero-breadcrumb">
            <a href="/">Home</a> <span>/</span> About Doctor
        </p>
    </div>
</section>

{{-- =====================================================
     MAIN PROFILE & BIOGRAPHY SECTION
====================================================== --}}

<section class="about-detail-section">

    <div class="about-detail-container">

        <div class="about-detail-grid">

            {{-- Left Column: Doctor Photo Card --}}
            <div class="about-profile-card" data-aos="fade-right" data-aos-duration="900">

                <div class="profile-image-box">
                    <img src="{{ asset('images/doctor/dr_mriganka.webp') }}" alt="Dr. Mriganka Deuri Bharali" loading="lazy">
                </div>

                

            </div>

            {{-- Right Column: Biography & Background --}}
            <div class="about-bio-content" data-aos="fade-left" data-aos-duration="900">

                <div class="bio-block">
                    <span class="section-label">Medical Journey</span>
                    <h2 class="bio-heading">Dedicated Care with Advanced Precision</h2>
                    <span class="bio-underline"></span>

                    <p class="bio-text">
                        <strong>Dr. Mriganka Deuri Bharali</strong> is a highly skilled and distinguished <strong>Consultant Urologist</strong> with extensive clinical experience in diagnosing and treating complex urological disorders.
                    </p>

                    <p class="bio-text">
                        Specializing in advanced endoscopic laser procedures and minimally invasive urological surgeries, he is dedicated to providing evidence-based, compassionate, and patient-centric healthcare solutions aimed at faster recovery and minimal post-operative discomfort.
                    </p>
                </div>

                {{-- Education & Qualifications Grid --}}
                <div class="qualifications-block">
                    <h3 class="block-subtitle">Education & Qualifications</h3>

                    <div class="qualifications-grid">

                        <div class="degree-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="degree-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            </div>
                            <div>
                                <h4 class="degree-title">M.Ch. in Urology</h4>
                                <p class="degree-desc">Super Specialization in Advanced Urology & Endourology</p>
                            </div>
                        </div>

                        <div class="degree-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="degree-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 5v14"/></svg>
                            </div>
                            <div>
                                <h4 class="degree-title">DNB in General Surgery</h4>
                                <p class="degree-desc">Diplomate of National Board in Surgical Care</p>
                            </div>
                        </div>

                        <div class="degree-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="degree-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.8 2.3A.3.3 0 0 0 5 2h14a.3.3 0 0 1 .2.3V5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2.3z"/><path d="M8 21v-2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M18 11V6H6v5a6 6 0 0 0 12 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="degree-title">MBBS</h4>
                                <p class="degree-desc">Bachelor of Medicine & Bachelor of Surgery</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
@include('components.education')


{{-- =====================================================
     KEY EXPERTISE & SPECIALIZATIONS
====================================================== --}}

<section class="about-expertise-section">

    <div class="expertise-container">

        <div class="expertise-header" data-aos="fade-up" data-aos-duration="800">
            <span class="expertise-badge">Specializations</span>
            <h2 class="expertise-title">Key Areas of Clinical Focus</h2>
            <span class="expertise-underline"></span>
        </div>

        <div class="expertise-cards-grid">

            <div class="expertise-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3z"/></svg>
                </div>
                <h3 class="card-title">Kidney & Urinary Stones</h3>
                <p class="card-text">Advanced endoscopic laser stone treatment, RIRS, and PCNL procedures for painless stone removal.</p>
            </div>

            <div class="expertise-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m10 15 5-3-5-3v6z"/></svg>
                </div>
                <h3 class="card-title">Endoscopic Surgeries</h3>
                <p class="card-text">Minimally invasive endoscopic procedures for prostate (TURP), bladder tumors, and urethral strictures.</p>
            </div>

            <div class="expertise-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 class="card-title">Prostate & Bladder Care</h3>
                <p class="card-text">Comprehensive evaluation and treatment for enlarged prostate (BPH), urinary retention, and incontinence.</p>
            </div>

            <div class="expertise-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 2a2 2 0 0 0-2 2v5H4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h5v5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-5h5a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-5V4a2 2 0 0 0-2-2h-2z"/></svg>
                </div>
                <h3 class="card-title">Urological Trauma Care</h3>
                <p class="card-text">Emergency medical and surgical intervention for severe urological and kidney injuries.</p>
            </div>

            <div class="expertise-card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h6"/><path d="M12 9v6"/><circle cx="12" cy="12" r="10"/></svg>
                </div>
                <h3 class="card-title">Paediatric Urology</h3>
                <p class="card-text">Specialized diagnostic and surgical care for congenital urinary tract conditions in children.</p>
            </div>

            <div class="expertise-card" data-aos="fade-up" data-aos-delay="600">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"/><path d="m8.5 8.5 7 7"/></svg>
                </div>
                <h3 class="card-title">Andrology & Infertility</h3>
                <p class="card-text">Clinical management for male infertility, erectile dysfunction, and reproductive health.</p>
            </div>

        </div>

    </div>

</section>

@include('components.cta')




<style>
/* ===================================
   HEALTH & MEDICAL THEME VARIABLES
=================================== */

.about-hero-section,
.about-detail-section,
.about-expertise-section {
    --teal-dark:    #0f4c5c;
    --teal-primary: #007a87;
    --teal-accent:  #00a896;
    --teal-light:   #e8f8f5;
    --teal-subtle:  #f0faf9;
    --medical-blue: #028090;
    --text-dark:    #1c2d37;
    --text-muted:   #526b7a;
    --border-color: #c2ece6;

    font-family: 'Poppins', 'Segoe UI', system-ui, sans-serif;
}

/* Keyframe Animations */
@keyframes pulseGlow {
    0%, 100% { box-shadow: 0 0 15px rgba(0, 168, 150, 0.2); }
    50% { box-shadow: 0 0 30px rgba(0, 168, 150, 0.45); }
}

@keyframes floatBadge {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-4px); }
}

@keyframes pulseIcon {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.08); }
}

/* -----------------------------------
   HERO BANNER
----------------------------------- */

.about-hero-section {
    background: linear-gradient(135deg, var(--teal-dark) 0%, #082d37 100%);
    padding: 85px 24px 65px;
    text-align: center;
    color: #ffffff;
    position: relative;
    overflow: hidden;
}

.about-hero-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0, 168, 150, 0.12) 0%, transparent 60%);
    pointer-events: none;
}

.about-hero-container {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.hero-badge {
    display: inline-block;
    padding: 6px 18px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 999px;
    color: #80ed99;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 16px;
    animation: floatBadge 3s ease-in-out infinite;
}

.hero-title {
    margin: 0 0 12px;
    font-size: clamp(30px, 3.5vw, 48px);
    font-weight: 700;
    line-height: 1.2;
}

.hero-breadcrumb {
    margin: 0;
    color: #c7f9cc;
    font-size: 15px;
}

.hero-breadcrumb a {
    color: #ffffff;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.hero-breadcrumb a:hover {
    opacity: 0.85;
}

.hero-breadcrumb span {
    margin: 0 8px;
    opacity: 0.6;
}

/* -----------------------------------
   DETAIL SECTION
----------------------------------- */

.about-detail-section {
    padding: 96px 0;
    background: #ffffff;
}

.about-detail-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
}

.about-detail-grid {
    display: grid;
    grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr);
    gap: 60px;
    align-items: start;
}

/* Profile Left Card */
.about-profile-card {
    background: var(--teal-subtle);
    border: 2px solid var(--border-color);
    border-radius: 24px;
    padding: 24px;
    text-align: center;
    box-shadow: 0 16px 36px rgba(15, 76, 92, 0.06);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.about-profile-card:hover {
    background: #ffffff;
    border-color: var(--teal-accent);
    transform: translateY(-8px);
    animation: pulseGlow 3s infinite ease-in-out;
}

.profile-image-box {
    position: relative;
    width: 100%;
    aspect-ratio: 1 / 1.05;
    border-radius: 18px;
    overflow: hidden;
    border: 3px solid var(--teal-dark);
    background: var(--teal-dark);
}

.profile-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 15%;
    transition: transform 0.5s ease;
}

.about-profile-card:hover .profile-image-box img {
    transform: scale(1.05);
}

.profile-quick-info {
    margin-top: 24px;
}

.profile-name {
    margin: 0;
    color: var(--teal-dark);
    font-size: 22px;
    font-weight: 700;
}

.profile-designation {
    margin: 6px 0 16px;
    color: var(--teal-primary);
    font-size: 15px;
    font-weight: 600;
}

.profile-badges {
    display: flex;
    justify-content: center;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}

.badge-item {
    padding: 6px 14px;
    background: #ffffff;
    border: 1px solid var(--border-color);
    border-radius: 999px;
    color: var(--teal-dark);
    font-size: 12.5px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.about-profile-card:hover .badge-item {
    background: var(--teal-light);
    border-color: var(--teal-accent);
}

.profile-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 14px;
    background: var(--teal-dark);
    color: #ffffff;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.profile-cta-btn:hover {
    background: var(--teal-accent);
    box-shadow: 0 10px 24px rgba(0, 168, 150, 0.35);
    transform: translateY(-2px);
}

.profile-cta-btn svg {
    transition: transform 0.3s ease;
}

.profile-cta-btn:hover svg {
    transform: translateX(5px);
}

/* Bio Content Right */
.section-label {
    color: var(--teal-accent);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.bio-heading {
    margin: 8px 0 0;
    color: var(--teal-dark);
    font-size: clamp(26px, 2.8vw, 36px);
    font-weight: 700;
    line-height: 1.25;
}

.bio-underline {
    display: block;
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, var(--teal-accent), var(--teal-primary));
    border-radius: 4px;
    margin: 14px 0 24px;
}

.bio-text {
    margin: 0 0 18px;
    color: var(--text-muted);
    font-size: 16px;
    line-height: 1.8;
}

.bio-text strong {
    color: var(--teal-dark);
}

/* Qualifications Card Animations */
.qualifications-block {
    margin-top: 40px;
    padding-top: 32px;
    border-top: 1px solid #e5f2f0;
}

.block-subtitle {
    margin: 0 0 20px;
    color: var(--teal-dark);
    font-size: 20px;
    font-weight: 700;
}

.qualifications-grid {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.degree-card {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 18px 20px;
    background: var(--teal-subtle);
    border: 1.5px solid var(--border-color);
    border-radius: 14px;
    transition: all 0.3s ease;
}

.degree-card:hover {
    background: #ffffff;
    border-color: var(--teal-accent);
    transform: translateX(8px);
    box-shadow: 0 10px 24px rgba(0, 168, 150, 0.12);
}

.degree-card:hover .degree-icon {
    background: var(--teal-dark);
    color: #80ed99;
    animation: pulseIcon 0.8s ease;
}

.degree-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: var(--teal-light);
    color: var(--teal-primary);
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.degree-title {
    margin: 0;
    color: var(--teal-dark);
    font-size: 16.5px;
    font-weight: 600;
}

.degree-desc {
    margin: 4px 0 0;
    color: var(--text-muted);
    font-size: 13.5px;
}

/* -----------------------------------
   EXPERTISE SECTION & HEALTH CARDS
----------------------------------- */

.about-expertise-section {
    padding: 80px 0 96px;
    background: linear-gradient(180deg, var(--teal-subtle) 0%, #e1f4f0 100%);
}

.expertise-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
}

.expertise-header {
    text-align: center;
    margin-bottom: 56px;
}

.expertise-badge {
    display: inline-block;
    padding: 6px 16px;
    background: #ffffff;
    border: 1px solid var(--border-color);
    border-radius: 999px;
    color: var(--teal-primary);
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.expertise-title {
    margin: 0;
    color: var(--teal-dark);
    font-size: clamp(28px, 3vw, 40px);
    font-weight: 700;
}

.expertise-underline {
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--teal-accent), var(--teal-primary));
    border-radius: 4px;
    margin: 14px auto 0;
}

.expertise-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}

/* Card Hover Animations */
.expertise-card {
    background: #ffffff;
    border: 1.5px solid var(--border-color);
    border-radius: 20px;
    padding: 32px 24px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.expertise-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--teal-accent), var(--medical-blue));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.expertise-card:hover {
    background: var(--teal-dark);
    border-color: var(--teal-dark);
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(15, 76, 92, 0.25);
}

.expertise-card:hover::before {
    opacity: 1;
}

.expertise-card:hover .card-title {
    color: #ffffff;
}

.expertise-card:hover .card-text {
    color: #d1f2eb;
}

.expertise-card:hover .card-icon {
    background: rgba(255, 255, 255, 0.15);
    color: #80ed99;
    transform: rotate(5deg) scale(1.05);
}

.card-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: var(--teal-light);
    color: var(--teal-primary);
    margin-bottom: 20px;
    transition: all 0.35s ease;
}

.card-title {
    margin: 0 0 10px;
    color: var(--teal-dark);
    font-size: 18px;
    font-weight: 600;
    transition: color 0.35s ease;
}

.card-text {
    margin: 0;
    color: var(--text-muted);
    font-size: 14.5px;
    line-height: 1.65;
    transition: color 0.35s ease;
}

/* ===================================
   RESPONSIVE DESIGN
=================================== */

@media (max-width: 1024px) {
    .about-detail-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .about-profile-card {
        max-width: 480px;
        margin: 0 auto;
    }

    .expertise-cards-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .about-detail-section,
    .about-expertise-section {
        padding: 56px 0;
    }

    .expertise-cards-grid {
        grid-template-columns: 1fr;
    }
}
</style>

{{-- AOS Library JavaScript --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 60
            });
        }
    });
</script>
@include('components.footer')
@endsection
