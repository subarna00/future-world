<!DOCTYPE html>
<html lang="en">
<?php
$siteInfo = App\Models\SiteSetting::where('status', 'active')->first();
?>

<head>
    @include('frontend.layout.header', compact('siteInfo'))
</head>

<body>



    @include('frontend.layout.topbar', compact('siteInfo'))

    @include('frontend.layout.navbar')

    @yield('content')

    {{-- @include('frontend.templateParts.testimonial') --}}

    <footer id="footer">

        @include('frontend.layout.footer', compact('siteInfo'))

        @include('frontend.templateParts.copyRight')
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->

    <!-- Template Main JS File -->
    <x:notify-messages />
    @notifyJs
    <script src="{{ asset('ghar/assets/js/main.js') }}"></script>


</body>

</html>
