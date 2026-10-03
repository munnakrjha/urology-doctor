
import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.querySelector('.navbar-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (!toggle || !mobileMenu) {
        return;
    }

    toggle.addEventListener('click', () => {

        const isOpen = mobileMenu.classList.toggle('is-open');

        toggle.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );

    });


    /*
    |--------------------------------------------------------------------------
    | Close mobile menu after clicking a link
    |--------------------------------------------------------------------------
    */

    const mobileLinks = document.querySelectorAll(
        '.mobile-menu-link, .mobile-menu-button'
    );

    mobileLinks.forEach((link) => {

        link.addEventListener('click', () => {

            mobileMenu.classList.remove('is-open');

            toggle.setAttribute(
                'aria-expanded',
                'false'
            );

        });

    });

});