<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="images/favicon.png" rel="shortcut icon">

    <title> @yield('title') </title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    @include('users.includes.style')
</head>

<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">
            <img class="preloader__img" src="images/preloader.png" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
        @include('users.includes.header')
        <!--====== End - Main Header ======-->

        <!--====== App Content ======-->
        @yield('content')
        <!--====== End - App Content ======-->

        <!--====== Main Footer ======-->
        @include('users.includes.footer')
        <!--====== End - Main Footer ======-->

        <div class="wa-icon">
            <a href="https://wa.me/6289649312293/?text=Apakah%20produk%20masih%20ada%20?">
                <img src="{{ asset('users/img/whatsapp.png') }}" alt="" height="80px" width="80px">
            </a>
        </div>

    </div>
    <!--====== End - Main App ======-->

    @include('users.includes.script')

    @stack('scripts')
</body>

</html>
