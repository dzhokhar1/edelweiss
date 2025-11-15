/**
 * Mobile Menu Functionality
 */
(function() {
    'use strict';

    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

    // Open mobile menu
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            if (mobileMenu) {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent body scroll
            }
        });
    }

    // Close mobile menu
    function closeMobileMenu() {
        if (mobileMenu) {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = ''; // Restore body scroll
        }
    }

    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', closeMobileMenu);
    }

    // Close menu when clicking on links
    mobileMenuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Small delay to allow smooth scroll
            setTimeout(closeMobileMenu, 100);
        });
    });

    // Close menu when clicking outside
    if (mobileMenu) {
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                closeMobileMenu();
            }
        });
    }

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && !mobileMenu.classList.contains('hidden')) {
            closeMobileMenu();
        }
    });
})();

