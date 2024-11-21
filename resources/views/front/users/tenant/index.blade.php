@extends('layouts.front.login-site')
@section('content')
    <!-- Sub banner end -->
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image mt-5"
        style="background-image: url({{ asset('../assets/images/banners/tenant-banner.png') }});">
        {{-- <div class="hero-section ">
            <div class="container text-center wow zoomIn auction-sub-banner col-md-6">
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
            </div>
        </div> --}}
    </div>
    {{-- Page Banner Ends  --}}

    <!-- Property To Rent start -->
    <div class="container mt-5 mb-0">
        <div class="main-title mb-0">
            <h1>Property To Rent</h1>
            <p>
                Explore a wide range of properties available for rent that suit your lifestyle and budget. Whether you're
                looking for a cozy apartment or a spacious family home, our listings offer the perfect options for tenants.
                Enjoy a seamless renting experience with our platform, offering everything you need to find your ideal home.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-building"></i>
                    <h5>Tenant Portals</h5>
                    <p class="pb-3">
                        Access all your rental details and communicate directly with your landlord or property
                        manager through our easy-to-use portal.
                    </p>
                    <a href="{{ url('/register') }}" class="read-more"><b>Register</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-home"></i>
                    <h5>Content Insurance</h5>
                    <p class="pb-3">
                        Protect your belongings with affordable content insurance tailored to renters. Get peace of mind
                        knowing your possessions are covered.
                    </p>
                    <a href="{{ route('tenant.content-insurance') }}" class="read-more"><b>Get Insured</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="lanlord-services">
                    <i class="flaticon-office-block"></i>
                    <h5>Income Protection</h5>
                    <p class="pb-3">
                        Ensure your rental payments are covered, even if you experience unexpected changes in your income.
                        Stay protected with our comprehensive plans.
                    </p>
                    <a href="{{ route('tenant.income-protection') }}" class="read-more"><b>Get Protected</b></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Property To Rent  end -->


    <!--Why Essential Property start -->
    <div class="container mt-5 mb-0">
        <div class="main-title mb-0">
            <h1>Why Essential Property</h1>
            @include('front.users.tenant.essential-services')
        </div>
    </div>
    <!-- Why Essential Property  end -->

    <!-- From Our Tenants start -->
    <div class="container mt-1">
        <div class="main-title">
            <h1>From Our Tenants</h1>
        </div>
        <div class="display-area">
            <div class="tenant-comment-cards">
                @include('front.users.tenant.comment')
            </div>
        </div>

        <div class="tenant-dots-wrapper">
            <button class="tenant-dots active"></button>
            <button class="tenant-dots"></button>
            <button class="tenant-dots"></button>
            <button class="tenant-dots"></button>
        </div>
        <div class="col-lg-12 text-center">
            <a href="{{ route('professional.review.more') }}" class="btn btn-tenant-review">View more reviews</a>
        </div>
    </div>
    </div>
    <!-- From Our Tenants end -->

    {{-- Join Groups Begins --}}
    @include('front.hero-sections.groups')
    {{-- Join Groups Ends --}}

    <style>
        /* Ensure all the service cards have the same height */
        .lanlord-services {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Align text content to the top */
            height: 100%;
        }

        /* Align the buttons horizontally */
        .row {
            display: flex;
            justify-content: space-between;
            /* Spread out the items across the row */
            flex-wrap: wrap;
            /* Ensure items wrap on smaller screens */
        }

        /* Ensure buttons are aligned at the bottom of each card */
        .lanlord-services .read-more {
            margin-top: 3px;
            /* Push the button down to the bottom */
            align-self: flex-start;
            /* Ensure the button aligns correctly within its container */
        }

        /* Adjust button appearance if necessary */
        .read-more {
            display: inline-block;
            margin: 1px auto
                /* padding: 10px 20px;
                                                                background-color: #394293;
                                                                color: #fff;
                                                                text-decoration: none;
                                                                border-radius: 4px; */
        }
    </style>
@endsection
