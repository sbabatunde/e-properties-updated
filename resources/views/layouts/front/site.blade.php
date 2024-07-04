<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Properties</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/jquery.selectBox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/dropzone.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/rangeslider.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/animate.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/leaflet.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/slick-theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/map.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/jquery.mCustomScrollbar.css') }}">
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/front/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/front/css/skins/default.css') }}">
    {{-- My Custom CSS --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/skins/mycss/services.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/skins/mycss/banners.css') }}">

    {{-- Font-Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-VJ/9nF9YHV7mODaoHTHl6br9F0W3Z+jLpV8jlF9iD2JF8fzoc86ZsaVbteprscmXrlg3oTmkKp4H3jWUkC9RzA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- Additiona Font Awesome Library --}}
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css” rel=“stylesheet”>
    {{-- Toaster Link --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- For Toaster Message Display --}}
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body id="top" class="index-body">

    <!-- Top header start -->
    {{-- @include('front.includes.top-header') --}}
    <!-- Top header end -->
    @include('front.includes.navbar')

    <!-- main header start -->
    {{-- @auth
    @include('front.includes.main-header')
@endauth --}}
    <!-- main header end -->

    <!-- Banner start -->
    @include('front.includes.banner')
    <!-- banner end -->
    @include('sweetalert::alert')


    <!-- content start -->
    @yield('content')
    <!-- content end -->


    <!-- Footer start -->
    @include('front.includes.footer')
    <!-- Footer end -->


    <!-- External JS libraries -->
    <script src="{{ asset('assets/front/js/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.selectBox.js') }}"></script>
    <script src="{{ asset('assets/front/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.filterizr.js') }}"></script>
    <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/backstretch.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('assets/front/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/front/js/leaflet.js') }}"></script>
    <script src="{{ asset('assets/front/js/leaflet-providers.js') }}"></script>
    <script src="{{ asset('assets/front/js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/maps.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
    <script src="{{ asset('assets/front/js/ie-emulation-modes-warning.js') }}"></script>
    <!-- Custom JS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/front/js/reg-form.js"></script>
    <script src="assets/front/js/properties.js"></script>
    {{-- <script src="{{asset('assets/js/reg-form.js')}}"></script> --}}
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
    <!-- /// Add to Carepage  -->

    <!-- /// Add to Compare Function Begins -->
    <script type="text/javascript">
        function addToCompare(property_id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/add-property-to-compare/" + property_id,

                success: function(data) {

                    // Start Message 
                    console.log(data);

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })
                        fetchCompareList();
                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }

                    // End Message  

                }
            })

        }
    </script>
    <!-- /// Add to Compare Function Ends  -->

    {{-- fetch Compare List Script  --}}
    <script>
        function fetchCompareList() {
            $.ajax({
                url: '/compare/list', // Endpoint to fetch compare list data
                type: 'GET',
                success: function(response) {
                    // Update UI to display compare list data
                    $('#compareList').html(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching compare list:', error);
                    // Display error message if fetch fails
                    $('#compareList').html(
                        '<p class="text-danger">Error fetching compare list. Please try again later.</p>');
                }
            });
        }
    </script>
    <!-- /// Remove from Compare Function Begins -->
    <script>
        function compareRemove(id) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/compare-remove/" + id,

                success: function(data) {
                    compare();

                    // Start Message 

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })

                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }

                    // End Message  


                }
            })

        }
    </script>
    <!-- /// Remove from Compare Function Ends -->

</body>

</html>
