<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('public/admin/css/style.css')}}" rel="stylesheet">
</head>
<body class="h-100">
    {{-- Pre Loader Start --}}
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    {{-- Pre Loader End --}}
    {{-- Main Content Start--}}
    @yield('auth')
    {{-- Main Content End --}}
    {{-- Script --}}
    <script src="{{ asset('public/admin/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/custom.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/settings.js')}}"></script>
    <script src="{{ asset('public/admin/js/gleek.js')}}"></script>
    <script src="{{ asset('public/admin/js/styleSwitcher.js')}}"></script>
</body>
</html>




