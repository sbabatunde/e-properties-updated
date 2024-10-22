<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Properties</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/front/css/skins/default.css') }}"> -->
    <!-- External CSS libraries -->
    {{-- Font Awesome addititon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/jquery.selectBox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/dropzone.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/rangeslider.cs') }}s">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/animate.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/leaflet.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/slick-theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/map.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/jquery.mCustomScrollbar.css') }}">
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/front/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/fonts/flaticon/font/flaticon.css') }}">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    {{-- My Custom CSS --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/skins/mycss/banners.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/skins/mycss/services.css') }}">
    {{-- Additiona Font Awesome Library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-VJ/9nF9YHV7mODaoHTHl6br9F0W3Z+jLpV8jlF9iD2JF8fzoc86ZsaVbteprscmXrlg3oTmkKp4H3jWUkC9RzA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Logo icon -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/front/img/favicon.ico') }}" type="image/x-icon"> --}}

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

    {{-- Toaster Link --}}
    <!-- jQuery first -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
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

    {{-- Swiper For Sliding Divs --}}
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .btn {
            margin-top: 10px;
        }
    </style>
</head>

<body id="top" class="index-body">

    <!-- Top header start -->
    {{-- @include('front.includes.top-header') --}}
    @include('front.includes.navbar')

    <!-- Top header end -->
    @include('sweetalert::alert')


    <main class="py-4">
        @yield('content')
    </main>


    <!-- Footer start -->
    @include('front.includes.footer')
    <!-- Footer end -->

    {{-- <script  src="{{ asset('assets/front/js/reg-form.js') }}"></script> --}}
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
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/front/js/reg-form.js') }}"></script>
    <script src="{{ asset('assets/front/js/auction-bid.js') }}"></script>
    <script src="{{ asset('assets/front/js/properties.js') }}"></script>
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


    <!-- /// Add to Compare Function Begins -->
    <script type="text/javascript">
        //Script for adding Property to compare List
        function addToCompare(property_id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/add-property-to-compare/" + property_id,
                data: {
                    _token: '{{ csrf_token() }}', // Add this line to include CSRF token
                    // other data as needed
                },
                success: function(data) {

                    // Start Message 
                    console.log(data);
                    fetchCompareList();

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

        //Script for Fetching all Property Compare List
        function fetchCompareList() {
            $.ajax({
                url: "/get-compare-property/", // Endpoint to fetch compare list data
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Update UI to display compare list data
                    console.log(response);

                    var rows = ""
                    $.each(response, function(key, value) {
                        // Add The Div section for each compare properties
                        var thumbnailUrl = value.property.thumbnail ? value.property.thumbnail :
                            '';

                        rows += ` 
                        <div class="res-comp-prop mt-3 mb-5">
                            <img src="${thumbnailUrl}" alt="${value.property.title}">
                            <div class="res-prop-details">
                                <a href="#" 
                                    onclick="compareRemove(${value.property.id}); return false;"
                                    class="">X</a>
                                <span>
                                    <h6><b>${value.property.title}</b></h6>
                                    <h6>${value.property.area}</h6>
                                </span>
                                <span class="comp-price">
                                    Price: <b style="font-size: 20px">${value.payment.initial_denomination}
                                        ${value.payment.initial_pay}</b>
                                </span>
                            </div> 
                        </div> `
                    });

                    $('#compareList').html(rows);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching compare list:', error);
                    // Display error message if fetch fails
                    $('#compareList').html(
                        '<p class="text-danger">Error fetching compare list. Please try again later.</p>');
                }
            });
        }

        $(document).ready(function() {
            fetchCompareList();
        });

        function clearPropertyCompare(user_id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/clear-property-compare/" + user_id,
                data: {
                    _token: '{{ csrf_token() }}', // Add this line to include CSRF token
                    // other data as needed
                },
                success: function(data) {

                    // Start Message 
                    console.log(data);
                    fetchCompareList();

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
    <!-- /// Add to And Fetch Compare Function Ends  -->

    <!-- /// Remove from Compare Function Begins -->
    <script>
        function compareRemove(id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/remove-property-compare/" + id,
                data: {
                    _token: '{{ csrf_token() }}', // Add this line to include CSRF token
                    // other data as needed
                },
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

    {{-- Check if Authorized for sending message Begins --}}
    <script type="text/javascript">
        //Script for adding Property to compare List
        function addToCompare(property_id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/add-property-to-compare/" + property_id,
                data: {
                    _token: '{{ csrf_token() }}', // Add this line to include CSRF token
                    // other data as needed
                },
                success: function(data) {

                    // Start Message 
                    console.log(data);
                    fetchCompareList();

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

        //Script for Fetching all Property Compare List
        function fetchCompareList() {
            $.ajax({
                url: "/get-compare-property/", // Endpoint to fetch compare list data
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Update UI to display compare list data
                    console.log(response);

                    var rows = ""
                    $.each(response, function(key, value) {
                        // Add The Div section for each compare properties
                        var thumbnailUrl = value.property.thumbnail ? value.property.thumbnail :
                            '';

                        rows += ` 
                        <div class="res-comp-prop mt-3 mb-5">
                            <img src="${thumbnailUrl}" alt="${value.property.title}">
                            <div class="res-prop-details">
                                <a href="#" 
                                    onclick="compareRemove(${value.property.id}); return false;"
                                    class="">X</a>
                                <span>
                                    <h6><b>${value.property.title}</b></h6>
                                    <h6>${value.property.area}</h6>
                                </span>
                                <span class="comp-price">
                                    Price: <b style="font-size: 20px">${value.payment.initial_denomination}
                                        ${value.payment.initial_pay}</b>
                                </span>
                            </div> 
                        </div> `
                    });

                    $('#compareList').html(rows);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching compare list:', error);
                    // Display error message if fetch fails
                    $('#compareList').html(
                        '<p class="text-danger">Error fetching compare list. Please try again later.</p>');
                }
            });
        }

        $(document).ready(function() {
            fetchCompareList();
        });

        function checkAuthMessage(user_id) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/property/professional/checkAuth",
                data: {
                    _token: '{{ csrf_token() }}', // Add this line to include CSRF token
                    // other data as needed
                },
                success: function(data) {

                    // Start Message 
                    console.log(data);
                    fetchCompareList();

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
    {{-- Check if Authorized for sending message Ends --}}

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4, // Show 4 products at a time
            spaceBetween: 30, // Space between slides
            loop: true, // Enable looping
            autoplay: {
                delay: 2500, // Delay between slides
                disableOnInteraction: false, // Continue autoplay after user interactions
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    {{-- Script for search button Tabs --}}

    <script>
        function showTab(tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all tab buttons
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            // Show the selected tab content and set the button as active
            let x = document.getElementById('searchType').value = tabName;
            document.querySelector(`.tab-button[onclick="showTab('${tabName}')"]`).classList.add('active');
            console.log(x);
        }
    </script>

    {{-- Trending Slide Script --}}
    <script>
        jQuery(document).ready(function() {
            if (jQuery('.testimonial-slider-rtl').length) {
                const reviewsCarouselOptions = {
                    slidesPerView: 1, // Default value for smaller screens
                    spaceBetween: 30,
                    loop: true,
                    speed: 7500,
                    grabCursor: true, // Show a grab cursor when hovering over slides
                    pauseOnMouseEnter: false,
                    mousewheel: {
                        enabled: false,
                    },
                    keyboard: {
                        enabled: false,
                    },
                    allowTouchMove: true, // Enable dragging and touch movement
                    autoHeight: false,
                    initialSlide: 0,
                    autoplay: {
                        delay: 3000, // Delay in milliseconds (e.g., 3000ms = 3 seconds)
                        disableOnInteraction: false, // Continue autoplay even after user interactions
                    },
                    breakpoints: {
                        1200: { // When viewport is 1200px or wider
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        992: { // When viewport is 992px or wider
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        768: { // When viewport is 768px or wider
                            slidesPerView: 1.5,
                            spaceBetween: 15,
                        },
                        576: { // When viewport is 576px or wider
                            slidesPerView: 1, // Show one slide per view
                            spaceBetween: 10,
                        },
                    },
                };

                const reviewsCarousel = new Swiper(".testimonial-slider-rtl", reviewsCarouselOptions);
            }
        });
    </script>


</body>

</html>
