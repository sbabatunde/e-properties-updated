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
    @include('admin.sideBar')
    @include('admin.navbar')
    <div class="main-content">
        <!-- content start -->
        @yield('content')
        <!-- content end -->
    </div>
</body>

<script>
    let btn = document.querySelector('#btn');
    let sideBar = document.querySelector('.sideBar');
    let mainContent = document.querySelector('.main-content');

    btn.onclick = function() {
        sideBar.classList.toggle('active');
        mainContent.classList.toggle('active');
    }
</script>

<script>
    // JavaScript for sidebar toggle functionality
    const toggleNavbarBtn = document.getElementById('toggle-navbar-btn');
    const navbarNav = document.getElementById('navbar-nav');
    // const sidebar = document.getElementById('sidebar');

    toggleNavbarBtn.addEventListener('click', function() {
        navbarNav.classList.toggle('active');
        // sidebar.classList.toggle('active');
    });
</script>

<!-- Dropzone.js -->
<script src="{{ asset('/assets/admin/vendors/dropzone/dist/min/dropzone.min.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('assets/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('assets/admin/vendors/nprogress/nprogress.js') }}"></script>

<!-- Chart.js -->
<script src="{{ asset('assets/admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('assets/admin/vendors/gauge.js/dist/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('assets/admin/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('assets/admin/vendors/skycons/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('assets/admin/vendors/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('assets/admin/vendors/DateJS/build/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/admin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('assets/admin/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>




<!-- Custom Theme Scripts -->
<script src="{{ asset('assets/admin/build/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/admin/build/js/admin-profile.js') }}"></script>
{{-- ******************************************************************************************** --}}

<!-- bootstrap-wysiwyg -->
<script src="{{ asset('assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/google-code-prettify/src/prettify.js') }}"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset('assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
<!-- Switchery -->
<script src="{{ asset('assets/admin/vendors/switchery/dist/switchery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
{{-- <!-- Parsley -->
	<script src="{{asset('assets/admin/vendors/parsleyjs/dist/parsley.min.js')}}"></script> --}}
<!-- Autosize -->
<script src="{{ asset('assets/admin/vendors/autosize/dist/autosize.min.js') }}"></script>
<!-- jQuery autocomplete -->
<script src="{{ asset('assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
<!-- starrr -->
<script src="{{ asset('assets/admin/vendors/starrr/dist/starrr.js') }}"></script>

<script>
    function show1() {
        document.getElementById('cats_list').style.display = 'none';
    }

    function show2() {
        document.getElementById('cats_list').style.display = 'block';
    }
</script>

@yield('script')

<!-- Beginning  of required script for Modal -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<!-- Beginning of required script for Modal -->

</html>
