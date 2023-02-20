<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Ikmal Real Estate') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="إكمال - Ikmal" />
    <meta property="og:site_name" content="Ikmal" />
    <meta property="og:type" content="realestate" />
    {{-- <meta property="og:image" content="https://f.top4top.io/p_24822gs1y1.png" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    @yield('styles')

</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper"> 

        @include('frontend.partials.navbar')

        @if(Request::is('/'))
            @include('frontend.partials.slider')
        @endif

        {{-- MAIN CONTENT --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('frontend.partials.footer')

  <!-- preloader area start -->
  <div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- All JS Plugins -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('frontend/s/main.js')}}"></script>

</body>
</html>