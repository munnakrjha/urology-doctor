{{-- =====================================================
     STATS SECTION
====================================================== --}}

<section class="stats-section">

    <div class="stats-container">

        <div class="stats-grid">

            {{-- Stat 1 --}}
            <div class="stat-card">

                <div class="stat-icon-wrapper">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>

                <div class="stat-info">
                    <span class="stat-count">5,000+</span>
                    <p class="stat-title">Successful Surgeries</p>
                    <span class="stat-desc">Specialized in minimally invasive &amp; robotic procedures</span>
                </div>

            </div>

            {{-- Stat 2 --}}
            <div class="stat-card">

                <div class="stat-icon-wrapper">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>

                <div class="stat-info">
                    <span class="stat-count">10+ Years</span>
                    <p class="stat-title">Clinical Experience</p>
                    <span class="stat-desc">Dedicated to advanced urological care in Guwahati</span>
                </div>

            </div>

            {{-- Stat 3 --}}
            <div class="stat-card">

                <div class="stat-icon-wrapper">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>

                <div class="stat-info">
                    <span class="stat-count">4.9 / 5.0</span>
                    <p class="stat-title">Patient Rating</p>
                    <span class="stat-desc">Based on verified Google reviews</span>
                </div>

            </div>

            {{-- Stat 4 --}}
            <div class="stat-card">

                <div class="stat-icon-wrapper">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>

                <div class="stat-info">
                    <span class="stat-count">10,000+</span>
                    <p class="stat-title">Happy Patients</p>
                    <span class="stat-desc">Comprehensive treatment for kidney &amp; bladder health</span>
                </div>

            </div>

        </div>

    </div>

</section>


<style>
/* ===================================
   STATS SECTION
=================================== */

.stats-section {
    --navy:   #14324d;
    --ink:    #3d5165;
    --muted:  #5c7286;
    --accent: #1d7fae;

    padding: 76px 0;

    background: linear-gradient(180deg, #f2f9fd 0%, #ffffff 100%);

    font-family: 'Poppins', 'Segoe UI', sans-serif;
}

.stats-container {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 24px;
}

.stats-grid {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 26px;
}


/* -----------------------------------
   CARD
----------------------------------- */

.stat-card {
    position: relative;

    display: flex;
    flex-direction: column;

    gap: 18px;

    padding: 30px 26px;

    background: #ffffff;

    border: 1px solid rgba(20, 50, 77, 0.07);
    border-radius: 16px;

    box-shadow: 0 14px 34px rgba(15, 43, 70, 0.06);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        border-color 0.3s ease;
}

/* accent line — grows in on hover */
.stat-card::before {
    content: '';

    position: absolute;

    top: 0;
    left: 26px;

    width: 0;
    height: 3px;

    background: linear-gradient(90deg, var(--navy), var(--accent));

    border-radius: 0 0 3px 3px;

    transition: width 0.35s ease;
}

.stat-card:hover {
    transform: translateY(-6px);

    border-color: rgba(20, 50, 77, 0.12);

    box-shadow: 0 26px 54px rgba(15, 43, 70, 0.12);
}

.stat-card:hover::before {
    width: 56px;
}


/* -----------------------------------
   ICON
----------------------------------- */

.stat-icon-wrapper {
    width: 52px;
    height: 52px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: var(--accent);

    background: linear-gradient(135deg, #dceefb 0%, #eef7fd 100%);

    border-radius: 13px;

    transition:
        background 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease;
}

.stat-card:hover .stat-icon-wrapper {
    background: var(--navy);

    color: #ffffff;

    transform: scale(1.06);
}


/* -----------------------------------
   TEXT
----------------------------------- */

.stat-info {
    display: flex;
    flex-direction: column;
}

.stat-count {
    color: var(--navy);

    font-size: 28px;
    font-weight: 700;

    line-height: 1.2;

    margin-bottom: 5px;
}

.stat-title {
    color: var(--ink);

    font-size: 15.5px;
    font-weight: 600;

    margin: 0 0 7px;
}

.stat-desc {
    color: var(--muted);

    font-size: 13px;
    line-height: 1.6;
}


/* ===================================
   TABLET
=================================== */

@media (max-width: 1024px) {

    .stats-section { padding: 58px 0; }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);

        gap: 20px;
    }
}


/* ===================================
   MOBILE
=================================== */

@media (max-width: 640px) {

    .stats-section { padding: 44px 0; }

    .stats-grid {
        grid-template-columns: 1fr;

        gap: 16px;
    }

    /* icon left, text right */
    .stat-card {
        flex-direction: row;
        align-items: flex-start;

        gap: 16px;

        padding: 20px;
    }

    .stat-icon-wrapper {
        width: 44px;
        height: 44px;

        flex-shrink: 0;

        border-radius: 11px;
    }

    .stat-count { font-size: 22px; }

    .stat-title { font-size: 14.5px; }

    .stat-desc { font-size: 12.5px; }
}
</style>