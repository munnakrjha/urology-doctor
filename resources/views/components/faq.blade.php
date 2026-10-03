{{-- AOS Library (Animate On Scroll) CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

{{-- =====================================================
     FAQ SECTION
====================================================== --}}

<section class="faq-section" id="faq">

    <div class="faq-container">

        {{-- Section Header --}}
        <div class="faq-header" data-aos="flip-up" data-aos-duration="800">
            <span class="faq-badge">Got Questions?</span>
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <span class="faq-underline"></span>
            <p class="faq-subtitle">
                Find clear answers to common questions regarding urological procedures, consultations, and treatments.
            </p>
        </div>

        {{-- FAQ Accordion List --}}
        <div class="faq-list">

            {{-- Question 1 --}}
            <div class="faq-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="700">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What symptoms indicate I should consult a urologist?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        You should consult a urologist if you experience burning during urination, severe lower back or flank pain, blood in urine, frequent urinary tract infections (UTIs), difficulty urinating, or kidney stone symptoms.
                    </p>
                </div>
            </div>

            {{-- Question 2 --}}
            <div class="faq-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="700">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is endoscopic laser stone surgery painful?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        No, advanced endoscopic laser surgery (such as RIRS) is a minimally invasive, painless procedure performed under anesthesia. It leaves no surgical cuts or scars and allows faster recovery.
                    </p>
                </div>
            </div>

            {{-- Question 3 --}}
            <div class="faq-item" data-aos="flip-up" data-aos-delay="300" data-aos-duration="700">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long does it take to recover after laser kidney stone treatment?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Most patients can resume normal daily routine activities within 1 to 2 days after the procedure. The hospital stay is usually minimal (same day or 24-hour discharge).
                    </p>
                </div>
            </div>

            {{-- Question 4 --}}
            <div class="faq-item" data-aos="flip-up" data-aos-delay="400" data-aos-duration="700">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What documents or medical records should I bring for my consultation?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Please bring any previous prescription copies, ultrasound/CT scan reports, blood and urine test reports, and details of any ongoing medications.
                    </p>
                </div>
            </div>

            {{-- Question 5 --}}
            <div class="faq-item" data-aos="flip-up" data-aos-delay="500" data-aos-duration="700">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do you provide treatments for prostate problems and trauma care?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Yes, Dr. Mriganka Deuri Bharali provides comprehensive care for prostate enlargement (BPH), endoscopic prostate surgeries, urological trauma care, and pediatric urology problems.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>


<style>
/* ===================================
   FAQ SECTION STYLES
=================================== */

.faq-section {
    --navy:   #14324d;
    --ink:    #3d5165;
    --muted:  #5c7286;
    --accent: #1d7fae;

    padding: 96px 0;
    background: #eaf3fa;
    font-family: 'Poppins', 'Segoe UI', sans-serif;
    overflow: hidden;
}

.faq-container {
    max-width: 980px;
    margin: 0 auto;
    padding: 0 24px;
    perspective: 1200px;
}

/* -----------------------------------
   HEADER
----------------------------------- */

.faq-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 50px;
}

.faq-badge {
    display: inline-block;
    padding: 6px 16px;
    background: #ffffff;
    border: 1px solid #bddbf0;
    border-radius: 999px;
    color: var(--accent);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.faq-title {
    margin: 0;
    color: var(--navy);
    font-size: clamp(28px, 3.2vw, 40px);
    font-weight: 700;
    line-height: 1.2;
}

.faq-underline {
    display: block;
    width: 80px;
    height: 3px;
    margin: 14px auto 0;
    background: var(--accent);
    border-radius: 3px;
}

.faq-subtitle {
    margin: 16px 0 0;
    color: var(--muted);
    font-size: 16px;
    line-height: 1.6;
}

/* -----------------------------------
   ACCORDION ITEMS
----------------------------------- */

.faq-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.faq-item {
    background: #ffffff;
    border: 1.5px solid #d2e4f2;
    border-radius: 14px;
    overflow: hidden;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    backface-visibility: hidden;
}

.faq-item.active {
    border-color: var(--accent);
    box-shadow: 0 10px 25px rgba(20, 50, 77, 0.08);
}

.faq-question {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 24px;
    background: none;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    color: var(--navy);
    font-size: 17px;
    font-weight: 600;
    font-family: inherit;
    gap: 16px;
}

.faq-icon {
    font-size: 22px;
    font-weight: 400;
    color: var(--accent);
    transition: transform 0.3s ease;
    line-height: 1;
}

.faq-item.active .faq-icon {
    transform: rotate(45deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s cubic-bezier(0, 1, 0, 1), padding 0.3s ease;
    padding: 0 24px;
}

.faq-item.active .faq-answer {
    max-height: 300px;
    padding: 0 24px 22px;
    transition: max-height 0.35s ease-in-out, padding 0.3s ease;
}

.faq-answer p {
    margin: 0;
    color: var(--ink);
    font-size: 15px;
    line-height: 1.7;
    border-top: 1px solid #eaf3fa;
    padding-top: 14px;
}

/* ===================================
   RESPONSIVE DESIGN
=================================== */

@media (max-width: 768px) {
    .faq-section {
        padding: 60px 0;
    }

    .faq-question {
        padding: 16px 18px;
        font-size: 15.5px;
    }

    .faq-answer {
        padding: 0 18px;
    }

    .faq-item.active .faq-answer {
        padding: 0 18px 18px;
    }
}
</style>

{{-- AOS Library & Accordion Toggle Script --}}
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

    function toggleFaq(button) {
        const currentItem = button.parentElement;
        const isActive = currentItem.classList.contains('active');

        // Close all other active FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });

        // Toggle clicked item
        if (!isActive) {
            currentItem.classList.add('active');
        }
    }
</script>