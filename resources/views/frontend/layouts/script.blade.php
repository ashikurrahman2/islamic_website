  <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('/') }}frontend/assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('/') }}frontend/assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/') }}frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('/') }}frontend/assets/js/circle-progress.js"></script>
    <!-- Counter Up -->
    <script src="{{ asset('/') }}frontend/assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="{{ asset('/') }}frontend/assets/js/jquery-ui.min.js"></script>
    <!-- Imagesloadedr -->
    <script src="{{ asset('/') }}frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="{{ asset('/') }}frontend/assets/js/isotope.pkgd.min.js"></script>
    <!-- Nice-select -->
    <script src="{{ asset('/') }}frontend/assets/js/nice-select.min.js"></script>

    <!-- gsap area start -->
    <script src="{{ asset('/') }}frontend/assets/js/gsap.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/ScrollTrigger.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/SplitText.js"></script>
    <!-- gsap area end -->
    <!-- Lenis Js -->
    <script src="{{ asset('/') }}frontend/assets/js/lenis.min.js"></script>
    <!-- wow -->
    <script src="{{ asset('/') }}frontend/assets/js/wow.min.js"></script>

    <!-- Main Js File -->
    <script src="{{ asset('/') }}frontend/assets/js/main.js"></script>

    {{-- Hajj package script --}}
    <script>
        // Add scroll animation trigger
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.package-card').forEach(card => {
            observer.observe(card);
        });

        // Button click animations
        document.querySelectorAll('.btn-call, .btn-download').forEach(btn => {
            btn.addEventListener('click', function(e) {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });


   // Mobile menu script
        document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.th-menu-toggle');
    const menuWrapper = document.querySelector('.th-menu-wrapper');
    const body = document.body;

    if (menuToggle && menuWrapper) {
        // Menu Open
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            menuWrapper.classList.toggle('th-menu-active');
            body.classList.toggle('th-body-visible');
        });

        // Close button inside mobile menu
        const closeBtn = menuWrapper.querySelector('.th-menu-toggle');
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                menuWrapper.classList.remove('th-menu-active');
                body.classList.remove('th-body-visible');
            });
        }

        // Close menu when clicking outside
        menuWrapper.addEventListener('click', function(e) {
            if (e.target === menuWrapper) {
                menuWrapper.classList.remove('th-menu-active');
                body.classList.remove('th-body-visible');
            }
        });
    }

    // Mobile Menu Dropdown
    const mobileMenu = document.querySelector('.th-mobile-menu');
    if (mobileMenu) {
        const menuItems = mobileMenu.querySelectorAll('.menu-item-has-children > a');
        
        menuItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                const parent = this.parentElement;
                const submenu = parent.querySelector('.sub-menu');
                
                // Toggle current submenu
                parent.classList.toggle('active');
                
                if (submenu) {
                    if (submenu.style.display === 'block') {
                        submenu.style.display = 'none';
                    } else {
                        submenu.style.display = 'block';
                    }
                }
                
                // Close other submenus
                const siblings = Array.from(parent.parentElement.children);
                siblings.forEach(function(sibling) {
                    if (sibling !== parent && sibling.classList.contains('menu-item-has-children')) {
                        sibling.classList.remove('active');
                        const siblingSubmenu = sibling.querySelector('.sub-menu');
                        if (siblingSubmenu) {
                            siblingSubmenu.style.display = 'none';
                        }
                    }
                });
            });
        });
    }
});
    </script>
