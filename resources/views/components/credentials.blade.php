<section class="credentials">

    <div class="container">

        <div class="credentials-header">

            <span class="section-label">
                Professional Credentials
            </span>

            <p class="credentials-intro">
                Specialist training and academic qualifications
                supporting a modern approach to urological care.
            </p>

        </div>


        <div class="credentials-grid">

            {{-- =========================================
                 MCH
            ========================================== --}}

            <article class="credential-item">

                <span class="credential-index">
                    01
                </span>

                <div class="credential-content">

                    <h3>
                        MCh Urology
                    </h3>

                    <p>
                        Dr. PSIMS & RF,
                        Vijayawada
                    </p>

                </div>

            </article>


            {{-- =========================================
                 DNB
            ========================================== --}}

            <article class="credential-item">

                <span class="credential-index">
                    02
                </span>

                <div class="credential-content">

                    <h3>
                        DNB General Surgery
                    </h3>

                    <p>
                        Northern Railway Central Hospital,
                        New Delhi
                    </p>

                </div>

            </article>


            {{-- =========================================
                 MBBS
            ========================================== --}}

            <article class="credential-item">

                <span class="credential-index">
                    03
                </span>

                <div class="credential-content">

                    <h3>
                        MBBS
                    </h3>

                    <p>
                        Gauhati Medical College,
                        Guwahati
                    </p>

                </div>

            </article>


            {{-- =========================================
                 FELLOWSHIP
            ========================================== --}}

            <article class="credential-item">

                <span class="credential-index">
                    04
                </span>

                <div class="credential-content">

                    <h3>
                        Fellowship Training
                    </h3>

                    <p>
                        Robotic & Endoscopic Urology
                    </p>

                </div>

            </article>

        </div>


        {{-- Bottom information --}}

        <div class="credentials-footer">

            <div class="credentials-footer-line"></div>

            <p>
                Consultant Urologist · Endourology ·
                Minimally Invasive Urology
            </p>

        </div>

    </div>

</section>
<style>
    /* ===================================
   CREDENTIALS
=================================== */

.credentials {
    position: relative;

    padding: 90px 0 100px;

    background: var(--color-primary);

    color: #fff;

    overflow: hidden;
}


/*
|--------------------------------------------------------------------------
| Subtle background detail
|--------------------------------------------------------------------------
*/

.credentials::after {
    content: '';

    position: absolute;

    width: 420px;
    height: 420px;

    right: -180px;
    top: -220px;

    border: 1px solid rgba(
        255,
        255,
        255,
        0.08
    );

    border-radius: 50%;
}


/* -----------------------------------
   HEADER
----------------------------------- */

.credentials-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;

    gap: 60px;

    margin-bottom: 60px;
}

.credentials .section-label {
    margin-bottom: 0;

    color: #C6D8D3;
}

.credentials .section-label::before {
    background: var(--color-accent);
}

.credentials-intro {
    max-width: 450px;

    color: rgba(
        255,
        255,
        255,
        0.68
    );

    font-size: 14px;

    line-height: 1.8;
}


/* -----------------------------------
   GRID
----------------------------------- */

.credentials-grid {
    display: grid;

    grid-template-columns:
        repeat(4, 1fr);

    border-top: 1px solid rgba(
        255,
        255,
        255,
        0.18
    );

    border-bottom: 1px solid rgba(
        255,
        255,
        255,
        0.18
    );
}


/* -----------------------------------
   ITEM
----------------------------------- */

.credential-item {
    position: relative;

    min-height: 220px;

    padding: 30px 28px;

    border-right: 1px solid rgba(
        255,
        255,
        255,
        0.18
    );
}

.credential-item:last-child {
    border-right: none;
}

.credential-index {
    display: block;

    margin-bottom: 55px;

    color: rgba(
        255,
        255,
        255,
        0.42
    );

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 0.14em;
}

.credential-content h3 {
    margin-bottom: 12px;

    color: #fff;

    font-size: 25px;

    line-height: 1.05;
}

.credential-content p {
    max-width: 190px;

    color: rgba(
        255,
        255,
        255,
        0.62
    );

    font-size: 12px;

    line-height: 1.7;
}


/* -----------------------------------
   FOOTER
----------------------------------- */

.credentials-footer {
    display: flex;
    align-items: center;

    gap: 20px;

    margin-top: 28px;
}

.credentials-footer-line {
    width: 42px;
    height: 1px;

    background: var(--color-accent);
}

.credentials-footer p {
    color: rgba(
        255,
        255,
        255,
        0.52
    );

    font-size: 11px;
    font-weight: 600;

    letter-spacing: 0.08em;

    text-transform: uppercase;
}


/* ===================================
   TABLET
=================================== */

@media (max-width: 1000px) {

    .credentials-grid {
        grid-template-columns:
            repeat(2, 1fr);
    }

    .credential-item:nth-child(2) {
        border-right: none;
    }

    .credential-item:nth-child(1),
    .credential-item:nth-child(2) {
        border-bottom: 1px solid rgba(
            255,
            255,
            255,
            0.18
        );
    }

}


/* ===================================
   MOBILE
=================================== */

@media (max-width: 700px) {

    .credentials {
        padding: 75px 0 80px;
    }

    .credentials-header {
        align-items: flex-start;

        flex-direction: column;

        gap: 22px;

        margin-bottom: 45px;
    }

    .credentials-grid {
        grid-template-columns: 1fr;
    }

    .credential-item {
        min-height: auto;

        padding: 28px 0;

        border-right: none;

        border-bottom: 1px solid rgba(
            255,
            255,
            255,
            0.18
        );
    }

    .credential-item:last-child {
        border-bottom: none;
    }

    .credential-index {
        margin-bottom: 25px;
    }

    .credential-content h3 {
        font-size: 27px;
    }

    .credentials-footer {
        align-items: flex-start;
    }

    .credentials-footer p {
        max-width: 280px;

        line-height: 1.6;
    }

}
    </style>