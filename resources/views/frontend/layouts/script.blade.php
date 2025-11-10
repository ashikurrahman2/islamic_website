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
    </script>
