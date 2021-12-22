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
    <!--Datatable-->
    <link href="{{ asset('public/admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
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
    <script src="{{ asset('public/admin/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('public/admin/plugins/circle-progress/circle-progress.min.js')}}"></script>
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
    <!--Datatables-->
    <script src="{{ asset('public/admin/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>

</body>
</html>

