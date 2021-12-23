<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">
  <title>Medical | @isset($title)
      {{ $title }}
  @endisset</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('public/user/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('public/user/plugins/icofont/icofont.min.css')}}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ asset('public/user/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('public/user/plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('public/user/css/style.css')}}">
</head>
<body id="top">
    {{-- Header Start --}}
    @include('medical.includes.header')
    {{-- Header End --}}

    {{-- Main Content Start --}}
    @yield('content')
    {{-- Main Content End --}}

    {{-- Footer Start --}}
    @include('medical.includes.footer')
    {{-- Footer End--}}

  <!-- Main jQuery -->
  <script src="{{ asset('public/user/plugins/jquery/jquery.js')}}"></script>
  <!-- Bootstrap 4.3.2 -->
  <script src="{{ asset('public/user/plugins/bootstrap/js/popper.js')}}"></script>
  <script src="{{ asset('public/user/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('public/user/plugins/counterup/jquery.easing.js')}}"></script>
  <!-- Slick Slider -->
  <script src="{{ asset('public/user/plugins/slick-carousel/slick/slick.min.js')}}"></script>
  <!-- Counterup -->
  <script src="{{ asset('public/user/plugins/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('public/user/plugins/shuffle/shuffle.min.js')}}"></script>
  <script src="{{ asset('public/user/plugins/counterup/jquery.counterup.min.js')}}"></script>
  <!-- Google Map -->
  <script src="{{ asset('public/user/plugins/google-map/map.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
  <script src="{{ asset('public/user/js/script.js')}}"></script>
  <script src="{{ asset('public/user/js/contact.js')}}"></script>
</body>
</html>
