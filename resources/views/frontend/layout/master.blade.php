<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.header')
</head>

<body>

    <?php
    $siteInfo = App\Models\SiteSetting::where('status', 'active')->first();
    ?>

    @include('frontend.layout.topbar', compact('siteInfo'))

    @include('frontend.layout.navbar')

    @yield('content')

    {{-- @include('frontend.templateParts.testimonial') --}}
    @include('frontend.templateParts.clients')

    <footer id="footer">

        @include('frontend.layout.footer', compact('siteInfo'))

        @include('frontend.templateParts.copyRight')
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    {{-- <script src="{{ asset('ghar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <x:notify-messages />
    @notifyJs
    <script src="{{ asset('ghar/assets/js/main.js') }}"></script>


</body>

</html>
