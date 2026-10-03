<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ===================================
   HERO SECTION STYLES
=================================== */

.hero {
    --navy: #14324d;
    --ink:  #3d5165;

    position: relative;
    min-height: calc(100vh - 88px);
    display: flex;
    align-items: center;
    overflow: hidden;
    padding-bottom: 120px;
    background: linear-gradient(105deg, #e4f1fa 0%, #ecf5fc 45%, #f5fafe 75%, #e7f2fa 100%);
    font-family: 'Poppins', 'Segoe UI', sans-serif;
}

.hero *,
.hero *::before,
.hero *::after { 
    box-sizing: border-box; 
}

/* -----------------------------------
   CONCENTRIC RING / RIPPLE PATTERN (EXACT MATCH)
----------------------------------- */

.hero-rings-pattern {
    position: absolute;
    top: -10%;
    right: -5%;
    width: 65vw;
    height: 120%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.65;
    background-image: radial-gradient(circle at 75% 35%, 
        transparent 0, 
        transparent 40px, 
        rgba(35, 137, 205, 0.12) 41px, 
        transparent 42px,
        transparent 80px, 
        rgba(35, 137, 205, 0.12) 81px, 
        transparent 82px,
        transparent 120px, 
        rgba(35, 137, 205, 0.12) 121px, 
        transparent 122px,
        transparent 160px, 
        rgba(35, 137, 205, 0.12) 161px, 
        transparent 162px,
        transparent 200px, 
        rgba(35, 137, 205, 0.12) 201px, 
        transparent 202px,
        transparent 240px, 
        rgba(35, 137, 205, 0.12) 241px, 
        transparent 242px,
        transparent 280px, 
        rgba(35, 137, 205, 0.12) 281px, 
        transparent 282px,
        transparent 320px, 
        rgba(35, 137, 205, 0.12) 321px, 
        transparent 322px
    );
}

/* Dot grid overlay inside rings */
.hero-dot-grid {
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.35;
    background-image: radial-gradient(#1d7fae 1.2px, transparent 1.2px);
    background-size: 18px 18px;
    mask-image: radial-gradient(circle at 80% 20%, rgba(0,0,0,1) 20%, rgba(0,0,0,0) 70%);
    -webkit-mask-image: radial-gradient(circle at 80% 20%, rgba(0,0,0,1) 20%, rgba(0,0,0,0) 70%);
}

/* -----------------------------------
   HERO CONTENT
----------------------------------- */

.hero-inner {
    position: relative;
    z-index: 3;
    width: 100%;
    padding-inline: clamp(24px, 5vw, 84px);
}

.hero-content { 
    max-width: 640px; 
}

.hero-title {
    margin: 0;
    color: var(--navy);
    font-size: clamp(36px, 4.2vw, 56px);
    font-weight: 500;
    line-height: 1.15;
    letter-spacing: -0.015em;
}

.hero-description {
    max-width: 580px;
    margin-top: 24px;
    color: var(--ink);
    font-size: clamp(15px, 1.25vw, 18px);
    line-height: 1.65;
    font-weight: 400;
}

.hero-credentials {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 18px;
    color: var(--navy);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .04em;
}

.hero-credentials i {
    font-style: normal;
    color: #7fb0cd;
    font-size: 16px;
}

/* -----------------------------------
   BUTTON
----------------------------------- */

.hero-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-top: 36px;
    padding: 13px 30px;
    background: #ffffff;
    border: 1.5px solid var(--navy);
    border-radius: 8px;
    color: var(--navy);
    font-family: inherit;
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(20, 50, 77, 0.05);
    transition: all 0.25s ease;
}

.hero-btn:hover {
    background: var(--navy);
    color: #ffffff;
    box-shadow: 0 12px 28px rgba(20, 50, 77, 0.22);
    transform: translateY(-2px);
}

/* -----------------------------------
   RIGHT MEDIA (CURVED SWEEP)
----------------------------------- */

.hero-media {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 54%;
    z-index: 2;
}

.hero-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    border-radius: 28% 0 0 28% / 50% 0 0 50%;
}

/* -----------------------------------
   FLOATING STATS CARD
----------------------------------- */

.hero-stats {
    position: absolute;
    left: 50%;
    bottom: clamp(20px, 3.5vh, 40px);
    transform: translateX(-50%);
    z-index: 4;
    display: flex;
    align-items: center;
    gap: clamp(32px, 5.5vw, 96px);
    padding: clamp(18px, 1.8vw, 26px) clamp(36px, 4.5vw, 84px);
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 20px 50px rgba(15, 43, 70, 0.12);
}

.hero-stat {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 6px;
}

.hero-stat-number {
    color: var(--navy);
    font-size: clamp(24px, 2vw, 34px);
    font-weight: 700;
    line-height: 1;
}

.hero-stat-number .star {
    font-style: normal;
    font-size: 0.85em;
    margin-left: 2px;
}

.hero-stat-label {
    color: #1c2b3a;
    font-size: clamp(12px, 0.9vw, 15px);
    font-weight: 600;
    line-height: 1.2;
}

/* -----------------------------------
   RESPONSIVE DESIGN
----------------------------------- */

@media (max-width: 1100px) {
    .hero-media { width: 50%; }
    .hero-content { max-width: 500px; }
}

@media (max-width: 860px) {
    .hero {
        display: block;
        min-height: auto;
        padding: 50px 0 30px;
    }

    .hero-media {
        position: relative;
        width: 100%;
        height: min(90vw, 460px);
        margin-top: 36px;
    }

    .hero-media img {
        border-radius: 40% 0 0 40% / 25% 0 0 25%;
    }

    .hero-stats {
        position: relative;
        left: auto;
        bottom: auto;
        transform: none;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px 40px;
        margin: -80px 20px 0;
        padding: 22px 24px;
        text-align: center;
    }

    .hero-stat { align-items: center; }
}

@media (max-width: 480px) {
    .hero { padding-top: 36px; }
    .hero-media { height: 100vw; }
    .hero-stats {
        gap: 16px 28px;
        margin: -40px 12px 0;
        padding: 18px 16px;
    }
    .hero-stat-label { font-size: 12px; }
}
</style>

<section class="hero">

    {{-- Concentric Circular Rings & Dot Pattern Background --}}
    <div class="hero-rings-pattern"></div>
    <div class="hero-dot-grid"></div>

    {{-- Left Content --}}
    <div class="hero-inner">
        <div class="hero-content">

            <h1 class="hero-title">
                Guwahati&rsquo;s Most Trusted
                Urologist &amp; Robotic Surgeon
            </h1>

            <p class="hero-description">
                Dr. Mriganka Deuri Bharali is a distinguished
                Urologist with expertise in complex urological
                procedures, robotic surgery, laser treatments,
                and comprehensive kidney care.
            </p>

            <div class="hero-credentials">
                <span>MCh Urology</span>
                <i>·</i>
                <span>DNB General Surgery</span>
            </div>

            <a href="/contact" class="hero-btn">
                Book Appointment
            </a>

        </div>
    </div>

    {{-- Right Curved Image --}}
    <div class="hero-media">
        <img
            src="{{ asset('images/doctor/drm.jpg') }}"
            alt="Dr. Mriganka Deuri Bharali, Consultant Urologist"
        >
    </div>

    {{-- Floating Stats Card --}}
    <div class="hero-stats">
        <div class="hero-stat">
            <span class="hero-stat-number">500+</span>
            <span class="hero-stat-label">Surgeries Performed</span>
        </div>
        <div class="hero-stat">
            <span class="hero-stat-number">10+</span>
            <span class="hero-stat-label">Experience</span>
        </div>
        <div class="hero-stat">
            <span class="hero-stat-number">4.9<span class="star">☆</span></span>
            <span class="hero-stat-label">Google Ratings</span>
        </div>
    </div>

</section>