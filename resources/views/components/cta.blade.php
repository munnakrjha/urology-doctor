{{-- AOS Library (Animate On Scroll) CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

{{-- =====================================================
     SCHEDULE CONSULTATION CTA SECTION WITH ANIMATED BG
====================================================== --}}

<section class="schedule-cta-section" id="schedule-consultation">

    {{-- Animated Background Canvas Elements --}}
    <div class="animated-bg">
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
        <div class="grid-overlay"></div>
    </div>

    <div class="schedule-cta-container">

        <div class="schedule-cta-content" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">

            {{-- Main Heading --}}
            <h2 class="schedule-cta-title">
                SCHEDULE YOUR CONSULTATION TODAY
            </h2>

            {{-- Subtitle Paragraph --}}
            <p class="schedule-cta-text">
                Take the first step toward expert urologic care with confidence. Whether you need a consultation, second opinion, or advanced endoscopic laser stone and minimally invasive treatment options, our team is here to support you with compassionate, patient-focused care.
            </p>

            {{-- Centered Action Button --}}
            <div class="schedule-cta-action">
                <a href="#appointment" class="schedule-btn" data-aos="flip-up" data-aos-delay="200" data-aos-duration="800">
                    Book Appointment
                </a>
            </div>

        </div>

    </div>

</section>


<style>
/* ===================================
   SCHEDULE CTA SECTION STYLES
=================================== */

.schedule-cta-section {
    --navy:    #14324d;
    --ink:     #3d5165;
    --muted:   #5c7286;
    --accent:  #1d7fae;
    --bg-light:#f8fafc;

    position: relative;
    padding: 90px 0;
    background-color: var(--bg-light);
    font-family: 'Poppins', 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: hidden;
}

.schedule-cta-container {
    position: relative;
    z-index: 2;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 24px;
    perspective: 1200px;
}

.schedule-cta-content {
    text-align: center;
    max-width: 960px;
    margin: 0 auto;
    backface-visibility: hidden;
}

/* Heading Typography */
.schedule-cta-title {
    margin: 0 0 20px 0;
    color: var(--navy);
    font-size: clamp(26px, 3.2vw, 38px);
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    line-height: 1.25;
}

/* Paragraph Typography */
.schedule-cta-text {
    margin: 0 auto 36px auto;
    color: var(--ink);
    font-size: clamp(15px, 1.3vw, 17px);
    line-height: 1.75;
    max-width: 860px;
    font-weight: 400;
}

/* Button Wrapper & Action Button */
.schedule-cta-action {
    display: flex;
    justify-content: center;
}

.schedule-btn {
    display: inline-block;
    padding: 14px 38px;
    background-color: #ffffff;
    color: var(--navy);
    border: 2px solid var(--navy);
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(20, 50, 77, 0.08);
    backface-visibility: hidden;
}

.schedule-btn:hover {
    background-color: var(--navy);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(20, 50, 77, 0.2);
}

/* ===================================
   BACKGROUND ANIMATIONS
=================================== */

.animated-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
}

.grid-overlay {
    position: absolute;
    inset: 0;
    opacity: 0.35;
    background-image: 
        radial-gradient(circle at 1px 1px, #cbd5e1 1px, transparent 0);
    background-size: 28px 28px;
}

.floating-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.45;
    animation: floatAnimation 12s infinite ease-in-out alternate;
}

.orb-1 {
    width: 260px;
    height: 260px;
    background: #cbd5e1;
    top: -40px;
    left: -50px;
    animation-duration: 14s;
}

.orb-2 {
    width: 320px;
    height: 320px;
    background: #bae6fd;
    bottom: -60px;
    right: -60px;
    animation-duration: 10s;
    animation-delay: -3s;
}

.orb-3 {
    width: 200px;
    height: 200px;
    background: #e2e8f0;
    top: 30%;
    left: 45%;
    animation-duration: 16s;
    animation-delay: -6s;
}

@keyframes floatAnimation {
    0% {
        transform: translate(0, 0) scale(1);
    }
    50% {
        transform: translate(30px, -25px) scale(1.08);
    }
    100% {
        transform: translate(-20px, 20px) scale(0.95);
    }
}

/* ===================================
   RESPONSIVE DESIGN
=================================== */

@media (max-width: 768px) {
    .schedule-cta-section {
        padding: 60px 0;
    }

    .schedule-cta-text {
        margin-bottom: 28px;
    }

    .schedule-btn {
        width: 100%;
        max-width: 300px;
        text-align: center;
        padding: 13px 24px;
    }

    .floating-orb {
        filter: blur(40px);
        opacity: 0.35;
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
                easing: 'ease-in-out',
                once: true,
                offset: 80
            });
        }
    });
</script>