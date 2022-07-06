<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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

    </div>
    <!--====== End - Main App ======-->

    @include('users.includes.script')
</body>

</html>
