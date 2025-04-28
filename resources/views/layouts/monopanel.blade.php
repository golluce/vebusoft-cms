<!DOCTYPE html>
<html lang="tr" data-layout="horizontal" data-topbar="dark" data-sidebar="dark" >
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MonoPanel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Velzon CSS -->
    <link href="{{ asset('monopanel/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('monopanel/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('monopanel/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('monopanel/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    @stack('styles')
</head>
<body>

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layouts.monopanel-navbar')
    @include('layouts.monopanel-sidebar')

    <!-- Start main content -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="text-muted text-center">
                    MonoPanel © {{ date('Y') }} - Powered by VebuSoft 💪
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ asset('monopanel/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('monopanel/js/app.js') }}"></script>
<script src="{{ asset('monopanel/libs/choices/choices.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('scripts')

<script>
    function showToast(message, type = 'success') {
        Toastify({
            text: message,
            duration: 3000,
            gravity: "bottom",
            position: "right",
            backgroundColor: type === 'success'
                ? "linear-gradient(to right, #00b09b, #96c93d)"
                : "linear-gradient(to right, #ff5f6d, #ffc371)",
            close: true,
        }).showToast();
    }
</script>
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showToast("{{ session('success') }}", 'success');
        });
    </script>
@endif


@if($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showToast("Form gönderiminde hatalar var!", 'error');
        });
    </script>
@endif
<script src="{{ asset('monopanel/js/custom.js') }}"></script>

</body>
</html>
