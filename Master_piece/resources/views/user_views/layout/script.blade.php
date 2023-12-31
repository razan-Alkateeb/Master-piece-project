    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="{{ URL::asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ URL::asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/mo.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/photoswipe.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/ResizeSensor.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/product360.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <!-- <script src="assets/js/plugins/jquery.scrollUp.min.js"></script> -->
    <script src="{{ URL::asset('assets/js/plugins/scrollax.min.js') }}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script>
        function scrollToSection(sectionId) {
            $('html, body').animate({
                scrollTop: $(sectionId).offset().top
            }, 1000); // Adjust the duration as needed
        }
    </script>


    <script src="{{ URL::asset('assets/jsp/jquery-2.1.1.js') }}"></script>
    <script src="{{ URL::asset('assets/jsp/main.js') }}"></script>


    @yield('scripts')
