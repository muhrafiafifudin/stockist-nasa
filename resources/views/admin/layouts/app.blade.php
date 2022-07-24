<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> @yield('title') </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('admin/img/icon.ico') }}" type="image/x-icon" />

    @include('admin.includes.style')
</head>

<body data-background-color="bg3">
    <div class="wrapper">
        <!--
   Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
  -->
        <div class="main-header" data-background-color="dark">
            <!-- Logo Header -->
            @include('admin.includes.header-logo')
            <!-- End Logo Header -->

            <!-- Header -->
            @include('admin.includes.header')
            <!-- End Header -->
        </div>

        <!-- Sidebar -->
        @include('admin.includes.sidebar')
        <!-- End Sidebar -->

        <!-- Content -->
        @yield('content')
        <!-- End Content -->

    </div>

    @include('admin.includes.script')

    @stack('scripts')
</body>

</html>
