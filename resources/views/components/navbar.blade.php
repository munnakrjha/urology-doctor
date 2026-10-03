<header class="site-header">

    <div class="container">

        <nav class="navbar">

            {{-- Logo / Doctor Name --}}
            <a href="{{ url('/') }}" class="navbar-brand">

                <span class="navbar-brand-main">
                    Dr. Mriganka
                </span>

                <span class="navbar-brand-sub">
                    Deuri Bharali
                </span>

            </a>


            {{-- Desktop Navigation --}}
            <div class="navbar-menu">

                <a href="/about" class="navbar-link">
                    About
                </a>

                <a href="/services" class="navbar-link">
                    Services
                </a>

               

                <!-- <a href="#research" class="navbar-link">
                    Gallery
                </a> -->

                <a href="/contact" class="navbar-link">
                    Contact
                </a>

            </div>


            {{-- Desktop CTA --}}
            <a
                href="/contact"
                class="btn btn-primary navbar-cta"
            >
                Book Appointment
            </a>


            {{-- Mobile Menu Button --}}
            <button
                type="button"
                class="navbar-toggle"
                aria-label="Open navigation menu"
                aria-expanded="false"
            >

                <span></span>
                <span></span>
                <span></span>

            </button>

        </nav>

    </div>


    {{-- Mobile Navigation --}}
    <div class="mobile-menu">

        <a href="#about" class="mobile-menu-link">
            About
        </a>

        <a href="/services" class="mobile-menu-link">
            Services
        </a>

       
     
        

        <a href="/contact" class="mobile-menu-link">
            Contact
        </a>

        <a
            href="/contact"
            class="btn btn-primary mobile-menu-button"
        >
            Book Appointment
        </a>

    </div>

</header>