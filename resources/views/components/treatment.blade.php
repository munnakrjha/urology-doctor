{{-- =====================================================
     COMPREHENSIVE TREATMENT OPTIONS SECTION (DARK THEME)
====================================================== --}}

<section class="treat-section" id="treatment-options">
    
    {{-- Background Dotted Grid Overlay --}}
    <div class="treat-bg-pattern"></div>

    <div class="treat-container">

        {{-- Section Header --}}
        <div class="treat-header">
            <span class="treat-subtitle">Our Specializations</span>
            <h2 class="treat-title">Comprehensive Treatment Options</h2>
            <p class="treat-desc">
                From kidney stones to robotic cancer surgery — advanced care for every urological condition.
            </p>
        </div>

        {{-- Grid Cards --}}
        <div class="treat-grid">

            {{-- Card 1 --}}
            <div class="treat-card">
                <div class="treat-icon-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 3"/>
                    </svg>
                </div>
                <h3 class="treat-card-title">Kidney Stone Treatment</h3>
                <p class="treat-card-desc">PCNL, RIRS, ESWL, & Laser Stone Fragmentation.</p>
                <a href="#book-appointment" class="treat-btn">Know More</a>
            </div>

            {{-- Card 2 --}}
            <div class="treat-card">
                <div class="treat-icon-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="treat-card-title">Prostate Treatment</h3>
                <p class="treat-card-desc">TURP, HoLEP, GreenLight Laser, & Robotic Prostatectomy.</p>
                <a href="#book-appointment" class="treat-btn">Know More</a>
            </div>

            {{-- Card 3 --}}
            <div class="treat-card">
                <div class="treat-icon-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <h3 class="treat-card-title">Kidney Cancer</h3>
                <p class="treat-card-desc">Nephron-sparing surgery, radical nephrectomy.</p>
                <a href="#book-appointment" class="treat-btn">Know More</a>
            </div>

            {{-- Card 4 --}}
            <div class="treat-card">
                <div class="treat-icon-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M9 12h6"/>
                    </svg>
                </div>
                <h3 class="treat-card-title">Bladder Cancer Treatment</h3>
                <p class="treat-card-desc">TURBT, radical cystectomy, & reconstructive surgery.</p>
                <a href="#book-appointment" class="treat-btn">Know More</a>
            </div>

            {{-- Card 5 --}}
            <div class="treat-card">
                <div class="treat-icon-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <h3 class="treat-card-title">Testicular Cancer Surgery</h3>
                <p class="treat-card-desc">Expert cancer care with fertility preservation.</p>
                <a href="#book-appointment" class="treat-btn">Know More</a>
            </div>

            {{-- Card 6 --}}
            <div class="treat-card">
                <div class="treat-icon-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.72-8.72 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3 class="treat-card-title">VVF & UVF Fistula</h3>
                <p class="treat-card-desc">Advanced repair surgery and recovery.</p>
                <a href="#book-appointment" class="treat-btn">Know More</a>
            </div>

        </div>

    </div>

</section>
<style>
    /* ===================================
   DARK COMPREHENSIVE SECTION
=================================== */

.treat-section {
    position: relative;
    padding: 90px 0;
    background-color: #0b1f31; /* Deep Navy Dark Background */
    color: #ffffff;
    overflow: hidden;
    font-family: 'Poppins', 'Segoe UI', sans-serif;
}

/* Background Subtle Dot Grid */
.treat-bg-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1.2px, transparent 1.2px);
    background-size: 24px 24px;
    pointer-events: none;
}

.treat-container {
    position: relative;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    z-index: 2;
}

/* Header */
.treat-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 56px;
}

.treat-subtitle {
    font-size: 13px;
    font-weight: 700;
    color: #00b4d8;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: block;
    margin-bottom: 8px;
}

.treat-title {
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
    margin: 0 0 14px;
}

.treat-desc {
    font-size: 15px;
    color: #94a3b8;
    line-height: 1.6;
    margin: 0;
}

/* Grid Layout */
.treat-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}

/* -----------------------------------
   CARD NORMAL STATE
----------------------------------- */

.treat-card {
    background: rgba(255, 255, 255, 0.03); /* Translucent Glass Effect */
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: 36px 24px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    transition: all 0.35s ease;
}

.treat-icon-box {
    color: #ffffff;
    margin-bottom: 20px;
    opacity: 0.9;
    transition: transform 0.35s ease, color 0.35s ease;
}

.treat-card-title {
    font-size: 18px;
    font-weight: 600;
    color: #ffffff;
    margin: 0 0 10px;
    line-height: 1.3;
}

.treat-card-desc {
    font-size: 13px;
    color: #94a3b8;
    line-height: 1.5;
    margin: 0 0 24px;
}

/* Know More Button (Normal State) */
.treat-btn {
    display: inline-block;
    padding: 8px 22px;
    font-size: 13px;
    font-weight: 600;
    color: #ffffff;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 6px;
    background: transparent;
    transition: all 0.35s ease;
}

/* -----------------------------------
   HOVER STATE (EXACT MATCH TO SCREENSHOT)
----------------------------------- */

.treat-card:hover {
    background: rgba(14, 42, 67, 0.8);
    border: 1.5px solid #00b4d8; /* Bright Cyan-Blue Border Glow */
    box-shadow: 0 0 25px rgba(0, 180, 216, 0.25), inset 0 0 15px rgba(0, 180, 216, 0.1);
    transform: translateY(-5px);
}

.treat-card:hover .treat-icon-box {
    color: #00b4d8; /* Icon Glows Cyan Blue */
    transform: scale(1.08);
}

.treat-card:hover .treat-btn {
    background: #00b4d8; /* Button Fills Solid Blue on Hover */
    border-color: #00b4d8;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 180, 216, 0.4);
}

/* -----------------------------------
   RESPONSIVE DESIGN
----------------------------------- */

@media (max-width: 1024px) {
    .treat-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }
}

@media (max-width: 640px) {
    .treat-section {
        padding: 60px 0;
    }

    .treat-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
    </style>