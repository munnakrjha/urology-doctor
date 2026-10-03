{{-- =====================================================
     CONTACT & CLINICAL APPOINTMENT PAGE SECTION
====================================================== --}}
@extends('layouts.app')

@section('title', 'Dr. Mriganka Deuri Bharali | Consultant Urologist')

@section('content')

<section class="contact-hero-section">
    <div class="contact-hero-container">
        <span class="contact-badge">Get In Touch</span>
        <h1 class="contact-hero-title">Contact & Clinic Consultation</h1>
        <p class="contact-hero-desc">
            Schedule a personal OPD consultation, request a surgical second opinion, or send a direct query to Dr. Mriganka Deuri's clinical desk.
        </p>
    </div>
</section>

<section class="contact-main-section">
    <div class="contact-container">

        {{-- Contact Info & Schedules --}}
        <div class="contact-info-col" data-aos="fade-right">
            
            <div class="info-block">
                <span class="info-tag">Primary Practice Location</span>
                <h3 class="info-heading">Down Town Hospital</h3>
                <p class="info-text">
                    GS Rd, Dispur, Last Gate, Guwahati, Assam 781006
                </p>
                <div class="info-meta">
                    <div class="meta-item">
                        <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span><strong>OPD Timings:</strong> Mon - Sat (10:00 AM - 4:00 PM)</span>
                    </div>
                    <div class="meta-item">
                        <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span><strong>Hospital Desk:</strong> +91 98765 43210</span>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <span class="info-tag">Evening Consultation / Private Chamber</span>
                <h3 class="info-heading">City Specialist Chamber</h3>
                <p class="info-text">
                    Guwahati Care Clinic, Zoo Road, Guwahati, Assam 781024
                </p>
                <div class="info-meta">
                    <div class="meta-item">
                        <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span><strong>Evening OPD:</strong> Mon - Fri (5:00 PM - 7:30 PM)</span>
                    </div>
                </div>
            </div>

            {{-- Emergency Notice Box --}}
            <div class="emergency-box">
                <div class="emergency-icon-wrapper">
                    <svg class="emergency-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <div>
                    <h4 class="emergency-title">Emergency Surgical Care</h4>
                    <p class="emergency-desc">For urgent urological emergencies (acute urinary retention, severe renal colic), contact Down Town Hospital Emergency 24/7.</p>
                </div>
            </div>

        </div>

        {{-- Direct Contact Form --}}
        <div class="contact-form-col" data-aos="fade-left">
            <div class="form-card">
                <h3 class="form-title">Request an Appointment / Query</h3>
                <p class="form-sub">Fill out the form below and our team will get back to confirm your slot.</p>

                {{-- Status Messages --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="appointment-form">
                    @csrf
                    
                    <div class="form-group-row">
                        <div class="form-group">
                            <label for="full_name" class="form-label">Full Name *</label>
                            <input type="text" id="full_name" name="full_name" class="form-input @error('full_name') input-error @enderror" value="{{ old('full_name') }}" placeholder="e.g. Ankit Sharma" required>
                            @error('full_name')
                                <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="form-input @error('phone') input-error @enderror" value="{{ old('phone') }}" placeholder="+91 98765 00000" required>
                            @error('phone')
                                <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group-row">
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input @error('email') input-error @enderror" value="{{ old('email') }}" placeholder="name@example.com">
                            @error('email')
                                <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="preferred_location" class="form-label">Preferred Location</label>
                            <select id="preferred_location" name="preferred_location" class="form-select @error('preferred_location') input-error @enderror">
                                <option value="downtown" {{ old('preferred_location') == 'downtown' ? 'selected' : '' }}>Down Town Hospital (Morning/Afternoon)</option>
                                <option value="private_chamber" {{ old('preferred_location') == 'private_chamber' ? 'selected' : '' }}>City Specialist Chamber (Evening)</option>
                                <option value="online_query" {{ old('preferred_location') == 'online_query' ? 'selected' : '' }}>Surgical Opinion / Query Only</option>
                            </select>
                            @error('preferred_location')
                                <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group-row">
                        <div class="form-group">
                            <label for="preferred_date" class="form-label">Preferred Date</label>
                            <input type="date" id="preferred_date" name="preferred_date" class="form-input @error('preferred_date') input-error @enderror" value="{{ old('preferred_date') }}">
                            @error('preferred_date')
                                <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="consultation_type" class="form-label">Consultation Type</label>
                            <select id="consultation_type" name="consultation_type" class="form-select @error('consultation_type') input-error @enderror">
                                <option value="new" {{ old('consultation_type') == 'new' ? 'selected' : '' }}>New Consultation</option>
                                <option value="followup" {{ old('consultation_type') == 'followup' ? 'selected' : '' }}>Follow-up Visit</option>
                                <option value="second_opinion" {{ old('consultation_type') == 'second_opinion' ? 'selected' : '' }}>Surgical Second Opinion</option>
                            </select>
                            @error('consultation_type')
                                <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Brief Description of Health Issue / Query</label>
                        <textarea id="message" name="message" rows="4" class="form-textarea @error('message') input-error @enderror" placeholder="Describe your symptoms or attach questions regarding procedure...">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="submit-btn">
                        <span>Submit Appointment Request</span>
                        <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

{{-- Map Embed Section --}}
<section class="map-section">
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.398038933256!2d91.7878!3d26.1511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5941c9adbc95%3A0x6b40533bb27bb71d!2sdown%20town%20hospital!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<style>
/* ===================================
   CONTACT PAGE STYLES (MATCHING TEAL PALETTE)
=================================== */

:root {
    --teal-dark: #0f4c5c;
    --teal-primary: #007a87;
    --teal-accent: #00a896;
    --teal-light: #d1f2eb;
    --teal-bg-top: #edf7f6;
    --teal-bg-bottom: #e2f2f0;
    --teal-card-bg: #f8fafc;
    --text-dark: #111827;
    --text-muted: #374151;
    --border-subtle: #bce3de;
}

body {
    font-family: 'Poppins', 'Segoe UI', system-ui, sans-serif;
}

/* Contact Hero */
.contact-hero-section {
    padding: 72px 24px 48px;
    background: linear-gradient(180deg, var(--teal-dark) 0%, #135d70 100%);
    color: #ffffff;
    text-align: center;
}

.contact-hero-container {
    max-width: 800px;
    margin: 0 auto;
}

.contact-badge {
    display: inline-block;
    padding: 6px 18px;
    background: rgba(0, 168, 150, 0.25);
    border: 1px solid rgba(128, 237, 153, 0.4);
    border-radius: 999px;
    color: #80ed99;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 16px;
}

.contact-hero-title {
    margin: 0 0 16px;
    font-size: clamp(30px, 4vw, 44px);
    font-weight: 700;
    line-height: 1.2;
}

.contact-hero-desc {
    margin: 0;
    font-size: 16.5px;
    line-height: 1.7;
    color: #d1f2eb;
}

/* Main Section */
.contact-main-section {
    padding: 80px 24px;
    background: linear-gradient(180deg, var(--teal-bg-top) 0%, var(--teal-bg-bottom) 100%);
}

.contact-container {
    max-width: 1140px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1.15fr;
    gap: 48px;
    align-items: start;
}

/* Info Column Left */
.contact-info-col {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.info-block {
    background: #ffffff;
    border: 1px solid var(--border-subtle);
    border-left: 4px solid var(--teal-primary);
    border-radius: 12px;
    padding: 24px 28px;
    box-shadow: 0 4px 16px rgba(15, 76, 92, 0.04);
}

.info-tag {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    color: var(--teal-accent);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 6px;
}

.info-heading {
    margin: 0 0 8px;
    color: var(--teal-dark);
    font-size: 20px;
    font-weight: 700;
}

.info-text {
    margin: 0 0 16px;
    color: var(--text-muted);
    font-size: 14.5px;
    line-height: 1.6;
}

.info-meta {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: var(--text-dark);
}

.meta-icon {
    width: 18px;
    height: 18px;
    color: var(--teal-primary);
    flex-shrink: 0;
}

/* Emergency Box */
.emergency-box {
    background: #fff5f5;
    border: 1px solid #fed7d7;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.emergency-icon-wrapper {
    width: 40px;
    height: 40px;
    background: #feb2b2;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9b2c2c;
    flex-shrink: 0;
}

.emergency-icon {
    width: 22px;
    height: 22px;
}

.emergency-title {
    margin: 0 0 4px;
    color: #9b2c2c;
    font-size: 16px;
    font-weight: 700;
}

.emergency-desc {
    margin: 0;
    color: #742a2a;
    font-size: 13.5px;
    line-height: 1.5;
}

/* Form Column Right */
.form-card {
    background: #ffffff;
    border: 1px solid var(--border-subtle);
    border-radius: 16px;
    padding: 36px 32px;
    box-shadow: 0 12px 32px rgba(15, 76, 92, 0.08);
}

.form-title {
    margin: 0 0 6px;
    color: var(--teal-dark);
    font-size: 22px;
    font-weight: 700;
}

.form-sub {
    margin: 0 0 24px;
    color: var(--text-muted);
    font-size: 14px;
}

.appointment-form {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.form-group-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.form-label {
    font-size: 13px;
    font-weight: 600;
    color: var(--text-dark);
}

.form-input, .form-select, .form-textarea {
    width: 100%;
    padding: 11px 14px;
    border: 1px solid var(--border-subtle);
    border-radius: 8px;
    background: var(--teal-card-bg);
    font-size: 14px;
    color: var(--text-dark);
    outline: none;
    transition: all 0.25s ease;
    box-sizing: border-box;
}

.form-input:focus, .form-select:focus, .form-textarea:focus {
    border-color: var(--teal-accent);
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(0, 168, 150, 0.15);
}

.input-error {
    border-color: #e53e3e !important;
}

.error-msg {
    font-size: 12px;
    color: #e53e3e;
    margin-top: 2px;
}

.alert {
    padding: 12px 16px;
    border-radius: 8px;
    font-size: 14px;
    margin-bottom: 16px;
}

.alert-success {
    background: #def7ec;
    color: #03543f;
    border: 1px solid #bcf0da;
}

.alert-danger {
    background: #fde8e8;
    color: #9b1c1c;
    border: 1px solid #fbd5d5;
}

.submit-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 24px;
    background: var(--teal-primary);
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 8px;
}

.submit-btn:hover {
    background: var(--teal-dark);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(15, 76, 92, 0.2);
}

.btn-arrow {
    width: 18px;
    height: 18px;
}

/* Map Frame */
.map-section {
    background: var(--teal-bg-bottom);
    line-height: 0;
}

.map-container iframe {
    filter: saturate(0.9);
}

/* Responsive Styles */
@media (max-width: 900px) {
    .contact-container {
        grid-template-columns: 1fr;
        gap: 36px;
    }

    .form-group-row {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .contact-hero-section {
        padding: 52px 16px 36px;
    }

    .contact-main-section {
        padding: 56px 16px;
    }

    .form-card {
        padding: 24px 20px;
    }
}
</style>

@include('components.footer')

@endsection