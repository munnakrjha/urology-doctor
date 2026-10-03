{{-- AOS Library (Animate On Scroll) CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

{{-- =====================================================
     TESTIMONIALS SECTION
====================================================== --}}

<section class="testimonial-section" id="testimonials">

    <div class="testimonial-container">

        {{-- Section Header --}}
        <div class="testimonial-header" data-aos="flip-up" data-aos-duration="800">
            <span class="testimonial-badge">Patient Stories</span>
            <h2 class="testimonial-title">What Our Patients Say</h2>
            <span class="testimonial-underline"></span>
            <p class="testimonial-subtitle">
                Real experiences from patients who received specialized urological care and treatment.
            </p>
        </div>

        {{-- Testimonial Cards Container (Grid on Desktop, Auto-Scrollable on Mobile) --}}
        <div class="testimonial-grid" id="testimonialSlider">

            {{-- Card 1 --}}
            <div class="testimonial-card" data-aos="flip-left" data-aos-delay="100" data-aos-duration="900">
                <div class="quote-icon">“</div>
                <div class="star-rating">
                    ★★★★★
                </div>
                <p class="testimonial-text">
                    "Dr. Mriganka Deuri Bharali provided exceptional care during my kidney stone treatment. The laser procedure was smooth, and my recovery was much faster than I anticipated."
                </p>
                <div class="patient-info">
                    <div class="patient-avatar">R</div>
                    <div class="patient-details">
                        <h4 class="patient-name">Rahul Sharma</h4>
                        <span class="patient-treatment">Laser Stone Treatment</span>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="testimonial-card" data-aos="flip-left" data-aos-delay="250" data-aos-duration="900">
                <div class="quote-icon">“</div>
                <div class="star-rating">
                    ★★★★★
                </div>
                <p class="testimonial-text">
                    "Very professional and empathetic doctor. He explained the diagnosis clearly and answered all our questions patiently before going ahead with the surgery."
                </p>
                <div class="patient-info">
                    <div class="patient-avatar">A</div>
                    <div class="patient-details">
                        <h4 class="patient-name">Anita Das</h4>
                        <span class="patient-treatment">Endoscopic Surgery</span>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="testimonial-card" data-aos="flip-left" data-aos-delay="400" data-aos-duration="900">
                <div class="quote-icon">“</div>
                <div class="star-rating">
                    ★★★★★
                </div>
                <p class="testimonial-text">
                    "Highly skilled consultant urologist. The trauma care unit and post-surgery care managed by Dr. Mriganka was top-notch. Truly grateful for his guidance."
                </p>
                <div class="patient-info">
                    <div class="patient-avatar">B</div>
                    <div class="patient-details">
                        <h4 class="patient-name">Bikash Gogoi</h4>
                        <span class="patient-treatment">Urological Care</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<style>
/* ===================================
   TESTIMONIAL SECTION STYLES
=================================== */

.testimonial-section {
    --navy:   #14324d;
    --ink:    #3d5165;
    --muted:  #5c7286;
    --accent: #1d7fae;
    --frame:  #14324d;

    padding: 96px 0;
    background: #ffffff;
    font-family: 'Poppins', 'Segoe UI', sans-serif;
    overflow: hidden;
}

.testimonial-container {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 24px;
    perspective: 1200px;
}

/* -----------------------------------
   HEADER
----------------------------------- */

.testimonial-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}

.testimonial-badge {
    display: inline-block;
    padding: 6px 16px;
    background: #eaf3fa;
    border: 1px solid #bddbf0;
    border-radius: 999px;
    color: var(--accent);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.testimonial-title {
    margin: 0;
    color: var(--navy);
    font-size: clamp(30px, 3.2vw, 42px);
    font-weight: 700;
    line-height: 1.2;
}

.testimonial-underline {
    display: block;
    width: 80px;
    height: 3px;
    margin: 14px auto 0;
    background: var(--accent);
    border-radius: 3px;
}

.testimonial-subtitle {
    margin: 16px 0 0;
    color: var(--muted);
    font-size: 16px;
    line-height: 1.6;
}


/* -----------------------------------
   GRID & CARDS (DESKTOP)
----------------------------------- */

.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
}

.testimonial-card {
    position: relative;
    background: #eaf3fa;
    border: 2px solid #d2e4f2;
    border-radius: 20px;
    padding: 36px 28px 28px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    backface-visibility: hidden;
}

.testimonial-card:hover {
    transform: translateY(-6px);
    border-color: var(--accent);
    box-shadow: 0 16px 35px rgba(20, 50, 77, 0.12);
}

.quote-icon {
    position: absolute;
    top: 15px;
    right: 24px;
    font-size: 54px;
    line-height: 1;
    color: #bddbf0;
    font-family: Georgia, serif;
    pointer-events: none;
}

.star-rating {
    color: #f59e0b;
    font-size: 18px;
    letter-spacing: 2px;
    margin-bottom: 16px;
}

.testimonial-text {
    margin: 0 0 28px;
    color: var(--ink);
    font-size: 15px;
    line-height: 1.75;
    font-style: italic;
    flex-grow: 1;
}

.patient-info {
    display: flex;
    align-items: center;
    gap: 14px;
    border-top: 1px solid #cbe3f5;
    padding-top: 18px;
}

.patient-avatar {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: var(--navy);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 18px;
}

.patient-details {
    display: flex;
    flex-direction: column;
}

.patient-name {
    margin: 0;
    color: var(--navy);
    font-size: 16px;
    font-weight: 600;
}

.patient-treatment {
    color: var(--muted);
    font-size: 13px;
}


/* ===================================
   RESPONSIVE & MOBILE AUTO-SCROLL
=================================== */

@media (max-width: 1024px) {
    .testimonial-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }
}

@media (max-width: 768px) {
    .testimonial-section {
        padding: 64px 0;
    }

    /* Horizontal Auto Scroll Layout for Mobile */
    .testimonial-grid {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 15px;
        gap: 16px;
    }

    /* Hide Scrollbar for Clean UI */
    .testimonial-grid::-webkit-scrollbar {
        display: none;
    }
    .testimonial-grid {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .testimonial-card {
        flex: 0 0 85%;
        min-width: 85%;
        scroll-snap-align: center;
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

        // Mobile Auto Scroll Functionality
        const slider = document.getElementById('testimonialSlider');
        let autoScrollInterval = null;
        let isUserInteracting = false;

        function startAutoScroll() {
            if (window.innerWidth <= 768) {
                autoScrollInterval = setInterval(() => {
                    if (!isUserInteracting && slider) {
                        const cardWidth = slider.querySelector('.testimonial-card').offsetWidth + 16;
                        const maxScroll = slider.scrollWidth - slider.clientWidth;

                        if (slider.scrollLeft >= maxScroll - 10) {
                            slider.scrollTo({ left: 0, behavior: 'smooth' });
                        } else {
                            slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
                        }
                    }
                }, 3500); // 3.5 seconds interval per scroll
            }
        }

        function stopAutoScroll() {
            if (autoScrollInterval) {
                clearInterval(autoScrollInterval);
            }
        }

        if (slider) {
            // Pause auto-scroll when user touches or drags
            slider.addEventListener('touchstart', () => {
                isUserInteracting = true;
            }, { passive: true });

            slider.addEventListener('touchend', () => {
                setTimeout(() => { isUserInteracting = false; }, 4000);
            });

            startAutoScroll();
        }

        window.addEventListener('resize', () => {
            stopAutoScroll();
            startAutoScroll();
        });
    });
</script>