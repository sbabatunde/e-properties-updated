@extends('layouts.front.login-site')
@section('content')
<!-- Sub banner end -->
{{-- Page Banner Begins --}}
    <div class="page-hero bg-image mt-5" style="background-image: url(../assets/images/banners/tenant-banner.png);">
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
                    <h5>Tenant Portals</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more"><b>Register</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="lanlord-services">
                    <i class="fa fa-home"></i>
                    <h5>Content Insurance</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more"><b>Get Insured</b></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="lanlord-services">
                    <i class="flaticon-office-block"></i>
                    <h5>Income Protection</h5>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more"><b>Get Protected</b></a>
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
            <a  href="#" class="btn btn-tenant-review">View more reviews</a>
        </div>
        </div> 
    </div>
<!-- From Our Tenants end -->

{{--Join Groups Begins --}}
    @include('front.hero-sections.groups')
{{-- Join Groups Ends --}}

@endsection