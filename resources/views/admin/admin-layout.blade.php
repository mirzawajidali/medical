<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ asset('public/admin/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('public/admin/css/style.css')}}" rel="stylesheet">
</head>
<body>
    {{-- Pre Loader Start --}}
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    {{-- Pre Loader End --}}
    {{-- Wrapper Start --}}
    <div id="main-wrapper">
        {{-- Header Start --}}
        @include('admin.includes.header')
        {{-- Header End --}}
        {{-- Sidebar Start--}}
        @include('admin.includes.sidebar')
        {{-- Sidebar End--}}
        {{-- Main Content Start --}}
        @yield('admin')
        {{-- Main Content End --}}
        {{-- Footer Start --}}
        @include('admin.includes.footer')
        {{-- Footer End --}}
    </div>
    {{-- Wrapper End --}}
    <script src="{{ asset('public/admin/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/custom.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/settings.js')}}"></script>
    <script src="{{ asset('public/admin/js/gleek.js')}}"></script>
    <script src="{{ asset('public/admin/js/styleSwitcher.js')}}"></script>
    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{ asset('public/admin/plugins/d3v3/index.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('public/admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('public/admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('public/admin/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/dashboard/dashboard-1.js')}}"></script>
</body>
</html>

