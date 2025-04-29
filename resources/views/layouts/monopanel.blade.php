<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MonoPanel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="#" rel="icon shortcut">
    <meta property="og:image" content="#">

    <meta name="description" content="Açıklama">
    <meta property="og:description" content="Açıklama">

    <style>
        [v-cloak],
        [x-cloak] {
            display: none;
        }
    </style>

    <style>
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2jl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma0zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma25l7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1zl7w0q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2jl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma0zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma25l7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1zl7w0q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2jl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma0zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma25l7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1zl7w0q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2jl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma0zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma25l7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1zl7w0q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2jl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma0zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2zl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma2pl7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma25l7w0q5n-wu.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://cms.botble.com/storage/fonts/2832c0ff63/sinterv13ucc73fwrk3iltehus-fvqtmwcp50knma1zl7w0q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

    <style>
        :root {
            --primary-font: "Inter";
            --primary-color: #206bc4;
            --primary-color-rgb: 32, 107, 196;
            --secondary-color: #6c7a91;
            --secondary-color-rgb: 108, 122, 145;
            --heading-color: inherit;
            --text-color: #182433;
            --text-color-rgb: 24, 36, 51;
            --link-color: #206bc4;
            --link-color-rgb: 32, 107, 196;
            --link-hover-color: #1a569d;
            --link-hover-color-rgb: 26, 86, 157;
        }
    </style>

    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/fontawesome.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/select2.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/select2.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/toastr.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/jquery.mCustomScrollbar.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/flatpickr.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/spectrum.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/jquery.fancybox.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/dataTables.bootstrap.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/buttons.bootstrap.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"  href="{{ asset('monopanel/assets/css/responsive.bootstrap.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/core.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/language.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('monopanel/assets/css/table.css') }}">

    <script src="{{ asset('monopanel/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('monopanel/assets/js/app.js') }}"></script>

    <style>
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: #007bff;

            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;

            width: 100%;
            height: 2px;
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #007bff, 0 0 5px #007bff;
            opacity: 1.0;

            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;

            border: solid 2px transparent;
            border-top-color: #007bff;
            border-left-color: #007bff;
            border-radius: 50%;

            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: var(--bb-primary);

            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;

            width: 100%;
            height: 2px;
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px var(--bb-primary), 0 0 5px var(--bb-primary);
            opacity: 1.0;

            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;

            border: solid 2px transparent;
            border-top-color: var(--bb-primary);
            border-left-color: var(--bb-primary);
            border-radius: 50%;

            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        .toastify {
            padding: 0.75rem 2rem 0.75rem 0.75rem;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 3px 6px -1px rgba(0, 0, 0, 0.12),
            0 10px 36px -4px rgba(77, 96, 232, 0.3);
            background: -webkit-linear-gradient(315deg, #73a5ff, #5477f5);
            background: linear-gradient(135deg, #73a5ff, #5477f5);
            position: fixed;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
            border-radius: 2px;
            cursor: pointer;
            text-decoration: none;
            z-index: 999999;
            width: 25rem;
            max-width: calc(100% - 30px);
        }

        .toastify.on {
            opacity: 1;
        }

        .toastify-icon {
            width: 1.5rem;
            height: 1.5rem;
        }

        .toast-close {
            background: transparent;
            border: 0;
            color: white;
            cursor: pointer;
            font-family: inherit;
            font-size: 1em;
            opacity: 0.4;
            padding: 0 5px;
            position: absolute;
            top: 0.25rem;
            inset-inline-end: 0.25rem;
        }

        .toast-close svg {
            width: 1em;
            height: 1em;
        }

        .toastify-text a {
            text-decoration: underline;
            color: #fff;
        }

        .toastify-right {
            inset-inline-end: 15px;
        }

        .toastify-left {
            inset-inline-start: 15px;
        }

        .toastify-top {
            top: -150px;
        }

        .toastify-bottom {
            bottom: -150px;
        }

        .toastify-rounded {
            border-radius: 25px;
        }

        .toastify-center {
            margin-inline-start: auto;
            margin-inline-end: auto;
            inset-inline-start: 0;
            inset-inline-end: 0;
            max-width: fit-content;
            max-width: -moz-fit-content;
        }

        @media only screen and (max-width: 360px) {
            .toastify-right,
            .toastify-left {
                margin-inline-start: auto;
                margin-inline-end: auto;
                inset-inline-start: 0;
                inset-inline-end: 0;
                max-width: fit-content;
            }
        }
    </style>
    <style class="fslightbox-styles">
        .fslightbox-absoluted {
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-fade-in {
            animation: fslightbox-fade-in .3s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out {
            animation: fslightbox-fade-out .3s ease
        }

        .fslightbox-fade-in-strong {
            animation: fslightbox-fade-in-strong .3s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out-strong {
            animation: fslightbox-fade-out-strong .3s ease
        }

        @keyframes fslightbox-fade-in {
            from {
                opacity: .65
            }
            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out {
            from {
                opacity: .35
            }
            to {
                opacity: 0
            }
        }

        @keyframes fslightbox-fade-in-strong {
            from {
                opacity: .3
            }
            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out-strong {
            from {
                opacity: 1
            }
            to {
                opacity: 0
            }
        }

        .fslightbox-cursor-grabbing {
            cursor: grabbing
        }

        .fslightbox-full-dimension {
            width: 100%;
            height: 100%
        }

        .fslightbox-open {
            overflow: hidden;
            height: 100%
        }

        .fslightbox-flex-centered {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fslightbox-opacity-0 {
            opacity: 0 !important
        }

        .fslightbox-opacity-1 {
            opacity: 1 !important
        }

        .fslightbox-scrollbarfix {
            padding-right: 17px
        }

        .fslightbox-transform-transition {
            transition: transform .3s
        }

        .fslightbox-container {
            font-family: Arial, sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(rgba(30, 30, 30, .9), #000 1810%);
            touch-action: pinch-zoom;
            z-index: 1000000000;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }

        .fslightbox-container * {
            box-sizing: border-box
        }

        .fslightbox-svg-path {
            transition: fill .15s ease;
            fill: #ddd
        }

        .fslightbox-nav {
            height: 45px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-slide-number-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100%;
            font-size: 15px;
            color: #d7d7d7;
            z-index: 0;
            max-width: 55px;
            text-align: left
        }

        .fslightbox-slide-number-container .fslightbox-flex-centered {
            height: 100%
        }

        .fslightbox-slash {
            display: block;
            margin: 0 5px;
            width: 1px;
            height: 12px;
            transform: rotate(15deg);
            background: #fff
        }

        .fslightbox-toolbar {
            position: absolute;
            z-index: 3;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            background: rgba(35, 35, 35, .65)
        }

        .fslightbox-toolbar-button {
            height: 100%;
            width: 45px;
            cursor: pointer
        }

        .fslightbox-toolbar-button:hover .fslightbox-svg-path {
            fill: #fff
        }

        .fslightbox-slide-btn-container {
            display: flex;
            align-items: center;
            padding: 12px 12px 12px 6px;
            position: absolute;
            top: 50%;
            cursor: pointer;
            z-index: 3;
            transform: translateY(-50%)
        }

        @media (min-width: 476px) {
            .fslightbox-slide-btn-container {
                padding: 22px 22px 22px 6px
            }
        }

        @media (min-width: 768px) {
            .fslightbox-slide-btn-container {
                padding: 30px 30px 30px 6px
            }
        }

        .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
            fill: #f1f1f1
        }

        .fslightbox-slide-btn {
            padding: 9px;
            font-size: 26px;
            background: rgba(35, 35, 35, .65)
        }

        @media (min-width: 768px) {
            .fslightbox-slide-btn {
                padding: 10px
            }
        }

        @media (min-width: 1600px) {
            .fslightbox-slide-btn {
                padding: 11px
            }
        }

        .fslightbox-slide-btn-container-previous {
            left: 0
        }

        @media (max-width: 475.99px) {
            .fslightbox-slide-btn-container-previous {
                padding-left: 3px
            }
        }

        .fslightbox-slide-btn-container-next {
            right: 0;
            padding-left: 12px;
            padding-right: 3px
        }

        @media (min-width: 476px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 22px
            }
        }

        @media (min-width: 768px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 30px
            }
        }

        @media (min-width: 476px) {
            .fslightbox-slide-btn-container-next {
                padding-right: 6px
            }
        }

        .fslightbox-down-event-detector {
            position: absolute;
            z-index: 1
        }

        .fslightbox-slide-swiping-hoverer {
            z-index: 4
        }

        .fslightbox-invalid-file-wrapper {
            font-size: 22px;
            color: #eaebeb;
            margin: auto
        }

        .fslightbox-video {
            object-fit: cover
        }

        .fslightbox-youtube-iframe {
            border: 0
        }

        .fslightboxl {
            display: block;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 67px;
            height: 67px
        }

        .fslightboxl div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 54px;
            height: 54px;
            margin: 6px;
            border: 5px solid;
            border-color: #999 transparent transparent transparent;
            border-radius: 50%;
            animation: fslightboxl 1.2s cubic-bezier(.5, 0, .5, 1) infinite
        }

        .fslightboxl div:nth-child(1) {
            animation-delay: -.45s
        }

        .fslightboxl div:nth-child(2) {
            animation-delay: -.3s
        }

        .fslightboxl div:nth-child(3) {
            animation-delay: -.15s
        }

        @keyframes fslightboxl {
            0% {
                transform: rotate(0)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .fslightbox-source {
            position: relative;
            z-index: 2;
            opacity: 0
        }</style>
</head>
@stack('styles')
</head>
<body data-bs-theme="dark">
<div id="app">
    <div class="page">
        <header class="navbar navbar-expand-md d-print-none" data-bs-theme="dark">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                        aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="https://cms.botble.com/admin">
                        <img src="./Pages _ Botble Technologies_files/logo.png" style="max-height: 32px; height: auto;"
                             alt="Botble Technologies" class="navbar-brand-image">
                    </a>
                </h1>

                <div class="flex-row navbar-nav order-md-last">
                    <div class="nav-item d-none d-md-flex me-3">
                        <div class="">
                            <label class="form-label sr-only" for="global-search-input">
                                Search


                            </label>

                            <div class="input-group input-group-flat">


                                <input class="form-control" type="text" name="keyword" id="global-search-input"
                                       placeholder="Search" tabindex="0" data-bb-toggle="gs-navbar-input"
                                       autocomplete="off">


                                <div class="input-group-text">
                                    <kbd>ctrl/cmd + k</kbd>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="nav-item d-none d-md-flex me-3">
                        <div class="btn-list">
                            <a class="btn" type="button" href="https://cms.botble.com/" target="_blank">
                                <svg class="icon icon-left svg-icon-ti-ti-world" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M3.6 9h16.8"></path>
                                    <path d="M3.6 15h16.8"></path>
                                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                </svg>
                                View website

                            </a>
                        </div>
                    </div>

                    <div class="d-none d-md-flex me-2">
                        <a href="https://cms.botble.com/admin/toggle-theme-mode?theme=light" class="px-0 nav-link"
                           data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode"
                           data-bs-original-title="Enable light mode">
                            <svg class="icon  svg-icon-ti-ti-sun" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                            </svg>
                        </a>

                        <div class="nav-item d-none d-md-flex me-2">
                            <a class="px-0 nav-link" data-bs-toggle="offcanvas"
                               href="https://cms.botble.com/admin/pages#notification-sidebar" role="button"
                               aria-controls="notification-sidebar">
                                <svg class="icon  svg-icon-ti-ti-bell" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                </svg>
                                <span class="badge bg-blue text-blue-fg badge-pill notification-count">0</span>
                            </a>
                        </div>
                        <div class="nav-item dropdown d-none d-md-flex me-2">
                            <button class="nav-link px-0" data-bs-toggle="dropdown" type="button"
                                    aria-label="Show contacts" tabindex="-1">
                                <svg class="icon  svg-icon-ti-ti-mail" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                                    <path d="M3 7l9 6l9 -6"></path>
                                </svg>
                                <span class="badge bg-red text-red-fg badge-pill">8</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            You have <span class="bold">8</span> New Messages
                                        </h4>
                                        <div class="card-actions"><a href="https://cms.botble.com/admin/contacts">View
                                                all</a></div>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable overflow-auto"
                                         style="max-height: 35rem">
                                        <a href="https://cms.botble.com/admin/contacts/edit/1"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Marlee McGlynn">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Marlee McGlynn
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            838.480.0009 - bins.karelle@example.net
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/2"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Christian Schumm">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Christian Schumm
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            959.657.6654 - ana.green@example.org
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/4"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Alanis Morar">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Alanis Morar
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            +1.919.640.2603 - mina.pouros@example.net
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/5"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD//gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2NjIpLCBxdWFsaXR5ID0gNzUK/9sAQwAIBgYHBgUIBwcHCQkICgwUDQwLCwwZEhMPFB0aHx4dGhwcICQuJyAiLCMcHCg3KSwwMTQ0NB8nOT04MjwuMzQy/9sAQwEJCQkMCwwYDQ0YMiEcITIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy/8AAEQgA+gD6AwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8Anooorwz5oKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiikJCqWYgAckntTAWiq/260/5+oP+/go+3Wn/AD9Qf9/BV+yn2YWZYoqv9utP+fqD/v4KPt1p/wA/UH/fwUeyn2YWZYoqv9utP+fqD/v4KPt1p/z9Qf8AfwUeyn2YWZYoqv8AbrT/AJ+oP+/go+3Wn/P1B/38FHsp9mFmWKKr/brT/n6g/wC/go+3Wn/P1B/38FHsp9mFmWKKr/brT/n6g/7+Cj7daf8AP1B/38FHsp9mFmWKKr/brT/n6g/7+Cj7daf8/UH/AH8FHsp9mFmWKKr/AG60/wCfqD/v4KPt1p/z9Qf9/BR7KfZhZliiq/260/5+oP8Av4KPt1p/z9Qf9/BR7KfZhZliiq/260/5+oP+/go+3Wn/AD9Qf9/BR7KfZhZliiq/260/5+oP+/go+3Wn/P1B/wB/BR7KfZhZliiq/wButP8An6g/7+CpkdJEDxurqehU5BqXCUdWgsOoooqQCiiigAooooAKhvP+PK4/65t/KpqhvP8AjyuP+ubfyq6fxr1BbnC0UUV9sdgUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFdhon/IHg/4F/wChGuPrsNE/5A8H/Av/AEI15WcfwF6/ozKr8JoUUUV82YBRRRQAUUUUAFQ3n/Hlcf8AXNv5VNUN5/x5XH/XNv5VdP416gtzhaKKK+2OwKKKKACiiigAooroNB8Fa74jAexsmFuT/wAfEp2R/gT1/DNKUlFXY0m3ZHP0V3Xib4bT+F/Dh1O61GOaXzFj8qKM7RnPO4n29K4WlCcZq8Ryg4uzCiiiqJCiiigAooooAKKKKACiiigAooooAK7DRP8AkDwf8C/9CNcfXYaJ/wAgeD/gX/oRrys4/gL1/RmVX4TQooor5swCiiigAooooAKhvP8AjyuP+ubfyqaobz/jyuP+ubfyq6fxr1BbnC0UUV9sdgUUUUAFFFFAHZfDHR7HWvFwh1CATwxQNMI2+6WBUDI7jnpX0KiLGioihVUYAAwAK8I+Dv8AyOkv/XnJ/wChJXvFeZi2/aWPQwq9y5wnxd/5Edv+vmP+teBV778Xf+RHb/r5j/rXgVdOD/hmGK+MKKKK6jmCiiigAooooAKKKKACiiigAooooAK7DRP+QPB/wL/0I1x9dhon/IHg/wCBf+hGvKzj+AvX9GZVfhNCiiivmzAKKKKACiiigAqG8/48rj/rm38qmqG8/wCPK4/65t/Krp/GvUFucLRRRX2x2BRRRQAUUUUAegfB3/kdJf8Arzk/9CSveK8H+Dv/ACOkv/XnJ/6Ele8V5mL/AIh6OG/hnCfF3/kR2/6+Y/614FXvvxd/5Edv+vmP+teBV04P+Gc+K+MKKKK6jmCiiigAooooAKKKKACiiigAooooAK7DRP8AkDwf8C/9CNcfXYaJ/wAgeD/gX/oRrys4/gL1/RmVX4TQooor5swCiiigAooooAKhvP8AjyuP+ubfyqaobz/jyuP+ubfyq6fxr1BbnC0UUV9sdgUUUUAFFFFAHoHwd/5HSX/rzk/9CSveK8H+Dv8AyOkv/XnJ/wChJXvFeZi/4h6OG/hnCfF3/kR2/wCvmP8ArXgVe+/F3/kR2/6+Y/614FXTg/4Zz4r4woq7ZaPqWpf8eOn3Vz7wwsw/QVqjwJ4pZdw0O7x7qAa6HOK3ZgoyeyOdorTvfDutacpa80q9gQdXeFgv54xWZVJp7Caa3CiiigQUUUUAFFFFABRRRQAV2Gif8geD/gX/AKEa4+uw0T/kDwf8C/8AQjXlZx/AXr+jMqvwmhRRRXzZgFFFFABRRRQAVDef8eVx/wBc2/lU1Q3n/Hlcf9c2/lV0/jXqC3OFooor7Y7AooooAKKKKAPQPg7/AMjpL/15yf8AoSV7xXg/wd/5HSX/AK85P/Qkr3ivMxf8Q9HDfwzmfHegXfiXw8um2ZjWRrhGZ5DgKozk1R8PfDLQdERJLiEahdjrLcLlQfZOg/HJ967SisVVko8qehq6cXLmaERFjQIihVAwABgClqOaeK3iMs8qRRr1d2CgfiayG8Y+G0k2Nrun7v8Ar4U/rmoUW9kU2lubdc3rvgTw/r6MbiySG4PS4twEfPqccH8Qa3LS+tL+LzbO6guI/wC9DIHH6VYpqUovTQTSktT518XfD/U/CxNwP9L08ni4RcbfZx2+vSuRr61lijnieKVFkjcFWRhkMD1BFeCfEXwN/wAI1eC+sFJ0u4bAHXyX/un29Py+voYfE8/uy3OKtQ5fejscLRRRXWcoUUUUAFFFFABXYaJ/yB4P+Bf+hGuPrsNE/wCQPB/wL/0I15WcfwF6/ozKr8JoUUUV82YBRRRQAUUUUAFQ3n/Hlcf9c2/lU1Q3n/Hlcf8AXNv5VdP416gtzhaKKK+2OwKKKKACiiigD0D4O/8AI6S/9ecn/oSV7xXg/wAHf+R0l/685P8A0JK94rzMX/EPRw38MK4zx14+t/CkItbdVn1ORcrGT8sY/vN/Qd66bV9Si0jSLvUZuY7eJpCPXA4H4nivl7UtQudV1G4v7ty887l3P9B7DpSw1FVHeWyDEVXBWW5Pq+u6nrtybjUryW4fOQGPyr9F6D8KzqUAsQACSeABXTwfDvxXcWguY9HlCEZAd0ViP90kH9K9JuMFrocCUpPTU5+zvrrTrlbizuZbeZejxMVP6V7F4C+Jp1WePSdbZFu3+WG5A2rKf7rDoG9Ox/n41c2s9ncvb3MMkM0Zw8cilWU+4NRqxVgykgg5BHapqUo1FqVTqSpvQ+t6pavpdvrWlXOnXa7oZ0Kn1B7Ee4OD+FYvgHxA3iPwpb3MzbrqEmCc+rLjn8QQfxrp68hpwlbqj001KN+58panp82k6pc6fcDEtvIY298HqPY9aqV6L8YtNW18UwXyLgXkALe7qcH9NtedV7FOfPBSPLqR5ZNBRRRVkBRRRQAV2Gif8geD/gX/AKEa4+uw0T/kDwf8C/8AQjXlZx/AXr+jMqvwmhRRRXzZgFFFFABRRRQAVDef8eVx/wBc2/lU1Q3n/Hlcf9c2/lV0/jXqC3OFooor7Y7AooooAKKKKAPQPg7/AMjpL/15yf8AoSV7xXz38K7tbbx5aoxwJ45Ivx25H6rX0JXmYtfvD0ML8BxPxXmeLwFcqpwJZY0b6bs/0r59r6S+IGmPqvgjUoIlLSogmQDqShDH9ARXzbXRg2uRrzMMUvfO/wDhHpltf+LZJ7hVc2kBljU8/PkAH8Mn8cV7zXzD4V8Rz+F9di1GFPMUApLETjeh6jP4A/UV7XB8U/CctoJnvpIXxkwvA5YH04BH61liqc3O6V0a4apBRs3Y5z406XbfYdP1VVVbnzfIYjq6lSRn6Y/WvHa7Dx942Pi2+iS3jeKwts+Ur/edj1Y+nsP8a4+uqhGUaaUjmrSUpto9f+CU7GLWYCfkVonA9CdwP8hXrNeQ/BH/AFmtfSH/ANnr16vPxP8AFZ3Yf+Gjyj42oDa6NJ/EHlX8CF/wrx6vWPjZdq1zpFmD8yJJKw9iVA/9BNeT134b+EjixH8RhRRRW5iFFFFABXYaJ/yB4P8AgX/oRrj67DRP+QPB/wAC/wDQjXlZx/AXr+jMqvwmhRRRXzZgFFFFABRRRQAVDef8eVx/1zb+VTVDef8AHlcf9c2/lV0/jXqC3OFooor7Y7AooooAKKKKALel38ml6raX8X+st5VkA9cHOK+prK7hv7GC8t23wzxiRG9QRkV8nV678JfF6BP+EcvpMHJazZj1zyU/qPx9q5MXT5o8y6HVhqnLLlfU9bIyMHpXz98Q/BU3hzU3vbWInSrh8oyjiJj/AAH09vb6V9A1FcW8N3byW9zEksMg2vG65DD3FcVGq6crnVVpKorHyZRXtGu/BuyuZWm0a8NoTz5EwLp+B6gfnXLt8HfEqybRLp7D+8Jmx/6DmvSjiKbW5wyoVE9jz+ium8WeCrzwhFZG9uoJpLrf8sOSF27e5Az970rma1jJSV0ZSi4uzPWvgj/rNa+kP/s9evV5D8Ef9ZrX0h/9nrpviV4vTw/ozWNtJ/xMrxCqYPMaHgv7eg9/pXm14OddxR6FGSjRTZ5N8QNaXXfGN5PE26CEiCIjoVXqR9Tk/jXMUUV6UYqKSR58m5O7CiiimIKKKKACuw0T/kDwf8C/9CNcfXYaJ/yB4P8AgX/oRrys4/gL1/RmVX4TQooor5swCiiigAooooAKhvP+PK4/65t/KpqhvP8AjyuP+ubfyq6fxr1BbnC0UUV9sdgUUUUAFFFFABTo5HikWSNmR1IZWU4II6EU2igD23wN8TrfUY4tN12VYL0YVLluEm+v91v0Nel5yMivkeup8P8AxB1/w8qww3IuLVekFxllA9j1H4HFcVXCXd4HXSxNtJn0fRXl+n/GnTpFA1HTLmB+5gZZB+uDWuPi14VK5M10D6GA5rkdCouh0qtTfU5343dNE/7bf+yV5FXefEnxjpnittPXTluALbzN7SoFB3bcY5P901wdelh4uNNJnBXalUbR2XgjxjD4QsdXk8kzXdwI1gT+HI3ZLH0GRx3/AFrmNS1K71fUJr6+maW4lbLMf5D0A9KqUVooJScurIc20o9EFFFFUSFFFFABRRRQAV2Gif8AIHg/4F/6Ea4+uw0T/kDwf8C/9CNeVnH8Bev6Myq/CaFFFFfNmAUUUUAFFFFABUN5/wAeVx/1zb+VTVDef8eVx/1zb+VXT+NeoLc4WiiivtjsCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArsNE/5A8H/AAL/ANCNcfXYaJ/yB4P+Bf8AoRrys4/gL1/RmVX4TQooor5swCiiigAooooAKhvP+PK4/wCubfyqamuiyIyMMqwII9qqLtJMEcDRXYf2Jp3/AD7/APj7f40f2Jp3/Pv/AOPt/jX0X9sUOz/D/M39rE4+iuw/sTTv+ff/AMfb/Gj+xNO/59//AB9v8aP7Yodn+H+Ye1icfRXYf2Jp3/Pv/wCPt/jR/Ymnf8+//j7f40f2xQ7P8P8AMPaxOPorsP7E07/n3/8AH2/xo/sTTv8An3/8fb/Gj+2KHZ/h/mHtYnH0V2H9iad/z7/+Pt/jR/Ymnf8APv8A+Pt/jR/bFDs/w/zD2sTj6K7D+xNO/wCff/x9v8aP7E07/n3/APH2/wAaP7Yodn+H+Ye1icfRXYf2Jp3/AD7/APj7f40f2Jp3/Pv/AOPt/jR/bFDs/wAP8w9rE4+iuw/sTTv+ff8A8fb/ABo/sTTv+ff/AMfb/Gj+2KHZ/h/mHtYnH0V2H9iad/z7/wDj7f40f2Jp3/Pv/wCPt/jR/bFDs/w/zD2sTj6K7D+xNO/59/8Ax9v8aP7E07/n3/8AH2/xo/tih2f4f5h7WJx9Fdh/Ymnf8+//AI+3+NH9iad/z7/+Pt/jR/bFDs/w/wAw9rE4+uw0T/kDwf8AAv8A0I0f2Jp3/Pv/AOPt/jVyCCO2hWKJdqL0Gc+9cWPx9PEU1CCe99fn5kzmpKyJKKKK8gyCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP/9k="
                                                             alt="Clementina Leannon">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Clementina Leannon
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            +1-678-794-4710 - jefferey.schamberger@example.net
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/6"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Alene Gusikowski">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Alene Gusikowski
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            559-917-1372 - fvonrueden@example.org
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/7"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Monte Barton">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Monte Barton
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            689.827.8127 - stamm.fleta@example.net
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/9"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Asha Wintheiser">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Asha Wintheiser
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            (225) 206-7328 - katrine73@example.net
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://cms.botble.com/admin/contacts/edit/10"
                                           class="text-decoration-none">
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <img class="avatar"
                                                             src="data:image/jpeg;base64,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"
                                                             alt="Rosanna Casper">
                                                    </div>
                                                    <div class="col align-items-center">
                                                        <p class="text-truncate mb-2">
                                                            Rosanna Casper
                                                            <time class="small text-muted" title="2025-03-07 07:46:45"
                                                                  datetime="2025-03-07 07:46:45">
                                                                2025-03-07 07:46:45
                                                            </time>
                                                        </p>
                                                        <p class="text-secondary text-truncate mt-n1 mb-0">
                                                            978.966.5203 - pmarks@example.org
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="dropdown nav-item">
                        <a href="https://cms.botble.com/admin/system/users/profile/1"
                           class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown"
                           aria-label="Open user menu">
                            <span class="crop-image-original avatar avatar-sm"
                                  style="background-image: url(data:image/jpeg;base64,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)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Jeremy Durgan</div>
                                <div class="mt-1 small text-muted">walter.angelina@abbott.com</div>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
                            <a class="dropdown-item" href="https://cms.botble.com/admin/system/users/profile/1">
                                <svg class="icon dropdown-item-icon svg-icon-ti-ti-user"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                </svg>
                                Profile

                            </a>

                            <a class="dropdown-item" href="https://cms.botble.com/admin/logout">
                                <svg class="icon dropdown-item-icon svg-icon-ti-ti-logout"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                    <path d="M9 12h12l-3 -3"></path>
                                    <path d="M18 15l3 -3"></path>
                                </svg>
                                Logout

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <div class="row flex-fill align-items-center">
                            <div class="col">
                                <ul class="navbar-nav ">
                                    <li class="nav-item ">
                                        <a class="nav-link nav-priority--9999" href="https://cms.botble.com/admin"
                                           id="cms-core-dashboard" title="Dashboard">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Dashboard">
            <svg class="icon  svg-icon-ti-ti-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Dashboard

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item active ">
                                        <a class="nav-link nav-priority-2 active show"
                                           href="https://cms.botble.com/admin/pages" id="cms-core-page" title="Pages">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Pages">
            <svg class="icon  svg-icon-ti-ti-notebook" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18"></path>
  <path d="M13 8l2 0"></path>
  <path d="M13 12l2 0"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Pages

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle nav-priority-3"
                                           href="https://cms.botble.com/admin/pages#cms-plugins-blog"
                                           id="cms-plugins-blog" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                           role="button" aria-expanded="false" title="Blog">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Blog">
            <svg class="icon  svg-icon-ti-ti-article" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
  <path d="M7 8h10"></path>
  <path d="M7 12h10"></path>
  <path d="M7 16h10"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Blog

    </span>
                                        </a>


                                        <div class="dropdown-menu animate slideIn dropdown-menu-start">


                                            <a class="dropdown-item nav-priority-10"
                                               href="https://cms.botble.com/admin/blog/posts" id="cms-plugins-blog-post"
                                               title="Posts">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Posts">
            <svg class="icon  svg-icon-ti-ti-file-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
  <path d="M9 9l1 0"></path>
  <path d="M9 13l6 0"></path>
  <path d="M9 17l6 0"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Posts

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-20"
                                               href="https://cms.botble.com/admin/blog/categories"
                                               id="cms-plugins-blog-categories" title="Categories">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Categories">
            <svg class="icon  svg-icon-ti-ti-folder" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Categories

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-30"
                                               href="https://cms.botble.com/admin/blog/tags" id="cms-plugins-blog-tags"
                                               title="Tags">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Tags">
            <svg class="icon  svg-icon-ti-ti-tag" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path
      d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Tags

    </span>
                                            </a>

                                        </div>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link nav-priority-5" href="https://cms.botble.com/admin/galleries"
                                           id="cms-plugins-gallery" title="Galleries">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Galleries">
            <svg class="icon  svg-icon-ti-ti-camera" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"></path>
  <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Galleries

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link nav-priority-50" href="https://cms.botble.com/admin/members"
                                           id="cms-core-member" title="Members">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Members">
            <svg class="icon  svg-icon-ti-ti-users" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Members

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link nav-priority-99" href="https://cms.botble.com/admin/comments"
                                           id="cms-plugins-fob-comment" title="Comments">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Comments">
            <svg class="icon  svg-icon-ti-ti-messages" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
  <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Comments
        <span class="badge badge-sm bg-primary text-primary-fg badge-pill menu-item-count unapproved-comments-count"
              data-url="https://cms.botble.com/admin/menu-items-count" style="display: none"></span>

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle nav-priority-120"
                                           href="https://cms.botble.com/admin/pages#cms-plugins-contact"
                                           id="cms-plugins-contact" data-bs-toggle="dropdown"
                                           data-bs-auto-close="outside" role="button" aria-expanded="false"
                                           title="Contact">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Contact">
            <svg class="icon  svg-icon-ti-ti-mail" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
  <path d="M3 7l9 6l9 -6"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Contact
        <span class="badge badge-sm bg-primary text-primary-fg badge-pill menu-item-count unread-contacts"
              data-url="https://cms.botble.com/admin/menu-items-count" style="">8</span>

    </span>
                                        </a>


                                        <div class="dropdown-menu animate slideIn dropdown-menu-start">


                                            <a class="dropdown-item nav-priority-120"
                                               href="https://cms.botble.com/admin/contacts"
                                               id="cms-plugins-contact-list" title="Contacts">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Contacts">
            <svg class="icon  svg-icon-ti-ti-cube" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M21 16.008v-8.018a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.008c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0l7 -4.008c.619 -.355 1 -1.01 1 -1.718z"></path>
  <path d="M12 22v-10"></path>
  <path d="M12 12l8.73 -5.04"></path>
  <path d="M3.27 6.96l8.73 5.04"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Contacts

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-130"
                                               href="https://cms.botble.com/admin/contacts/custom-fields"
                                               id="cms-plugins-contact-custom-fields" title="Custom Fields">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom Fields">
            <svg class="icon  svg-icon-ti-ti-cube-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M21 12.5v-4.509a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.007c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0"></path>
  <path d="M12 22v-10"></path>
  <path d="M12 12l8.73 -5.04"></path>
  <path d="M3.27 6.96l8.73 5.04"></path>
  <path d="M16 19h6"></path>
  <path d="M19 16v6"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Custom Fields

    </span>
                                            </a>

                                        </div>
                                    </li>

                                    <li class="nav-item d-flex d-md-none">
                                        <a class="nav-link nav-priority-400"
                                           href="https://cms.botble.com/admin/custom-fields"
                                           id="cms-plugins-custom-field" title="Custom Fields">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom Fields">
            <svg class="icon  svg-icon-ti-ti-table-options" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 21h-7a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7"></path>
  <path d="M3 10h18"></path>
  <path d="M10 3v18"></path>
  <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M19.001 15.5v1.5"></path>
  <path d="M19.001 21v1.5"></path>
  <path d="M22.032 17.25l-1.299 .75"></path>
  <path d="M17.27 20l-1.3 .75"></path>
  <path d="M15.97 17.25l1.3 .75"></path>
  <path d="M20.733 20l1.3 .75"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Custom Fields

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item d-flex d-md-none">
                                        <a class="nav-link nav-priority-410" href="https://cms.botble.com/admin/blocks"
                                           id="cms-plugins-block" title="Static Blocks">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Static Blocks">
            <svg class="icon  svg-icon-ti-ti-code" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M7 8l-4 4l4 4"></path>
  <path d="M17 8l4 4l-4 4"></path>
  <path d="M14 4l-4 16"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Static Blocks

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item d-flex d-md-none">
                                        <a class="nav-link nav-priority-999" href="https://cms.botble.com/admin/media"
                                           id="cms-core-media" title="Media">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Media">
            <svg class="icon  svg-icon-ti-ti-folder" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Media

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item dropdown d-flex d-md-none">
                                        <a class="nav-link dropdown-toggle nav-priority-2000"
                                           href="https://cms.botble.com/admin/pages#cms-core-appearance"
                                           id="cms-core-appearance" data-bs-toggle="dropdown"
                                           data-bs-auto-close="outside" role="button" aria-expanded="false"
                                           title="Appearance">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Appearance">
            <svg class="icon  svg-icon-ti-ti-brush" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 21v-4a4 4 0 1 1 4 4h-4"></path>
  <path d="M21 3a16 16 0 0 0 -12.8 10.2"></path>
  <path d="M21 3a16 16 0 0 1 -10.2 12.8"></path>
  <path d="M10.6 9a9 9 0 0 1 4.4 4.4"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Appearance

    </span>
                                        </a>


                                        <div class="dropdown-menu animate slideIn dropdown-menu-start">


                                            <a class="dropdown-item nav-priority-1"
                                               href="https://cms.botble.com/admin/theme/all" id="cms-core-theme"
                                               title="Themes">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Themes">
            <svg class="icon  svg-icon-ti-ti-palette" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25"></path>
  <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Themes

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-2"
                                               href="https://cms.botble.com/admin/menus" id="cms-core-menu"
                                               title="Menus">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Menus">
            <svg class="icon  svg-icon-ti-ti-tournament" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M4 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M4 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M4 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M6 12h3a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-3"></path>
  <path d="M6 4h7a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-2"></path>
  <path d="M14 10h4"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Menus

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-3"
                                               href="https://cms.botble.com/admin/widgets" id="cms-core-widget"
                                               title="Widgets">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Widgets">
            <svg class="icon  svg-icon-ti-ti-layout" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
  <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
  <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Widgets

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-4"
                                               href="https://cms.botble.com/admin/theme/options"
                                               id="cms-core-theme-option" title="Theme Options">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Theme Options">
            <svg class="icon  svg-icon-ti-ti-list-tree" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M9 6h11"></path>
  <path d="M12 12h8"></path>
  <path d="M15 18h5"></path>
  <path d="M5 6v.01"></path>
  <path d="M8 12v.01"></path>
  <path d="M11 18v.01"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Theme Options

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-5"
                                               href="https://cms.botble.com/admin/theme/custom-css"
                                               id="cms-core-appearance-custom-css" title="Custom CSS">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom CSS">
            <svg class="icon  svg-icon-ti-ti-file-type-css" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
  <path d="M8 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0"></path>
  <path
      d="M11 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
  <path
      d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Custom CSS

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-6"
                                               href="https://cms.botble.com/admin/theme/custom-js"
                                               id="cms-core-appearance-custom-js" title="Custom JS">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom JS">
            <svg class="icon  svg-icon-ti-ti-file-type-js" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M3 15h3v4.5a1.5 1.5 0 0 1 -3 0"></path>
  <path
      d="M9 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Custom JS

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-6"
                                               href="https://cms.botble.com/admin/theme/custom-html"
                                               id="cms-core-appearance-custom-html" title="Custom HTML">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom HTML">
            <svg class="icon  svg-icon-ti-ti-file-type-html" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
  <path d="M2 21v-6"></path>
  <path d="M5 15v6"></path>
  <path d="M2 18h3"></path>
  <path d="M20 15v6h2"></path>
  <path d="M13 21v-6l2 3l2 -3v6"></path>
  <path d="M7.5 15h3"></path>
  <path d="M9 15v6"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Custom HTML

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-6"
                                               href="https://cms.botble.com/admin/theme/robots-txt"
                                               id="cms-core-appearance-robots-txt" title="Robots.txt Editor">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Robots.txt Editor">
            <svg class="icon  svg-icon-ti-ti-file-type-txt" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M16.5 15h3"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
  <path d="M4.5 15h3"></path>
  <path d="M6 15v6"></path>
  <path d="M18 15v6"></path>
  <path d="M10 15l4 6"></path>
  <path d="M10 21l4 -6"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Robots.txt Editor

    </span>
                                            </a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown d-flex d-md-none">
                                        <a class="nav-link dropdown-toggle nav-priority-3000"
                                           href="https://cms.botble.com/admin/pages#cms-core-plugins"
                                           id="cms-core-plugins" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                           role="button" aria-expanded="false" title="Plugins">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Plugins">
            <svg class="icon  svg-icon-ti-ti-plug" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z"></path>
  <path d="M4 20l3.5 -3.5"></path>
  <path d="M15 4l-3.5 3.5"></path>
  <path d="M20 9l-3.5 3.5"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Plugins

    </span>
                                        </a>


                                        <div class="dropdown-menu animate slideIn dropdown-menu-start">


                                            <a class="dropdown-item nav-priority-1"
                                               href="https://cms.botble.com/admin/plugins/installed"
                                               id="cms-core-plugins-installed" title="Installed Plugins">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Installed Plugins">
            <svg class="icon  svg-icon-ti-ti-square-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
  <path d="M9 12l2 2l4 -4"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Installed Plugins

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-2"
                                               href="https://cms.botble.com/admin/plugins/new"
                                               id="cms-core-plugins-marketplace" title="Add New Plugin">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Add New Plugin">
            <svg class="icon  svg-icon-ti-ti-square-rounded-plus" xmlns="http://www.w3.org/2000/svg" width="24"
                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
  <path d="M15 12h-6"></path>
  <path d="M12 9v6"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Add New Plugin

    </span>
                                            </a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown d-flex d-md-none">
                                        <a class="nav-link dropdown-toggle nav-priority-9000"
                                           href="https://cms.botble.com/admin/pages#cms-core-tools" id="cms-core-tools"
                                           data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                           aria-expanded="false" title="Tools">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Tools">
            <svg class="icon  svg-icon-ti-ti-tool" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Tools

    </span>
                                        </a>


                                        <div class="dropdown-menu animate slideIn dropdown-menu-start">


                                            <a class="dropdown-item nav-priority-9000"
                                               href="https://cms.botble.com/admin/tools/data-synchronize"
                                               id="cms-packages-data-synchronize" title="Export/Import Data">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Export/Import Data">
            <svg class="icon  svg-icon-ti-ti-package-import" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5"></path>
  <path d="M12 12l8 -4.5"></path>
  <path d="M12 12v9"></path>
  <path d="M12 12l-8 -4.5"></path>
  <path d="M22 18h-7"></path>
  <path d="M18 15l-3 3l3 3"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Export/Import Data

    </span>
                                            </a>

                                        </div>
                                    </li>
                                    <li class="nav-item d-flex d-md-none">
                                        <a class="nav-link nav-priority-9999"
                                           href="https://cms.botble.com/admin/settings" id="cms-core-settings"
                                           title="Settings">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Settings">
            <svg class="icon  svg-icon-ti-ti-settings" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
  <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Settings

    </span>
                                        </a>


                                    </li>
                                    <li class="nav-item d-flex d-md-none">
                                        <a class="nav-link nav-priority-10000"
                                           href="https://cms.botble.com/admin/system" id="cms-core-system"
                                           title="Platform Administration">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Platform Administration">
            <svg class="icon  svg-icon-ti-ti-user-shield" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M6 21v-2a4 4 0 0 1 4 -4h2"></path>
  <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z"></path>
  <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
</svg>        </span>

                                            <span class="nav-link-title text-truncate">
        Platform Administration

    </span>
                                        </a>


                                    </li>

                                    <li class="nav-item dropdown d-none d-md-flex">
                                        <a class="nav-link dropdown-toggle nav-priority-9999"
                                           href="https://cms.botble.com/admin/pages#others" id="others"
                                           data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                           aria-expanded="false" title="Others">

    <span class="nav-link-title text-truncate">
        <svg class="icon  svg-icon-ti-ti-dots" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
</svg>

    </span>
                                        </a>


                                        <div class="dropdown-menu animate slideIn dropdown-menu-end">


                                            <a class="dropdown-item nav-priority-400"
                                               href="https://cms.botble.com/admin/custom-fields"
                                               id="cms-plugins-custom-field" title="Custom Fields">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom Fields">
            <svg class="icon  svg-icon-ti-ti-table-options" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 21h-7a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7"></path>
  <path d="M3 10h18"></path>
  <path d="M10 3v18"></path>
  <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M19.001 15.5v1.5"></path>
  <path d="M19.001 21v1.5"></path>
  <path d="M22.032 17.25l-1.299 .75"></path>
  <path d="M17.27 20l-1.3 .75"></path>
  <path d="M15.97 17.25l1.3 .75"></path>
  <path d="M20.733 20l1.3 .75"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Custom Fields

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-410"
                                               href="https://cms.botble.com/admin/blocks" id="cms-plugins-block"
                                               title="Static Blocks">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Static Blocks">
            <svg class="icon  svg-icon-ti-ti-code" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M7 8l-4 4l4 4"></path>
  <path d="M17 8l4 4l-4 4"></path>
  <path d="M14 4l-4 16"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Static Blocks

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-999"
                                               href="https://cms.botble.com/admin/media" id="cms-core-media"
                                               title="Media">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Media">
            <svg class="icon  svg-icon-ti-ti-folder" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Media

    </span>
                                            </a>


                                            <div class="dropdown">

                                                <a class="dropdown-item dropdown-toggle nav-priority-2000"
                                                   href="https://cms.botble.com/admin/pages#cms-core-appearance"
                                                   id="cms-core-appearance" data-bs-toggle="dropdown"
                                                   data-bs-auto-close="outside" role="button" aria-expanded="false"
                                                   title="Appearance">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Appearance">
            <svg class="icon  svg-icon-ti-ti-brush" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 21v-4a4 4 0 1 1 4 4h-4"></path>
  <path d="M21 3a16 16 0 0 0 -12.8 10.2"></path>
  <path d="M21 3a16 16 0 0 1 -10.2 12.8"></path>
  <path d="M10.6 9a9 9 0 0 1 4.4 4.4"></path>
</svg>        </span>

                                                    <span class="nav-link-title text-truncate">
        Appearance

    </span>
                                                </a>

                                                <div class="dropdown-menu animate slideIn">
                                                    <a class="dropdown-item nav-priority-1"
                                                       href="https://cms.botble.com/admin/theme/all" id="cms-core-theme"
                                                       title="Themes">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Themes">
            <svg class="icon  svg-icon-ti-ti-palette" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25"></path>
  <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
  <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Themes

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-2"
                                                       href="https://cms.botble.com/admin/menus" id="cms-core-menu"
                                                       title="Menus">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Menus">
            <svg class="icon  svg-icon-ti-ti-tournament" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M4 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M4 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M4 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
  <path d="M6 12h3a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-3"></path>
  <path d="M6 4h7a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-2"></path>
  <path d="M14 10h4"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Menus

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-3"
                                                       href="https://cms.botble.com/admin/widgets" id="cms-core-widget"
                                                       title="Widgets">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Widgets">
            <svg class="icon  svg-icon-ti-ti-layout" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
  <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
  <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Widgets

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-4"
                                                       href="https://cms.botble.com/admin/theme/options"
                                                       id="cms-core-theme-option" title="Theme Options">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Theme Options">
            <svg class="icon  svg-icon-ti-ti-list-tree" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M9 6h11"></path>
  <path d="M12 12h8"></path>
  <path d="M15 18h5"></path>
  <path d="M5 6v.01"></path>
  <path d="M8 12v.01"></path>
  <path d="M11 18v.01"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Theme Options

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-5"
                                                       href="https://cms.botble.com/admin/theme/custom-css"
                                                       id="cms-core-appearance-custom-css" title="Custom CSS">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom CSS">
            <svg class="icon  svg-icon-ti-ti-file-type-css" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
  <path d="M8 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0"></path>
  <path
      d="M11 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
  <path
      d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Custom CSS

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-6"
                                                       href="https://cms.botble.com/admin/theme/custom-js"
                                                       id="cms-core-appearance-custom-js" title="Custom JS">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom JS">
            <svg class="icon  svg-icon-ti-ti-file-type-js" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M3 15h3v4.5a1.5 1.5 0 0 1 -3 0"></path>
  <path
      d="M9 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Custom JS

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-6"
                                                       href="https://cms.botble.com/admin/theme/custom-html"
                                                       id="cms-core-appearance-custom-html" title="Custom HTML">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom HTML">
            <svg class="icon  svg-icon-ti-ti-file-type-html" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
  <path d="M2 21v-6"></path>
  <path d="M5 15v6"></path>
  <path d="M2 18h3"></path>
  <path d="M20 15v6h2"></path>
  <path d="M13 21v-6l2 3l2 -3v6"></path>
  <path d="M7.5 15h3"></path>
  <path d="M9 15v6"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Custom HTML

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-6"
                                                       href="https://cms.botble.com/admin/theme/robots-txt"
                                                       id="cms-core-appearance-robots-txt" title="Robots.txt Editor">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Robots.txt Editor">
            <svg class="icon  svg-icon-ti-ti-file-type-txt" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
  <path d="M16.5 15h3"></path>
  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4"></path>
  <path d="M4.5 15h3"></path>
  <path d="M6 15v6"></path>
  <path d="M18 15v6"></path>
  <path d="M10 15l4 6"></path>
  <path d="M10 21l4 -6"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Robots.txt Editor

    </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="dropdown">

                                                <a class="dropdown-item dropdown-toggle nav-priority-3000"
                                                   href="https://cms.botble.com/admin/pages#cms-core-plugins"
                                                   id="cms-core-plugins" data-bs-toggle="dropdown"
                                                   data-bs-auto-close="outside" role="button" aria-expanded="false"
                                                   title="Plugins">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Plugins">
            <svg class="icon  svg-icon-ti-ti-plug" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z"></path>
  <path d="M4 20l3.5 -3.5"></path>
  <path d="M15 4l-3.5 3.5"></path>
  <path d="M20 9l-3.5 3.5"></path>
</svg>        </span>

                                                    <span class="nav-link-title text-truncate">
        Plugins

    </span>
                                                </a>

                                                <div class="dropdown-menu animate slideIn">
                                                    <a class="dropdown-item nav-priority-1"
                                                       href="https://cms.botble.com/admin/plugins/installed"
                                                       id="cms-core-plugins-installed" title="Installed Plugins">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Installed Plugins">
            <svg class="icon  svg-icon-ti-ti-square-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
  <path d="M9 12l2 2l4 -4"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Installed Plugins

    </span>
                                                    </a>
                                                    <a class="dropdown-item nav-priority-2"
                                                       href="https://cms.botble.com/admin/plugins/new"
                                                       id="cms-core-plugins-marketplace" title="Add New Plugin">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Add New Plugin">
            <svg class="icon  svg-icon-ti-ti-square-rounded-plus" xmlns="http://www.w3.org/2000/svg" width="24"
                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
  <path d="M15 12h-6"></path>
  <path d="M12 9v6"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Add New Plugin

    </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="dropdown">

                                                <a class="dropdown-item dropdown-toggle nav-priority-9000"
                                                   href="https://cms.botble.com/admin/pages#cms-core-tools"
                                                   id="cms-core-tools" data-bs-toggle="dropdown"
                                                   data-bs-auto-close="outside" role="button" aria-expanded="false"
                                                   title="Tools">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Tools">
            <svg class="icon  svg-icon-ti-ti-tool" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5"></path>
</svg>        </span>

                                                    <span class="nav-link-title text-truncate">
        Tools

    </span>
                                                </a>

                                                <div class="dropdown-menu animate slideIn">
                                                    <a class="dropdown-item nav-priority-9000"
                                                       href="https://cms.botble.com/admin/tools/data-synchronize"
                                                       id="cms-packages-data-synchronize" title="Export/Import Data">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Export/Import Data">
            <svg class="icon  svg-icon-ti-ti-package-import" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5"></path>
  <path d="M12 12l8 -4.5"></path>
  <path d="M12 12v9"></path>
  <path d="M12 12l-8 -4.5"></path>
  <path d="M22 18h-7"></path>
  <path d="M18 15l-3 3l3 3"></path>
</svg>        </span>

                                                        <span class="nav-link-title text-truncate">
        Export/Import Data

    </span>
                                                    </a>
                                                </div>
                                            </div>


                                            <a class="dropdown-item nav-priority-9999"
                                               href="https://cms.botble.com/admin/settings" id="cms-core-settings"
                                               title="Settings">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Settings">
            <svg class="icon  svg-icon-ti-ti-settings" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path
      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
  <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Settings

    </span>
                                            </a>


                                            <a class="dropdown-item nav-priority-10000"
                                               href="https://cms.botble.com/admin/system" id="cms-core-system"
                                               title="Platform Administration">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Platform Administration">
            <svg class="icon  svg-icon-ti-ti-user-shield" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M6 21v-2a4 4 0 0 1 4 -4h2"></path>
  <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z"></path>
  <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
</svg>        </span>

                                                <span class="nav-link-title text-truncate">
        Platform Administration

    </span>
                                            </a>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            @yield('content')

            <footer class="footer position-sticky footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="text-start">
                        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-between">
                            <div class="order-2 order-lg-1">
                                Copyright 2025 © Botble Technologies. Version <span class="fw-medium">7.5.5</span>
                            </div>
                            <div class="order-1 order-lg-2">
                                Page loaded in 0.36 seconds
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
</div>


<!-- JAVASCRIPT -->
<script src="{{ asset('monopanel/assets/js/core-ui.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/excanvas.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/ie8.fix.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/core.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/jquery.stickytableheaders.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/spectrum.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/fslightbox.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/language-global.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/bootstrap3-typeahead.min.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/table.js') }}"></script>
<script src="{{ asset('monopanel/assets/js/filter.js') }}"></script>
<div id="stack-footer">
    <div class="modal fade modal-blur" id="global-search-modal" data-bb-toggle="gs-modal" tabindex="-1" role="dialog"
         aria-hidden="true" data-select2-dropdown-parent="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">


                <div class="modal-body">
                    <form method="POST" action="https://cms.botble.com/admin/search" accept-charset="UTF-8"
                          data-bb-toggle="gs-form"><input name="_token" type="hidden"
                                                          value="SkV0cNEtVAdNwrMqG7GEXelbc4A2PhwQjXodgsRH">
                        <div class="mb-3 position-relative input-icon input-icon">
                            <label class="form-label sr-only" for="keyword">
                                Search


                            </label>

                            <div class="input-icon">

            <span class="input-icon-addon">
                    <svg class="icon  svg-icon-ti-ti-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
  <path d="M21 21l-6 -6"></path>
</svg>                </span>

                                <input class="form-control" type="text" name="keyword" id="keyword" placeholder="Search"
                                       tabindex="0" data-bb-toggle="gs-input">


                            </div>
                        </div>
                    </form>

                    <div data-bb-toggle="gs-result">
                        <div class="text-center text-muted">
                            No result found
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                            <span class="text-muted">
            <kbd>
                <svg class="icon  svg-icon-ti-ti-arrow-back" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1"></path>
</svg>            </kbd>
            to select
        </span>

                    <span class="text-muted">
            <kbd>
                <svg class="icon  svg-icon-ti-ti-arrow-narrow-up" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 5l0 14"></path>
  <path d="M16 9l-4 -4"></path>
  <path d="M8 9l4 -4"></path>
</svg>            </kbd>
            <kbd>
                <svg class="icon  svg-icon-ti-ti-arrow-narrow-down" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M12 5l0 14"></path>
  <path d="M16 15l-4 4"></path>
  <path d="M8 15l4 4"></path>
</svg>            </kbd>
            to navigate
        </span>

                    <span class="text-muted">
            <kbd>esc</kbd>
            to close
        </span>
                </div>

            </div>
        </div>
    </div>

    <script type="text/x-custom-template" id="gs-not-result-template">
        <div class="text-center text-muted">
            No result found
        </div>
    </script>

    <script src="{{ asset('monopanel/assets/js/global-search.js') }}"></script>
    <div class="modal modal-blur fade media-modal rv-media-modal" id="rv_media_modal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-full" role="document">
            <div class="modal-content bb-loading">
                <div class="modal-header">
                    <h5 class="modal-title">Media gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-0 modal-body media-modal-body media-modal-loading" id="rv_media_body">
                    <div class="loading-spinner"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-blur" id="image-picker-add-from-url" tabindex="-1" role="dialog" aria-hidden="true"
         data-select2-dropdown-parent="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-has-form " role="document">
            <div class="modal-content">
                <form action="https://cms.botble.com/admin/media/files/download-url" method="POST"
                      id="image-picker-add-from-url-form">
                    <input type="hidden" name="_token" value="SkV0cNEtVAdNwrMqG7GEXelbc4A2PhwQjXodgsRH"
                           autocomplete="off">
                    <div class="modal-header">
                        <h5 class="modal-title">Add from URL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <input type="hidden" name="image-box-target">

                        <div class="mb-3 position-relative">
                            <label class="form-label required" for="url">
                                URL


                            </label>


                            <input class="form-control" type="url" name="url" id="url" required="required"
                                   placeholder="https://">
                        </div>

                        <label class="form-check">
                            <input type="checkbox" id="download_image_to_local_storage"
                                   name="download_image_to_local_storage" class="form-check-input" value="1" checked="">

                            <span class="form-check-label">
            Download image to local storage
        </span>

                            <span class="form-check-description">If it is unchecked, the image will be displayed from the original URL</span>
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" type="button" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button class="btn btn-primary" type="submit" data-bb-toggle="image-picker-add-from-url"
                                form="image-picker-add-from-url-form">

                            Save

                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('monopanel/assets/js/integrate.js') }}"></script>


    <div class="modal fade modal-blur modal fade modal-blur modal-confirm-delete" tabindex="-1" role="dialog"
         aria-hidden="true" data-select2-dropdown-parent="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">


                <div class="modal-status bg-danger"></div>

                <div class="modal-body text-center py-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="mb-2">
                        <svg class="icon icon-lg text-danger svg-icon-ti-ti-alert-triangle"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path>
                            <path d="M12 16h.01"></path>
                        </svg>
                    </div>

                    <h3>Confirm delete</h3>

                    <div class="text-muted text-break">
                        Do you really want to delete this record?
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="w-100 btn btn-danger delete-crud-entry">
                                    Delete
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="w-100 btn btn-" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal-blur modal fade modal-blur delete-many-modal" tabindex="-1" role="dialog"
         aria-hidden="true" data-select2-dropdown-parent="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">


                <div class="modal-status bg-danger"></div>

                <div class="modal-body text-center py-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="mb-2">
                        <svg class="icon icon-lg text-danger svg-icon-ti-ti-alert-triangle"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path>
                            <path d="M12 16h.01"></path>
                        </svg>
                    </div>

                    <h3>Confirm delete</h3>

                    <div class="text-muted text-break">
                        Do you really want to delete selected record(s)?
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="w-100 btn btn-danger delete-many-entry-button">
                                    Delete
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="w-100 btn btn-" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal-blur modal fade modal-blur modal-bulk-change-items" tabindex="-1" role="dialog"
         aria-hidden="true" data-select2-dropdown-parent="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Bulk changes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <div class="modal-bulk-change-content"></div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary  confirm-bulk-change-button" type="button"
                            data-load-url="https://cms.botble.com/admin/tables/filters">

                        Save

                    </button>

                    <button class="btn" type="button" data-bs-dismiss="modal">

                        Cancel

                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal-blur modal fade modal-blur bulk-action-confirm-modal" tabindex="-1" role="dialog"
         aria-hidden="true" data-select2-dropdown-parent="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">


                <div class="modal-status bg-danger"></div>

                <div class="modal-body text-center py-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="mb-2">
                        <svg class="icon icon-lg text-danger svg-icon-ti-ti-alert-triangle"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path>
                            <path d="M12 16h.01"></path>
                        </svg>
                    </div>

                    <h3>''</h3>

                    <div class="text-muted text-break">
                        ''
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="w-100 btn btn-danger confirm-trigger-bulk-actions-button">

                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="w-100 btn btn-" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal-blur modal fade modal-blur single-action-confirm-modal" tabindex="-1" role="dialog"
         aria-hidden="true" data-select2-dropdown-parent="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">


                <div class="modal-status bg-danger"></div>

                <div class="modal-body text-center py-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="mb-2">
                        <svg class="icon icon-lg text-danger svg-icon-ti-ti-alert-triangle"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path>
                            <path d="M12 16h.01"></path>
                        </svg>
                    </div>

                    <h3>''</h3>

                    <div class="text-muted text-break">
                        ''
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="w-100 btn btn-danger confirm-trigger-single-action-button">

                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="w-100 btn btn-" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">$(document).ready(function () {
            $(function () {
                window.LaravelDataTables = window.LaravelDataTables || {};
                window.LaravelDataTables["botble-page-tables-page-table"] = $("#botble-page-tables-page-table").DataTable({
                    "serverSide": true,
                    "processing": true,
                    "ajax": {"url": "https:\/\/cms.botble.com\/admin\/pages?", "method": "POST"},
                    "columns": [{
                        "data": "checkbox",
                        "name": "checkbox",
                        "title": "<input class=\"form-check-input m-0 align-middle table-check-all\" data-set=\".dataTable .checkboxes\" name=\"\" type=\"checkbox\">",
                        "orderable": false,
                        "searchable": false,
                        "defaultContent": "",
                        "className": "w-1 text-start no-column-visibility",
                        "titleAttr": "Checkbox"
                    }, {
                        "data": "id",
                        "name": "id",
                        "title": "ID",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-center no-column-visibility  column-key-0",
                        "width": 20,
                        "class": "text-center no-column-visibility  column-key-0"
                    }, {
                        "data": "name",
                        "name": "name",
                        "title": "Name",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-start  column-key-1",
                        "class": "text-start  column-key-1"
                    }, {
                        "data": "template",
                        "name": "template",
                        "title": "Template",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-start  column-key-2",
                        "class": "text-start  column-key-2"
                    }, {
                        "data": "created_at",
                        "name": "created_at",
                        "title": "Created At",
                        "orderable": true,
                        "searchable": true,
                        "type": "date",
                        "width": 100,
                        "class": " column-key-3",
                        "className": " column-key-3"
                    }, {
                        "data": "status",
                        "name": "status",
                        "title": "Status",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-center  column-key-4",
                        "width": 100,
                        "class": "text-center  column-key-4"
                    }, {
                        "data": "language",
                        "name": "language_meta.lang_meta_id",
                        "title": "<svg style=\"height: 16px; width: auto;\" class=\"flag\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"20\" height=\"15\" fill=\"none\"><mask width=\"20\" height=\"15\" x=\"0\" y=\"0\" maskUnits=\"userSpaceOnUse\"><path fill=\"#fff\" d=\"M0 0h20v15H0z\"\/><\/mask><g mask=\"url(#a)\"><path fill=\"#E31D1C\" fill-rule=\"evenodd\" d=\"M0 0h20v15H0V0z\" clip-rule=\"evenodd\"\/><path fill=\"#F7FCFF\" fill-rule=\"evenodd\" d=\"M0 1.25V2.5h20V1.25H0zm0 2.5V5h20V3.75H0zM0 7.5V6.25h20V7.5H0zm0 1.25V10h20V8.75H0zm0 3.75v-1.25h20v1.25H0zM0 15v-1.25h20V15H0z\" clip-rule=\"evenodd\"\/><path fill=\"#2E42A5\" d=\"M0 0h11.25v8.75H0z\"\/><path fill=\"#F7FCFF\" fill-rule=\"evenodd\" d=\"m1.3 2.717.662-.461.514.37h-.29l.588.52-.2.73h-.31l-.303-.67-.257.67H.935l.589.52-.224.821.662-.461.514.37h-.29l.588.52-.2.73h-.31l-.303-.67-.257.67H.935l.589.52-.224.821.662-.461.641.461-.199-.82.515-.521H2.68l.531-.37.514.37h-.29l.588.52-.224.821.662-.461.641.461-.199-.82.515-.521H5.18l.531-.37.514.37h-.29l.588.52-.224.821.662-.461.641.461-.199-.82.515-.521H7.68l.531-.37.514.37h-.29l.588.52-.224.821.662-.461.641.461-.199-.82.515-.521h-.655l-.303-.67-.257.67H8.83l-.177-.73.515-.52H8.93l.531-.37.641.461-.199-.82.515-.521h-.655l-.303-.67-.257.67H8.83l-.177-.73.515-.52H8.93l.531-.37.641.461-.199-.82.515-.521h-.655L9.46.706l-.257.67h-.769l.589.52-.2.73h-.31l-.303-.67-.257.67H7.58l-.177-.73.515-.52h-.655L6.96.706l-.257.67h-.769l.589.52-.2.73h-.31l-.303-.67-.257.67H5.08l-.177-.73.515-.52h-.655L4.46.706l-.257.67h-.769l.589.52-.2.73h-.31l-.303-.67-.257.67H2.58l-.177-.73.515-.52h-.655L1.96.706l-.257.67H.935l.589.52-.224.821zm7.525 2.409.199-.73-.589-.52h.291l-.514-.37-.53.37h.237l-.515.52.177.73h.373l.257-.67.303.67h.31zm-1.349 0-.514-.37-.53.37h.237l-.515.52.177.73h.373l.257-.67.303.67h.31l.2-.73-.589-.52h.291zm-2.202.52-.2.73h-.31l-.303-.67-.257.67H3.83l-.177-.73.515-.52H3.93l.531-.37.514.37h-.29l.588.52zm.18-.52H5.08l-.177-.73.515-.52H5.18l.531-.37.514.37h-.29l.588.52-.2.73h-.31l-.303-.67-.257.67zm-1.63 0 .2-.73-.589-.52h.291l-.514-.37-.53.37h.237l-.515.52.177.73h.373l.257-.67.303.67h.31zm3.95-1.98-.2.73h-.31l-.303-.67-.257.67H6.33l-.177-.73.515-.52H6.43l.531-.37.514.37h-.29l.588.52zm-2.798-.52-.514-.37-.53.37h.237l-.515.52.177.73h.373l.257-.67.303.67h.31l.2-.73-.589-.52h.291z\" clip-rule=\"evenodd\"\/><\/g><\/svg><svg style=\"height: 16px; width: auto;\" class=\"flag\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"20\" height=\"15\" fill=\"none\"><mask width=\"20\" height=\"15\" x=\"0\" y=\"0\" maskUnits=\"userSpaceOnUse\"><path fill=\"#fff\" d=\"M0 0h20v15H0z\"\/><\/mask><g mask=\"url(#a)\"><path fill=\"#F7FCFF\" fill-rule=\"evenodd\" d=\"M0 0h20v15H0V0z\" clip-rule=\"evenodd\"\/><path fill=\"#E31D1C\" fill-rule=\"evenodd\" d=\"M0 0v15h20V0H0z\" clip-rule=\"evenodd\"\/><mask width=\"20\" height=\"15\" x=\"0\" y=\"0\" maskUnits=\"userSpaceOnUse\"><path fill=\"#fff\" fill-rule=\"evenodd\" d=\"M0 0v15h20V0H0z\" clip-rule=\"evenodd\"\/><\/mask><g mask=\"url(#b)\"><path fill=\"#FFD221\" fill-rule=\"evenodd\" d=\"m10.039 9.987-3.22 2.047L7.9 8.451l-2.296-2.34 3.166-.07 1.4-3.537 1.277 3.584 3.158.055-2.373 2.384 1.108 3.409-3.3-1.949z\" clip-rule=\"evenodd\"\/><\/g><\/g><\/svg><svg style=\"height: 16px; width: auto;\" class=\"flag\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"20\" height=\"15\" fill=\"none\"><mask width=\"20\" height=\"15\" x=\"0\" y=\"0\" maskUnits=\"userSpaceOnUse\"><path fill=\"#fff\" d=\"M0 0h20v15H0z\"\/><\/mask><g mask=\"url(#a)\"><path fill=\"#67BD23\" d=\"M0 0h20v15H0z\"\/><path fill=\"#fff\" fill-rule=\"evenodd\" d=\"M9.024 2.546c-.08.123-.147.3-.147.383v.025c-.001.094-.004.268.107.148.122-.132.24-.287.214-.406-.026-.12-.092-.274-.174-.15zm-1.133.283c0-.17.21-.3.266-.3.057 0 0 .15-.104.215-.076.048-.016.071.056.1.026.01.053.02.077.033.087.047-.029.17-.162.21-.133.04-.133-.087-.133-.258zm-.208.208c-.075.177-.218.524-.086.8l.044.095c.109.235.197.426.395.4.21-.03.307-.406.339-.53l.005-.021c.026-.096.13-.257.158-.155a.954.954 0 0 1 0 .247c-.007.095-.014.189 0 .233.028.09.157.484.446.391.152-.048.25-.157.327-.242.07-.077.123-.136.183-.115.048.017.097.08.151.147.086.11.185.234.313.21.165-.03.284-.208.36-.32.02-.03.036-.054.05-.071.05-.063.075-.025.108.026.01.017.023.035.037.052.056.067.168.113.244 0 .077-.114.19-.46.043-.403l-.01.003c-.145.056-.35.134-.422-.01-.074-.148-.276-.605-.175-.605.1 0 .267 0 .233-.163s.311.366.374.477l.07.126c.136.25.41.752.466.794.058.045.108.922.12 1.318a1.16 1.16 0 0 0-.177-.009c-.234 0-.422.026-.573.047-.167.023-.29.04-.385.01-.053-.017-.117-.027-.172-.037-.133-.022-.22-.037-.015-.109.058-.02.125-.037.194-.055.276-.07.593-.15.568-.507-.031-.447-.09-.644-.426-.585-.336.06-.442.326-.442.585 0 .216-.029.219-.12.228a.53.53 0 0 0-.06.007 1.75 1.75 0 0 1-.05.008c-.173.023-.538.072-.77.408-.22.318-.193-.15-.18-.378l.004-.093c0-.13-.045-.246-.147-.477l-.007-.018c-.1-.227-.216-.49-.378-.24-.168.258.03.622.1.678.072.057.438.857.078 1.253-.36.396-.87.785-1.008.66-.137-.125-.219-.203-.063-.303.025-.017.067-.037.118-.061.26-.125.772-.37.677-.894a4.684 4.684 0 0 0-.153-.62c-.031-.098-.04-.126-.006-.126h.028c.066.005.134.01.059-.192-.087-.23-.21-.492-.44-.236s-.137.416 0 .576c.137.16.37.445.103.7a6.572 6.572 0 0 0-.22.223c-.146.153-.238.249-.238.16 0-.129-.039-.3-.108-.15a1.045 1.045 0 0 0-.04.098c-.058.15-.131.34-.324.421-.24.1-.774.497-.774.497s-.352.314-.19.287c.161-.027.579-.146.692-.243.114-.098.389-.166.389-.166s.32.604.655.507c.335-.098 1.08-.913 1.08-.913s.459.631.975.673c.517.042.645-.128.501-.238a1.323 1.323 0 0 0-.152-.095c-.16-.092-.345-.198-.274-.309.096-.151.296-.201.638-.256l.15-.022c.285-.039.539-.073.61-.329.037-.134.16-.224.239-.281l.037-.028a3.7 3.7 0 0 1 .001.092c0 .237-.009 1.03-.04 1.118-.032.088.161.031.217-.064l.004-.006c.056-.095.135-.228.135-.428l.001-.134c.003-.302.01-.891-.047-1.025-.068-.159-.046-.313 0-.274.021.019.162.289.315.583.18.344.377.722.419.767.048.051.07-.075.092-.202a.816.816 0 0 1 .047-.192c.052-.097.093-.172.093 0l.001.054c.005.199.014.593-.326.818-.12.08-.221.15-.308.21-.184.128-.3.208-.372.227-.108.027-.091.231.039.231l.036.001c.177.006.688.022.998-.566.297-.563.113-2.337.067-2.781a2.42 2.42 0 0 1-.01-.1c0-.02-.014-.064-.03-.121-.04-.132-.1-.331-.057-.432.035-.08.055-.07.078-.058.018.01.038.02.067-.012.066-.074.144-.18 0-.365a1.131 1.131 0 0 1-.124-.23c-.062-.142-.11-.25-.194-.135-.131.18-.193.704-.13.958.064.255.343 2.282.172 2.112-.101-.1-.194-.29-.296-.498a4.85 4.85 0 0 0-.23-.433c-.205-.333-.608-1.007-.497-1.208.032-.059.06-.098.081-.13.052-.073.068-.096.03-.216a.645.645 0 0 0-.14-.224.935.935 0 0 1-.132-.19c-.084-.17-.261-.28-.261-.118 0 .161-.09.329-.146.164-.056-.164-.354-.516-.5-.395-.09.076-.07.121-.053.16.011.024.02.046.006.07a.718.718 0 0 0-.02.042h-.001c-.032.065-.066.133-.11.03a.97.97 0 0 1-.025-.073c-.047-.143-.11-.34-.312-.151-.24.225-.267.456-.133.589.133.132.333.45.233.594-.1.146-.288.253-.378.099a.757.757 0 0 1-.104-.546c.04-.22.101-.891-.162-.814-.263.078-.235.466-.173.64.063.174.098.461.05.559l-.006.01c-.053.108-.192.39-.34.294-.153-.1-.267-.38-.196-.645.071-.264.024-.683-.192-.555s-.458.538-.458.748c0 .21-.085.463-.173.309L7.95 3.91c-.088-.153-.209-.363-.143-.572.07-.22-.05-.479-.124-.301zM3.538 2.65c-.012.016-.003.026.018.05.024.028.065.074.104.171.031.079.04.193.048.282.009.114.015.188.059.096.08-.163.12-.52 0-.6-.12-.08-.202-.035-.229 0zm1.56.34c-.236 0-.204-.347-.204-.347s0-.033.105-.033c.071 0 .078.038.085.071.003.016.006.03.015.04.012.014.014 0 .016-.02.002-.025.006-.058.033-.058.048 0 .058.05.058.132 0 .081.068.016.068-.054s.062-.078.117-.078c.055 0-.055.347-.292.347zM3.805 6.802c-.029-.332.048-.651.191-.651.143 0 .143.317.143.317s.08.653.74.682c.659.03 1.1-1.115 1.1-1.115.037-.193.026-.434.026-.434-.043-.09-.067 0-.117.184a4.035 4.035 0 0 1-.207.617c-.22.494-.679.483-.967.476H4.68c-.285-.006-.516-.482-.541-.727-.025-.246.058-.439.058-.439s.227-.238.219.178c-.008.415.197.483.566.512.369.03.641-.536.699-.75.058-.215-.293.118-.293.118-.095.09-.303.006-.406-.217-.103-.223.103-.487.273-.668.17-.182.362-.033.362-.033.25.043.35.213.35.213.124.093-.01-.421-.01-.421-.086-.216-.19-.908-.19-.908a1.965 1.965 0 0 1-.05-.256c-.028.048-.036.155-.036.155s.164.714-.07.936c-.115.108-.173.163-.234.166-.065.003-.132-.052-.269-.166-.268-.222-.282 0-.282.266V5.91c0 .166-.104.164-.198.162-.048-.001-.093-.002-.12.02.017-.174.035-.488.035-.488.01-.148-.188-.74-.188-.74-.173-.146-.376-.516-.376-.516-.047-.275-.147-.13-.147-.13 0 .193-.062.603-.375.483-.314-.121-.138-1.245-.138-1.245s.126.013.138.299c.011.285.163.498.163.498.08.208.108-.457.108-.457 0-.272.335-.514.335-.514.186-.1.181.324.181.324.089.281-.007.493-.007.493-.012.276.19.136.19.136.141-.007-.106-.807-.106-.807-.12-.284-.054-.534-.054-.534.012-.152.2-.191.2-.191.129.012.13.583.13.583 0 .359.098.68.185.746.087.066-.014-.202-.087-.277-.046-.048-.033-.157-.018-.286.01-.072.018-.151.018-.229 0-.215.13-.113.271-.002l.003.002c.112.088.104.232.096.387a1.802 1.802 0 0 0-.005.128c0 .2.1.335.265.463.14.11.134-.061.13-.19-.002-.023-.002-.044-.002-.063 0-.096-.077-.242-.153-.385a5.672 5.672 0 0 1-.063-.124c-.072-.144-.037-.196.033-.301l.055-.086c.102-.17.285.012.356.171l.012.026a4.536 4.536 0 0 1-.013-.188c-.043-.128.325-.411.325-.411.23-.052.271.695.271.695.082.267-.191.162-.191.162-.134-.012.144 1.084.144 1.084.02.375.202.177.202.177.14-.056.15.305.15.305.095.143.274-.345.274-.345.125-.179.322.229.322.229.094.126.288-.234.288-.234.11-.07.081.04.045.179a1.097 1.097 0 0 0-.045.246c0 .192-.031.206-.236.3l-.007.003c-.212.097-.277-.064-.277-.064-.051-.061-.405.148-.405.148-.133.05-.216-.06-.216-.06-.057-.075-.056.237-.054.633v.209c0 .487-.74 1.099-1.426 1.218a.858.858 0 0 1-1.039-.75zm.68-.633c.005.08.014.025.023-.076-.016.014-.026.038-.023.076zm-.739-.921c.301-.264.512-.214.512-.214s.066 0 .152.092c.086.091-.211.276-.407.334-.132.039-.293.12-.448.198a8.07 8.07 0 0 1-.214.104c-.21.096.105-.25.405-.514zm-.368 1.106s-.293.48-.245.789c.048.31.25.373.386.341.134-.032.196-.341.196-.341s-.093-.213-.196-.098c0 0-.17.072-.138-.126.031-.198-.003-.565-.003-.565zM5.372 5.19s-.197.061-.098.153c.098.092.25.103.25 0s-.152-.153-.152-.153zm3.949-.469s-.02.349.217.34c.237-.008.335-.359.28-.357-.055.002-.117.013-.115.083.002.07-.062.137-.065.055-.003-.081-.015-.131-.064-.13-.027.001-.029.035-.03.06-.002.02-.002.034-.016.02-.009-.009-.012-.023-.016-.039-.008-.033-.016-.07-.088-.068-.104.003-.103.036-.103.036zm2.769-.498c-.237.008-.217-.34-.217-.34s-.001-.033.104-.037c.07-.002.08.035.087.069.004.015.007.03.017.04.013.012.014-.002.015-.022.001-.025.004-.058.03-.059.05-.002.061.048.064.13.003.081.068.014.065-.056-.002-.07.06-.08.115-.083.055-.001-.043.35-.28.358zM6.646 5.995c-.108-.058-.097-.1 0-.188.096-.088.214.04.331.188.1.124.038.223-.02.315l-.03.051c-.058.106-.216.087-.157 0 .06-.087-.016-.309-.124-.366zm7.936-.506c-.097.089-.108.13 0 .188.108.058.06.3 0 .387-.059.087.106.183.165.077l.01-.019c.056-.102.123-.222.077-.401-.049-.19-.155-.32-.252-.232zm1.374-2.03c-.108-.057-.097-.1 0-.187.096-.089.203.04.252.231.046.18-.02.3-.077.401l-.01.019c-.059.106-.224.01-.165-.077s.108-.329 0-.386zm-4.102-.7c-.096.089-.108.131 0 .189.108.057.234.422.175.509-.06.087.099.106.157 0 .058-.106.117-.362 0-.51-.118-.147-.235-.275-.332-.187zM10.45 4.897c-.133.06-.21.096-.14.144.07.049.236.06.236 0l.002-.035c.006-.067.014-.16-.098-.109zM9.16 6.092c.143 0 .255-.025.255-.025s.194.025.347.025c.153 0 .126.135-.056.22-.167.08-.178.131-.2.236l-.005.03c-.028.124-.049.21-.185.168-.13-.04-.255-.354-.321-.52l-.01-.025c-.05-.124 0-.12.094-.113a.979.979 0 0 0 .082.004zM7.47 3.03c.054 0 .119-.33 0-.376-.117-.047-.461.011-.42.15.014.045.047.09.08.138.07.096.14.196.052.3a5.126 5.126 0 0 1-.598.534l-.027.016c-.081.049-.24.142-.128.142.04 0 .088.004.139.007.108.008.227.016.293-.007.049-.016.126-.106.21-.205.08-.093.167-.195.243-.25.157-.11.19-.33.157-.36-.01-.009-.032-.018-.059-.03-.072-.03-.177-.075-.144-.148.046-.101.084-.036.084 0 0 .035.066.089.119.089zm-.088 1.097-.124.045s-.071 0-.096-.086c-.01-.038.006-.083.02-.124.02-.052.035-.095-.02-.095-.096 0-.168.162-.2.26-.033.097.117.216.2.268.083.052.186-.052.276-.145.09-.093-.056-.123-.056-.123zm5.73 2.934c-.121-.163-.069-.528.043-.757.086-.177.083-.08.077.1a5.24 5.24 0 0 0-.003.173c0 .217.064.291.154.395.023.027.048.056.073.09.127.163.233 0 .233-.1s.224-.56.386-.735c.162-.175.297-.07.297 0s.157.297.34.35c.182.053.247-.42.247-.42V4.731c0-.413-.103-.493-.19-.56-.02-.016-.04-.031-.057-.05a3.739 3.739 0 0 0-.148-.144c-.13-.123-.298-.281-.367-.382-.087-.126-.083-.364-.08-.603V2.86c0-.28.387.125.478.28.059.1.042.166.022.242-.01.042-.022.086-.022.14 0 .153.117.117.117 0 0-.021-.003-.054-.005-.094-.013-.183-.036-.515.096-.568.124-.05.15.017.222.203.02.055.046.119.078.193.09.21.066.308.036.428a.985.985 0 0 0-.036.26c0 .227.166.427.282.565.04.048.073.088.092.12.073.124-.074-.806-.201-.99-.127-.184-.058-.613.127-.843.14-.175.23.047.319.264.028.07.057.14.086.196.102.19-.002.328-.08.43l-.042.06c-.032.05-.008.112.027.203.04.107.095.254.095.466 0 .393.158.788.39 1.105.22.3.268.65.317 1l.008.058c.052.37.056-.58 0-1.058-.056-.478-.238-2.16-.164-2.595.048-.284.1-.157.18.032.04.1.09.217.148.3l.036.05c.136.189.146.203.064.332-.047.073-.089.063-.118.055-.026-.007-.042-.01-.042.052 0 .039.021.218.052.472.073.61.197 1.647.197 2.185 0 .762-.405 1.06-.756 1.19-.35.13-.54 0-.54-.13 0-.07-.05-.03-.115.024-.058.048-.13.106-.19.106-.126 0-.083-.15 0-.299.052-.09.04-.098.024-.109-.01-.007-.023-.016-.023-.05 0-.085 0-.172.127-.172s.24 0 .117.172c-.075.106-.07.106-.02.112.033.004.083.01.143.047.083.052.09.053.099.055.007 0 .014.002.066.032.116.066.394-.167.663-.418.19-.178.095-.22-.006-.263a.286.286 0 0 1-.106-.062c-.036-.042-.1-.15-.168-.262-.089-.147-.183-.303-.225-.335-.035-.026-.022.062-.005.176.02.133.045.302.005.361-.075.11-.246.25-.323.25-.078 0 0-1.408 0-1.408s-.437-.605-.367-.378c.07.227-.07 1.69-.267 1.92-.198.231-.608-.064-.71-.23-.1-.165-.222-.004-.268.166-.046.17-.146.542-.391.695-.183.114-.32-.15-.428-.357a1.437 1.437 0 0 0-.1-.174zm1.346-2.039s-.409.275-.477.362c-.068.086-.093.15 0 .198.093.048.465-.13.603-.28.138-.15.241-.294.19-.386-.052-.091-.316.106-.316.106zm-.673-.624c-.165-.195.087-.277.087-.277s.134 0 .279.119c.079.065.07.004.059-.09-.01-.076-.023-.173.007-.24.066-.151.29.025.349.21.04.131-.004.136-.072.144a.323.323 0 0 0-.096.021c-.074.032-.05.176-.025.323.012.075.025.151.025.214 0 .185-.447-.23-.613-.424z\" clip-rule=\"evenodd\"\/><path fill=\"#fff\" d=\"M8.877 2.93h.075-.075zm.147-.384-.062-.042.062.042zm-.147.408h.075-.075zm.107.148L8.93 3.05l.055.05zm.214-.406.073-.016-.073.016zm-1.145.048.04.064-.04-.064zm.056.1-.027.07.027-.07zm.077.033.035-.066-.035.066zm-.59.96.068-.033-.067.032zm.087-.8-.07-.03.07.03zm-.042.895-.068.031v.001l.068-.032zm0 0 .069-.031-.001-.001-.068.032zm.395.4-.01-.075.01.074zm.339-.53-.073-.02.073.02zm.005-.021-.072-.02.072.02zm.158-.155.073-.02-.073.02zm0 .247-.075-.006v.006h.075zm0 0 .075.005v-.005h-.075zm0 .233.072-.022-.072.022zm.446.391.023.072-.023-.072zm.327-.242.056.05-.056-.05zm.183-.115-.025.071.025-.07zm.151.147.059-.046-.059.046zm.313.21.013.074-.013-.074zm.36-.32.062.041-.062-.042zm0 0-.063-.042.063.041zm.05-.071-.059-.047.059.047zm.108.026.063-.04-.063.04zm.037.052.057-.049-.057.049zm.244 0-.062-.042.062.042zm.043-.403-.027-.07.027.07zm-.01.003-.026-.07.027.07zm-.422-.01-.068.034.067-.034zm.058-.768.073-.015-.073.015zm.374.477-.065.037.065-.037zm.07.126-.066.036.065-.036zm.466.794.045-.06-.046.06zm.12 1.318-.013.073.092.017-.003-.093-.075.003zm-.75.038.01.074-.01-.074zm-.385.01-.023.072.023-.072zm-.172-.037.013-.074-.013.074zm-.015-.109-.025-.07.025.07zm.194-.055.019.073-.019-.073zm.568-.507.075-.005-.075.005zm-.987.228L9.9 5.214l.008.075zm-.06.007.012.074-.012-.074zm-.052.008-.01-.075.01.075zm0 0 .01.074-.01-.074zm0 0-.01-.075.01.075zm-.77.408.062.043-.061-.043zm-.18-.378.076.004v-.004h-.075zm0 0-.074-.004v.004h.075zm-.142-.57-.068.03.068-.03zm-.007-.018-.07.03.07-.03zm-.378-.24.062.041-.062-.04zm.1.678-.046.059.047-.059zm.078 1.253-.055-.05.055.05zm-1.008.66-.05.055.05-.055zm-.063-.303-.04-.063.04.063zm.118-.061.032.068-.032-.068zm.677-.894-.074.014.074-.014zm-.153-.62.071-.023-.071.023zm.022-.125-.005.075.005-.075zM8.15 4.9l.07-.026-.07.026zm-.44-.236.056.05-.056-.05zm0 .576.057-.049-.057.049zm.103.7-.051-.055.051.055zm-.22.223.052.053h.001l-.054-.053zm0 0-.054-.053-.001.002.054.051zm-.346.01-.068-.032.068.031zm-.04.098-.07-.027.07.027zm-.324.421.029.07-.03-.07zm-.774.497-.045-.06-.005.004.05.056zm-.19.287-.012-.074.012.074zm.692-.243-.048-.057.048.057zM7 7.068l.066-.035-.027-.052-.057.015.018.072zm.655.507.021.072-.02-.072zm1.08-.913.06-.044-.054-.074-.062.067.055.051zm.975.673.006-.075-.006.075zm.501-.238.046-.06-.046.06zm-.152-.095.037-.065-.037.065zm-.274-.309-.064-.04.064.04zm.638-.256-.012-.074.012.074zm.15-.022.01.074-.01-.074zm.61-.329-.072-.02.072.02zm.239-.281.044.06-.044-.06zm.037-.028.075-.002-.004-.149-.118.092.047.06zm-.04 1.21.071.025-.07-.025zm.218-.064-.064-.038.064.038zm.004-.006-.065-.038.065.038zm.136-.562h-.075.075zM11.73 5.33l-.069.03.069-.03zm0-.274-.05.057.05-.057zm.315.583-.066.034.066-.034zm.419.767-.055.05.055-.05zm.092-.202.074.013-.074-.013zm.047-.192.066.035-.066-.035zm.094.054-.075.002.075-.002zm-.326.818.042.063-.042-.063zm-.308.21.043.062-.043-.061zm-.372.227.018.072-.018-.072zm.075.232-.003.075.003-.075zm.998-.566.067.034-.066-.034zm.067-2.781-.075.008.075-.008zm-.04-.221-.072.022.072-.022zm-.057-.432.07.03-.07-.03zm.078-.058-.035.067.035-.067zm.067-.012.056.05-.056-.05zm0-.365.059-.046-.06.046zm-.124-.23-.069.03.07-.03zm-.194-.135.06.044-.06-.044zm-.13.958.073-.018-.073.018zm.172 2.112.053-.053-.053.053zm-.296-.498-.067.033.067-.033zm-.23-.433-.063.04.064-.04zm-.497-1.208-.066-.037.066.037zm.081-.13.062.044-.062-.043zm.03-.216-.072.023.072-.023zm-.14-.224-.057.048.057-.048zm-.132-.19.068-.033-.068.033zm-.906-.349.048.058-.048-.058zm-.054.16-.068.032.068-.031zm.006.07.065.038-.065-.037zm-.02.042-.068-.034-.002.004.07.03zm-.001 0 .067.033.002-.004-.069-.03zm-.11.03.07-.028-.07.029zm-.025-.073.071-.023-.071.023zm-.312-.151-.051-.055.051.055zm-.133.589.052-.053-.052.053zm.233.594-.061-.042.061.042zm-.378.099.064-.038-.064.038zm-.266-1.36-.021-.072.021.072zM9.33 3.774l-.067-.033.067.033zm-.005.01-.067-.033.067.034zm-.34.294.04-.063-.04.063zm-.388-1.2.039.064-.039-.064zm-.631 1.057.065-.037-.065.037zM7.95 3.91l.065-.038-.065.038zm-.143-.572-.072-.022.072.022zM3.556 2.7l-.057.049.057-.05zm-.018-.05-.06-.045.06.045zm.122.221.07-.028-.07.028zm.048.282-.075.006.075-.006zm.059.096-.068-.032.068.032zm1.127-.606.075.007v-.007h-.075zm.19.038.073-.014-.073.014zm.015.04.054-.051-.054.051zm.016-.02-.075-.008.075.008zm-1.31 4.101-.075.007.074-.007zm.333-.334h-.076l.002.01.074-.01zm1.84-.433.07.027.003-.013-.074-.014zm.026-.434.075-.003v-.015l-.007-.014-.068.032zm-.117.184-.072-.02.072.02zm-.207.617.068.03-.068-.03zm-.967.476.001-.075-.001.075zm-.034 0 .002-.075-.002.075zm-.541-.727-.075.007.075-.007zm.058-.439L4.14 5.66l-.009.01-.005.012.069.03zm.219.178-.075-.002.075.002zm1.265-.24-.072-.02.072.02zm-.293.12.052.054-.052-.055zm-.406-.218.068-.031-.068.031zm.273-.668-.054-.05.055.05zm.362-.033-.046.06.015.01.018.004.013-.074zm.35.213-.064.038.007.013.012.009.045-.06zm-.01-.421.073-.02-.003-.008-.07.028zm-.19-.908.074-.011-.002-.01-.072.021zm-.05-.256.074-.01-.03-.22-.11.193.065.037zm-.036.155-.075-.006v.012l.002.01.073-.016zm-.07.936-.052-.055.051.055zm-.234.166-.004-.075.004.075zm-.269-.166-.05.056.002.001.048-.057zm0 0 .05-.056-.001-.001-.05.057zm0 0 .049-.057-.001-.001-.048.058zm0 0 .048-.058-.002-.002-.046.06zm0 0-.049.057.003.002.046-.06zm0 0 .049-.057-.001-.001-.048.058zm-.48 1.502.002-.075-.002.075zm-.085-.468L4.467 5.6l.075.005zm-.188-.74.071-.023-.006-.02-.016-.013-.049.057zm-.376-.516-.074.012.002.013.006.01.066-.035zm-.147-.13-.062-.043-.013.02v.023h.075zm-.375.483-.027.07.027-.07zm-.138-1.245.008-.074-.07-.008-.012.07.074.012zm.138.299-.075.003.075-.003zm.163.498.07-.027-.003-.009-.006-.008-.06.044zm.108-.457.075.003v-.003h-.075zm.335-.514-.036-.067-.008.006.044.06zm.181.324h-.075v.011l.004.012.071-.023zm-.007.493-.068-.031-.006.013v.014l.074.004zm.19.136-.004-.075-.022.001-.017.012.043.062zm-.106-.807.072-.022-.003-.007-.07.029zm-.054-.534.074.02V2.9l-.074-.006zm.2-.191.007-.075-.011-.001-.012.002.016.074zm.13.583h.075-.075zm.098.47.055-.053-.055.052zm-.018-.287.075.009-.075-.009zm0 0-.074-.009.074.01zm.29-.231-.047.059.046-.06zm.002.002-.046.06.046-.06zm.096.387.074.004-.074-.004zm0 0-.075-.005.075.005zm.26.591-.046.06.046-.06zm.13-.19.074-.004-.075.003zm-.155-.448.067-.035-.067.035zm-.063-.124-.068.033.068-.033zm.033-.301-.062-.043v.001l.062.042zm0 0-.061-.043.061.043zm0 0 .062.043v-.002l-.062-.041zm0 0 .062.041-.062-.041zm.055-.086-.065-.038.065.038zm.356.171-.069.03.069-.03zm.012.026-.069.031.144-.037-.075.006zm-.013-.188.075-.003v-.01l-.004-.011-.07.024zm.325-.411-.016-.073-.017.003-.013.01.046.06zm.271.695-.075.004v.01l.003.008.072-.022zm-.191.162.027-.07-.01-.004-.01-.001-.007.075zm.144 1.084.075-.004v-.007L6.3 4.59l-.072.018zm.202.177-.027-.07-.016.006-.012.013.055.05zm.15.305-.074.002v.02l.012.019.063-.041zm.274-.345-.062-.043-.005.008-.004.01.07.025zm.322.229-.069.033.009.011.06-.044zm.288-.234-.04-.064-.017.01-.01.018.067.036zm.045.179.072.019-.072-.02zm-.28.546-.032-.069.031.069zm-.008.003L7.189 5.4l.032.068zm-.277-.064.07-.029-.005-.01L7 5.355l-.057.049zm-.405.148.027.072.011-.007-.038-.065zm-.216-.06.06-.045-.06.045zm-.054.633h.075-.075zm0 .001h-.075.075zM4.843 7.553l-.013-.074.013.074zm-.36-1.384.076-.004-.075.004zm-.226-1.135-.017.073.008.002h.01v-.075zm-.512.214.05.056-.05-.056zm.664-.122-.055.051.055-.051zm-.407.334.021.072-.02-.072zm-.448.198L3.52 5.59l.035.067zm0 0 .033.067h.002l-.035-.067zm-.214.104.031.068-.031-.068zm-.208 1.38-.074.012.074-.011zm.245-.788.074-.007-.021-.224-.117.192.064.04zm.14 1.13.018.073-.017-.073zm.197-.341.074.014.004-.023-.009-.021-.069.03zm-.196-.098.029.07.015-.007.011-.013-.055-.05zm-.138-.126-.074-.012.074.012zm1.894-1.577.05-.055-.05.055zm.098-.153.024-.072-.023-.007-.023.007.022.072zm4.166-.129-.003-.075.003.075zm-.217-.34.075.005v-.007l-.075.002zm.497-.017-.003-.075.003.075zm-.115.083.075-.003-.075.003zm-.065.055-.075.003.075-.003zm-.064-.13-.002-.074.002.074zm-.03.06.075.004-.075-.004zm-.016.02.053-.053-.053.054zm-.016-.039.073-.017-.073.017zm-.088-.068.003.075-.003-.075zm2.45-.802.074.004V3.88l-.075.003zm.216.34.002.075-.002-.075zm-.113-.377.002.075-.002-.075zm.087.069.073-.017-.073.017zm.017.04.052-.054-.052.053zm.015-.022-.075-.005.075.005zm.03-.059-.002-.075.003.075zm.064.13-.075.002.075-.002zm.065-.056.075-.003-.075.003zm-5.61 1.86-.05-.056.05.056zm0 .188-.035.066.036-.066zm.332 0 .059-.047-.059.047zm-.02.315.065.04-.064-.04zm-.03.051-.065-.036.065.036zm-.157 0 .062.042-.062-.042zm7.812-.872.05.056-.05-.056zm0 .575.062.042-.062-.042zm.165.077-.066-.037.066.037zm.01-.019-.066-.036.066.036zm.077-.401.073-.019-.073.019zm1.122-2.45.05.056-.05-.055zm0 .189.035-.067-.035.067zm.252.043.072-.019-.072.019zm-.077.401-.066-.036.066.036zm-.01.019-.066-.036.065.036zm-.165-.077.062.042-.062-.042zm-4.102-.898-.035.066.035-.066zm0-.188-.05-.056.05.056zm.175.697.062.042-.063-.042zm.157 0-.066-.036.066.036zm0-.51-.059.047.059-.046zm-1.737 1.95.031.068-.03-.069zm.098.108L10.473 5l.074.006zM9.414 6.067l.01-.075-.014-.002-.013.003.017.074zm.29.246-.031-.068.032.068zm-.198.235.073.015-.073-.015zm-.006.03.073.015-.073-.016zm-.185.168-.022.072.022-.072zm-.321-.52.07-.028-.07.028zm-.01-.025.07-.028-.07.028zm.094-.113.005-.075-.005.075zM7.47 2.654l-.028.07.028-.07zm-.42.15-.072.021.072-.021zm.08.138.06-.044-.06.044zm.051.3-.057-.048.057.048zm-.598.534.038.065h.001l-.04-.065zm-.027.016.038.065-.038-.065zm.01.15.01-.075h-.004l-.005.074zm0 0-.009.074h.005l.005-.075zm.294-.008.024.072-.024-.072zm.21-.205-.057-.048.057.048zm.243-.25.044.062-.044-.061zm.157-.36-.051.054.05-.054zm-.059-.03-.03.07.03-.07zm-.144-.148L7.2 2.909l.068.032zm-.01 1.23v.076h.013l.013-.005-.026-.07zm.124-.044.015-.074-.02-.004-.02.007.025.07zm-.22-.041-.072.02.072-.02zm.02-.124.07.026-.07-.026zm-.22.165.07.024-.07-.024zm.2.268-.04.064.04-.064zm.276-.145.054.052-.054-.052zm5.717 2.054.067.033-.067-.033zm-.043.757.06-.045-.06.045zm.12-.656.075.002-.075-.002zm.15.567.06-.047-.002-.002-.057.05zm0 0-.058.047.002.002.057-.049zm.074.09.06-.046-.06.045zm.62-.835-.056-.051.055.05zm.636.35.02-.072-.02.072zm.247-.42.075.01v-.01h-.075zm-.19-1.986.046-.06-.046.06zm-.057-.05.055-.051-.055.05zm-.148-.144-.052.055.052-.055zm0 0 .052-.054-.052.054zm-.367-.382.062-.042-.062.042zm-.08-.603.075.001h-.075zm0 0h-.075.075zm.478.147.065-.038-.065.038zm.022.242.073.019-.073-.019zm.09.046-.075.003v.002l.075-.005zm0 0 .074-.004v-.002l-.074.005zm.096-.568-.029-.07.029.07zm.222.203-.07.027.07-.027zm.078.193-.07.03.07-.03zm.036.428-.072-.018.072.018zm.246.825.057-.048-.057.048zm.092.12-.065.038.065-.038zm-.201-.99-.062.043.062-.043zm.127-.843.059.047-.059-.047zm.319.264.07-.028-.07.028zm.086.196-.066.036.066-.036zm-.08.43-.06-.044.06.045zm-.042.06-.063-.04.063.04zm.027.203.07-.026-.07.026zm.485 1.57-.061.045.06-.044zm.317 1.002-.075.01.075-.01zm.008.057-.074.01.074-.01zm-.164-3.653.074.013-.074-.013zm.18.032-.07.029.001.003.068-.032zm0 0 .068-.029-.001-.003-.068.032zm.148.3-.061.043.06-.044zm.036.05-.061.043.06-.044zm.064.332-.063-.04.063.04zm-.118.055-.019.073.019-.073zm.01.524-.075.01.075-.01zm-.559 3.375-.026-.07.026.07zm-.655-.106-.048-.058.048.058zm-.19-.193-.064-.037.065.037zm.024-.109-.042.062.042-.062zm.221-.05-.061-.043.061.043zm-.02.112.01-.074-.01.074zm.143.047.04-.063-.04.063zm.099.055-.012.074.012-.074zm.066.032-.037.065.037-.065zm.663-.418.051.055-.051-.055zm-.006-.263.03-.069-.03.07zm-.106-.062-.057.048.057-.048zm-.168-.262-.066.036.001.003.065-.039zm0 0 .066-.036-.001-.001-.065.037zm0 0 .065-.037-.001-.002-.064.039zm-.225-.335-.046.06.046-.06zm-.005.176.075-.011-.075.011zm.005.361-.062-.042.062.042zm-.323-1.158.075.004v-.026l-.015-.022-.06.044zm-.367-.378-.072.022.072-.022zm-.267 1.92-.057-.048.057.049zm-.71-.23.065-.039-.064.04zm-.268.166.072.02-.072-.02zm-.391.695-.04-.064.04.064zm-.428-.357-.067.035.067-.035zm.769-1.851.059.046-.06-.046zm.477-.362.042.062.003-.002-.045-.06zm-.477.56-.035.067.035-.067zm.603-.28.055.05-.055-.05zm.19-.386.065-.037-.065.037zm-.902-.795v-.075h-.012l-.011.004.023.07zm-.087.277-.057.048.057-.048zm.366-.158.047-.058-.047.058zm.059-.09.074-.01-.074.01zm.007-.24-.069-.031.069.03zm.349.21.072-.021-.072.022zm-.072.144.008.074-.008-.074zm-.096.021-.03-.068.03.068zm-.025.323.074-.012-.074.012zM8.952 2.93c0-.027.012-.081.038-.15.025-.066.06-.136.097-.192l-.125-.083a1.185 1.185 0 0 0-.112.222.636.636 0 0 0-.048.203h.15zm0 .025V2.93l-.15-.001v.024l.15.001zm-.023.097a.118.118 0 0 1-.02.02c-.004.001.002-.004.016-.003.015 0 .027.009.032.015.005.005.004.007.003.002a.236.236 0 0 1-.008-.055v-.075l-.15-.002v.084c.002.03.005.065.015.095.008.024.033.082.1.086a.122.122 0 0 0 .07-.02.26.26 0 0 0 .052-.045l-.11-.102zm.195-.34c.007.032-.004.08-.042.145-.038.063-.093.13-.153.195l.11.102c.062-.068.126-.144.172-.22.044-.076.079-.165.06-.253l-.147.031zm-.037-.124c.016-.025.018-.013 0-.012-.02.001-.024-.012-.014 0a.22.22 0 0 1 .028.056c.01.025.017.053.023.08l.147-.031a.518.518 0 0 0-.08-.197c-.02-.026-.058-.061-.113-.058-.055.003-.092.042-.116.08l.125.082zm-.93-.134a.163.163 0 0 0-.052.01.537.537 0 0 0-.153.096.376.376 0 0 0-.136.27h.15c0-.055.034-.111.087-.159a.387.387 0 0 1 .101-.065c.008-.003.008-.002.003-.002v-.15zm-.064.355a.384.384 0 0 0 .141-.166.209.209 0 0 0 .02-.094.105.105 0 0 0-.024-.062.095.095 0 0 0-.073-.033v.15a.055.055 0 0 1-.04-.02.046.046 0 0 1-.012-.025c0-.002 0 .006-.008.024a.234.234 0 0 1-.083.099l.079.127zm.043-.034a.754.754 0 0 1-.057-.025c-.002-.002-.001-.002 0 0 .003.003.01.01.012.022a.055.055 0 0 1-.002.035l-.007.01.01-.008-.078-.127a.153.153 0 0 0-.063.066.095.095 0 0 0 .02.106c.018.018.04.03.056.038l.055.022.054-.14zm.085.037a.665.665 0 0 0-.085-.037l-.054.14c.027.01.05.019.068.029l.071-.132zm-.176.349a.431.431 0 0 0 .2-.127.18.18 0 0 0 .046-.106.125.125 0 0 0-.07-.116l-.071.132s-.01-.008-.009-.021c0-.005.002 0-.011.015a.283.283 0 0 1-.128.079l.043.144zm-.23-.33c0 .041 0 .084.003.122a.42.42 0 0 0 .018.11.156.156 0 0 0 .078.094.18.18 0 0 0 .131.004l-.043-.144c-.024.007-.028.002-.023.005.006.002.004.006 0-.008a.28.28 0 0 1-.012-.07 2.033 2.033 0 0 1-.001-.114h-.15zm-.15.974a.62.62 0 0 1-.03-.39 1.82 1.82 0 0 1 .117-.348l-.138-.059a1.964 1.964 0 0 0-.125.378.769.769 0 0 0 .04.484l.135-.065zm.044.097a8.344 8.344 0 0 0-.045-.097l-.135.065.044.094.136-.062zm0-.001-.135.064.135-.064zm.317.357a.15.15 0 0 1-.088-.011.222.222 0 0 1-.075-.064 1.398 1.398 0 0 1-.154-.281l-.136.062c.053.115.106.232.174.314a.37.37 0 0 0 .127.104.3.3 0 0 0 .172.025l-.02-.15zm.276-.474a1.59 1.59 0 0 1-.097.287.526.526 0 0 1-.086.132.16.16 0 0 1-.093.055l.02.149a.31.31 0 0 0 .181-.1.673.673 0 0 0 .113-.171c.058-.12.092-.253.108-.315l-.146-.037zm.006-.021-.006.02.146.038.005-.02-.145-.038zm.303-.155a.13.13 0 0 0-.035-.062.097.097 0 0 0-.082-.025.126.126 0 0 0-.057.026.234.234 0 0 0-.036.036.524.524 0 0 0-.093.18l.145.038a.377.377 0 0 1 .076-.135c.003-.003-.001.001-.012.003a.053.053 0 0 1-.044-.013c-.009-.009-.009-.015-.007-.009l.145-.04zm.002.271c.003-.048.007-.098.008-.144 0-.043 0-.09-.01-.127l-.145.039a.351.351 0 0 1 .005.085c-.001.04-.004.088-.008.136l.15.011zm0-.005h-.15.15zm-.003.21a.293.293 0 0 1-.005-.073c.001-.038.004-.084.008-.132l-.15-.01c-.003.047-.007.096-.008.139 0 .04 0 .086.011.121l.144-.044zm.351.343a.172.172 0 0 1-.133-.006.293.293 0 0 1-.105-.094.86.86 0 0 1-.113-.242l-.144.044c.014.045.057.177.136.286a.44.44 0 0 0 .162.142c.07.033.152.042.243.013l-.046-.143zm.295-.222c-.079.087-.164.18-.295.222l.046.143c.174-.056.284-.18.36-.264l-.111-.1zm.262-.135c-.063-.022-.117.003-.156.031-.037.027-.073.068-.106.104l.111.1a.664.664 0 0 1 .083-.083.059.059 0 0 1 .018-.01h.001l.05-.142zm.186.172a1.011 1.011 0 0 0-.082-.098.275.275 0 0 0-.104-.074l-.049.142a.14.14 0 0 1 .044.035c.022.023.046.053.073.088l.118-.093zm.24.183c-.034.006-.068-.005-.11-.04a.933.933 0 0 1-.13-.143l-.118.093c.042.053.093.118.152.166.06.05.139.089.233.071l-.027-.147zm.311-.29a1.324 1.324 0 0 1-.138.182.337.337 0 0 1-.173.108l.027.147a.483.483 0 0 0 .254-.151c.065-.068.118-.146.155-.202l-.125-.083zm0 .002.126.081-.126-.081zm.054-.077a.972.972 0 0 0-.053.076l.124.083a.985.985 0 0 1 .046-.065l-.117-.094zm.23.032-.028-.04a.146.146 0 0 0-.05-.042.105.105 0 0 0-.09-.001.173.173 0 0 0-.062.05l.117.095a.076.076 0 0 1 .009-.01l-.003.002a.045.045 0 0 1-.04-.003l-.002-.002.001.001.003.003a.238.238 0 0 1 .008.012l.011.017.126-.082zm.031.044a.448.448 0 0 1-.031-.044l-.126.082a.62.62 0 0 0 .042.059l.115-.097zm.125.007a.086.086 0 0 1-.033.031.04.04 0 0 1-.025.004.116.116 0 0 1-.067-.042l-.115.097a.265.265 0 0 0 .163.094c.075.01.15-.022.202-.1l-.125-.084zm.132-.291c.01-.004.002.001-.011-.004a.036.036 0 0 1-.021-.02v.007l.001.016a.808.808 0 0 1-.1.291l.124.084a.95.95 0 0 0 .116-.291.312.312 0 0 0 .001-.154.115.115 0 0 0-.066-.072.133.133 0 0 0-.098.002l.054.14zm-.01.003.01-.003-.054-.14-.01.003.054.14zm-.517-.046a.213.213 0 0 0 .117.106c.047.018.097.02.143.015.09-.01.187-.048.257-.075l-.053-.14a.966.966 0 0 1-.22.066.161.161 0 0 1-.074-.006.063.063 0 0 1-.035-.034l-.135.068zm-.107-.714a.098.098 0 0 0-.064.023.106.106 0 0 0-.032.05.205.205 0 0 0-.004.086 1 1 0 0 0 .051.188c.048.137.118.29.156.367l.135-.068a3.51 3.51 0 0 1-.15-.349.87.87 0 0 1-.043-.158c-.003-.02 0-.025-.002-.021a.044.044 0 0 1-.014.02.052.052 0 0 1-.033.012v-.15zm.16-.073c.006.03 0 .04 0 .044-.002.003-.007.009-.021.014a.406.406 0 0 1-.139.015v.15c.046 0 .13.001.196-.026a.185.185 0 0 0 .095-.082.21.21 0 0 0 .015-.145l-.146.03zm.513.425a5.227 5.227 0 0 0-.228-.348 1.369 1.369 0 0 0-.124-.155.205.205 0 0 0-.03-.025.11.11 0 0 0-.022-.012.086.086 0 0 0-.043-.005.08.08 0 0 0-.054.033.088.088 0 0 0-.015.04.143.143 0 0 0 .003.047l.146-.03v.002a.062.062 0 0 1-.012.028.07.07 0 0 1-.046.028.064.064 0 0 1-.032-.003l-.009-.004.008.007c.024.024.063.073.108.136.089.124.19.282.219.335l.13-.074zm.07.127-.07-.127-.131.074.069.125.131-.072zm.445.77-.015-.02a6.43 6.43 0 0 1-.168-.277c-.092-.16-.194-.348-.263-.473l-.131.072c.068.124.17.313.264.476a6.552 6.552 0 0 0 .176.29.251.251 0 0 0 .046.052l.09-.12zm.15 1.375a19.315 19.315 0 0 0-.043-.794 6.412 6.412 0 0 0-.036-.362 1.328 1.328 0 0 0-.022-.124.341.341 0 0 0-.014-.045.115.115 0 0 0-.035-.05l-.09.12c-.015-.011-.018-.023-.014-.014a1.16 1.16 0 0 1 .026.134c.013.092.025.216.036.353.021.273.037.59.043.787l.15-.005zm-.252.07c.09 0 .14.002.164.006l.027-.147a1.212 1.212 0 0 0-.191-.01v.15zm-.563.045c.151-.02.334-.046.563-.046v-.15c-.24 0-.432.027-.584.048l.021.148zm-.418.008c.06.019.125.022.193.018a2.74 2.74 0 0 0 .225-.026l-.02-.148a2.706 2.706 0 0 1-.213.024.397.397 0 0 1-.14-.011l-.045.143zm-.162-.035c.057.01.115.02.162.035l.046-.143c-.06-.019-.128-.03-.182-.04l-.026.148zm-.027-.254a.606.606 0 0 0-.118.052.122.122 0 0 0-.043.044.087.087 0 0 0 .01.096.116.116 0 0 0 .046.032.29.29 0 0 0 .04.013l.092.017.026-.148a1.373 1.373 0 0 1-.102-.02h.001a.05.05 0 0 1 .012.01.064.064 0 0 1 .007.07.048.048 0 0 1-.01.013h.002a.91.91 0 0 1 .087-.037l-.05-.142zm.2-.057c-.068.018-.138.035-.2.057l.05.142c.054-.02.117-.035.188-.053l-.037-.146zm.512-.429a.332.332 0 0 1-.03.18.305.305 0 0 1-.107.114c-.098.065-.233.1-.374.135l.037.146c.134-.034.296-.074.42-.156a.455.455 0 0 0 .156-.17.48.48 0 0 0 .048-.26l-.15.011zm-.338-.516a.357.357 0 0 1 .168.001c.034.011.06.032.082.067a.5.5 0 0 1 .057.168c.014.076.024.169.031.28l.15-.01a2.66 2.66 0 0 0-.034-.297.642.642 0 0 0-.076-.22.296.296 0 0 0-.164-.13.502.502 0 0 0-.24-.007l.026.148zm-.38.51c0-.12.025-.235.083-.326a.418.418 0 0 1 .297-.184l-.026-.148a.567.567 0 0 0-.397.251.754.754 0 0 0-.107.408h.15zm-.187.303c.02-.002.048-.004.072-.012a.139.139 0 0 0 .077-.058.236.236 0 0 0 .032-.097 1.06 1.06 0 0 0 .006-.135h-.15a.926.926 0 0 1-.01.143.053.053 0 0 1-.003.006v.002c.001-.003.005-.004.003-.004a.24.24 0 0 1-.041.006l.014.15zm-.055.007a.762.762 0 0 1 .055-.007l-.014-.149-.066.008.025.148zm-.054.008.054-.008-.025-.148a1.666 1.666 0 0 1-.049.007l.02.149zm0 0-.02-.149.02.149zm0 0-.02-.149.02.149zm-.718.377c.212-.306.545-.354.718-.377l-.02-.149c-.172.024-.568.075-.82.44l.122.086zm-.316-.425c-.006.11-.017.295.004.411.005.03.013.062.028.088a.12.12 0 0 0 .093.065.146.146 0 0 0 .107-.04.512.512 0 0 0 .084-.1l-.123-.085a.372.372 0 0 1-.058.07c-.015.013-.012.004.004.006.02.002.027.016.024.01a.146.146 0 0 1-.012-.04 1.962 1.962 0 0 1-.001-.377l-.15-.008zm0 .004h.15-.15zm.004-.093-.004.089.15.008.004-.097h-.15zm-.14-.447c.102.234.14.335.14.447h.15c0-.15-.053-.279-.153-.507l-.137.06zm-.008-.017.008.017.137-.06-.008-.018-.137.06zm-.247-.23c.038-.057.061-.066.066-.067h.006a.083.083 0 0 1 .025.02.49.49 0 0 1 .074.112c.026.05.05.107.076.165l.137-.06a2.274 2.274 0 0 0-.08-.174.63.63 0 0 0-.1-.148c-.039-.04-.096-.077-.167-.062-.066.013-.119.065-.162.133l.125.081zm.085.579a.303.303 0 0 1-.05-.072.735.735 0 0 1-.064-.154c-.034-.12-.037-.25.03-.353l-.126-.081c-.1.154-.088.335-.048.475.02.071.049.136.077.186a.416.416 0 0 0 .088.116l.093-.117zm.087 1.361c.206-.226.197-.558.14-.82a1.911 1.911 0 0 0-.17-.466.493.493 0 0 0-.026-.041.17.17 0 0 0-.03-.034l-.094.117c-.004-.003-.003-.004.002.004.005.006.01.016.018.029a1.763 1.763 0 0 1 .154.424c.054.25.049.517-.105.686l.11.101zm-1.114.665c.068.062.164.047.24.021a1.16 1.16 0 0 0 .273-.15c.196-.134.418-.335.6-.536l-.11-.1c-.177.194-.39.386-.575.513a1.061 1.061 0 0 1-.237.131c-.07.024-.09.011-.09.01l-.101.111zm-.054-.421a.279.279 0 0 0-.1.1.157.157 0 0 0-.007.132c.014.037.04.07.067.099.027.029.06.06.094.09l.1-.11a1.513 1.513 0 0 1-.084-.082.18.18 0 0 1-.037-.05c-.002-.007-.002-.007 0-.01.003-.006.014-.021.049-.043l-.082-.126zm.126-.066c-.048.024-.095.046-.126.066l.082.126c.02-.014.056-.03.11-.056l-.066-.136zm.636-.812a.555.555 0 0 1-.183.528c-.138.133-.32.221-.453.284l.065.136c.13-.062.333-.16.492-.311a.705.705 0 0 0 .226-.664l-.147.027zm-.15-.611c.032.105.091.29.15.611l.147-.027a4.76 4.76 0 0 0-.155-.63l-.143.046zm.065-.224a.096.096 0 0 0-.075.032.1.1 0 0 0-.021.076.303.303 0 0 0 .01.052l.02.064.143-.046a2.263 2.263 0 0 1-.024-.084c0-.005.003.015-.013.035a.06.06 0 0 1-.028.018c-.007.003-.012.003-.012.003v-.15zm.033.001-.033-.001v.15h.023l.01-.149zm-.017-.092a.444.444 0 0 1 .028.098c.003.02-.002.017.004.008.009-.013.02-.014.017-.013l-.032-.001-.01.15c.014 0 .04.003.063 0a.122.122 0 0 0 .087-.052.158.158 0 0 0 .02-.109.583.583 0 0 0-.036-.133l-.14.052zm-.313-.212c.052-.058.089-.076.11-.08.017-.003.035.001.058.022a.38.38 0 0 1 .076.108c.025.05.048.106.07.162l.14-.052a1.683 1.683 0 0 0-.077-.179.523.523 0 0 0-.11-.152.214.214 0 0 0-.183-.056.359.359 0 0 0-.196.127l.112.1zm0 .477c-.067-.08-.11-.145-.119-.212-.008-.063.012-.146.119-.265l-.112-.1c-.123.137-.171.262-.156.383a.58.58 0 0 0 .155.292l.114-.098zm.099.803a.447.447 0 0 0 .138-.233.434.434 0 0 0-.019-.23 1.103 1.103 0 0 0-.217-.34l-.114.098c.07.081.152.182.19.29a.284.284 0 0 1 .013.151.299.299 0 0 1-.094.155l.103.109zm-.219.221c.065-.067.138-.144.219-.221l-.103-.109c-.084.08-.16.16-.224.227l.108.103zm0 .001-.107-.106.106.106zm-.366.107a.13.13 0 0 0 .012.058.09.09 0 0 0 .072.05.112.112 0 0 0 .06-.012.245.245 0 0 0 .04-.026c.048-.036.112-.104.182-.178l-.108-.103a2.008 2.008 0 0 1-.18.173c-.003.001.005-.004.021-.003a.06.06 0 0 1 .047.032c.005.01.004.015.004.009h-.15zm.035-.12a.133.133 0 0 1 .014-.025c.003-.004-.003.006-.02.01a.055.055 0 0 1-.047-.012c-.006-.005-.006-.008-.004-.002a.23.23 0 0 1 .015.06c.004.029.007.06.007.089h.15a.574.574 0 0 0-.035-.211.142.142 0 0 0-.034-.048.095.095 0 0 0-.085-.023.116.116 0 0 0-.063.042.273.273 0 0 0-.034.058l.136.063zm-.039.095a1.64 1.64 0 0 1 .039-.094l-.136-.063c-.015.032-.029.068-.043.103l.14.054zm-.364.463c.226-.095.309-.319.364-.463l-.14-.054c-.06.155-.123.312-.282.379l.058.138zm-.803.428.045.06h.001l.005-.004a5.008 5.008 0 0 1 .08-.058l.209-.147a3.36 3.36 0 0 1 .463-.279l-.058-.138a3.461 3.461 0 0 0-.49.294 10.71 10.71 0 0 0-.293.208l-.005.003h-.001v.001l.044.06zm-.202.213h-.003c.004.001.018.004.03.017.03.03.012.062.016.051a.704.704 0 0 1 .06-.077 1.952 1.952 0 0 1 .145-.144l.003-.003a.038.038 0 0 1 .001 0l-.05-.057-.05-.056v.002l-.004.002a2.188 2.188 0 0 0-.207.215.29.29 0 0 0-.037.063c-.006.014-.025.067.016.109a.1.1 0 0 0 .058.028.16.16 0 0 0 .046-.002l-.024-.148zm.656-.226a.507.507 0 0 1-.115.064 2.791 2.791 0 0 1-.541.163l.024.147a2.926 2.926 0 0 0 .577-.173.639.639 0 0 0 .152-.087l-.097-.114zM7 7.068l-.018-.072h-.005a1.336 1.336 0 0 0-.155.048.876.876 0 0 0-.26.133l.097.114a.744.744 0 0 1 .213-.106 1.853 1.853 0 0 1 .142-.043h.003L7 7.067zm.634.435c-.058.017-.12.005-.186-.032a.758.758 0 0 1-.19-.163 1.582 1.582 0 0 1-.191-.274 16.602 16.602 0 0 1-.133.07.126.126 0 0 0 .004.007 1.231 1.231 0 0 0 .054.09c.037.058.09.133.154.206a.905.905 0 0 0 .23.195c.087.05.191.076.3.045l-.042-.144zm1.1-.841-.055-.05c-.001 0-.002 0-.002.002a7.208 7.208 0 0 1-.118.125 9.048 9.048 0 0 1-.29.288 4.735 4.735 0 0 1-.35.304c-.116.09-.216.151-.285.172l.042.144c.099-.03.218-.106.335-.197.12-.092.246-.205.36-.314a9.202 9.202 0 0 0 .416-.42c0-.002.002-.002.002-.003l-.055-.051zm.982.598c-.232-.019-.46-.173-.637-.333a2.411 2.411 0 0 1-.283-.308h-.001v-.001l-.06.044-.061.044.001.002a1.425 1.425 0 0 0 .082.102c.053.062.128.144.221.228.183.166.442.349.726.372l.012-.15zm.45-.104c.012.01.019.018.022.024l.003.005v.002s0 .002-.002.003a.072.072 0 0 1-.022.02c-.056.037-.196.07-.45.05l-.013.15c.262.02.445-.01.545-.074.052-.034.092-.085.092-.15 0-.063-.038-.114-.084-.149l-.091.12zm-.145-.09c.06.035.11.065.144.09l.092-.119a1.552 1.552 0 0 0-.161-.1l-.075.13zm-.3-.413a.163.163 0 0 0-.016.148c.016.044.047.08.08.11.064.058.159.111.236.156l.075-.13a1.314 1.314 0 0 1-.21-.138.143.143 0 0 1-.04-.05c-.002-.005-.003-.008.002-.016l-.127-.08zm.69-.29c-.17.027-.312.054-.425.095a.497.497 0 0 0-.265.195l.127.08c.036-.057.094-.099.19-.134.097-.035.226-.06.397-.088l-.024-.148zm.152-.022c-.049.006-.1.013-.152.022l.024.148.149-.022-.02-.148zm.548-.275a.284.284 0 0 1-.182.197c-.097.04-.22.058-.366.078l.02.148c.14-.019.286-.038.405-.088a.433.433 0 0 0 .267-.295l-.144-.04zm.266-.322c-.075.055-.22.158-.266.322l.144.04c.03-.105.128-.18.21-.24l-.088-.122zm.035-.026a.318.318 0 0 1-.035.026l.089.122.039-.03-.093-.118zm.123.151c0-.023 0-.055-.002-.094l-.15.004c.002.038.002.069.002.09h.15zm-.045 1.143a.392.392 0 0 0 .015-.081l.009-.119c.005-.091.01-.207.013-.326.006-.24.008-.498.008-.617h-.15a26.981 26.981 0 0 1-.02.935 2.56 2.56 0 0 1-.014.146l-.002.011.141.05zm.083-.127a.187.187 0 0 1-.098.067c-.023.006-.025.002-.016.005a.051.051 0 0 1 .03.031c.005.016 0 .026.001.024l-.141-.05a.115.115 0 0 0-.002.076c.011.032.035.05.058.06a.179.179 0 0 0 .112-.002.333.333 0 0 0 .185-.135l-.13-.076zm.003-.006-.003.006.129.076.004-.006-.13-.076zm.125-.39c0 .179-.07.297-.125.39l.13.076c.056-.096.145-.244.145-.466h-.15zm.001-.134-.001.134h.15l.001-.133-.15-.001zm-.041-.996a.633.633 0 0 1 .026.152c.007.076.012.17.014.27.005.2.003.422.001.574l.15.001c.002-.15.004-.375 0-.579a4.327 4.327 0 0 0-.015-.28.737.737 0 0 0-.038-.196l-.138.058zm.118-.36a.095.095 0 0 0-.076-.023.094.094 0 0 0-.065.043.198.198 0 0 0-.026.096.577.577 0 0 0 .049.244l.138-.058a.428.428 0 0 1-.037-.178c.002-.024.006-.028.002-.022a.056.056 0 0 1-.039.023.056.056 0 0 1-.044-.01L11.779 5zm.333.605a47.524 47.524 0 0 0-.28-.527 1.26 1.26 0 0 0-.036-.058.115.115 0 0 0-.017-.02l-.098.114-.006-.006.005.008.021.036.07.129c.058.106.13.246.208.393l.133-.069zm.406.75-.014-.02a7.41 7.41 0 0 1-.132-.235l-.26-.495-.133.07c.09.172.184.353.261.496a7.56 7.56 0 0 0 .138.244c.01.015.02.032.031.043l.11-.103zm-.036-.162a1.19 1.19 0 0 1-.039.169c-.002.002 0-.003.009-.008a.057.057 0 0 1 .062-.002.032.032 0 0 1 .003.002l.002.001-.11.103c.011.012.03.027.055.033a.092.092 0 0 0 .075-.015.123.123 0 0 0 .034-.04.238.238 0 0 0 .017-.039 1.16 1.16 0 0 0 .04-.179l-.148-.025zm.055-.216a.416.416 0 0 0-.033.1c-.008.036-.015.077-.022.116l.148.025c.007-.04.013-.076.02-.108a.29.29 0 0 1 .019-.062l-.132-.07zm.234.036a.4.4 0 0 0-.01-.108.1.1 0 0 0-.038-.055.085.085 0 0 0-.09-.004.127.127 0 0 0-.036.031 1.237 1.237 0 0 0-.06.1l.132.071a1.088 1.088 0 0 1 .044-.076c.003-.004 0 .001-.008.006a.066.066 0 0 1-.067-.004.06.06 0 0 1-.02-.024v.003l.002.013a.549.549 0 0 1 .001.047h.15zm.001.052v-.052h-.15v.056l.15-.004zm-.359.883c.377-.251.364-.689.36-.883l-.15.004c.004.204.008.554-.293.754l.083.125zm-.307.21c.087-.06.188-.131.307-.21l-.083-.125c-.12.08-.223.15-.31.21l.086.124zm-.397.236a.627.627 0 0 0 .166-.081c.063-.04.14-.092.231-.156l-.085-.123a6.48 6.48 0 0 1-.225.152.504.504 0 0 1-.123.063l.036.145zm.02.084c-.01 0-.016-.003-.02-.008a.059.059 0 0 1-.014-.032.064.064 0 0 1 .005-.035c.003-.007.006-.008.009-.009l-.037-.145c-.106.027-.135.135-.125.208.01.078.067.171.183.171v-.15zm.039.001h-.038v.15h.033l.005-.15zm.93-.526c-.146.277-.336.407-.508.47a1.091 1.091 0 0 1-.422.056l-.005.15c.09.003.275.01.478-.065.206-.075.426-.23.59-.542l-.133-.07zm.058-2.738c.023.221.08.773.095 1.34.007.283.004.568-.02.816-.023.25-.066.455-.133.582l.133.07c.081-.155.126-.384.15-.638.024-.256.027-.548.02-.834a17.875 17.875 0 0 0-.096-1.352l-.15.016zm-.01-.108.003.038.007.07.15-.016-.008-.068a2.02 2.02 0 0 1-.002-.02v-.004h-.15zm-.027-.1c.008.03.016.053.02.073a.4.4 0 0 1 .006.022v.005h.15a.279.279 0 0 0-.01-.066l-.023-.076-.143.043zm-.054-.482a.454.454 0 0 0-.007.247c.015.083.041.17.06.236l.144-.043a2.146 2.146 0 0 1-.057-.22c-.014-.079-.014-.134-.002-.162l-.138-.058zm.182-.095c-.004-.002-.05-.032-.102-.007a.128.128 0 0 0-.049.043.326.326 0 0 0-.03.059l.137.058a.182.182 0 0 1 .016-.03c.003-.005 0 0-.01.005a.051.051 0 0 1-.033.003l-.004-.001s.002 0 .005.003l.07-.133zm-.024.004c-.003.004-.004.003 0 .001a.038.038 0 0 1 .03-.002l-.006-.003-.07.133c.006.003.033.019.066.018a.127.127 0 0 0 .092-.047l-.112-.1zm-.003-.269c.064.082.07.134.064.166a.221.221 0 0 1-.061.103l.112.1a.36.36 0 0 0 .097-.179c.014-.086-.013-.179-.094-.282l-.118.092zm-.133-.247c.033.076.075.173.133.247l.118-.092a1.034 1.034 0 0 1-.114-.215l-.137.06zm-.066-.12c.019-.025.024-.02.014-.018-.018.004-.027-.008-.022-.002a.208.208 0 0 1 .03.048c.014.025.028.057.043.092l.138-.06a1.841 1.841 0 0 0-.047-.1.344.344 0 0 0-.057-.086.125.125 0 0 0-.119-.039.182.182 0 0 0-.1.077l.12.088zm-.117.896a1.444 1.444 0 0 1-.006-.479c.011-.09.028-.176.05-.25a.574.574 0 0 1 .073-.167l-.12-.088a.717.717 0 0 0-.097.213 1.787 1.787 0 0 0-.055.273c-.025.19-.025.394.01.535l.145-.037zm.046 2.184c.01.01.026.023.05.029a.09.09 0 0 0 .075-.016.11.11 0 0 0 .033-.043.206.206 0 0 0 .012-.04.949.949 0 0 0 .012-.208 15.34 15.34 0 0 0-.228-1.906l-.145.037a15.382 15.382 0 0 1 .223 1.872.893.893 0 0 1-.008.174l-.002.007v.003l.002-.004a.05.05 0 0 1 .01-.011.061.061 0 0 1 .052-.01.05.05 0 0 1 .015.006l.005.003-.106.107zm-.31-.519c.05.104.1.205.15.294.05.087.102.167.16.225l.105-.107a.9.9 0 0 1-.135-.192 6.137 6.137 0 0 1-.146-.285l-.134.065zm-.226-.426c.082.132.155.282.226.426l.134-.065c-.07-.144-.146-.3-.233-.44l-.127.079zm-.5-1.285a.264.264 0 0 0-.028.134c.001.046.01.097.023.148.028.104.076.222.133.342.115.239.269.494.372.66l.127-.078a7.359 7.359 0 0 1-.363-.647 1.89 1.89 0 0 1-.123-.315.506.506 0 0 1-.019-.113c0-.031.004-.049.01-.058l-.132-.073zm.086-.135a1.412 1.412 0 0 0-.086.135l.132.073c.03-.055.056-.092.077-.122l-.123-.086zm.02-.151c.018.058.018.078.016.089-.002.01-.008.021-.036.062l.123.086c.023-.034.05-.072.06-.12a.333.333 0 0 0-.02-.162l-.144.045zm-.126-.2a.576.576 0 0 1 .125.2l.143-.045c-.034-.11-.098-.184-.153-.25l-.115.096zm-.142-.204c.042.086.096.15.142.205l.115-.096a.851.851 0 0 1-.122-.175l-.135.066zm-.12-.151c0-.032.01-.018-.01-.008-.015.009-.02-.002 0 .009.037.02.093.075.13.15l.135-.066a.5.5 0 0 0-.195-.217c-.034-.018-.09-.036-.141-.008-.055.03-.068.09-.068.14h.15zm-.291.189a.253.253 0 0 0 .032.066.122.122 0 0 0 .064.048c.066.02.112-.03.13-.055a.463.463 0 0 0 .066-.248h-.15a.403.403 0 0 1-.013.098.206.206 0 0 1-.025.063c-.012.016 0-.012.035-.002.013.004.017.011.015.008a.114.114 0 0 1-.012-.027l-.142.049zm-.38-.362c.008-.007.022-.013.057 0 .036.013.08.044.126.087a.826.826 0 0 1 .197.275l.142-.049a.966.966 0 0 0-.236-.335.562.562 0 0 0-.177-.119c-.063-.024-.14-.028-.206.026l.097.115zm-.033.072c-.01-.022-.009-.023-.009-.024 0 0 0-.004.006-.012a.192.192 0 0 1 .036-.036l-.097-.115c-.051.043-.085.088-.093.14-.008.05.012.09.02.109l.137-.062zm.002.138c.036-.062.006-.12-.002-.138l-.137.062.006.013v.003a.023.023 0 0 1 .002-.014l.131.074zm-.019.037a.673.673 0 0 1 .02-.037l-.13-.075c-.01.015-.017.031-.024.045l.134.067zm.002-.004-.138-.06.138.06zm-.247.031c.011.028.028.06.056.08a.098.098 0 0 0 .114 0 .176.176 0 0 0 .048-.055.657.657 0 0 0 .027-.052l-.134-.067a.629.629 0 0 1-.029.052l.003-.002a.05.05 0 0 1 .026-.008.05.05 0 0 1 .032.01c.005.003.006.006.004.002a.122.122 0 0 1-.01-.018l-.137.058zm-.028-.08a.832.832 0 0 0 .028.08l.138-.058a.945.945 0 0 1-.024-.068l-.143.046zm-.19-.12c.046-.042.074-.054.088-.056.009-.002.015 0 .024.008a.201.201 0 0 1 .04.065c.014.031.026.067.038.103l.142-.046a1.08 1.08 0 0 0-.043-.118.344.344 0 0 0-.075-.114.173.173 0 0 0-.15-.046.333.333 0 0 0-.166.095l.102.11zm-.132.482a.203.203 0 0 1-.052-.193.567.567 0 0 1 .184-.289l-.102-.11a.713.713 0 0 0-.23.37.353.353 0 0 0 .095.328l.105-.106zm.243.69a.264.264 0 0 0 .037-.188.643.643 0 0 0-.06-.189 1.209 1.209 0 0 0-.22-.313l-.105.106c.06.06.139.166.19.272a.5.5 0 0 1 .046.144c.006.041 0 .067-.011.083l.123.085zm-.505.094c.03.052.074.089.127.104a.239.239 0 0 0 .149-.008.512.512 0 0 0 .229-.19l-.123-.085a.365.365 0 0 1-.157.134.09.09 0 0 1-.056.005c-.011-.003-.025-.011-.04-.036l-.13.076zm-.113-.598a.832.832 0 0 0 .113.598l.13-.076a.682.682 0 0 1-.095-.495l-.148-.027zm-.067-.728c.019-.005.027-.003.03 0 .006.002.015.009.025.028.023.04.038.11.044.2.012.178-.012.394-.032.5l.148.027a2.46 2.46 0 0 0 .034-.536.659.659 0 0 0-.062-.264.211.211 0 0 0-.09-.09.188.188 0 0 0-.139-.009l.042.144zm-.123.543a.73.73 0 0 1-.032-.32c.016-.116.065-.196.155-.223l-.042-.144c-.172.051-.242.204-.262.345a.88.88 0 0 0 .04.392l.141-.05zm.045.617a.355.355 0 0 0 .03-.133 1.432 1.432 0 0 0-.075-.485l-.141.051a1.284 1.284 0 0 1 .066.425.22.22 0 0 1-.014.076l.134.066zm-.005.011.005-.01-.134-.067-.005.01.134.067zm-.448.323c.06.038.122.04.178.016a.348.348 0 0 0 .126-.101 1.26 1.26 0 0 0 .144-.238l-.134-.066a1.101 1.101 0 0 1-.125.208.204.204 0 0 1-.07.058c-.013.006-.023.006-.037-.003l-.082.126zm-.227-.727c-.04.148-.028.3.015.427a.572.572 0 0 0 .212.3l.082-.126a.426.426 0 0 1-.152-.221.598.598 0 0 1-.012-.341l-.145-.04zm-.081-.472a.076.076 0 0 1 .035-.013.02.02 0 0 1 .012.004c.013.01.031.038.045.093a.864.864 0 0 1-.011.388l.145.039c.038-.143.045-.326.012-.462a.31.31 0 0 0-.1-.177.167.167 0 0 0-.105-.035.223.223 0 0 0-.11.034l.077.13zm-.422.684c0-.083.052-.224.137-.366a.968.968 0 0 1 .285-.318l-.077-.129c-.123.074-.246.22-.336.37-.09.147-.159.317-.159.443h.15zm-.314.346a.192.192 0 0 0 .056.064.112.112 0 0 0 .093.018.134.134 0 0 0 .067-.045.265.265 0 0 0 .038-.06.841.841 0 0 0 .06-.323h-.15a.69.69 0 0 1-.047.26.12.12 0 0 1-.015.026c-.004.005-.001 0 .01-.003a.038.038 0 0 1 .029.004c.002.001-.002 0-.01-.015l-.13.074zm-.014-.025.014.025.13-.074-.014-.026-.13.075zm-.15-.631a.562.562 0 0 0 .015.353c.036.106.092.203.135.278l.13-.075a1.44 1.44 0 0 1-.123-.251.413.413 0 0 1-.014-.26l-.143-.045zm.017-.25c.007-.017.012-.022.011-.021a.039.039 0 0 1-.03.007c-.013-.002-.018-.009-.015-.006.002.003.007.01.012.022a.39.39 0 0 1 .005.248l.143.045a.537.537 0 0 0-.01-.353.23.23 0 0 0-.04-.062.125.125 0 0 0-.075-.042.113.113 0 0 0-.092.03.208.208 0 0 0-.047.073l.138.059zm-4.14-.416a.336.336 0 0 1-.01-.012c-.003-.003 0-.001.001.004a.055.055 0 0 1-.005.052l-.12-.09a.095.095 0 0 0-.012.097c.009.022.026.04.033.048l.113-.099zm.117.193a.618.618 0 0 0-.117-.193l-.113.099a.473.473 0 0 1 .091.15l.14-.056zm.053.304c-.007-.085-.016-.212-.053-.304L3.59 2.9c.026.066.035.167.043.26l.15-.012zm-.083.07a.155.155 0 0 1-.01.017c-.002.004.002-.003.012-.01a.068.068 0 0 1 .072.003.06.06 0 0 1 .017.018l.004.006-.002-.007a2.137 2.137 0 0 1-.01-.097l-.15.012.008.08a.293.293 0 0 0 .014.066c.003.009.012.03.035.046a.082.082 0 0 0 .09.002.116.116 0 0 0 .035-.035.293.293 0 0 0 .02-.036L3.7 3.217zm.026-.505c.008.005.021.02.031.06a.48.48 0 0 1 .01.143.849.849 0 0 1-.067.302l.135.065a.995.995 0 0 0 .083-.36.664.664 0 0 0-.015-.186.244.244 0 0 0-.093-.149l-.084.125zm-.127-.018a.048.048 0 0 1 .03-.014c.017-.002.05 0 .097.032l.084-.125a.29.29 0 0 0-.202-.055.195.195 0 0 0-.13.073l.121.09zm1.296-.051-.075-.007v.002a.245.245 0 0 0 0 .016c-.001.011-.002.026-.001.045 0 .035.004.085.017.135.012.05.035.107.077.153a.247.247 0 0 0 .187.078v-.15a.097.097 0 0 1-.077-.03.196.196 0 0 1-.042-.087.479.479 0 0 1-.011-.148l-.075-.007zm.105-.108a.242.242 0 0 0-.132.028.106.106 0 0 0-.038.04.09.09 0 0 0-.01.036v.003a2.413 2.413 0 0 0 .15.001v.002a.121.121 0 0 1-.002.013.06.06 0 0 1-.005.015.045.045 0 0 1-.015.017c-.004.002.005-.005.052-.005v-.15zm.158.132a.173.173 0 0 0-.034-.083c-.03-.036-.075-.05-.124-.05v.15c.011 0 .016.002.016.002h-.001l-.002-.001a.021.021 0 0 1-.004-.004l-.001-.002.001.006.002.01.147-.028zm-.004.003c.006.006.008.012.007.01v-.003a.398.398 0 0 1-.003-.01l-.147.028.008.032a.12.12 0 0 0 .026.046l.11-.103zm-.113.023v.01c-.001.003 0-.004.004-.013a.072.072 0 0 1 .101-.027.048.048 0 0 1 .008.007l-.109.103c.004.004.023.024.053.028a.079.079 0 0 0 .08-.044.106.106 0 0 0 .01-.031l.002-.018-.149-.015zm.108-.125a.1.1 0 0 0-.065.023.11.11 0 0 0-.03.044c-.01.023-.012.049-.013.058l.15.015.001-.015V2.69a.04.04 0 0 1-.011.016.052.052 0 0 1-.032.012v-.15zm.133.207a.362.362 0 0 0-.015-.123.122.122 0 0 0-.118-.084v.15a.03.03 0 0 1-.016-.007c-.007-.005-.008-.01-.007-.006a.463.463 0 0 1 .006.07h.15zM5.2 2.72a.051.051 0 0 1-.005.02l-.004.007c.001 0 .007-.006.018-.009a.062.062 0 0 1 .05.01.05.05 0 0 1 .023.027v-.001h-.15c0 .014.002.03.007.046a.096.096 0 0 0 .037.052.088.088 0 0 0 .072.011.107.107 0 0 0 .043-.023.194.194 0 0 0 .059-.14H5.2zm.192-.153a.26.26 0 0 0-.112.02.14.14 0 0 0-.08.133h.15c0-.006 0-.005-.001-.001l-.004.003a.056.056 0 0 1 .016-.004.229.229 0 0 1 .031-.001v-.15zm-.292.497c.158 0 .265-.115.32-.21a.48.48 0 0 0 .057-.144.184.184 0 0 0 .002-.067.098.098 0 0 0-.021-.046.086.086 0 0 0-.066-.03v.15a.064.064 0 0 1-.048-.023.052.052 0 0 1-.012-.023c-.001-.005 0-.002-.003.01a.332.332 0 0 1-.038.097c-.045.078-.112.136-.191.136v.15zm-1.104 3.01a.194.194 0 0 0-.154.085.507.507 0 0 0-.078.172 1.408 1.408 0 0 0-.033.477l.15-.013a1.26 1.26 0 0 1 .027-.424.362.362 0 0 1 .053-.12c.019-.025.03-.026.035-.026v-.15zm.143.393h.075v-.004a.699.699 0 0 0-.002-.05.848.848 0 0 0-.018-.12.402.402 0 0 0-.053-.136.173.173 0 0 0-.145-.082v.15c.003 0 .01 0 .02.016a.258.258 0 0 1 .032.084.698.698 0 0 1 .016.14v.002h.075zm.743.608a.648.648 0 0 1-.557-.317.86.86 0 0 1-.11-.295l-.002-.004-.074.008a6.748 6.748 0 0 0-.074.01.73.73 0 0 1 .005.033 1.01 1.01 0 0 0 .127.327.798.798 0 0 0 .678.387l.007-.15zm1.096-1.041-.07-.027v.002a.88.88 0 0 1-.019.044 3.01 3.01 0 0 1-.275.507 1.61 1.61 0 0 1-.331.368.614.614 0 0 1-.401.147l-.007.15a.762.762 0 0 0 .5-.178c.142-.11.264-.258.363-.402a3.169 3.169 0 0 0 .309-.58v-.003l.001-.001-.07-.027zm.027-.434-.075.004v.01a1.789 1.789 0 0 1 0 .13 1.714 1.714 0 0 1-.025.276l.147.029a1.861 1.861 0 0 0 .03-.408 2.037 2.037 0 0 0-.002-.043l-.075.003zm-.044.203.032-.117a.425.425 0 0 1 .023-.063c.003-.005.002-.003-.002.002a.06.06 0 0 1-.05.014.052.052 0 0 1-.032-.017l.005.01.136-.064a.197.197 0 0 0-.026-.041.09.09 0 0 0-.136-.011.144.144 0 0 0-.029.039.551.551 0 0 0-.032.088l-.034.122.145.038zm-.212.629c.108-.242.17-.472.212-.629l-.145-.038c-.042.156-.101.376-.204.606l.137.06zm-1.037.52c.143.004.342.009.534-.054a.81.81 0 0 0 .503-.466l-.137-.061a.66.66 0 0 1-.412.385c-.165.053-.339.05-.485.046l-.003.15zm-.033 0h.033l.003-.15h-.033l-.003.15zm-.615-.795c.014.137.083.328.185.487.051.08.113.154.183.21.07.056.154.096.247.098l.003-.15a.264.264 0 0 1-.157-.066.714.714 0 0 1-.15-.173 1.077 1.077 0 0 1-.161-.421l-.15.015zm.133-.446a12.25 12.25 0 0 0-.07-.03v.004a.426.426 0 0 0-.014.036 1.06 1.06 0 0 0-.049.436l.15-.015a.91.91 0 0 1 .051-.401l-.068-.03zm.294.179a.487.487 0 0 0-.04-.241.145.145 0 0 0-.151-.08.252.252 0 0 0-.113.051.408.408 0 0 0-.043.038h-.001v.001l.054.052.054.052v-.001a.188.188 0 0 1 .026-.021.111.111 0 0 1 .042-.023h-.002c-.003-.002-.002-.003.003.004.01.018.023.065.02.165l.15.003zm.497.436c-.186-.014-.308-.038-.385-.096-.07-.052-.116-.144-.112-.34l-.15-.003c-.004.22.048.37.172.463.116.087.28.112.463.126l.012-.15zm.62-.695a1.494 1.494 0 0 1-.22.442c-.119.16-.257.265-.4.253l-.012.15c.226.018.408-.146.533-.314a1.64 1.64 0 0 0 .244-.492l-.144-.04zm-.22.138.052.055a.05.05 0 0 0 .003-.004 1.46 1.46 0 0 1 .205-.16c.015-.008.02-.007.015-.007-.003 0-.014 0-.025-.007a.053.053 0 0 1-.024-.027c-.004-.012.001-.013-.005.012l.144.039a.173.173 0 0 0 .003-.101.097.097 0 0 0-.1-.066.193.193 0 0 0-.077.024.571.571 0 0 0-.066.04 1.534 1.534 0 0 0-.172.144l-.003.003h-.001l.051.055zm-.474-.185a.54.54 0 0 0 .241.261c.092.045.205.054.285-.021l-.103-.11c-.016.016-.054.027-.116-.003a.391.391 0 0 1-.17-.19l-.137.063zm.286-.751c-.086.092-.186.21-.25.335-.065.126-.102.274-.036.416l.136-.063c-.037-.081-.022-.177.033-.284a1.43 1.43 0 0 1 .227-.302l-.11-.102zm.417.018a7.6 7.6 0 0 0 .046-.06.037.037 0 0 0-.004-.003.276.276 0 0 0-.039-.024.394.394 0 0 0-.105-.038.325.325 0 0 0-.315.107l.11.102c.064-.069.127-.072.175-.062a.245.245 0 0 1 .086.037l.046-.06zm.35.213.065-.039-.001-.001a.216.216 0 0 0-.007-.01.546.546 0 0 0-.09-.098.63.63 0 0 0-.304-.14l-.026.149a.48.48 0 0 1 .285.159.253.253 0 0 1 .014.019l.064-.04zm-.01-.421-.073.019v.001l.002.004a2.45 2.45 0 0 1 .048.233c.01.058.013.104.01.127-.001.005-.002.005 0 .003 0-.002.005-.013.018-.021.035-.022.061.003.05-.005l-.09.12c.02.015.07.044.12.012a.102.102 0 0 0 .04-.047.162.162 0 0 0 .01-.042.656.656 0 0 0-.01-.17 2.568 2.568 0 0 0-.051-.247l-.001-.004a.065.065 0 0 1 0-.002l-.073.019zm-.19-.908-.075.012v.002l.002.006a7.338 7.338 0 0 0 .016.104c.011.068.027.162.046.263.036.197.085.432.131.549l.14-.056c-.04-.1-.086-.319-.124-.52a13.172 13.172 0 0 1-.061-.363v-.006l-.001-.001-.074.01zM5.64 3.49c.013.092.03.186.052.267l.145-.041a1.892 1.892 0 0 1-.048-.246l-.149.02zm.039.145.075.006v-.004a.598.598 0 0 1 .026-.12l-.13-.074a.389.389 0 0 0-.038.12.854.854 0 0 0-.007.06v.006l.074.006zm-.019.99a.503.503 0 0 0 .132-.281c.02-.106.02-.223.015-.329a2.63 2.63 0 0 0-.054-.394v-.002l-.074.016-.073.017a.134.134 0 0 0 .001.007 1.487 1.487 0 0 1 .02.103c.011.069.024.162.03.262.005.1.004.203-.012.293a.359.359 0 0 1-.088.2l.103.108zm-.282.187a.25.25 0 0 0 .139-.059c.04-.03.087-.075.143-.128l-.103-.109a1.83 1.83 0 0 1-.13.118c-.033.024-.048.028-.056.028l.007.15zm-.32-.184c.067.056.122.102.168.132.046.03.096.055.152.052l-.007-.15c-.008 0-.024-.002-.062-.027a2.1 2.1 0 0 1-.155-.122l-.096.115zm-.002-.001.1-.112-.1.112zm.001 0 .098-.113-.098.114zm0 .001.097-.115-.096.115zm.003.002.092-.119-.092.119zm-.003-.002.098-.114-.098.114zm-.158.209c0-.067.001-.127.006-.178a.263.263 0 0 1 .024-.1c.004-.006.005-.006.003-.005-.002.002-.002 0 .005.001a.32.32 0 0 1 .121.073l.096-.115a.435.435 0 0 0-.193-.106.156.156 0 0 0-.095.013.16.16 0 0 0-.066.062.397.397 0 0 0-.044.162 2.009 2.009 0 0 0-.007.193h.15zm0 1.074V4.837h-.15V5.91h.15zm-.274.237c.04 0 .112.004.17-.027.071-.038.104-.11.104-.21h-.15a.146.146 0 0 1-.01.062.03.03 0 0 1-.014.015c-.017.01-.045.01-.097.01l-.003.15zm-.07.003c-.003.002-.003 0 .012-.002a.453.453 0 0 1 .058-.001l.003-.15c-.023 0-.052-.001-.079.002a.17.17 0 0 0-.091.036l.097.115zm-.014-.546L4.467 5.6v.014a24.272 24.272 0 0 1-.034.472l.149.014a12.019 12.019 0 0 0 .034-.477V5.61h.001l-.075-.005zm-.188-.74-.071.025v.001l.002.005a5.86 5.86 0 0 1 .028.087c.018.058.043.135.066.218.024.082.048.168.064.243a.725.725 0 0 1 .024.156l.15.01a.823.823 0 0 0-.027-.2 4.543 4.543 0 0 0-.066-.25 9.212 9.212 0 0 0-.09-.292l-.006-.019-.002-.005v-.001l-.072.023zm-.376-.516a22.83 22.83 0 0 0-.066.036v.001a.816.816 0 0 1 .01.016 3.29 3.29 0 0 0 .116.191c.073.111.172.249.268.33l.097-.114a1.518 1.518 0 0 1-.24-.298 3.584 3.584 0 0 1-.118-.195l-.001-.003-.066.036zm-.147-.13.061.043.001-.001a.053.053 0 0 1 .005-.005c.006-.006.004-.001-.007 0-.02 0-.025-.013-.02-.003a.32.32 0 0 1 .033.108l.148-.025a.45.45 0 0 0-.054-.164c-.026-.04-.066-.07-.116-.066a.142.142 0 0 0-.086.04.205.205 0 0 0-.026.029v.001h-.001l.062.043zm-.402.553a.305.305 0 0 0 .25 0 .337.337 0 0 0 .15-.161.96.96 0 0 0 .077-.392h-.15a.8.8 0 0 1-.063.326.19.19 0 0 1-.08.092c-.026.013-.067.019-.13-.005l-.054.14zm-.11-1.315-.075-.011v.003a3.305 3.305 0 0 0-.023.178 4.556 4.556 0 0 0-.026.406c-.003.15.004.309.034.44a.618.618 0 0 0 .067.179c.03.052.073.097.133.12l.054-.14a.121.121 0 0 1-.059-.057.472.472 0 0 1-.049-.135 1.805 1.805 0 0 1-.03-.405 4.406 4.406 0 0 1 .047-.563v-.003l-.074-.012zm.212.296c-.006-.153-.044-.246-.09-.302a.21.21 0 0 0-.098-.065.128.128 0 0 0-.016-.003 3.273 3.273 0 0 0-.016.149h-.003a.03.03 0 0 1-.002-.001h.001a.06.06 0 0 1 .02.017c.018.022.05.078.055.21l.15-.005zm.088.501a11.383 11.383 0 0 1 .061-.043v-.002a.382.382 0 0 1-.02-.03.943.943 0 0 1-.13-.426l-.15.006a1.061 1.061 0 0 0 .178.538l.061-.043zm.108-.457-.075-.003a.089.089 0 0 1 0 .007 4.381 4.381 0 0 1-.024.294.718.718 0 0 1-.028.146c-.002.006-.001.002.004-.003a.063.063 0 0 1 .084-.005l.007.007-.006-.013-.14.054a.21.21 0 0 0 .023.045.097.097 0 0 0 .06.042.088.088 0 0 0 .082-.028.137.137 0 0 0 .025-.04.813.813 0 0 0 .038-.187 4.019 4.019 0 0 0 .024-.305v-.007l-.074-.004zm.335-.514-.044-.06a.062.062 0 0 0-.005.003.815.815 0 0 0-.052.042c-.033.029-.078.07-.123.12-.086.098-.186.245-.186.41h.15c0-.108.068-.219.149-.31a1.127 1.127 0 0 1 .155-.144l-.044-.061zm.181.324.075.001v-.006a.926.926 0 0 0-.002-.064.921.921 0 0 0-.02-.148.32.32 0 0 0-.074-.152.15.15 0 0 0-.09-.044.178.178 0 0 0-.106.023l.071.132c.014-.008.019-.006.017-.006l.002.001c.01.01.023.037.033.08a.772.772 0 0 1 .02.179v.003h-.001l.075.001zm-.007.493.068.03.001-.001a.16.16 0 0 0 .005-.012.747.747 0 0 0 .037-.147.863.863 0 0 0-.032-.385l-.143.045a.713.713 0 0 1-.002.433.223.223 0 0 1-.002.006l.068.03zm.19.136-.043-.062a.121.121 0 0 1-.02.012.098.098 0 0 1-.037.01h-.003c-.004-.006-.015-.03-.012-.093l-.15-.007a.304.304 0 0 0 .037.183.149.149 0 0 0 .129.068.244.244 0 0 0 .129-.041.286.286 0 0 0 .01-.007l.002-.001-.042-.062zm-.106-.807-.072.022v.002l.003.007a4.048 4.048 0 0 1 .033.114c.02.075.047.173.069.272.021.1.038.195.04.264a.231.231 0 0 1-.003.068c-.003.01.002-.015.032-.017l.007.15c.065-.003.094-.056.105-.09a.366.366 0 0 0 .01-.117 1.828 1.828 0 0 0-.045-.29 5.288 5.288 0 0 0-.105-.398l-.002-.007v-.002l-.072.022zm-.054-.534-.072-.02v.002a.325.325 0 0 0-.01.05.998.998 0 0 0 .067.531l.138-.058a.848.848 0 0 1-.05-.485v-.001l-.073-.02zm.2-.191L4.45 2.63h-.001l-.003.001a.295.295 0 0 0-.034.01.43.43 0 0 0-.08.037.27.27 0 0 0-.14.21l.149.013c.003-.042.03-.071.068-.094a.28.28 0 0 1 .073-.03l-.016-.073zm.13.583h.075V3.28a2.333 2.333 0 0 0-.002-.085 2.842 2.842 0 0 0-.015-.203 1.131 1.131 0 0 0-.042-.215.32.32 0 0 0-.043-.089.136.136 0 0 0-.096-.059l-.014.15c-.014-.002-.017-.01-.011-.002a.178.178 0 0 1 .021.047.99.99 0 0 1 .036.185 2.688 2.688 0 0 1 .016.273v.005h.075zm.231.686a.204.204 0 0 1-.044-.067.925.925 0 0 1-.054-.156 1.85 1.85 0 0 1-.058-.463h-.15c0 .186.025.362.063.502.018.07.04.132.064.182a.334.334 0 0 0 .088.121l.091-.119zm-.187-.165a.33.33 0 0 1 .044.068.718.718 0 0 1 .054.134l.002.011c0-.001 0-.01.007-.02a.066.066 0 0 1 .043-.031.058.058 0 0 1 .034.002c.004.002.005.003.003.001l-.091.12a.14.14 0 0 0 .03.018.1.1 0 0 0 .055.006c.058-.012.067-.068.068-.082a.192.192 0 0 0-.005-.056.866.866 0 0 0-.067-.173.466.466 0 0 0-.068-.102l-.109.104zm-.038-.347c-.007.063-.015.128-.015.183.001.053.009.118.053.164l.109-.104c-.002-.002-.011-.015-.012-.061 0-.044.006-.098.014-.164l-.149-.018zm0 0 .149.017-.15-.016zm.017-.22c0 .073-.008.147-.017.22l.149.018c.008-.072.018-.155.018-.238h-.15zm.393-.061a1.857 1.857 0 0 0-.107-.08.364.364 0 0 0-.11-.055.144.144 0 0 0-.071 0 .121.121 0 0 0-.067.044.252.252 0 0 0-.038.152h.15c0-.05.009-.063.008-.061a.029.029 0 0 1-.015.01h-.003a.23.23 0 0 1 .062.034c.03.02.062.046.098.074l.093-.118zm.002.002-.002-.002-.093.118.003.002.092-.118zm.124.45c.005-.075.01-.159-.003-.235a.33.33 0 0 0-.12-.215l-.093.118a.18.18 0 0 1 .065.122.97.97 0 0 1 .002.202l.15.008zm0 0-.15-.009.15.01zm-.004.124c0-.04.002-.081.004-.124l-.15-.008a2.781 2.781 0 0 0-.004.132h.15zm.236.404c-.156-.12-.236-.237-.236-.404h-.15c0 .232.119.387.294.522l.092-.118zm.008-.129c.002.033.003.065.002.095s-.004.052-.008.063c-.004.012-.001-.007.022-.01.013-.002.008.006-.024-.02l-.092.12c.038.029.085.056.136.049.061-.009.089-.058.1-.09a.375.375 0 0 0 .016-.108c0-.035 0-.073-.002-.105l-.15.006zm-.001-.065.001.065.15-.006-.001-.059h-.15zm-.144-.35c.038.072.075.142.102.205a.416.416 0 0 1 .042.145h.15a.55.55 0 0 0-.054-.205c-.03-.07-.07-.144-.107-.215l-.133.07zm-.065-.126c.02.042.043.084.065.126l.133-.07a5.602 5.602 0 0 1-.063-.122l-.135.066zm.039-.376c-.033.049-.07.102-.081.164a.33.33 0 0 0 .042.212l.135-.066c-.032-.065-.034-.097-.03-.118a.336.336 0 0 1 .059-.109l-.125-.083zm0 0 .124.084-.124-.085zm0-.001.124.086-.123-.086zm0 0 .124.084-.124-.083zm.052-.081-.052.082.125.083c.016-.025.036-.054.056-.088l-.129-.077zm.49.179a.588.588 0 0 0-.194-.242.225.225 0 0 0-.153-.04.199.199 0 0 0-.143.103l.13.077c.016-.029.029-.031.033-.032.008-.001.025.001.05.018a.44.44 0 0 1 .14.177l.136-.061zm.011.026-.012-.027-.136.062.011.026.137-.061zm-.08-.158-.076.003v.001a.6.6 0 0 1 .001.014 4.13 4.13 0 0 0 .012.177l.15-.013a4.936 4.936 0 0 1-.012-.172v-.013l-.076.003zm.324-.411-.046-.06-.001.001-.003.003-.013.01a2.18 2.18 0 0 0-.169.15.934.934 0 0 0-.123.148.334.334 0 0 0-.04.083.164.164 0 0 0 0 .1l.141-.048c.002.004 0 .002.003-.01a.189.189 0 0 1 .022-.044.79.79 0 0 1 .104-.123 1.91 1.91 0 0 1 .167-.148l.003-.002-.045-.06zm.271.695.075-.004V3.35a1.902 1.902 0 0 0-.01-.11 2.552 2.552 0 0 0-.041-.26.956.956 0 0 0-.09-.263c-.041-.07-.113-.147-.221-.122l.033.146c.006-.001.025-.005.057.051.03.052.055.132.074.22a2.407 2.407 0 0 1 .048.348v.007l.075-.004zm-.191.162-.027.07a.266.266 0 0 1 .015.005.328.328 0 0 0 .147.018.159.159 0 0 0 .128-.083c.027-.054.022-.12 0-.194l-.144.044c.019.06.01.08.01.082 0-.001 0-.001 0 0a.035.035 0 0 1-.012.002.182.182 0 0 1-.059-.005.306.306 0 0 1-.03-.009H6.11l-.027.07zm.144 1.084.072-.018V4.59a.184.184 0 0 1-.003-.011 7.12 7.12 0 0 1-.037-.158 10.252 10.252 0 0 1-.08-.373 3.38 3.38 0 0 1-.055-.364.466.466 0 0 1 0-.103c.002-.01.004-.008 0-.002a.054.054 0 0 1-.048.02l.013-.15a.097.097 0 0 0-.087.042.156.156 0 0 0-.025.064.598.598 0 0 0-.003.14c.008.105.03.245.057.382a10.442 10.442 0 0 0 .12.538l.002.01v.002h.001l.073-.018zm.202.177a7.758 7.758 0 0 1-.055-.051l-.004.004a.156.156 0 0 1-.03.022.041.041 0 0 1-.007.002h-.002s.004 0 .006.002c.002.001 0 0-.005-.008a.365.365 0 0 1-.03-.152l-.15.008c.005.098.021.17.05.22a.166.166 0 0 0 .06.062c.026.015.053.02.078.018a.203.203 0 0 0 .105-.042.307.307 0 0 0 .038-.033l.001-.001-.055-.051zm.15.305.076-.003v-.005a.762.762 0 0 0-.004-.055.945.945 0 0 0-.021-.128.359.359 0 0 0-.06-.137.153.153 0 0 0-.07-.051.142.142 0 0 0-.098.004l.055.14c.004-.002 0 0-.005-.002-.004-.001-.003-.003.001.002a.22.22 0 0 1 .031.079.797.797 0 0 1 .02.155v.002l.076-.001zm.274-.345-.07-.026a.058.058 0 0 0-.003.005 1.197 1.197 0 0 1-.026.066 1.663 1.663 0 0 1-.068.145.406.406 0 0 1-.073.104c-.01.008-.006.002.008.002.018 0 .025.013.021.007l-.125.083c.02.03.053.059.1.06a.141.141 0 0 0 .094-.038.535.535 0 0 0 .106-.146 1.815 1.815 0 0 0 .104-.23l.002-.004v-.002l-.07-.026zm.322.229.068-.033-.001-.001-.002-.004a1.017 1.017 0 0 0-.033-.06 1.009 1.009 0 0 0-.088-.13.344.344 0 0 0-.138-.111.154.154 0 0 0-.103-.002.178.178 0 0 0-.087.07l.123.085c.01-.013.014-.014.013-.013l.003.001a.209.209 0 0 1 .073.064.86.86 0 0 1 .103.163l.001.003.068-.032zm.288-.234-.066-.036-.002.003a.862.862 0 0 1-.028.048 1.2 1.2 0 0 1-.071.102.269.269 0 0 1-.07.067c-.008.004-.007.001 0 .002.009.001.012.006.01.003l-.121.09c.02.028.05.05.088.055a.149.149 0 0 0 .09-.017.404.404 0 0 0 .12-.106 1.164 1.164 0 0 0 .113-.171c0-.002.002-.003.002-.003v-.001l-.065-.036zm.117.198c.01-.035.018-.07.025-.1a.366.366 0 0 0 .01-.092.125.125 0 0 0-.015-.054.095.095 0 0 0-.063-.047.118.118 0 0 0-.065.006.253.253 0 0 0-.05.025l.081.127a.111.111 0 0 1 .02-.011c.003-.001-.004.002-.017 0a.055.055 0 0 1-.037-.027c-.005-.008-.004-.014-.004-.01a.24.24 0 0 1-.007.052 2.177 2.177 0 0 1-.023.093l.145.038zm-.042.227c0-.06.02-.142.042-.227L7.436 4.9c-.02.079-.047.181-.047.265h.15zm-.28.368c.05-.023.094-.043.129-.062a.32.32 0 0 0 .092-.07c.053-.063.059-.141.059-.236h-.15c0 .097-.01.122-.024.138a.178.178 0 0 1-.05.037 1.907 1.907 0 0 1-.118.056l.063.137zm-.007.003.008-.003-.063-.137-.008.004.063.136zm-.308-.132-.07.028.001.002a.163.163 0 0 0 .005.011.234.234 0 0 0 .082.09c.067.044.164.059.29.001l-.063-.136c-.086.04-.127.021-.145.01a.095.095 0 0 1-.03-.034l-.001-.002a.004.004 0 0 1 0 .001l-.07.029zm-.405.148.038.065h.001l.003-.002a2.75 2.75 0 0 1 .173-.092.839.839 0 0 1 .125-.05.136.136 0 0 1 .032-.006c.007 0-.01.003-.025-.015L7 5.356a.114.114 0 0 0-.089-.038.276.276 0 0 0-.073.012.98.98 0 0 0-.149.058 2.443 2.443 0 0 0-.185.098l-.003.002.037.065zm-.216-.06-.06.045.001.001a.112.112 0 0 0 .006.008.263.263 0 0 0 .074.06c.052.03.13.05.221.016l-.052-.14a.106.106 0 0 1-.095-.007.14.14 0 0 1-.035-.029l-.06.046zm.02.633c0-.2 0-.373.006-.489a.561.561 0 0 1 .013-.11c0-.003 0-.001-.002.003a.059.059 0 0 1-.028.022.065.065 0 0 1-.055-.003.051.051 0 0 1-.013-.01l.119-.092a.109.109 0 0 0-.034-.03.085.085 0 0 0-.072-.004.092.092 0 0 0-.044.037.14.14 0 0 0-.014.032.662.662 0 0 0-.02.147c-.007.12-.006.3-.005.498h.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 .001h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm0 0h-.15.15zm.001.208v-.208h-.15v.208h.15zM4.856 7.627a2.218 2.218 0 0 0 1.006-.488c.275-.232.482-.526.482-.804h-.15c0 .21-.163.465-.43.69a2.068 2.068 0 0 1-.934.454l.026.148zM3.73 6.809a.97.97 0 0 0 .296.592c.187.177.463.289.83.226l-.026-.148c-.319.055-.548-.042-.7-.187a.821.821 0 0 1-.25-.496l-.15.013zm.679-.635a.47.47 0 0 0 .009.057.077.077 0 0 0 .033.04.076.076 0 0 0 .096-.015.073.073 0 0 0 .015-.026 1.005 1.005 0 0 0 .02-.13l-.15-.014a.914.914 0 0 1-.011.095l.001-.003s.003-.01.012-.02a.073.073 0 0 1 .094-.015.073.073 0 0 1 .03.036l.002.005a.328.328 0 0 1-.001-.02l-.15.01zm.05-.138c-.042.035-.053.086-.05.138l.15-.01v-.018.001a.016.016 0 0 1-.003.004l-.097-.115zm-.202-1.002.018-.072h-.001l-.002-.001a.134.134 0 0 0-.014-.002.508.508 0 0 0-.16.01.927.927 0 0 0-.402.223l.099.112a.78.78 0 0 1 .336-.189.359.359 0 0 1 .11-.007H4.24l.017-.074zm.207.04a.396.396 0 0 0-.134-.097.236.236 0 0 0-.069-.017h-.003v.149h-.002a.126.126 0 0 1-.002 0c.003.001.01.002.018.006a.25.25 0 0 1 .082.062l.11-.102zm-.44.458c.106-.031.237-.096.332-.166a.45.45 0 0 0 .117-.119.166.166 0 0 0 .026-.081.128.128 0 0 0-.035-.091l-.11.102a.023.023 0 0 1-.005-.015c0-.003.001-.001-.004.008a.31.31 0 0 1-.079.075.99.99 0 0 1-.285.143l.042.144zm-.437.193c.158-.08.312-.156.436-.193l-.042-.144a3 3 0 0 0-.46.203l.066.134zm.002 0-.07-.134.07.133zm-.218.105a5.27 5.27 0 0 0 .216-.105L3.52 5.59a6.766 6.766 0 0 1-.211.103l.062.136zm.325-.638a4.12 4.12 0 0 0-.402.4.927.927 0 0 0-.06.078.226.226 0 0 0-.035.074.093.093 0 0 0 .011.068c.019.031.05.04.07.041a.137.137 0 0 0 .048-.006.324.324 0 0 0 .043-.017l-.062-.136a.18.18 0 0 1-.023.01h.005a.06.06 0 0 1 .047.03c.012.02.009.039.008.04 0 .004 0-.002.013-.021a.78.78 0 0 1 .05-.065c.087-.103.237-.253.386-.384l-.1-.112zm-.49 1.94c-.02-.133.032-.313.1-.47a2.368 2.368 0 0 1 .132-.264l.002-.004-.063-.04-.064-.039-.001.002a.45.45 0 0 0-.013.021 2.265 2.265 0 0 0-.132.265c-.067.16-.137.374-.11.551l.149-.023zm.294.28a.208.208 0 0 1-.165-.032c-.053-.037-.107-.11-.13-.249l-.147.023c.026.17.097.284.192.35a.36.36 0 0 0 .285.053L3.5 7.411zm.214-.27-.073-.014v.002a.765.765 0 0 1-.044.144.453.453 0 0 1-.052.099c-.02.027-.036.036-.045.038l.035.146a.236.236 0 0 0 .13-.095.6.6 0 0 0 .071-.133 1.092 1.092 0 0 0 .05-.167l.002-.003v-.001l-.074-.015zm-.14-.047c.013-.015.014-.008.006-.01 0 0 .006.002.02.017a.257.257 0 0 1 .046.07l.068-.03.069-.03a.165.165 0 0 0-.006-.011.489.489 0 0 0-.067-.102.19.19 0 0 0-.106-.061c-.054-.01-.104.014-.142.057l.111.1zm-.268-.188a.236.236 0 0 0 .016.15.14.14 0 0 0 .102.073.215.215 0 0 0 .11-.011.215.215 0 0 0 .011-.004h.001a8.332 8.332 0 0 0-.057-.14l-.003.002a.12.12 0 0 1-.012.003.068.068 0 0 1-.024.002c-.002 0-.002 0 0 0a.013.013 0 0 1 .003.004s-.006-.013 0-.055l-.147-.024zm.07-.553-.074.007v.004a1.626 1.626 0 0 1 .005.055c.002.037.006.088.008.145.005.117.005.251-.01.342l.149.024a2.07 2.07 0 0 0 .011-.372 4.58 4.58 0 0 0-.013-.207v-.004l-.075.006zm1.949-1.067-.005-.005a.027.027 0 0 1 0 .015c-.002.008-.004.005.01-.005a.224.224 0 0 1 .064-.032 12.973 12.973 0 0 1-.044-.143h-.002a.146.146 0 0 0-.01.004.465.465 0 0 0-.096.05.166.166 0 0 0-.067.09c-.014.054.01.101.048.136l.102-.11zm.123.055c0 .006 0 0 .005-.003.002-.002-.001.002-.016.001a.19.19 0 0 1-.112-.053l-.102.11c.06.056.14.091.21.093a.172.172 0 0 0 .11-.032.142.142 0 0 0 .055-.116h-.15zm-.076-.153-.024.07.004.002a.26.26 0 0 1 .054.028c.032.022.042.04.042.053h.15c0-.09-.066-.148-.108-.177a.426.426 0 0 0-.093-.047h-.001l-.024.07zm4.163-.204a.097.097 0 0 1-.078-.027.196.196 0 0 1-.044-.085.48.48 0 0 1-.017-.146v-.002L9.32 4.72l-.075-.004a.054.054 0 0 0 0 .006.462.462 0 0 0 0 .057.629.629 0 0 0 .022.135c.015.05.039.106.083.15.046.046.11.074.19.071l-.006-.15zm.285-.207a.064.064 0 0 1-.049-.02.052.052 0 0 1-.013-.024l-.001.011a.332.332 0 0 1-.036.097c-.042.08-.107.14-.186.143l.005.15c.159-.005.261-.124.314-.222a.48.48 0 0 0 .05-.144.184.184 0 0 0 0-.068.098.098 0 0 0-.022-.045.086.086 0 0 0-.067-.028l.005.15zm-.042.005c0-.006.001-.005-.001-.002l-.003.004a.056.056 0 0 1 .015-.004.228.228 0 0 1 .031-.003l-.005-.15a.26.26 0 0 0-.111.025.14.14 0 0 0-.076.135l.15-.005zm-.215.06c0 .015.002.031.008.047a.096.096 0 0 0 .039.05.088.088 0 0 0 .072.01.107.107 0 0 0 .042-.025.194.194 0 0 0 .054-.142l-.15.005a.051.051 0 0 1-.004.02c-.003.007-.005.01-.003.008 0-.001.006-.007.017-.01a.062.062 0 0 1 .051.007.05.05 0 0 1 .023.027c.002.004.001.004 0-.001l-.15.005zm.014-.057a.03.03 0 0 1-.016-.005c-.007-.005-.008-.01-.007-.007a.465.465 0 0 1 .009.07l.15-.005a.362.362 0 0 0-.02-.123.122.122 0 0 0-.12-.08l.004.15zm.042-.01V4.76l.001-.004a.041.041 0 0 1-.011.016.052.052 0 0 1-.032.013l-.005-.15a.1.1 0 0 0-.064.026.11.11 0 0 0-.03.045c-.007.023-.009.05-.01.059l.15.01zm-.143.07c.004.003.023.023.053.025a.078.078 0 0 0 .08-.046.095.095 0 0 0 .008-.032l.002-.018-.15-.01v.01l.003-.013a.072.072 0 0 1 .1-.03.049.049 0 0 1 .009.006l-.105.107zm-.037-.077c.002.007.004.019.009.03a.12.12 0 0 0 .028.046l.105-.107c.006.006.008.012.008.01l-.002-.003-.002-.01-.146.034zm-.012-.01h.016-.002a.022.022 0 0 1-.004-.004c-.003-.003-.003-.005-.002-.002l.001.006a.32.32 0 0 1 .003.01l.146-.034c-.003-.013-.01-.05-.037-.08-.032-.036-.077-.048-.126-.046l.005.15zm-.106-.039a2.343 2.343 0 0 1 .075-.001.058.058 0 0 1-.001.014.06.06 0 0 1-.005.015.045.045 0 0 1-.014.017c-.005.003.004-.005.051-.006l-.005-.15a.246.246 0 0 0-.13.032.106.106 0 0 0-.037.041.09.09 0 0 0-.01.037v.002a.03.03 0 0 0 .001.002l.075-.003zm2.552-.838-.075-.004v.005a.408.408 0 0 0 0 .057.626.626 0 0 0 .022.136c.015.049.04.105.083.15.046.045.11.074.19.07l-.006-.15a.097.097 0 0 1-.078-.027.197.197 0 0 1-.044-.085.48.48 0 0 1-.017-.146v-.002l-.075-.004zm.1-.112a.246.246 0 0 0-.13.033.106.106 0 0 0-.036.041.093.093 0 0 0-.009.032v.008l.075-.002.075-.003v.008a.068.068 0 0 1-.006.022.046.046 0 0 1-.014.018c-.005.003.004-.005.051-.007l-.005-.15zm.164.127c-.003-.013-.01-.051-.037-.081-.032-.036-.077-.048-.126-.046l.005.15.016.001-.002-.001a.022.022 0 0 1-.004-.004l-.002-.002a.07.07 0 0 1 .002.006l.002.01.146-.033zm-.004.003.008.01-.002-.004c0-.002 0-.005-.002-.009l-.146.033c.002.007.004.02.009.031a.12.12 0 0 0 .028.046l.105-.107zm-.112.027v.01l.003-.013a.071.071 0 0 1 .1-.03.05.05 0 0 1 .01.006l-.106.107a.089.089 0 0 0 .053.026.078.078 0 0 0 .08-.047.104.104 0 0 0 .008-.032l.002-.017-.15-.01zm.103-.129a.099.099 0 0 0-.064.026.11.11 0 0 0-.029.045.203.203 0 0 0-.01.058l.15.01v-.015l.001-.003a.04.04 0 0 1-.011.016.052.052 0 0 1-.032.013l-.005-.15zm.14.202a.362.362 0 0 0-.02-.122.122.122 0 0 0-.12-.08l.005.15c-.001 0-.008 0-.016-.006-.007-.005-.008-.01-.007-.006a.493.493 0 0 1 .009.07l.15-.006zm-.084-.05a.05.05 0 0 1-.003.02l-.004.007s.007-.006.018-.01a.062.062 0 0 1 .05.008c.017.01.022.023.023.027.002.003.001.004 0-.002l-.149.005c0 .015.002.031.008.046a.096.096 0 0 0 .039.05.087.087 0 0 0 .072.01.107.107 0 0 0 .042-.025.194.194 0 0 0 .054-.142l-.15.006zm.187-.16a.26.26 0 0 0-.111.024.14.14 0 0 0-.076.136l.15-.006v-.001l-.004.004a.057.057 0 0 1 .015-.005.232.232 0 0 1 .032-.003l-.006-.15zm-.275.507c.159-.006.261-.125.314-.222a.48.48 0 0 0 .051-.145.185.185 0 0 0 0-.068.098.098 0 0 0-.023-.045.086.086 0 0 0-.067-.028l.006.15a.065.065 0 0 1-.05-.02.053.053 0 0 1-.013-.024l-.001.012a.334.334 0 0 1-.036.097c-.042.08-.107.14-.186.143l.005.15zM6.595 5.75a.523.523 0 0 0-.065.07.162.162 0 0 0-.036.088.13.13 0 0 0 .038.096c.02.022.049.04.078.056l.071-.132a.165.165 0 0 1-.04-.027c-.002-.003.003.003.003.014 0 .007-.003.006.006-.006a.384.384 0 0 1 .046-.048l-.1-.11zm.44.197a1.042 1.042 0 0 0-.188-.197.242.242 0 0 0-.12-.048.173.173 0 0 0-.132.048l.101.111c.01-.01.016-.01.02-.009.008 0 .022.005.044.02a.915.915 0 0 1 .159.169l.117-.094zm-.013.401c.026-.043.064-.102.077-.17a.273.273 0 0 0-.063-.231l-.117.094c.036.045.039.079.033.108a.389.389 0 0 1-.058.12l.128.08zm-.029.048.029-.048-.128-.079-.032.055.131.072zm-.285-.078c-.023.034-.04.084-.011.132a.126.126 0 0 0 .103.057.211.211 0 0 0 .193-.11l-.131-.073a.062.062 0 0 1-.053.034c-.008 0 .006-.003.017.015.013.023 0 .039.006.03l-.124-.085zM6.61 6.06c.03.016.067.064.09.13.01.03.015.06.016.085 0 .026-.005.039-.008.043l.124.084a.224.224 0 0 0 .034-.129.434.434 0 0 0-.024-.131.383.383 0 0 0-.161-.214l-.07.132zm8.007-.45a.164.164 0 0 1-.04-.026c-.002-.003.004.003.003.014 0 .007-.003.006.006-.006a.382.382 0 0 1 .047-.048l-.101-.111a.53.53 0 0 0-.066.069.163.163 0 0 0-.035.088.13.13 0 0 0 .037.097.33.33 0 0 0 .079.056l.07-.133zm.027.495a.54.54 0 0 0 .076-.24.381.381 0 0 0-.012-.138.19.19 0 0 0-.09-.117l-.071.133c.004.002.011.008.017.027.006.02.009.05.006.083a.396.396 0 0 1-.05.168l.124.084zm.037-.001a.02.02 0 0 1-.005.006l-.003.001a.03.03 0 0 1-.018-.004.037.037 0 0 1-.009-.006l-.002-.003v.007l-.124-.084a.14.14 0 0 0-.015.134.172.172 0 0 0 .08.085.179.179 0 0 0 .118.018.16.16 0 0 0 .11-.082l-.132-.072zm.01-.02-.01.02.131.072.01-.018-.13-.073zm.07-.346c.038.15-.014.246-.07.347l.131.073c.058-.104.138-.247.085-.457l-.146.037zm-.128-.194a.039.039 0 0 1 .012-.008h.002c.002 0 .01.001.026.017a.428.428 0 0 1 .088.185l.146-.037a.569.569 0 0 0-.128-.254.196.196 0 0 0-.115-.06.167.167 0 0 0-.132.046l.1.11zm1.272-2.329a.522.522 0 0 0-.065.069.162.162 0 0 0-.036.088.13.13 0 0 0 .038.097c.02.022.049.04.079.056l.07-.133a.166.166 0 0 1-.04-.026c-.002-.003.003.003.003.014 0 .007-.003.006.006-.006a.39.39 0 0 1 .046-.048l-.1-.11zm.375.268a.569.569 0 0 0-.127-.254.196.196 0 0 0-.116-.06.167.167 0 0 0-.132.046l.101.111a.04.04 0 0 1 .012-.008h.003c.001 0 .01.001.026.017a.428.428 0 0 1 .088.186l.145-.038zm-.084.457c.057-.103.138-.246.084-.457l-.145.038c.038.149-.014.245-.07.346l.131.073zm-.01.018.01-.018-.131-.073-.01.019.13.072zm-.292-.155a.14.14 0 0 0-.015.134.172.172 0 0 0 .08.085.179.179 0 0 0 .117.018.16.16 0 0 0 .11-.082l-.131-.072a.02.02 0 0 1-.006.006l-.002.001a.03.03 0 0 1-.018-.004.034.034 0 0 1-.009-.006l-.002-.003v.007l-.124-.084zm.027-.278c.004.002.01.008.017.028.006.02.008.048.006.082a.398.398 0 0 1-.05.168l.124.084a.54.54 0 0 0 .075-.24.384.384 0 0 0-.012-.138.19.19 0 0 0-.09-.117l-.07.133zM11.89 2.88a.166.166 0 0 1-.04-.026c-.003-.003.003.003.002.014 0 .007-.003.006.006-.006a.39.39 0 0 1 .047-.048l-.101-.11a.522.522 0 0 0-.066.068.161.161 0 0 0-.035.088.13.13 0 0 0 .038.097c.02.022.049.04.078.056l.07-.133zm.2.618a.172.172 0 0 0 .027-.079.376.376 0 0 0-.001-.08A.902.902 0 0 0 12 3a.316.316 0 0 0-.11-.119l-.071.133a.19.19 0 0 1 .052.064.758.758 0 0 1 .096.279.181.181 0 0 1 0 .047c0 .012-.003.014 0 .01l.123.085zm.03-.078a.062.062 0 0 1-.052.033c-.008 0 .005-.002.016.016.014.023 0 .039.007.029l-.125-.084c-.023.034-.04.084-.01.132a.126.126 0 0 0 .103.057.211.211 0 0 0 .193-.111l-.132-.072zm.007-.427c.042.053.057.131.05.218a.56.56 0 0 1-.057.209l.132.072a.709.709 0 0 0 .075-.27.458.458 0 0 0-.082-.322l-.118.093zm-.222-.179c.01-.01.016-.01.02-.009.007 0 .021.005.044.02a.916.916 0 0 1 .158.168l.117-.093a1.042 1.042 0 0 0-.188-.197.242.242 0 0 0-.12-.048.173.173 0 0 0-.132.048l.1.111zM10.352 4.98c-.013-.01.005-.002.006.023.001.026-.016.036-.007.029a.26.26 0 0 1 .044-.026c.023-.012.052-.025.085-.04l-.062-.137-.09.043a.4.4 0 0 0-.073.044c-.017.015-.05.046-.047.095.002.048.037.077.059.092l.085-.123zm.118.061c0-.029.024-.038.02-.037a.221.221 0 0 1-.139-.024l-.084.123c.05.035.125.052.184.054.03 0 .065-.002.095-.014s.074-.042.074-.102h-.15zM10.473 5l-.003.041h.15l.002-.029-.15-.012zm.007-.034a.107.107 0 0 1 .021-.008h-.002a.037.037 0 0 1-.025-.02v.003l.001.014c0 .013 0 .028-.002.045l.15.012.002-.06a.193.193 0 0 0-.014-.075.114.114 0 0 0-.086-.067.184.184 0 0 0-.107.02l.062.136zM9.414 6.067a26.072 26.072 0 0 1-.017-.074.386.386 0 0 1-.017.004 1.085 1.085 0 0 1-.22.02v.15a1.41 1.41 0 0 0 .269-.027.009.009 0 0 1 .001 0l-.016-.073zm.347-.05a2.543 2.543 0 0 1-.335-.025h-.002l-.01.075-.01.074h.003l.006.001a3.155 3.155 0 0 0 .348.025v-.15zm-.024.364a.479.479 0 0 0 .127-.085.23.23 0 0 0 .068-.109.128.128 0 0 0-.04-.13.196.196 0 0 0-.131-.04v.15c.03 0 .036.007.032.004a.024.024 0 0 1-.007-.011v-.007a.093.093 0 0 1-.026.035.33.33 0 0 1-.087.057l.064.136zm-.158.182c.012-.055.017-.077.032-.098.015-.02.046-.046.126-.084l-.064-.136a.458.458 0 0 0-.183.131c-.037.052-.047.107-.058.156l.147.031zm-.006.03.006-.03-.147-.03-.006.029.147.03zm-.28.225c.04.012.08.018.118.011a.157.157 0 0 0 .096-.058.265.265 0 0 0 .043-.086 1.07 1.07 0 0 0 .023-.092l-.147-.032a.935.935 0 0 1-.02.079.122.122 0 0 1-.016.038l-.006.004a.104.104 0 0 1-.047-.007l-.044.143zm-.369-.564c.033.082.082.206.14.314a.938.938 0 0 0 .098.15.293.293 0 0 0 .13.1l.045-.143a.177.177 0 0 1-.06-.052.793.793 0 0 1-.08-.125c-.054-.1-.1-.216-.134-.3l-.139.056zm-.01-.025.01.025.14-.056-.01-.025-.14.056zm.17-.216a.554.554 0 0 0-.07-.003.142.142 0 0 0-.082.026.112.112 0 0 0-.043.098c.002.03.012.062.025.095l.14-.056a.305.305 0 0 1-.015-.047l-.002.01a.044.044 0 0 1-.015.02l-.01.005h.028c.009 0 .02 0 .031.002l.011-.15zm.076.004c-.027 0-.052-.002-.077-.004l-.011.15c.025.002.055.004.088.004v-.15zM7.442 2.724c-.003-.002.005 0 .013.027a.409.409 0 0 1-.025.22c-.005.006.008-.016.04-.016v.15c.045 0 .071-.033.08-.045a.235.235 0 0 0 .03-.056.556.556 0 0 0 .02-.29c-.012-.047-.04-.105-.103-.13l-.055.14zm-.32.058c-.001-.002 0-.001-.001 0 0 0 .001-.003.009-.01a.242.242 0 0 1 .09-.04.561.561 0 0 1 .13-.019c.044 0 .076.004.092.01l.055-.139a.404.404 0 0 0-.15-.02.711.711 0 0 0-.167.023.386.386 0 0 0-.148.071c-.043.037-.076.095-.054.167l.143-.043zm.069.116a.462.462 0 0 1-.07-.116l-.143.043c.018.06.06.117.09.16l.123-.087zm.047.393a.24.24 0 0 0 .056-.113.233.233 0 0 0-.008-.111c-.02-.064-.063-.124-.095-.169l-.123.087c.037.051.064.09.075.126a.082.082 0 0 1 .003.04.091.091 0 0 1-.022.043l.114.097zm-.616.55c.021-.014.063-.046.11-.085.05-.04.11-.092.174-.147.125-.109.262-.236.332-.318l-.114-.097a3.632 3.632 0 0 1-.317.302 6.871 6.871 0 0 1-.263.216l.078.128zm-.027.016.026-.016-.077-.13-.026.017.077.129zm-.167.002c-.011 0-.008-.001 0 .002a.06.06 0 0 1 .024.02.06.06 0 0 1 .012.042c0 .02-.011.031-.008.027a1.188 1.188 0 0 1 .139-.093l-.077-.13c-.039.024-.105.063-.146.097a.238.238 0 0 0-.032.03.105.105 0 0 0-.025.061.086.086 0 0 0 .016.055.09.09 0 0 0 .037.03.15.15 0 0 0 .06.01v-.15zm.144.007c-.05-.003-.101-.007-.144-.007v.15c.037 0 .082.004.134.007l.01-.15zm.004 0-.019.15.019-.15zm.26-.003a.368.368 0 0 1-.106.01c-.049 0-.103-.003-.158-.007l-.01.15c.053.004.113.008.167.008.053 0 .11-.003.155-.018l-.048-.143zm.177-.182c-.043.05-.081.095-.115.13a.486.486 0 0 1-.057.05l-.005.002.048.143a.22.22 0 0 0 .064-.038.63.63 0 0 0 .057-.053c.038-.039.08-.088.122-.137l-.114-.097zm.257-.262c-.086.06-.18.17-.257.262l.114.097c.083-.097.163-.19.23-.237L7.27 3.42zm.149-.246c-.013-.011-.014-.023-.013-.019v.016a.342.342 0 0 1-.136.249l.087.122a.491.491 0 0 0 .2-.366.23.23 0 0 0-.005-.052.112.112 0 0 0-.03-.06l-.103.11zm-.037-.015a.836.836 0 0 1 .04.018l-.003-.003.102-.11a.166.166 0 0 0-.041-.026l-.04-.017-.058.138zm-.183-.249a.134.134 0 0 0-.003.11.179.179 0 0 0 .057.071c.04.031.095.054.129.068l.058-.138a.463.463 0 0 1-.095-.049c-.01-.008-.011-.011-.01-.01.002.005 0 .01 0 .01L7.2 2.91zm.227.032a.15.15 0 0 0-.013-.06.12.12 0 0 0-.051-.058.096.096 0 0 0-.056-.01.104.104 0 0 0-.051.02.194.194 0 0 0-.056.076l.136.063c.01-.021.015-.023.01-.019a.047.047 0 0 1-.023.009.054.054 0 0 1-.031-.007.042.042 0 0 1-.015-.012V2.94h.15zm.044.014c-.001 0-.006 0-.013-.004a.094.094 0 0 1-.034-.025v.001a.028.028 0 0 1 .003.014h-.15c0 .03.013.055.024.071a.213.213 0 0 0 .045.046c.03.023.076.047.125.047v-.15zm-.187 1.287.123-.045-.05-.14-.124.044.05.141zm-.194-.136a.19.19 0 0 0 .095.122.177.177 0 0 0 .072.019h.001v-.15h.001a.089.089 0 0 1 .002 0 .026.026 0 0 1-.007-.003c-.004-.002-.013-.007-.02-.03l-.144.042zm.022-.169c-.007.02-.017.045-.023.072a.198.198 0 0 0 .001.097l.144-.041a.056.056 0 0 1 .002-.024.437.437 0 0 1 .017-.053l-.141-.051zm.05.005c.006 0-.005.002-.018-.009a.053.053 0 0 1-.016-.02.042.042 0 0 1-.003-.015c0-.004 0-.002-.002.007a.544.544 0 0 1-.011.032l.14.05.015-.041a.175.175 0 0 0 .008-.053.1.1 0 0 0-.037-.076.119.119 0 0 0-.076-.025v.15zm-.13.209A.696.696 0 0 1 7.1 4a.209.209 0 0 1 .04-.048c.013-.01.02-.01.021-.01v-.15a.182.182 0 0 0-.114.043.355.355 0 0 0-.073.084.843.843 0 0 0-.085.183l.142.048zm.17.18a.651.651 0 0 1-.128-.103.204.204 0 0 1-.038-.055c-.006-.014-.004-.02-.004-.022l-.142-.048a.18.18 0 0 0 .008.129c.015.036.04.069.065.097.05.055.115.102.16.13l.079-.127zm.182-.133a.85.85 0 0 1-.128.116c-.04.027-.051.02-.054.018l-.08.127c.08.05.162.016.217-.02a.98.98 0 0 0 .153-.137l-.108-.104zm-.002-.071a11.3 11.3 0 0 1-.015.073.073.073 0 0 1 .012.004.078.078 0 0 1 .02.01c.004.002-.005-.003-.006-.018-.001-.014.007-.014-.009.002l.108.104c.03-.03.053-.07.05-.116a.127.127 0 0 0-.053-.093.225.225 0 0 0-.091-.04h-.001l-.015.074zm5.705 2.145a1.27 1.27 0 0 0-.116.43c-.012.145.004.3.081.404l.12-.09c-.043-.058-.063-.167-.051-.302.011-.132.05-.271.101-.377l-.135-.065zm.22.135a3.013 3.013 0 0 0 0-.167.186.186 0 0 0-.009-.046c-.004-.01-.023-.055-.075-.058a.086.086 0 0 0-.05.013.114.114 0 0 0-.024.02.466.466 0 0 0-.062.103l.135.065a.71.71 0 0 1 .034-.062l.003-.003V6.27v.002a.064.064 0 0 1-.043.014.068.068 0 0 1-.047-.021c-.007-.009-.01-.016-.011-.018v.007l.002.035-.003.113.15.005zm-.003.17c0-.06.002-.118.003-.17l-.15-.005a5.303 5.303 0 0 0-.003.175h.15zm.136.346a.6.6 0 0 1-.1-.138.48.48 0 0 1-.036-.208h-.15c0 .116.017.2.05.272.033.07.078.121.122.172l.114-.098zm.001.003-.117.093.117-.093zm.075.09c-.027-.036-.054-.066-.076-.093l-.114.098c.023.027.047.054.07.086l.12-.091zm.098-.054a.131.131 0 0 1-.04.09c-.008.005-.01.004-.012.004-.004-.001-.02-.007-.046-.04l-.12.091a.238.238 0 0 0 .134.095.162.162 0 0 0 .136-.032.28.28 0 0 0 .098-.208h-.15zm.406-.786a2.034 2.034 0 0 0-.266.413c-.039.076-.073.15-.098.213-.012.032-.022.06-.03.086a.282.282 0 0 0-.012.074h.15l.001-.009a.861.861 0 0 1 .031-.096c.023-.057.055-.127.092-.2.075-.148.168-.3.242-.38l-.11-.101zm.427.05c0-.076-.066-.144-.145-.164-.088-.021-.189.013-.282.114l.11.102c.07-.075.117-.075.136-.07.029.007.03.026.03.019h.15zm.285.279a.46.46 0 0 1-.202-.145.56.56 0 0 1-.08-.125c-.004-.01-.003-.012-.003-.008h-.15c0 .021.005.042.011.058a.714.714 0 0 0 .108.172c.067.078.164.16.275.192l.041-.144zm.227-.348-.074-.01v.004l-.003.014a1.273 1.273 0 0 1-.049.197.402.402 0 0 1-.063.123c-.02.024-.03.022-.038.02l-.041.144c.084.024.15-.017.193-.067a.543.543 0 0 0 .09-.17 1.31 1.31 0 0 0 .056-.222l.003-.016v-.006l-.074-.01zm-.075-1.426v1.426h.15V4.731h-.15zm-.16-.501c.041.032.076.06.105.122.03.066.055.177.055.379h.15c0-.212-.026-.347-.069-.441-.044-.097-.104-.143-.15-.179l-.092.119zm-.068-.058c.023.024.048.043.067.058l.092-.119a.384.384 0 0 1-.048-.041l-.11.102zm-.143-.14c.064.06.116.11.143.14l.11-.102c-.031-.035-.088-.088-.15-.147l-.103.109zm0 0 .103-.109-.104.109zm-.378-.395c.039.057.102.126.17.194.067.068.143.14.208.201l.103-.109a8.465 8.465 0 0 1-.205-.198 1.438 1.438 0 0 1-.152-.172l-.124.084zm-.093-.645c-.002.118-.004.241.006.35a.62.62 0 0 0 .087.295l.124-.084a.487.487 0 0 1-.061-.224c-.01-.1-.008-.215-.006-.336l-.15-.001zm0 0h.15-.15zm0 0h.15-.15zm0 0h.15-.15zm0-.133v.132l.15.002V2.86h-.15zm.618.242a1.42 1.42 0 0 0-.291-.324.59.59 0 0 0-.09-.06.229.229 0 0 0-.098-.029.125.125 0 0 0-.108.054.203.203 0 0 0-.03.117h.15c0-.028.005-.034.003-.031a.027.027 0 0 1-.01.008l-.008.002c.002 0 .012.002.032.012.019.01.04.025.066.045.101.08.214.213.255.282l.129-.076zm.03.299a.464.464 0 0 0 .02-.132.333.333 0 0 0-.05-.167l-.13.076c.024.04.03.069.03.093a.347.347 0 0 1-.015.092l.145.038zm-.02.121c0-.043.01-.08.02-.121l-.145-.038c-.011.042-.025.094-.025.16h.15zm-.033 0a.06.06 0 0 1-.007.031c-.003.005-.001-.002.012-.004a.04.04 0 0 1 .023.004c.007.003.01.007.01.008l-.002-.007a.137.137 0 0 1-.003-.032h-.15c0 .046.009.09.031.123.025.037.066.06.114.052a.135.135 0 0 0 .092-.064c.02-.031.03-.07.03-.11h-.15zm-.005-.09.005.09h.15c0-.024-.003-.06-.006-.1l-.15.01zm0-.001.15-.007-.15.007zm.142-.64a.214.214 0 0 0-.114.127.617.617 0 0 0-.034.171c-.01.12 0 .253.006.344l.15-.01a2.251 2.251 0 0 1-.007-.322.475.475 0 0 1 .025-.128c.013-.032.025-.04.03-.043l-.056-.14zm.32.245a1.582 1.582 0 0 0-.049-.121.35.35 0 0 0-.056-.093.156.156 0 0 0-.102-.052.24.24 0 0 0-.113.02l.056.14c.027-.01.039-.011.042-.01h.001s.002 0 .005.004a.216.216 0 0 1 .031.053l.046.113.14-.054zm.078.19c-.032-.072-.056-.135-.077-.19l-.14.054a5 5 0 0 0 .079.196l.138-.06zm.04.476c.015-.06.031-.123.03-.2a.73.73 0 0 0-.07-.276l-.138.06a.583.583 0 0 1 .057.22c.002.054-.01.1-.024.16l.145.036zm-.034.242a.91.91 0 0 1 .034-.242l-.145-.036c-.018.071-.04.157-.04.278h.15zm.264.517a1.806 1.806 0 0 1-.177-.24.556.556 0 0 1-.087-.277h-.15c0 .132.048.252.108.354.06.102.134.19.191.26l.115-.097zm.1.13c-.023-.039-.062-.084-.1-.13l-.115.096c.041.05.07.085.085.11l.13-.076zm-.328-.91a.907.907 0 0 1 .085.228 4.268 4.268 0 0 1 .12.649.642.642 0 0 1 .003.042l-.001.015.001-.005.005-.011a.07.07 0 0 1 .06-.034c.03 0 .047.017.049.02.005.004.006.007.005.006l-.129.076c.004.006.01.015.018.023a.08.08 0 0 0 .126-.015.098.098 0 0 0 .012-.03.404.404 0 0 0 .001-.098 4.391 4.391 0 0 0-.125-.678 1.006 1.006 0 0 0-.107-.273l-.123.086zm.13-.932c-.102.128-.17.306-.196.474-.025.166-.014.343.066.459l.123-.086c-.047-.068-.064-.197-.04-.35a.888.888 0 0 1 .165-.403l-.117-.094zm.447.283a2.927 2.927 0 0 0-.07-.162.654.654 0 0 0-.082-.137c-.03-.037-.078-.076-.14-.075-.064 0-.114.04-.154.09l.117.095c.03-.038.042-.035.038-.035-.004 0 .004-.003.024.021.02.023.04.059.062.106.022.046.044.099.066.154l.14-.057zm.084.189a2.114 2.114 0 0 1-.084-.189l-.139.057c.028.069.058.142.09.203l.133-.071zm-.087.511a.722.722 0 0 0 .119-.204.38.38 0 0 0-.032-.307l-.133.07a.23.23 0 0 1 .022.19.567.567 0 0 1-.095.16l.12.091zm-.039.054a.873.873 0 0 1 .04-.054l-.12-.09a.674.674 0 0 0-.046.063l.126.081zm.034.137a.708.708 0 0 1-.035-.105c-.004-.023 0-.03.001-.032l-.126-.08a.187.187 0 0 0-.022.14c.008.04.025.086.042.13l.14-.053zm.1.492c0-.226-.06-.384-.1-.492l-.14.053c.04.105.09.241.09.439h.15zm.375 1.06c-.225-.307-.375-.686-.375-1.06h-.15c0 .413.165.822.404 1.149l.121-.089zm.331 1.035c-.048-.347-.098-.716-.331-1.035l-.121.089c.207.283.254.614.303.967l.15-.02zm.008.058-.008-.058-.149.021.009.057.148-.02zm-.149-1.04c.028.235.04.589.04.838a2.2 2.2 0 0 1-.01.258c-.002.013-.002.008.003-.001a.073.073 0 0 1 .124-.003c.004.008.003.01 0-.004a.643.643 0 0 1-.008-.048l-.148.02a.822.822 0 0 0 .01.06.167.167 0 0 0 .016.048.078.078 0 0 0 .137-.002.148.148 0 0 0 .015-.047c.008-.051.01-.156.011-.28a8.38 8.38 0 0 0-.04-.856l-.15.017zm-.163-2.615c-.02.117-.022.31-.015.536.008.228.026.495.047.763.044.536.103 1.077.131 1.316l.15-.017a40.304 40.304 0 0 1-.131-1.31c-.022-.268-.04-.532-.047-.757a2.992 2.992 0 0 1 .013-.506l-.148-.025zm.322.015a2.332 2.332 0 0 0-.056-.129.463.463 0 0 0-.029-.052.166.166 0 0 0-.043-.045.095.095 0 0 0-.094-.01.121.121 0 0 0-.056.057.603.603 0 0 0-.044.164l.148.025a.941.941 0 0 1 .03-.12c.001-.003.001-.002 0 0a.044.044 0 0 1-.016.01.057.057 0 0 1-.032.005.05.05 0 0 1-.02-.008c-.005-.003-.004-.004.002.005l.02.035c.015.032.032.073.052.12l.138-.057zm-.001-.003-.136.064.136-.064zm.142.288a1.544 1.544 0 0 1-.14-.285l-.14.058c.041.097.093.223.158.314l.122-.087zm.036.05-.036-.05-.122.087.036.05.122-.088zm.066.416c.039-.06.077-.122.06-.2a.316.316 0 0 0-.045-.099 2.462 2.462 0 0 0-.082-.118l-.121.088c.034.048.059.082.076.11a.18.18 0 0 1 .026.051c.001.01.003.02-.04.088l.126.08zm-.2.088c.014.003.05.014.091.002a.194.194 0 0 0 .109-.09l-.126-.08c-.018.027-.026.027-.023.026l-.013-.004-.038.146zm.052-.021v-.02l-.002.008a.055.055 0 0 1-.015.017.057.057 0 0 1-.039.013h-.002l.006.002.038-.146c-.005 0-.018-.004-.032-.005a.093.093 0 0 0-.066.02.103.103 0 0 0-.034.058.24.24 0 0 0-.004.052h.15zm.051.463a49.383 49.383 0 0 1-.037-.316 2.357 2.357 0 0 1-.014-.147h-.15c0 .025.006.085.015.164l.037.317.15-.018zm.198 2.194c0-.543-.125-1.586-.198-2.194l-.149.018c.073.612.197 1.644.197 2.176h.15zm-.805 1.26c.184-.068.386-.182.543-.382.157-.201.262-.483.262-.878h-.15c0 .367-.097.615-.23.786a1.06 1.06 0 0 1-.477.333l.052.14zm-.642-.2c0 .104.076.193.189.233.113.04.267.036.453-.033l-.052-.14c-.165.06-.28.056-.35.032-.07-.025-.09-.068-.09-.093h-.15zm.008.082c.017-.014.03-.025.043-.034a.221.221 0 0 1 .014-.01l.005-.003-.004.002a.06.06 0 0 1-.05-.014.052.052 0 0 1-.015-.025v.001h.15c0-.019-.003-.06-.034-.088a.096.096 0 0 0-.102-.015.245.245 0 0 0-.053.032 1.202 1.202 0 0 0-.049.038l.095.116zm-.236.123c.052 0 .1-.025.135-.047.037-.023.073-.053.101-.076l-.095-.116a.9.9 0 0 1-.086.065c-.03.019-.047.024-.055.024v.15zm-.065-.41a.651.651 0 0 0-.089.234.168.168 0 0 0 .029.12.152.152 0 0 0 .125.056v-.15c-.017 0-.012-.005-.006.003.004.006 0 .005.001-.015a.517.517 0 0 1 .07-.175l-.13-.074zm.046-.011c.003.002.002.001 0 0a.055.055 0 0 1-.019-.045c0-.004.001-.002-.003.009a.532.532 0 0 1-.024.046l.13.074a.666.666 0 0 0 .031-.06.182.182 0 0 0 .016-.053.097.097 0 0 0-.016-.066c-.012-.018-.029-.028-.03-.029l-.085.124zm-.056-.112a.14.14 0 0 0 .019.075c.014.022.032.033.037.037l.085-.124c-.006-.004 0 0 .005.007.005.008.004.013.004.005h-.15zm.202-.247a.229.229 0 0 0-.109.024.16.16 0 0 0-.07.072c-.025.051-.023.114-.023.151h.15c0-.022 0-.04.002-.055a.092.092 0 0 1 .006-.03.011.011 0 0 1 .006-.006.085.085 0 0 1 .038-.006v-.15zm.178.29a.351.351 0 0 0 .064-.128.134.134 0 0 0-.004-.069.117.117 0 0 0-.04-.057.2.2 0 0 0-.101-.033c-.031-.003-.066-.003-.097-.003v.15a.866.866 0 0 1 .105.006c.005.002.005.002.002 0a.033.033 0 0 1-.01-.015c-.003-.007-.002-.01-.002-.008a.222.222 0 0 1-.039.071l.122.087zm-.071-.005a.368.368 0 0 1-.014-.002c-.003 0 0 0 .004.002a.06.06 0 0 1 .028.023.063.063 0 0 1 .01.042c0 .008-.003.011-.002.01l.006-.012.04-.057-.123-.087a1.329 1.329 0 0 0-.044.065.163.163 0 0 0-.026.062.087.087 0 0 0 .055.093c.018.007.04.009.048.01l.018-.149zm.172.058a.39.39 0 0 0-.172-.058l-.018.149a.24.24 0 0 1 .111.036l.08-.127zm.071.044.006.001-.004-.002a1.386 1.386 0 0 1-.073-.043l-.079.127a1.448 1.448 0 0 0 .107.06.11.11 0 0 0 .02.005l.023-.148zm.093.04a.27.27 0 0 0-.093-.04l-.023.148-.003-.001c-.002 0-.002 0 0 0a.576.576 0 0 1 .044.024l.075-.13zm.574-.407a3.703 3.703 0 0 1-.38.321.65.65 0 0 1-.142.079c-.04.014-.052.008-.052.008l-.075.13c.058.033.124.022.177.003a.792.792 0 0 0 .177-.097c.123-.084.263-.209.397-.334l-.102-.11zm.015-.139c.027.012.046.02.06.029.015.009.013.012.011.007-.002-.008.003-.007-.007.012a.406.406 0 0 1-.08.091l.103.11a.547.547 0 0 0 .108-.13.162.162 0 0 0 .018-.131.167.167 0 0 0-.073-.086c-.026-.017-.057-.03-.08-.04l-.06.138zm-.133-.083c.02.024.045.04.067.052.022.013.047.023.066.031l.06-.138a.623.623 0 0 1-.054-.024.093.093 0 0 1-.025-.018l-.114.097zm-.176-.271.098.159a.944.944 0 0 0 .078.112l.114-.097a.967.967 0 0 1-.066-.095l-.095-.157-.129.078zm-.001-.003.132-.072-.132.072zm0 .001.13-.074-.13.074zm0 0 .13-.074-.13.074zM15.92 6.1s.003.001.008.007a1.319 1.319 0 0 1 .07.098c.039.06.084.135.128.209l.129-.078c-.044-.073-.09-.15-.131-.212-.02-.032-.04-.06-.058-.084a.314.314 0 0 0-.055-.06l-.09.12zm.116.105a1.429 1.429 0 0 1-.017-.143c0-.003 0 .004-.005.013a.067.067 0 0 1-.056.035c-.023.001-.038-.01-.038-.01l.091-.12a.092.092 0 0 0-.06-.02.083.083 0 0 0-.07.045.113.113 0 0 0-.01.041.224.224 0 0 0-.002.032c.002.038.01.094.018.149l.149-.022zm-.008.414a.214.214 0 0 0 .031-.096.614.614 0 0 0 .002-.103c-.004-.07-.016-.15-.025-.215l-.149.022c.01.068.02.14.024.201a.468.468 0 0 1 0 .078c-.003.022-.007.029-.007.029l.124.084zm-.385.284a.24.24 0 0 0 .107-.033.898.898 0 0 0 .277-.25l-.123-.085a.754.754 0 0 1-.224.203.19.19 0 0 1-.028.012l-.01.003v.15zm0-1.484-.075-.004v.004l-.001.012-.003.045a34.585 34.585 0 0 0-.026.645 9.548 9.548 0 0 0-.003.489c.002.066.005.125.01.167a.31.31 0 0 0 .014.06.114.114 0 0 0 .018.033c.01.013.031.033.066.033v-.15c.029 0 .046.017.051.024.006.006.007.011.006.01a1.528 1.528 0 0 1-.016-.18 9.379 9.379 0 0 1 .004-.482 27.316 27.316 0 0 1 .026-.641l.003-.045v-.015l-.074-.005zm-.295-.4a.196.196 0 0 1-.004-.013v-.004l-.002.01a.064.064 0 0 1-.018.033.065.065 0 0 1-.068.016c-.005-.002-.005-.003.001.002.024.019.067.067.118.13a5.801 5.801 0 0 1 .202.264l.003.004.001.002.062-.044.06-.044v-.001l-.005-.006a2.011 2.011 0 0 0-.062-.085 5.917 5.917 0 0 0-.145-.186 1.15 1.15 0 0 0-.14-.151.157.157 0 0 0-.04-.024c-.012-.005-.056-.02-.092.016a.086.086 0 0 0-.024.045.108.108 0 0 0-.001.03.237.237 0 0 0 .01.05l.144-.044zm-.282 1.992a.537.537 0 0 0 .085-.163 2.24 2.24 0 0 0 .066-.235 7.662 7.662 0 0 0 .15-1.206 3.17 3.17 0 0 0 0-.23.684.684 0 0 0-.02-.158l-.143.044a.55.55 0 0 1 .014.12c.002.059.001.134-.002.219a7.45 7.45 0 0 1-.145 1.178c-.02.085-.04.158-.062.217a.405.405 0 0 1-.057.116l.114.098zm-.83-.24c.059.097.2.221.35.292.148.07.346.103.48-.052l-.114-.098c-.064.075-.17.076-.302.014a.744.744 0 0 1-.286-.235l-.129.079zm-.133.146a.365.365 0 0 1 .09-.171c.014-.012.017-.008.013-.009-.002 0 .01 0 .03.034l.128-.079c-.031-.05-.072-.09-.127-.102a.165.165 0 0 0-.14.04.505.505 0 0 0-.139.248l.145.039zm-.423.738a.845.845 0 0 0 .298-.373c.064-.14.102-.28.125-.365l-.145-.04a2.126 2.126 0 0 1-.116.343.7.7 0 0 1-.242.308l.08.127zm-.535-.385c.053.1.119.228.197.315.04.043.089.083.148.1a.228.228 0 0 0 .19-.03l-.08-.127c-.03.018-.05.019-.068.013a.188.188 0 0 1-.079-.057 1.418 1.418 0 0 1-.175-.283l-.133.069zm-.093-.164c.026.035.056.092.093.164l.133-.07c-.035-.067-.07-.137-.106-.184l-.12.09zm.988-1.676a.7.7 0 0 1 .09-.08 4.472 4.472 0 0 1 .306-.222l.047-.032.013-.009.003-.002h.001l-.042-.063-.041-.062h-.002l-.003.003-.013.009a8.22 8.22 0 0 0-.361.26.79.79 0 0 0-.116.105l.118.093zm-.025.085a.062.062 0 0 1-.02-.014v.003a.07.07 0 0 1 .01-.023.397.397 0 0 1 .035-.051l-.118-.093a.313.313 0 0 0-.076.153.142.142 0 0 0 .024.095c.02.028.047.048.076.064l.07-.134zm.514-.264a1.04 1.04 0 0 1-.295.197.883.883 0 0 1-.157.059.258.258 0 0 1-.051.008c-.014 0-.015-.002-.01 0l-.07.134a.171.171 0 0 0 .084.016.404.404 0 0 0 .083-.013.974.974 0 0 0 .184-.068 1.18 1.18 0 0 0 .342-.231l-.11-.102zm.18-.298c.005.01.01.036-.025.098a1.146 1.146 0 0 1-.155.2l.11.102c.07-.076.135-.155.177-.23.039-.07.07-.161.023-.244l-.13.074zm-.25.069.044.06.003-.002a.504.504 0 0 1 .036-.025.992.992 0 0 1 .09-.054.325.325 0 0 1 .083-.033c.024-.004.005.006-.007-.015l.13-.074c-.037-.066-.108-.066-.149-.059a.464.464 0 0 0-.127.048 1.144 1.144 0 0 0-.136.085l-.009.006-.003.002v.001l.044.06zm-.587-.901-.023-.071h-.002l-.003.001a.296.296 0 0 0-.043.019.33.33 0 0 0-.089.065.201.201 0 0 0-.058.137.27.27 0 0 0 .074.174l.114-.097c-.034-.04-.038-.065-.038-.076 0-.01.005-.022.017-.035a.183.183 0 0 1 .068-.044.206.206 0 0 1 .005-.002h.002l-.024-.071zm.326.06a.615.615 0 0 0-.293-.133.343.343 0 0 0-.03-.002h-.003v.15a.098.098 0 0 1 .014.001.465.465 0 0 1 .217.1l.095-.115zm-.063-.02a1.064 1.064 0 0 1 .007.072c0 .004 0 .002.002-.003a.057.057 0 0 1 .023-.029.059.059 0 0 1 .042-.008c.007.001.01.003.006.001a.145.145 0 0 1-.017-.012l-.095.115a.18.18 0 0 0 .078.043.091.091 0 0 0 .067-.012.093.093 0 0 0 .037-.05.187.187 0 0 0 .007-.07l-.008-.067-.149.02zm.013-.282a.357.357 0 0 0-.025.149c.001.047.007.095.012.132l.15-.02a1.03 1.03 0 0 1-.012-.115c0-.038.004-.066.012-.086l-.137-.06zm.49.22a.542.542 0 0 0-.202-.272.25.25 0 0 0-.15-.05.159.159 0 0 0-.138.102l.137.06c.007-.014.01-.011.01-.011.008 0 .028.003.057.023.058.04.119.116.142.192l.144-.044zm-.136.24a.458.458 0 0 0 .057-.01.131.131 0 0 0 .07-.044.136.136 0 0 0 .027-.09.365.365 0 0 0-.018-.096l-.144.044c.01.03.012.047.012.056 0 .008-.001.002.006-.007.007-.009.013-.01.008-.008a.26.26 0 0 1-.034.005l.016.15zm-.074.015a.254.254 0 0 1 .074-.016l-.016-.149a.379.379 0 0 0-.118.028l.06.137zm.019.242a1.3 1.3 0 0 1-.023-.192c0-.025.002-.04.006-.049.002-.006.002-.003-.002 0l-.06-.138a.146.146 0 0 0-.079.085.29.29 0 0 0-.015.101c0 .066.013.146.025.218l.148-.025zm.026.226c0-.07-.014-.153-.026-.226l-.148.025c.012.077.024.146.024.2h.15zm-.745-.376c.086.101.242.257.379.365a.77.77 0 0 0 .193.12c.026.01.07.021.11.001.051-.024.063-.074.063-.11h-.15c0 .01-.003-.013.023-.025.016-.008.023 0 .004-.007a.647.647 0 0 1-.15-.097 2.929 2.929 0 0 1-.358-.344l-.114.097z\"\/><path fill=\"#fff\" fill-rule=\"evenodd\" d=\"M8.709 9.91c-.509.061-3.077.05-3.844-.134-.172-.037-.074.747.037.928.112.18.985.36 1.29.402.26.035 1.267-.02 2.313-.08l.52-.028c.915-.05 2.253.037 2.953.083.226.014.386.025.443.025.214 0 .198.072.166.217a4.646 4.646 0 0 0-.009.04c-.037.171.156.54.24.575.085.035.716 0 1.06-.133.195-.075.218-.065.269-.042.038.018.093.042.25.042.236 0 .248-.338.256-.576.005-.13.009-.23.047-.23.043 0 .1.127.155.246.082.182.156.346.156.008 0-.558-.656-1.289-.871-1.23-.15.04-.398-.005-.567-.035a1.225 1.225 0 0 0-.158-.024c-.042 0-.03-.01-.001-.033.036-.029.099-.08.099-.155 0-.134-.128-.153-.234-.153a.16.16 0 0 0-.163.153c0 .066.08.134.08.134l-.234-.003c-.864-.012-3.813-.05-4.253.003zm4.338 1.181s.067-.039.224-.232c.174-.214.235-.146.3-.075.032.037.066.075.116.075.147 0 .342 0 .468.107.127.108-.166.255-.252.255-.042 0-.073-.026-.105-.053s-.064-.054-.109-.054c-.052 0-.096.038-.132.068-.024.021-.045.04-.061.04-.015 0-.047-.02-.089-.043-.076-.044-.184-.105-.273-.105a.194.194 0 0 0-.087.017z\" clip-rule=\"evenodd\"\/><path fill=\"#fff\" d=\"m4.865 9.776.011-.049h-.001l-.01.049zm3.844.134.006.05-.006-.05zm-3.807.793.043-.026-.043.027zm1.29.403-.008.05.007-.05zm2.313-.08-.003-.049.003.05zm.52-.028-.003-.05.002.05zm2.953.083.003-.05-.003.05zm.609.242.048.011-.048-.01zm-.009.04.049.01-.049-.01zm.24.575.02-.046-.02.046zm1.06-.133.017.047-.018-.047zm.269-.042-.02.046.02-.046zm.506-.534-.05-.002.05.002zm.202.016-.046.02.046-.02zm-.715-1.222.013.048-.013-.048zm-.567-.035-.009.049.01-.05zm-.16-.057-.03-.038.03.038zm-.217-.021v.05h.136l-.104-.088-.032.038zm-.234-.003-.001.05v-.05zm.31.952.038.031-.039-.031zm-.225.232.043-.025-.043.025zm.523-.306-.037.033.037-.034zm.585.181.033-.038-.033.038zm-.357.202.032-.038-.032.038zm-.24.014.032.038-.033-.038zm-.15-.003-.026.043.025-.043zM4.852 9.824c.39.094 1.23.143 2.03.161.8.018 1.573.006 1.832-.026l-.012-.099c-.25.03-1.016.043-1.818.025-.803-.018-1.631-.067-2.009-.158l-.023.097zm.092.853a.79.79 0 0 1-.07-.21 2.294 2.294 0 0 1-.048-.313c-.008-.105-.007-.2.005-.265a.16.16 0 0 1 .02-.062l.004-.003h-.002l.021-.097a.097.097 0 0 0-.06.005.108.108 0 0 0-.043.036.252.252 0 0 0-.039.103 1.196 1.196 0 0 0-.006.291c.01.11.027.226.05.326.022.1.05.19.083.242l.085-.053zm1.253.38a6.484 6.484 0 0 1-.71-.149 2.953 2.953 0 0 1-.36-.118.847.847 0 0 1-.124-.061.188.188 0 0 1-.06-.052l-.084.053c.02.032.053.06.09.083a.94.94 0 0 0 .138.07c.106.044.237.085.373.122.273.073.569.13.723.15l.014-.099zm2.304-.08c-.523.03-1.036.058-1.45.075-.417.017-.729.021-.854.004l-.014.1c.136.018.459.012.872-.005.415-.016.929-.045 1.452-.074l-.006-.1zm.52-.029-.52.029.006.1.519-.029-.005-.1zm2.96.083c-.7-.046-2.04-.133-2.96-.083l.005.1c.912-.05 2.247.037 2.948.083l.006-.1zm.439.025c-.055 0-.212-.01-.44-.025l-.006.1c.225.014.387.025.446.025v-.1zm.214.278c.008-.035.016-.07.02-.1a.17.17 0 0 0-.014-.097.136.136 0 0 0-.084-.065.457.457 0 0 0-.136-.016v.1c.051 0 .085.004.105.01.02.007.024.014.026.017.003.005.005.016.003.04a.818.818 0 0 1-.017.09l.097.021zm-.008.04.008-.04-.097-.021-.009.04.098.02zm.21.518-.005-.004a.377.377 0 0 1-.05-.059.974.974 0 0 1-.145-.32.327.327 0 0 1-.01-.136l-.098-.02a.42.42 0 0 0 .01.179 1.105 1.105 0 0 0 .16.354.473.473 0 0 0 .047.059c.015.015.033.03.053.04l.038-.093zm1.022-.133a2.566 2.566 0 0 1-.613.126 3.068 3.068 0 0 1-.368.013.31.31 0 0 1-.029-.004l-.009-.002h-.003l-.037.092a.257.257 0 0 0 .07.013 2.868 2.868 0 0 0 .386-.013 2.66 2.66 0 0 0 .64-.132l-.037-.093zm.308-.041a.174.174 0 0 0-.106-.02.885.885 0 0 0-.202.06l.036.094a.814.814 0 0 1 .177-.055.075.075 0 0 1 .027.001.165.165 0 0 1 .027.01l.041-.09zm.23.037a.747.747 0 0 1-.16-.013c-.032-.007-.052-.016-.07-.024l-.04.09c.02.01.046.022.09.032a.87.87 0 0 0 .18.015v-.1zm.207-.528a1.58 1.58 0 0 1-.042.365.291.291 0 0 1-.063.122.135.135 0 0 1-.102.041v.1c.072 0 .13-.026.174-.071a.388.388 0 0 0 .087-.163c.036-.122.041-.273.046-.39l-.1-.004zm.096-.279a.074.074 0 0 0-.067.045.22.22 0 0 0-.018.064c-.007.045-.01.106-.011.17l.1.004c.002-.067.004-.12.01-.159a.125.125 0 0 1 .008-.033c.002-.004-.004.01-.022.01v-.1zm.2.277a2.002 2.002 0 0 0-.083-.173.392.392 0 0 0-.045-.065c-.013-.015-.038-.039-.072-.039v.1c-.012 0-.014-.007-.002.005a.3.3 0 0 1 .032.048 2.2 2.2 0 0 1 .08.165l.09-.041zm.061.028a.67.67 0 0 1-.011.153l-.002.007.002-.002a.028.028 0 0 1 .006-.006.037.037 0 0 1 .026-.005c.008 0 .011.004.012.004l-.003-.003a.422.422 0 0 1-.032-.053 2.486 2.486 0 0 1-.059-.123l-.09.04c.02.046.04.092.06.129l.029.05c.009.014.02.03.035.04a.074.074 0 0 0 .032.014c.015.003.03 0 .044-.009a.094.094 0 0 0 .036-.056.743.743 0 0 0 .015-.18h-.1zm-.808-1.182c.012-.003.033-.002.067.011a.53.53 0 0 1 .116.07c.088.065.187.165.28.285.189.242.345.554.345.816h.1c0-.295-.172-.629-.366-.877a1.68 1.68 0 0 0-.298-.304.63.63 0 0 0-.14-.083.209.209 0 0 0-.13-.015l.026.097zm-.589-.034c.084.015.19.034.294.045a.86.86 0 0 0 .295-.011l-.026-.097a.77.77 0 0 1-.259.008c-.1-.01-.201-.028-.286-.044l-.018.099zm-.149-.023c.01 0 .029.002.056.006l.093.017.018-.099-.096-.016a.496.496 0 0 0-.07-.008v.1zm-.033-.121-.02.016a.115.115 0 0 0-.01.011.062.062 0 0 0-.012.024.054.054 0 0 0 .01.048c.01.012.023.016.029.018a.127.127 0 0 0 .036.004v-.1h-.007a.047.047 0 0 1 .029.054.038.038 0 0 1-.007.015c-.001.001-.001.001 0 0l.015-.013-.063-.078zm.08-.117a.106.106 0 0 1-.024.064.335.335 0 0 1-.056.053l.063.077a.392.392 0 0 0 .071-.068.203.203 0 0 0 .047-.126h-.1zm-.183-.103c.052 0 .1.005.135.021a.083.083 0 0 1 .035.029.093.093 0 0 1 .014.053h.1a.192.192 0 0 0-.03-.108.183.183 0 0 0-.076-.064.425.425 0 0 0-.178-.031v.1zm-.113.103a.11.11 0 0 1 .113-.103v-.1a.21.21 0 0 0-.213.203h.1zm.03.134.032-.038-.002-.002a.306.306 0 0 1-.031-.034c-.019-.023-.03-.045-.03-.06h-.1c0 .05.03.096.052.123a.37.37 0 0 0 .042.045l.003.003h.001l.033-.037zm-.235.047.235.003v-.1l-.234-.003-.001.1zm-4.246.002c.106-.012.37-.02.723-.024.351-.003.788-.003 1.238 0 .9.004 1.853.016 2.285.022l.001-.1a289.72 289.72 0 0 0-2.286-.023c-.45-.002-.887-.002-1.24.001a9.35 9.35 0 0 0-.733.025l.012.1zm4.517.868a1.84 1.84 0 0 1-.202.215.118.118 0 0 1-.008.006h-.001v.001h-.002s0 .002-.002.002l-.004.004a.151.151 0 0 0-.007.008.088.088 0 0 0-.002.053l.086-.05a.088.088 0 0 1-.002.054.075.075 0 0 1-.007.008l-.004.003-.002.002c-.001 0 0 0 0 0l.003-.002a1.923 1.923 0 0 0 .232-.24l-.078-.064zm.375-.076a.419.419 0 0 0-.056-.055.144.144 0 0 0-.09-.031.192.192 0 0 0-.108.041.672.672 0 0 0-.12.121l.077.063a.575.575 0 0 1 .101-.103c.027-.019.043-.022.052-.022.008 0 .016.002.028.011a.32.32 0 0 1 .042.042l.074-.067zm.08.058c-.024 0-.043-.017-.08-.058l-.074.067c.03.033.078.09.154.09v-.1zm.5.12a.505.505 0 0 0-.25-.106c-.088-.014-.177-.014-.25-.014v.1c.074 0 .156 0 .234.013a.406.406 0 0 1 .202.082l.065-.076zm-.284.342a.325.325 0 0 0 .113-.028.596.596 0 0 0 .122-.069.253.253 0 0 0 .09-.105.119.119 0 0 0 .004-.074.134.134 0 0 0-.044-.067l-.065.076c.01.009.012.015.013.017l-.002.012a.16.16 0 0 1-.055.06.496.496 0 0 1-.102.057.243.243 0 0 1-.074.021v.1zm-.137-.065c.029.024.074.065.137.065v-.1c-.02 0-.038-.012-.073-.041l-.064.076zm-.077-.042c.024 0 .042.013.077.042l.064-.076c-.029-.025-.075-.066-.14-.066v.1zm-.099.056a.42.42 0 0 1 .053-.04.09.09 0 0 1 .046-.016v-.1a.189.189 0 0 0-.098.03c-.026.016-.049.036-.066.05l.065.076zm-.094.051a.101.101 0 0 0 .056-.02l.038-.03-.065-.076a.375.375 0 0 1-.03.023l-.006.004h.007v.1zm-.114-.049a1.275 1.275 0 0 0 .082.043.092.092 0 0 0 .032.006v-.1c.005 0 .007.002.003 0a.133.133 0 0 1-.015-.007l-.052-.028-.05.086zm-.248-.098a.32.32 0 0 1 .121.032c.045.02.089.044.127.066l.05-.086a1.446 1.446 0 0 0-.137-.072.416.416 0 0 0-.161-.04v.1zm-.13-.008c.01.013.03.024.04.025h.012l.008-.003a.026.026 0 0 0 .004-.001l.002-.001.003-.002a.172.172 0 0 1 .06-.01v-.1a.273.273 0 0 0-.109.023l.002-.001.004-.002.007-.002h.014c.008 0 .03.012.04.024l-.087.05z\"\/><\/g><\/svg>",
                        "orderable": false,
                        "searchable": false,
                        "className": "text-nowrap language-header text-center",
                        "titleAttr": "Languages",
                        "responsivePriority": 99
                    }, {
                        "data": "row_actions",
                        "name": "row_actions",
                        "title": "Operations",
                        "orderable": false,
                        "searchable": false,
                        "className": "text-center no-column-visibility text-nowrap",
                        "responsivePriority": 99
                    }],
                    "dom": "fBrt<'card-footer d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2'<'d-flex justify-content-between align-items-center gap-3'l<'m-0 text-muted'i>><'d-flex justify-content-center'p>>",
                    "buttons": {
                        "stateSave": true,
                        "buttons": [{
                            "className": "action-item btn-primary ",
                            "text": "<span data-action=\"create\" data-href=\"https:\/\/cms.botble.com\/admin\/pages\/create\">\n            <svg class=\"icon  svg-icon-ti-ti-plus\"\n  xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n  width=\"24\"\n  height=\"24\"\n  viewBox=\"0 0 24 24\"\n  fill=\"none\"\n  stroke=\"currentColor\"\n  stroke-width=\"2\"\n  stroke-linecap=\"round\"\n  stroke-linejoin=\"round\"\n  >\n  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"\/>\n  <path d=\"M12 5l0 14\" \/>\n  <path d=\"M5 12l14 0\" \/>\n<\/svg>    \n    Create\n<\/span>\n"
                        }, "reload"]
                    },
                    "initComplete": function () {
                        Botble.initResources();

                        document.dispatchEvent(new CustomEvent("core-table-init-completed", {
                            detail: {
                                table: this
                            }
                        }));
                    },
                    "drawCallback": function () {
                        var tableWrapper = $(this).closest(".dataTables_wrapper");
                        var dtDataCount = this.api().data().count();

                        if (dtDataCount === 0) {
                            tableWrapper.find(".card-footer").prop('style', 'display: none !important;');
                        } else {
                            tableWrapper.find(".card-footer").prop('style', null);
                        }

                        tableWrapper.find(".dataTables_paginate").toggle(this.api().page.info().pages > 1);

                        tableWrapper.find(".dataTables_length").toggle(dtDataCount >= 10);
                        tableWrapper.find(".dataTables_info").toggle(dtDataCount > 0);

                        setTimeout(function () {
                            var searchInputWrapper = $(".table-wrapper .table-search-input input");
                            if (!searchInputWrapper.val()) {
                                searchInputWrapper.val(tableWrapper.find(".dataTables_filter input").val());
                            }

                            if (searchInputWrapper.val()) {
                                searchInputWrapper.addClass('border-primary bg-info-subtle')

                                searchInputWrapper.closest('label').find('.search-reset-icon').show()
                                searchInputWrapper.closest('label').find('.search-icon').hide()
                            } else {
                                searchInputWrapper.removeClass('border-primary bg-info-subtle')

                                searchInputWrapper.closest('label').find('.search-reset-icon').hide()
                                searchInputWrapper.closest('label').find('.search-icon').show()
                            }
                        }, 200);
                        Botble.initResources();

                        document.dispatchEvent(new CustomEvent("core-table-init-completed", {
                            detail: {
                                table: this
                            }
                        }));
                    },
                    "paging": true,
                    "searching": true,
                    "info": true,
                    "searchDelay": 350,
                    "bStateSave": true,
                    "lengthMenu": [[10, 30, 50, 100, 500, -1], [10, 30, 50, 100, 500, "All"]],
                    "pageLength": 10,
                    "bServerSide": true,
                    "bDeferRender": true,
                    "bProcessing": true,
                    "language": {
                        "aria": {
                            "sortAscending": "orderby asc",
                            "sortDescending": "orderby desc",
                            "paginate": {"next": "Next &raquo;", "previous": "&laquo; Previous"}
                        },
                        "emptyTable": "No data to display",
                        "info": "<span class=\"dt-length-records\">\n    <svg class=\"icon  svg-icon-ti-ti-world\"\n  xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n  width=\"24\"\n  height=\"24\"\n  viewBox=\"0 0 24 24\"\n  fill=\"none\"\n  stroke=\"currentColor\"\n  stroke-width=\"2\"\n  stroke-linecap=\"round\"\n  stroke-linejoin=\"round\"\n  >\n  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"\/>\n  <path d=\"M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0\" \/>\n  <path d=\"M3.6 9h16.8\" \/>\n  <path d=\"M3.6 15h16.8\" \/>\n  <path d=\"M11.5 3a17 17 0 0 0 0 18\" \/>\n  <path d=\"M12.5 3a17 17 0 0 1 0 18\" \/>\n<\/svg>    <span class=\"d-none d-sm-inline\">Show from<\/span>\n    _START_\n    to _END_ in\n    <span class=\"badge bg-secondary text-secondary-fg\">\n    \n    _TOTAL_\n<\/span>\n    <span class=\"hidden-xs\">records<\/span>\n<\/span>\n",
                        "infoEmpty": "No record",
                        "lengthMenu": "<span class=\"dt-length-style\">_MENU_<\/span>",
                        "search": "",
                        "searchPlaceholder": "Search...",
                        "zeroRecords": "No record",
                        "processing": {},
                        "paginate": {"next": "Next &raquo;", "previous": "&laquo; Previous"},
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
                    "order": [[1, "desc"]],
                    "responsive": true,
                    "autoWidth": false
                });
            });
        });</script>


</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="notification-sidebar"
     aria-labelledby="notification-sidebar-label" data-url="https://cms.botble.com/admin/notifications"
     data-count-url="https://cms.botble.com/admin/notifications/count-unread">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    <div class="notification-content"></div>
</div>

<script src="{{ asset('monopanel/assets/js/notification.js') }}"></script>
</body>
</html>
