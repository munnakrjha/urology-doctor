<footer class="footer-section">
  <div class="footer-container">
    <div class="footer-grid">
      
      <!-- Column 1: Doctor Profile Info -->
      <div class="footer-col brand-col">
        <h3 class="footer-doc-name">Dr. Mriganka Deuri Bharali</h3>
        <p class="footer-doc-spec">MBBS, MS, MCh (Urology)</p>
        <p class="brand-desc">
          Consultant Urologist & Renal Transplant Surgeon providing advanced urological care, kidney stone treatments, and minimally invasive surgeries in Guwahati.
        </p>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="footer-col">
        <h4 class="footer-title">Quick Links</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About Doctor</a></li>
          <li><a href="{{ url('/services') }}">Services & Treatments</a></li>
          <li><a href="{{ url('/contact') }}">Book Appointment</a></li>
        </ul>
      </div>

      <!-- Column 3: Contact Info -->
      <div class="footer-col">
        <h4 class="footer-title">Clinic & Contact</h4>
        <ul class="footer-contact">
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <span>Guwahati, Assam, India</span>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <a href="tel:+919876543210">+91 98765 43210</a>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <a href="mailto:info@drmrigankadeuri.com">contact@drmrigankadeuri.com</a>
          </li>
        </ul>
      </div>

    </div>

    <!-- Bottom Copyright Line -->
    <div class="footer-bottom">
      <p>
        Copyright © {{ date('Y') }} Dr. Mriganka Deuri Bharali. All Rights Reserved | Developed by Munna  jha
        
          
        </a>
      </p>
    </div>
  </div>
</footer>
<style>
    .footer-section {
  background-color: #0f172a;
  color: #cbd5e1;
  padding: 60px 0 20px 0;
  border-top: 3px solid #16578d;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1.5fr;
  gap: 40px;
  padding-bottom: 40px;
  border-bottom: 1px solid #334155;
}

.footer-doc-name {
  color: #ffffff;
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 4px;
}

.footer-doc-spec {
  color: #38bdf8;
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 12px;
}

.brand-desc {
  line-height: 1.6;
  font-size: 0.95rem;
  color: #94a3b8;
}

.footer-title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.footer-links, .footer-contact {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  margin-bottom: 10px;
}

.footer-links a {
  color: #cbd5e1;
  text-decoration: none;
  transition: all 0.3s ease;
}

.footer-links a:hover {
  color: #38bdf8;
  padding-left: 5px;
}

.footer-contact li {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 12px;
  font-size: 0.95rem;
}

.footer-contact a {
  color: #cbd5e1;
  text-decoration: none;
}

.footer-bottom {
  text-align: center;
  padding-top: 20px;
  font-size: 0.9rem;
  color: #94a3b8;
}

.developer-link {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  vertical-align: middle;
}

.dev-logo {
  height: 20px;
  width: auto;
  margin-left: 6px;
  vertical-align: middle;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .footer-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
}


/* Sticky Floating WhatsApp Button */
.whatsapp-sticky-btn {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background-color: #25d366;
    color: #ffffff;
    border-radius: 50px;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    z-index: 9999; /* Page ke upar rehne ke liye */
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
}

.whatsapp-sticky-btn i {
    font-size: 1.6rem;
}

.whatsapp-sticky-btn:hover {
    background-color: #128c7e;
    color: #ffffff;
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.35);
}

/* Mobile Screens ke liye adjustment */
@media (max-width: 768px) {
    .whatsapp-sticky-btn {
        bottom: 20px;
        right: 20px;
        padding: 12px;
        border-radius: 50%;
    }
    
    /* Mobile me text hide ho jayega aur sirf round icon dikhega */
    .whatsapp-text {
        display: none;
    }

    .whatsapp-sticky-btn i {
        font-size: 1.8rem;
    }
}
.whatsapp-float-logo {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background-color: #25d366;
    color: #ffffff !important; /* Forces icon to be pure white */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    text-decoration: none;
    transition: all 0.3s ease;
}

.whatsapp-float-logo i {
    font-size: 34px;
    color: #ffffff !important;
    line-height: 1;
}

.whatsapp-float-logo:hover {
    background-color: #128c7e;
    color: #ffffff !important;
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
}

@media (max-width: 768px) {
    .whatsapp-float-logo {
        bottom: 20px;
        right: 20px;
        width: 52px;
        height: 52px;
    }
    .whatsapp-float-logo i {
        font-size: 28px;
    }
}


    </style>

<!-- Put this inside your <head> tag if Font Awesome isn't already loaded -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Floating WhatsApp Button -->
@php
    $whatsappNumber = env('WHATSAPP_NUMBER', '919643138124');
    $defaultMessage = urlencode("Hello Dr. Mriganka Deuri Bharali, I would like to book an appointment.");
    $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$defaultMessage}";
@endphp

<a href="{{ $whatsappUrl }}" class="whatsapp-float-logo" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>
