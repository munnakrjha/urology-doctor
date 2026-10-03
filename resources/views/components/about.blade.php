{{-- AOS Library (Animate On Scroll) CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

{{-- =====================================================
     ABOUT SECTION
====================================================== --}}

<section class="about-section" id="about">

    <div class="about-container">

        <div class="about-grid">

            {{-- =========================================
                 LEFT — PHOTO (3D FLIP LEFT)
            ========================================== --}}

            <div class="about-photo-wrapper" 
                 data-aos="flip-left" 
                 data-aos-easing="ease-out-cubic" 
                 data-aos-duration="1000">

                <div class="about-photo">
                    {{-- Decorative Subtle Concentric Rings Behind Doctor --}}
                    <div class="about-photo-rings"></div>

                    <img
                        src="{{ asset('images/doctor/dr_mriganka.webp') }}"
                        alt="Dr. Mriganka Deuri Bharali, Consultant Urologist"
                    >
                </div>

            </div>


            {{-- =========================================
                 RIGHT — CONTENT
            ========================================== --}}

            <div class="about-content">

                <h2 class="about-name" data-aos="flip-up" data-aos-duration="700">
                    Dr. Mriganka Deuri Bharali
                </h2>

                <span class="about-underline" data-aos="zoom-in-right" data-aos-delay="150" data-aos-duration="600"></span>

                <h3 class="about-role" data-aos="flip-up" data-aos-delay="200" data-aos-duration="700">
                    Consultant Urologist
                </h3>

                <p class="about-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                    <strong>Dr. Mriganka Deuri Bharali</strong> is a
                    distinguished <strong>Consultant Urologist</strong> with
                    expertise in <strong>complex urological procedures</strong>,
                    <strong>robotic surgery</strong>, <strong>laser treatments</strong>,
                    and comprehensive <strong>kidney care</strong>.
                </p>

                <p class="about-text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="700">
                    He holds an <strong>M.Ch. in Urology</strong> and a
                    <strong>DNB in General Surgery</strong>, and specializes in
                    <strong>advanced endoscopic laser stone treatment</strong>,
                    <strong>endoscopic prostate and bladder surgeries</strong>,
                    and <strong>urological trauma care</strong> — offering
                    evidence-based treatment with a focus on precision, safety
                    and faster recovery.
                </p>

                {{-- Areas of Expertise --}}
                <p class="about-expertise-label" data-aos="flip-up" data-aos-delay="400" data-aos-duration="700">
                    Areas of Expertise
                </p>

                <ul class="about-expertise">

                    <li data-aos="flip-up" data-aos-delay="420" data-aos-duration="600">Treatment of kidney stones</li>
                    <li data-aos="flip-up" data-aos-delay="460" data-aos-duration="600">Urinary tract stones &amp; urinary retention</li>
                    <li data-aos="flip-up" data-aos-delay="500" data-aos-duration="600">Advanced endoscopic laser stone treatment</li>
                    <li data-aos="flip-up" data-aos-delay="540" data-aos-duration="600">Retrograde internal surgeries (RIRS)</li>
                    <li data-aos="flip-up" data-aos-delay="580" data-aos-duration="600">Urinary obstruction &amp; incontinence</li>
                    <li data-aos="flip-up" data-aos-delay="620" data-aos-duration="600">Impotence &amp; infertility care</li>
                    <li data-aos="flip-up" data-aos-delay="660" data-aos-duration="600">Advanced urological trauma care</li>
                    <li data-aos="flip-up" data-aos-delay="700" data-aos-duration="600">Endoscopic prostate &amp; bladder surgeries</li>
                    <li data-aos="flip-up" data-aos-delay="740" data-aos-duration="600">Paediatric urological problems</li>
                    <li data-aos="flip-up" data-aos-delay="780" data-aos-duration="600">Andrology</li>

                </ul>

                {{-- Credentials + CTA Button --}}
                <div class="about-footer" data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">

                    <div class="about-badges">
                        <span class="about-badge" data-aos="flip-right" data-aos-delay="850">MBBS</span>
                        <span class="about-badge" data-aos="flip-right" data-aos-delay="900">DNB — Gen. Surgery</span>
                        <span class="about-badge" data-aos="flip-right" data-aos-delay="950">MCh — Urology</span>
                    </div>

                    {{-- Know More Button --}}
                    <a href="/about" class="about-btn" data-aos="flip-up" data-aos-delay="1000">
                        Know More
                        <span class="btn-arrow">→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<style>
/* ===================================
   ABOUT SECTION
=================================== */

.about-section {
    --navy:   #14324d;
    --ink:    #3d5165;
    --muted:  #5c7286;
    --accent: #1d7fae;
    --frame:  #14324d;

    padding: 96px 0;

    /* Light Blue Background */
    background: #eaf3fa;

    font-family: 'Poppins', 'Segoe UI', sans-serif;
    overflow: hidden; /* Prevents horizontal scrollbar during 3D flip */
}

.about-container {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 24px;
    perspective: 1200px; /* Gives realistic 3D depth to flip animations */
}

.about-grid {
    display: grid;

    grid-template-columns:
        minmax(0, 0.92fr)
        minmax(0, 1.08fr);

    align-items: center;

    gap: clamp(40px, 6vw, 90px);
}


/* -----------------------------------
   PHOTO (DARK BLUE BACKGROUND & FRAME)
----------------------------------- */

.about-photo-wrapper {
    position: relative;
    perspective: 1000px;
}

.about-photo {
    position: relative;
    width: 100%;

    aspect-ratio: 1 / 1.02;

    overflow: hidden;

    border: 5px solid var(--frame);

    border-radius: 90px 28px 90px 28px;

    /* Dark Navy Blue Studio Gradient Background */
    background: radial-gradient(circle at 50% 35%, #1a4168 0%, #0c2338 75%, #071726 100%);
    box-shadow: 0 20px 45px rgba(12, 35, 56, 0.22);
    padding: 0;
}

/* Background Ring Details Inside Frame */
.about-photo-rings {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
    opacity: 0.25;
    background-image: radial-gradient(circle at 50% 30%, 
        transparent 0, 
        transparent 50px, 
        rgba(255, 255, 255, 0.15) 51px, 
        transparent 52px,
        transparent 100px, 
        rgba(255, 255, 255, 0.15) 101px, 
        transparent 102px,
        transparent 150px, 
        rgba(255, 255, 255, 0.15) 151px, 
        transparent 152px,
        transparent 200px, 
        rgba(255, 255, 255, 0.15) 201px, 
        transparent 202px
    );
}

.about-photo img {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 100%;

    object-fit: cover;
    object-position: center 15%;
    display: block;
}


/* -----------------------------------
   CONTENT
----------------------------------- */

.about-content { max-width: 640px; }

.about-name {
    margin: 0;

    color: var(--navy);

    font-size: clamp(32px, 3.4vw, 46px);
    font-weight: 600;

    line-height: 1.15;
    letter-spacing: -0.02em;
}

.about-underline {
    display: block;

    width: 150px;
    height: 3px;

    margin-top: 12px;

    background: var(--accent);

    border-radius: 3px;
}

.about-role {
    margin: 26px 0 0;

    color: var(--ink);

    font-size: clamp(18px, 1.6vw, 22px);
    font-weight: 700;
}

.about-text {
    margin: 22px 0 0;

    color: var(--muted);

    font-size: 16px;

    line-height: 1.8;
}

.about-text strong {
    color: var(--navy);

    font-weight: 700;
}


/* -----------------------------------
   EXPERTISE
----------------------------------- */

.about-expertise-label {
    margin: 34px 0 0;

    color: var(--navy);

    font-size: 15px;
    font-weight: 700;

    letter-spacing: 0.06em;

    text-transform: uppercase;
}

.about-expertise {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 10px 28px;

    margin: 16px 0 0;

    padding: 0;

    list-style: none;
}

.about-expertise li {
    position: relative;

    padding-left: 24px;

    color: var(--ink);

    font-size: 14.5px;

    line-height: 1.55;
}

.about-expertise li::before {
    content: '✓';

    position: absolute;

    left: 0;
    top: 1px;

    width: 16px;
    height: 16px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #cbe3f5;

    color: var(--navy);

    font-size: 10px;
    font-weight: 700;

    border-radius: 50%;
}


/* -----------------------------------
   FOOTER — BADGES + KNOW MORE CTA
----------------------------------- */

.about-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;

    gap: 20px 28px;

    margin-top: 40px;

    padding-top: 30px;

    border-top: 1px solid #d2e4f2;
}

.about-badges {
    display: flex;
    flex-wrap: wrap;

    gap: 10px;
}

.about-badge {
    padding: 9px 18px;

    background: #ffffff;

    border: 1px solid #bddbf0;

    border-radius: 999px;

    color: var(--navy);

    font-size: 13px;
    font-weight: 600;

    backface-visibility: hidden; /* Smooth flip rendering */
}

.about-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 12px 28px;

    background: var(--navy);

    border: 1.5px solid var(--navy);

    border-radius: 8px;

    color: #ffffff;

    font-size: 15px;
    font-weight: 500;

    text-decoration: none;

    transition:
        background 0.25s ease,
        color 0.25s ease,
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

.about-btn .btn-arrow {
    transition: transform 0.25s ease;
}

.about-btn:hover {
    background: #ffffff;

    color: var(--navy);

    transform: translateY(-2px);

    box-shadow: 0 12px 28px rgba(20, 50, 77, 0.15);
}

.about-btn:hover .btn-arrow {
    transform: translateX(4px);
}


/* ===================================
   TABLET & MOBILE RESPONSIVE
=================================== */

@media (max-width: 1024px) {
    .about-section { padding: 72px 0; }
    .about-grid { gap: 48px; }
    .about-photo-wrapper { max-width: 460px; margin: 0 auto; }
}

@media (max-width: 768px) {
    .about-section { padding: 56px 0; }
    .about-grid { grid-template-columns: 1fr; gap: 44px; }
    .about-photo { border-width: 4px; border-radius: 60px 20px 60px 20px; }
    .about-expertise { grid-template-columns: 1fr; }
    .about-footer { flex-direction: column; align-items: flex-start; }
    .about-btn { margin-left: 0; width: 100%; justify-content: center; }
}
</style>

{{-- AOS Library JavaScript --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 80
        });
    });
</script>