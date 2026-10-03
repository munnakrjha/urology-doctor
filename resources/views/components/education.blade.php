{{-- =====================================================
     ENHANCED TIMELINE BIOGRAPHY SECTION (HEALTH BACKGROUND)
====================================================== --}}

<section class="doctor-timeline-section">
    <div class="timeline-container">

        {{-- Section Header --}}
        <div class="timeline-header" data-aos="fade-up">
            <span class="timeline-badge">Academic & Clinical Journey</span>
            <h2 class="timeline-main-title">A Career Built Across India’s Premier Medical Institutions</h2>
            <span class="timeline-underline"></span>
        </div>

        {{-- Timeline List --}}
        <div class="timeline-list">

            {{-- Timeline Item 1: Current Role --}}
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-node"></div>
                <div class="timeline-card">
                    <span class="timeline-meta-tag present">Present • Professional Experience</span>
                    <h3 class="timeline-item-title">Down Town Hospital, Guwahati</h3>
                    <p class="timeline-item-role">Consultant Urologist - Department of Urology</p>
                    <p class="timeline-item-desc">
                        Proactive and organized medical professional with a passionate commitment to first-rate patient care. Leads clinical and surgical cases in advanced urological care.
                    </p>
                </div>
            </div>

            {{-- Timeline Item 2: Fellowship --}}
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="150">
                <div class="timeline-node"></div>
                <div class="timeline-card">
                    <span class="timeline-meta-tag">Fellowship Program</span>
                    <h3 class="timeline-item-title">Robotic & Endoscopic Urology</h3>
                    <p class="timeline-item-role">Specialized Clinical Fellowship</p>
                    <p class="timeline-item-desc">
                        Advanced hands-on expertise in minimally invasive surgeries, including Endourology (RIRS, PCNL, TURP), renal transplantation, and robotic-assisted urological procedures.
                    </p>
                </div>
            </div>

            {{-- Timeline Item 3: MCh Urology --}}
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-node"></div>
                <div class="timeline-card">
                    <span class="timeline-meta-tag">M.Ch Urology • Vijayawada</span>
                    <h3 class="timeline-item-title">Dr. PSIMS & RF, Vijayawada</h3>
                    <p class="timeline-item-role">Super Specialization in Urology</p>
                    <p class="timeline-item-desc">
                        Completed residency training while actively assisting and performing complex urological surgeries. Authored thesis on <em>"Comparison of USG Guided Percutaneous Suprapubic Cystolithotripsy (PCCL) vs Transurethral Cystolithotripsy (TUCL)"</em>.
                    </p>
                </div>
            </div>

            {{-- Timeline Item 4: DNB General Surgery --}}
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="250">
                <div class="timeline-node"></div>
                <div class="timeline-card">
                    <span class="timeline-meta-tag">DNB General Surgery • New Delhi</span>
                    <h3 class="timeline-item-title">Northern Railway Central Hospital, New Delhi</h3>
                    <p class="timeline-item-role">Diplomate of National Board in Surgical Care</p>
                    <p class="timeline-item-desc">
                        Underwent extensive post-graduate surgical residency delivering acute care, general surgical procedures, and emergency trauma management.
                    </p>
                </div>
            </div>

            {{-- Timeline Item 5: MBBS --}}
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-node"></div>
                <div class="timeline-card">
                    <span class="timeline-meta-tag">MBBS • Guwahati, Assam</span>
                    <h3 class="timeline-item-title">Gauhati Medical College (GMCH), Guwahati</h3>
                    <p class="timeline-item-role">Bachelor of Medicine & Bachelor of Surgery</p>
                    <p class="timeline-item-desc">
                        Completed foundational medical degree followed by a comprehensive rotational internship in clinical and surgical medicine.
                    </p>
                </div>
            </div>

            {{-- Timeline Item 6: Research & Achievements --}}
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="350">
                <div class="timeline-node"></div>
                <div class="timeline-card">
                    <span class="timeline-meta-tag achievement">Achievements & Research</span>
                    <h3 class="timeline-item-title">Research, Seminars & Key Awards</h3>
                    <p class="timeline-item-role">Academic & Scientific Contributions</p>
                    <ul class="timeline-bullets">
                        <li>
                            <svg class="bullet-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Published <strong>8 research papers</strong> in peer-reviewed international medical journals.</span>
                        </li>
                        <li>
                            <svg class="bullet-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Awarded <strong>1st Prize in Poster Presentation</strong> at SOGUS conference.</span>
                        </li>
                        <li>
                            <svg class="bullet-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Participated actively in numerous National & International Urological Seminars & Workshops.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
/* ===================================
   ENHANCED TIMELINE SECTION (NON-WHITE THEME)
=================================== */

.doctor-timeline-section {
    padding: 88px 24px;
    /* Rich Medical Teal Subdued Gradient Background */
    background: linear-gradient(180deg, #edf7f6 0%, #e2f2f0 100%);
    --teal-dark: #0f4c5c;
    --teal-primary: #007a87;
    --teal-accent: #00a896;
    --teal-light: #d1f2eb;
    --teal-card-bg: #f5fbfb;
    --text-dark: #111827;
    --text-muted: #374151;
    --border-subtle: #bce3de;
    font-family: 'Poppins', 'Segoe UI', system-ui, sans-serif;
}

.timeline-container {
    max-width: 900px;
    margin: 0 auto;
}

/* Header */
.timeline-header {
    text-align: center;
    margin-bottom: 64px;
}

.timeline-badge {
    display: inline-block;
    padding: 6px 18px;
    background: #ffffff;
    border: 1px solid var(--border-subtle);
    border-radius: 999px;
    color: var(--teal-primary);
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 12px;
    box-shadow: 0 2px 8px rgba(15, 76, 92, 0.06);
}

.timeline-main-title {
    margin: 0;
    color: var(--teal-dark);
    font-size: clamp(26px, 3.2vw, 38px);
    font-weight: 700;
    line-height: 1.25;
}

.timeline-underline {
    display: block;
    width: 72px;
    height: 4px;
    background: linear-gradient(90deg, var(--teal-accent), var(--teal-primary));
    border-radius: 4px;
    margin: 16px auto 0;
}

/* Vertical Timeline Track */
.timeline-list {
    position: relative;
    padding-left: 36px;
}

/* Continuous Vertical Connecting Line */
.timeline-list::before {
    content: '';
    position: absolute;
    top: 8px;
    bottom: 8px;
    left: 9px;
    width: 3px;
    background: linear-gradient(180deg, var(--teal-accent) 0%, var(--border-subtle) 85%);
}

.timeline-item {
    position: relative;
    padding-bottom: 36px;
}

.timeline-item:last-child {
    padding-bottom: 0;
}

/* Node with Highlight Effect */
.timeline-node {
    position: absolute;
    left: -36px;
    top: 6px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--teal-dark);
    border: 4px solid #edf7f6;
    box-shadow: 0 0 0 2px var(--teal-dark), 0 4px 10px rgba(15, 76, 92, 0.2);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 2;
}

.timeline-item:hover .timeline-node {
    background: var(--teal-accent);
    border-color: #edf7f6;
    box-shadow: 0 0 0 4px rgba(0, 168, 150, 0.3), 0 6px 14px rgba(0, 168, 150, 0.4);
    transform: scale(1.2);
}

/* Card Wrapper */
.timeline-card {
    background: var(--teal-card-bg);
    border: 1px solid var(--border-subtle);
    border-left: 4px solid var(--teal-dark);
    border-radius: 14px;
    padding: 24px 28px;
    box-shadow: 0 6px 18px rgba(15, 76, 92, 0.04);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.timeline-item:hover .timeline-card {
    background: #ffffff;
    border-left-color: var(--teal-accent);
    border-color: var(--teal-accent);
    box-shadow: 0 14px 30px rgba(15, 76, 92, 0.12);
    transform: translateX(6px);
}

/* Meta Pill Tags */
.timeline-meta-tag {
    display: inline-flex;
    align-items: center;
    padding: 4px 12px;
    background: var(--teal-light);
    border: 1px solid rgba(0, 122, 135, 0.25);
    border-radius: 6px;
    color: var(--teal-dark);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 10px;
}

.timeline-meta-tag.present {
    background: var(--teal-dark);
    color: #80ed99;
    border-color: var(--teal-dark);
}

.timeline-meta-tag.achievement {
    background: #ffedd5;
    color: #9a3412;
    border-color: #fed7aa;
}

.timeline-item-title {
    margin: 0 0 4px;
    color: var(--text-dark);
    font-size: 20px;
    font-weight: 700;
    line-height: 1.3;
}

.timeline-item-role {
    margin: 0 0 12px;
    color: var(--teal-primary);
    font-size: 15px;
    font-weight: 600;
}

.timeline-item-desc {
    margin: 0;
    color: var(--text-muted);
    font-size: 14.5px;
    line-height: 1.7;
}

/* Custom Styled Bullet Items */
.timeline-bullets {
    margin: 12px 0 0;
    padding: 0;
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.timeline-bullets li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: var(--text-muted);
    font-size: 14.5px;
    line-height: 1.6;
}

.bullet-icon {
    width: 18px;
    height: 18px;
    color: var(--teal-accent);
    flex-shrink: 0;
    margin-top: 3px;
}

.timeline-bullets strong {
    color: var(--teal-dark);
}

/* Responsive Scaling */
@media (max-width: 640px) {
    .doctor-timeline-section {
        padding: 56px 16px;
    }

    .timeline-list {
        padding-left: 24px;
    }

    .timeline-list::before {
        left: 5px;
    }

    .timeline-node {
        left: -24px;
        width: 14px;
        height: 14px;
        top: 8px;
    }

    .timeline-card {
        padding: 18px 20px;
    }

    .timeline-item-title {
        font-size: 17.5px;
    }
}
</style>