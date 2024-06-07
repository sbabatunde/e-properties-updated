@extends('layouts.front.login-site')
@section('content')
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
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more"><b>Free Rental Valuation</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-home"></i>
                    <h5>Houses</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more"><b>Online Rental Valuation</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="lanlord-services">
                    <i class="flaticon-office-block"></i>
                    <h5>Commercial</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
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
    <div class="container mt-1">
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
                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">View More Reviews</a>
            </div>
        </div>
    </div>
<!-- services 3 end -->
{{-- All Your Properties start --}}
    <div class="all-properties col-lg-12 col-md-12 col-sm-12 wow fadeInLeft delay-04s">
        <div class="container d-flex justify-content-between">
            <div class="col-lg-6 ml-5 ">
                <b>All Your Properties at your</b> Fingertips
                <div>
                    <i class="fa fa-checkbox"></i> 
                    <p>The LanlordPortal gives you <em style="color: #394293">instant online access</em> to <br>
                        information about your Rental services 24/7
                    </p>
                    </ul>
                </div>
                <span class="mb-2 landlord-prop-details">
                    <i class="fa fa-checkbox checked"></i> Download or View your monthly settlement
                </span>
                <span class="mb-2 landlord-prop-details">
                    <i class="fa fa-checkbox"></i> see your new tenant check in progress
                </span>
                <span class="mb-2 landlord-prop-details">
                    <i class="fa fa-checkbox"></i> Peace of mind maintenance tracking
                </span>
                <span class="mb-2 landlord-prop-details">
                    <i class="fa fa-checkbox"></i> Quick, easy and extensive query resolution
                </span>
                <span class="mb-2 landlord-prop-details">
                    <i class="fa fa-checkbox"></i> You will never loose details of previous tenancies
                </span>
            
            </div>
            <div class="col-lg-4 d-flex align-self-center">
                <img src="{{ asset('assets/images/landlord-1.png')}}" alt="">
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
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img  src="../assets/images/services/service1.png" alt="Avatar" style="width:100%;" height="150" width="100" >
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Mally Cleff</h5>
                            <p >12 properties</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img  src="../assets/images/services/service1.png" alt="Avatar" style="width:100%;" height="150" width="100" >
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Sven Botman</h5>
                            <p >16 properties</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img  src="../assets/images/services/service1.png" alt="Avatar" style="width:100%;" height="150" width="100" >
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Ayo Adetoun</h5>
                            <p >24 properties</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img  src="../assets/images/services/service1.png" alt="Avatar" style="width:100%;" height="150" width="100" >
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Ugochukwu Sunday</h5>
                            <p >20 properties</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>     
        </div> 
    </div>
<!-- Meet the Landlord  end -->

@include('front.users.newsletter.page')

@endsection