@extends('layouts.front.login-site')
@section('content')
    <style>
        .custom-checkbox {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #394293;
            border-radius: 2px;
            margin-left: auto;
            margin-right: 10px;
            /* Space between icon and text */
            display: flex;
            justify-content: center;
            /* Center the icon */
            align-items: center;
            /* Center the icon */
        }

        .landlord-prop-details {
            display: flex;
            align-items: center;
            /* Vertically center checkbox and text */
            margin-bottom: 10px;
            /* Space between lines */
        }

        .landlord-prop-details span {
            display: flex;
            align-items: center;
            /* Align text with checkbox */
        }

        @media (max-width: 768px) {
            .all-properties {
                padding: 20px 0;
            }

            h2,
            h3,
            p {
                text-align: center;
                /* Center text on smaller screens */
            }
        }
    </style>

    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image " style="background-image: url(../assets/images/banners/landlord-banner.png);">
        <div class="hero-section ">
            {{-- <div class="container text-center wow zoomIn auction-sub-banner col-md-6">
                <div class="container col-md-8 text-center mt-2">
                    <span class="subhead" style="font-size:1.3rem">INVEST WITH SUCCESS BUY FROM E-PROPERTY.COM</span>
                </div>
                <div class="container col-md-10 text-center mt-4">
                    <p style="color: white;font-size:1rem">Exclusive Property Listing From The Nation's Leading Property Management</p>
                </div>
                <div class="container col-md-10 text-center mt-2 mb-5">
                    <input type="text" placeholder="Enter a state or area" class="form-control mt-1 block w-full rounded-md border-gray-300
                    shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
            </div> --}}
        </div>
    </div>
    {{-- Page Banner Ends  --}}

    <!-- services 3 start -->
    <div class="container mt-5 mb-0">
        <div class="main-title mb-0">
            <h1>Letting your property with E-Properties</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                quod, fugiat error, nesciunt eveniet quibusdam libero, commodi architecto
                sed doloribus magni molestias odit soluta quis iste quos dicta cumque voluptas
                quod, fugiat error, nesciunt eveniet quibusdam libero, commodi architecto ?
                quod, fugiat error, nesciunt eveniet quibusdam libero, commodi architecto
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-building"></i>
                    <h5>Apartments Clean</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt</p>
                    <a href="services.html" class="read-more"><b>Free Rental Valuation</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-home"></i>
                    <h5>Houses</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt</p>
                    <a href="services.html" class="read-more"><b>Online Rental Valuation</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="lanlord-services">
                    <i class="flaticon-office-block"></i>
                    <h5>Commercial</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt</p>
                    <a href="services.html" class="read-more"><b>Landlord Services</b></a>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">More Details</a>
            </div>
        </div>
    </div>
    <!-- services 3 end -->

    <!-- services 3 start -->
    {{-- <div class="container mt-1">
        <div class="main-title">
            <h1>From Our Landlords</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-comments">
                    <h5>Apartments Clean</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <span class="ratings">
                        <i class="fa fa-star checked" style="font-size:1px"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star unchecked"></i>
                    </span>
                    <span class="">
                        <b>Mike</b> <br>
                        <p class="font-2px mt-0">1 Month ago</p>
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-comments">
                    <h5>Apartments Clean</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <span class="ratings">
                        <i class="fa fa-star checked" style="font-size:1px"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star unchecked"></i>
                    </span>
                    <span class="">
                        <b>Mike</b> <br>
                        <p class="font-2px mt-0">1 Month ago</p>
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-comments">
                    <h5>Apartments Clean</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <span class="ratings">
                        <i class="fa fa-star checked" style="font-size:1px"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star unchecked"></i>
                    </span>
                    <span class="">
                        <b>Mike</b> <br>
                        <p class="font-2px mt-0">1 Month ago</p>
                    </span>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">View More
                    Reviews</a>
            </div>
        </div>
    </div> --}}
    @include('front.users.landlord.comment')
    <!-- services 3 end -->
    {{-- All Your Properties start --}}
    <div class="all-properties col-lg-12 col-md-12 col-sm-12 wow fadeInLeft delay-04s" style="padding: 40px 0;">
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <h2 style="font-weight: bold; font-size: 1.5rem; color: #394293;">All Your Properties at Your</h2>
                <h3 style="font-weight: 300; color: #394293;"> Fingertips</h3>
                <div>
                    <p style="font-size: 12px; font-weight: 600;">
                        The LanlordPortal gives you <em style="color: #394293;">instant online access</em> to <br>
                        information about your rental services 24/7
                    </p>
                </div>
                <div class="landlord-prop-details">
                    <span class="mb-2">
                        <span class="custom-checkbox">
                            <i class="fa fa-check" style="color: white;"></i>
                        </span>
                        <span style="font-weight: bold;">Download or View your monthly settlement</span>
                    </span>
                </div>
                <div class="landlord-prop-details">
                    <span class="mb-2">
                        <span class="custom-checkbox">
                            <i class="fa fa-check" style="color: white;"></i>
                        </span>
                        <span style="font-weight: bold;">See your new tenant check-in progress</span>
                    </span>
                </div>
                <div class="landlord-prop-details">
                    <span class="mb-2">
                        <span class="custom-checkbox">
                            <i class="fa fa-check" style="color: white;"></i>
                        </span>
                        <span style="font-weight: bold;">Peace of mind maintenance tracking</span>
                    </span>
                </div>
                <div class="landlord-prop-details">
                    <span class="mb-2">
                        <span class="custom-checkbox">
                            <i class="fa fa-check" style="color: white;"></i>
                        </span>
                        <span style="font-weight: bold;">Quick, easy, and extensive query resolution</span>
                    </span>
                </div>
                <div class="landlord-prop-details">
                    <span class="mb-2">
                        <span class="custom-checkbox">
                            <i class="fa fa-check" style="color: white;"></i>
                        </span>
                        <span style="font-weight: bold;">You will never lose details of previous tenancies</span>
                    </span>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center mt-4 mt-lg-0">
                <img src="{{ asset('assets/images/landlord-1.png') }}" alt="" class="img-fluid"
                    style="max-width: 80%; height: auto;">
            </div>
        </div>
    </div>



    {{-- All Your Properties End --}}

    <!-- services 3 start -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-building"></i>
                    <h5>First time landlord guide</h5>
                    <p class="pb-4">A guide for those considering becoming
                        a landlord and those who already have previous experience.
                    </p>
                    <a href="services.html" class="read-more"><b>Learn MOre</b></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-building"></i>
                    <h5>Buy to let</h5>
                    <p class="pb-4">
                        Looking to invest A buy to let property could be very
                        rewarding and is something we can help you get the most out of
                    </p>
                    <a href="services.html" class="read-more"><b>Learn MOre</b></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-calculator"></i>
                    <h5>Yield Calculator</h5>
                    <p class="pb-4">
                        Work out the potential rental yield of a buy to let property,
                        ensuring your mental income is sufficient for you investment
                    </p>
                    <a href="services.html" class="read-more"><b>Learn MOre</b></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-question"></i>
                    <h5>Landlord FAQ</h5>
                    <p class="pb-4">
                        Find answers to the most frequently asked questions
                        regarding letting a property and the landlord services
                        we provide.
                    </p>
                    <a href="services.html" class="read-more"><b>Learn MOre</b></a>
                </div>
            </div>
        </div>
    </div>
    <!-- services 3 end -->

    <!-- Meet the Landlord start -->
    <div class="container">
        <div class="row col-12 d-flex justify-content-between">
            <div class="meet-header">
                <h5 style="font-weight: 700">
                    Meet The Lanlords
                </h5>
            </div>
            <div class="meet-link">
                <a style="color:red;font-weight:700" href=" {{ route('all.landlords') }} ">
                    See More
                </a>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap mt-3">
            @foreach ($allAgents as $agent)
                <div class="w-full sm:w-1/2 md:w-1/4 p-4 flex justify-center wow fadeInLeft delay-04s">
                    <div
                        class="landlord-cat-venue bg-gray-100 rounded-lg shadow-md transition-transform transform hover:scale-105">
                        <img src="{{ !empty($agent->user->photo) ? url(asset($agent->user->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                            alt="{{ $agent->business_name }}" class="w-full h-40 object-cover rounded-t-lg">
                        <span class="hero-expert-text p-4 text-center">
                            <h4 class="text-lg font-semibold mb-1">{{ $agent->user->firstname ?? '' }}
                                {{ $agent->user->lastname ?? '' }}</h4>
                            <p class="text-gray-600">
                                {{ count($agent->property) > 1 ? count($agent->property) . ' Properties' : count($agent->property) . ' Property' }}
                            </p>
                            <a href="{{ route('property.professionals.view', $agent->user_id) }}"
                                class="btn btn-info mb-3"
                                style="background-color:#394293; font-weight:500; font-size:20px;">
                                Connect
                            </a>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Meet the Landlord  end -->

    @include('front.users.newsletter.page')
@endsection
