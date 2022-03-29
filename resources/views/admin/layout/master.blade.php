<!DOCTYPE html>
<html lang="en">

@include('admin.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        @include('admin.layout.navbar')

        @include('admin.layout.sidebar')

        <div class="content-wrapper" style="background:white;">
            @yield('content')
        </div>

    </div>

    @include('admin.layout.footer')
</body>

</html>
