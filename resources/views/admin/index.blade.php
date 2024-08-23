<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Properties</title>

    <!-- Dropzone.js -->
    <link href="{{ asset('assets/admin/vendors/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/admin/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin/build/css/style.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/build/css/mycss/custom-admin.css') }}">

    {{-- Scripts for Google charts --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- End Scripts for Google charts --}}

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/front/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/custom-style.css') }}">


    @vite('resources/css/app.css')
</head>

<body>
    @include('sweetalert::alert')
    @if (auth()->user()->isAdmin())
        @include('dashboard.essential-admin.sideBar')
    @else
        @include('admin.sideBar')
    @endif
    @include('admin.navbar')
    <div class="main-content">
        <!-- content start -->
        @yield('content')
        <!-- content end -->
    </div>
</body>

@include('layouts.dashboard.admin-script')

@yield('script')

</html>
