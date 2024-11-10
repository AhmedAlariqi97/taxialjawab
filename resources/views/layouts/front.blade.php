<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>@yield('title', 'unkown name')</title> --}}
    {!! SEO::generate() !!}

    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="{{ asset('front/images/asset-2.svg') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- Swiper JS CSS-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS Styles -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" class="ltr"
            onload="if(media!='all')media='all'">
    <link href="{{ asset('front/css/animate.min.css') }}" rel="stylesheet" onload="if(media!='all')media='all'">

    <!-- Scroll Reveal -->
    <link rel="stylesheet" href="css/scrollreveal.min.css">

    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/glightbox/css/glightbox.min.css') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    @if (App::getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('front/css/styleLTR.css') }}">
    @else
        <link href="{{ asset('front/css/rtl/bootstrap-rtl.min.css') }}" disabled="true" rel="stylesheet" class="rtl">
        <link href="{{ asset('front/css/rtl/style-rtl.min.css') }}" disabled="true" rel="stylesheet" class="rtl">
        <link rel="stylesheet" href="{{ asset('front/css/stylertl.css') }}">
    @endif


</head>
@yield('style')

<body class="home">

    {{-- the main header --}}
    @include('partials.front.header')

    @yield('content')



    {{-- the main footer --}}
    @include('partials.front.footer')

    @include('partials.alert-messages')
    @include('partials.errors')


     <!-- Javascript -->
     <script src="{{ asset('front/js/custom.js') }}"></script>
    <!-- add by ahmed -->
    <script src="https://kit.fontawesome.com/d88c51d2e9.js" crossorigin="anonymous"></script>
    <script defer src="{{ asset('front/js/bootstrap.min.js') }}"></script>


    <!-- Swiper JS -->
<script src="{{ asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('js/all.min.js')}}"></script>

<!-- Scroll Reveal -->
<script src="{{ asset('js/scrollreveal.js')}}"></script>


<!-- JavaScript -->
    <script src="{{ asset('js/script.js')}}"></script>



    @yield('page-scripts')



</body>

</html>
