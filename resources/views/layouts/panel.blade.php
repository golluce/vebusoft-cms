<!doctype html>
<html lang="tr" data-layout="horizontal" data-topbar="dark" data-sidebar="dark" data-bs-theme="dark">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Vebusoft CMS Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('panel/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('panel/css/bootstrap-dark.min.css') }}" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{ asset('panel/css/icons.min.css') }}" rel="stylesheet" />
    <!-- App Css-->
    <link href="{{ asset('panel/css/app-dark.min.css') }}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('panel/css/custom.min.css') }}" rel="stylesheet" />

    @stack('styles')
</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layouts.panel-topbar') {{-- Üst menü --}}
    @include('layouts.panel-navbar') {{-- Yatay menü --}}

    <!-- ========== Main Content ========== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('panel/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>

@stack('scripts')
</body>
</html>
