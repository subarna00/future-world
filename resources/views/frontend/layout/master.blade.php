<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.header')
</head>

<body>
<?php
    $siteInfo = App\Models\SiteSetting::where('status','active')->first();

?>

    @include('frontend.layout.topbar',compact('siteInfo'))

    @include('frontend.layout.navbar')

    @yield('content')
        @include('frontend.templateParts.clients')

        @include('frontend.templateParts.teams')

        <footer id="footer">
            @include('frontend.templateParts.newsletter')

            @include('frontend.layout.footer',compact('siteInfo'))

            @include('frontend.templateParts.copyRight')
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('ghar/assets/vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('ghar/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('ghar/assets/js/main.js') }}"></script>

</body>

</html>
