{{-- =====================================================
     PERSONAL DOCTOR CONSULTATION & DIRECT CTA SECTION
====================================================== --}}

<section class="personal-cta-section">
    <div class="personal-cta-container" data-aos="fade-up">

        {{-- Left Content Column --}}
        <div class="personal-cta-content">
            <span class="personal-cta-badge">Direct Expert Consultation</span>
            <h2 class="personal-cta-title">Prioritize Your Urological Health with Dedicated Specialist Care</h2>
            <p class="personal-cta-desc">
                Whether seeking an initial diagnosis, a expert second opinion on surgical options, or ongoing care management, schedule a direct personal consultation with Dr. Mriganka Deuri.
            </p>

            {{-- Trust & Service Highlights --}}
            <div class="personal-cta-grid">
                <div class="personal-cta-card-mini">
                    <div class="mini-icon-box">
                        <svg class="mini-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="mini-title">Strict Confidentiality</h4>
                        <p class="mini-desc">Discreet evaluation for sensitive and andrological conditions.</p>
                    </div>
                </div>

                <div class="personal-cta-card-mini">
                    <div class="mini-icon-box">
                        <svg class="mini-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <div>
                        <h4 class="mini-title">Surgical Second Opinion</h4>
                        <p class="mini-desc">Review previous reports & explore minimally invasive options.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Consultation Action Panel --}}
        <div class="personal-cta-panel">
            <div class="panel-header">
                <div class="doctor-avatar-placeholder">
                    <svg class="avatar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div>
                    <h3 class="panel-doctor-name">Dr. Mriganka Deuri</h3>
                    <p class="panel-doctor-title">Consultant Urologist & Endourologist</p>
                </div>
            </div>

            <hr class="panel-divider">

            <div class="panel-body">
                <div class="location-badge">
                    <svg class="loc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span>Down Town Hospital & Private OPD, Guwahati</span>
                </div>

                <div class="panel-actions">
                    <a href="#appointment-booking" class="action-btn primary-action">
                        <svg class="btn-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Book Clinic Consultation</span>
                    </a>

                    <a href="https://wa.me/919876543210?text=Hello%20Dr.%20Mriganka%20Deuri,%20I%20would%20like%20to%20inquire%20about%20a%20consultation." target="_blank" class="action-btn whatsapp-action">
                        <svg class="btn-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span>Quick Query on WhatsApp</span>
                    </a>
                </div>

                <p class="panel-footnote">
                    <svg class="shield-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span>Direct responses managed by Dr. Deuri's clinical desk.</span>
                </p>
            </div>
        </div>

    </div>
</section>
<style>

    /* ===================================
   PERSONAL BRAND DOCTOR CTA STYLES
=================================== */

.personal-cta-section {
    padding: 80px 24px;
    background: linear-gradient(135deg, #0a3641 0%, #0f4c5c 60%, #135d70 100%);
    color: #ffffff;
    position: relative;
    font-family: 'Poppins', 'Segoe UI', system-ui, sans-serif;
}

.personal-cta-container {
    max-width: 1140px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 48px;
    align-items: center;
}

/* Left Content Column */
.personal-cta-badge {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(128, 237, 153, 0.15);
    border: 1px solid rgba(128, 237, 153, 0.35);
    border-radius: 999px;
    color: #80ed99;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 18px;
}

.personal-cta-title {
    margin: 0 0 16px;
    font-size: clamp(28px, 3.2vw, 38px);
    font-weight: 700;
    line-height: 1.25;
    color: #ffffff;
}

.personal-cta-desc {
    margin: 0 0 32px;
    font-size: 16px;
    line-height: 1.7;
    color: #d1f2eb;
}

/* Mini Feature Cards */
.personal-cta-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
}

.personal-cta-card-mini {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 12px;
    padding: 18px;
    display: flex;
    gap: 14px;
    align-items: flex-start;
    backdrop-filter: blur(4px);
}

.mini-icon-box {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: rgba(0, 168, 150, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #80ed99;
}

.mini-icon {
    width: 20px;
    height: 20px;
}

.mini-title {
    margin: 0 0 4px;
    font-size: 15px;
    font-weight: 600;
    color: #ffffff;
}

.mini-desc {
    margin: 0;
    font-size: 13px;
    line-height: 1.45;
    color: #bce3de;
}

/* Right Consultation Action Panel */
.personal-cta-panel {
    background: #ffffff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 24px 48px rgba(0, 0, 0, 0.25);
    color: #111827;
}

.panel-header {
    display: flex;
    align-items: center;
    gap: 16px;
}

.doctor-avatar-placeholder {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #edf7f6;
    border: 2px solid #00a896;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0f4c5c;
    flex-shrink: 0;
}

.avatar-icon {
    width: 28px;
    height: 28px;
}

.panel-doctor-name {
    margin: 0 0 2px;
    font-size: 20px;
    font-weight: 700;
    color: #0f4c5c;
}

.panel-doctor-title {
    margin: 0;
    font-size: 13.5px;
    color: #4b5563;
    font-weight: 500;
}

.panel-divider {
    border: 0;
    height: 1px;
    background: #e5e7eb;
    margin: 20px 0;
}

.location-badge {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #edf7f6;
    border: 1px solid #bce3de;
    padding: 10px 14px;
    border-radius: 8px;
    color: #0f4c5c;
    font-size: 13.5px;
    font-weight: 600;
    margin-bottom: 20px;
}

.loc-icon {
    width: 18px;
    height: 18px;
    color: #007a87;
    flex-shrink: 0;
}

.panel-actions {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 20px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-svg {
    width: 19px;
    height: 19px;
}

.primary-action {
    background: #007a87;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 122, 135, 0.25);
}

.primary-action:hover {
    background: #0f4c5c;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(15, 76, 92, 0.3);
}

.whatsapp-action {
    background: #25d366;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.2);
}

.whatsapp-action:hover {
    background: #1eb757;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(37, 211, 102, 0.3);
}

.panel-footnote {
    margin: 18px 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-size: 12.5px;
    color: #6b7280;
    text-align: center;
}

.shield-icon {
    width: 15px;
    height: 15px;
    color: #00a896;
    flex-shrink: 0;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .personal-cta-container {
        grid-template-columns: 1fr;
        gap: 36px;
    }
}

@media (max-width: 576px) {
    .personal-cta-section {
        padding: 56px 16px;
    }

    .personal-cta-panel {
        padding: 24px 20px;
    }

    .personal-cta-grid {
        grid-template-columns: 1fr;
    }
}
    </style>