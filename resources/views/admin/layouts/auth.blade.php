<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> @yield('title') </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="admin/img/icon.ico" type="image/x-icon" />

    @include('admin.includes.script')

    @include('admin.includes.style')
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <!-- Content -->
        @yield('content')
        <!-- End Content -->
    </div>

    @include('admin.includes.script')
</body>

</html>
