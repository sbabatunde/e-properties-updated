
@extends('layouts.front.site')
@section('content')

@include('front.hero-sections.circular-properties')
@include('front.hero-sections.brands')

{{--Commercial And Residential Properties Link Begins --}}
    <div class="container mt-4">
        <div class="row hero-prop-type">
            <div class="hero-commmerce-prop mt-3">
            <a href="{{ route('all.commercial') }}" style="text-decoration: none">
                    Commercial Properties
                </a>
            </div>
            <div class="hero-resident-prop mt-3">
            <a href="{{ route('all.residential') }}" style="text-decoration: none">
                    Residential Properties
                </a>
            </div>
        </div>
    </div>
{{--Commercial And Residential Properties Link Ends --}}


{{--Meet Agents Link Begins --}}
    <div class="container mt-4">
        <div class="hero-meet-agent mt-5">
            <div class="row">
                <div class="mt-3 col-lg-3 col-md-6 col-sm-6 ">
                <a href="{{ route('agent.all') }}" class="btn mt-3 hero-agent">
                    Agents
                    </a>
                </div>
                <div class="mt-3 meet-info col-lg-5 col-md-6 col-sm-6">
                    <p class="mt-3">
                        Meet With Different Property Agents,who 
                        wil help you get your desired property with
                        little to no agent fee added.
                    </p>
                </div>
                <div class="mt-3 col-md-6 col-lg-4 col-sm-6 hands-pic">
                    <img src="{{ asset('../assets/images/hero-images/hero1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
{{--Meet Agents Link Ends --}}

{{--Post Your Properties and Make Request Begins --}}
    <div class="container wrapper mt-5">
        <div class="columns">
            <div class="col col-50">
                <div class="row">
                    <div class="col mt-2 col-50 hero-post">
                        <h5>Post Your Property</h5>
                        <p>
                            Meet With Different Property Agents,who 
                            wil help you get your desired property with
                            little to no agent fee added.
                        </p>
                        <a href="{{ route('admin.add.listing') }}" class="btn btn-hero-post">Post your Property</a>
                    </div>
                    <div class="hero1-pic">
                        <img class="hero-house-pic" src="{{ asset('../assets/images/hero-images/hero2.png') }}" alt="hero-house-pic">
                    </div>
                </div>
            </div>
            <div class="col col-50 " style="background-image:url({{ asset('../assets/images/hero-images/hero4.png') }})">
                <span class="hero-post ">
                    <h5 class="mt-1">Make a Request</h5>
                    <p class="hero-request">
                        Meet With Different Property Agents,who 
                        wil help you get your desired property with
                        little to no agent fee added.
                    </p>
                        <a href="{{ route('make.request') }}" class="btn btn-hero-post mt-1">Request</a>
                        <a href="{{ route('requests.all') }}" class="btn btn-hero-post view-request mt-1">View Request</a>
                </span>
            </div>
        </div>
    </div>
{{--Post Your Properties Link and Make Request Ends --}}

{{-- Report A Scam Link Begins --}}
    <div class="container">
        <div class="hero-scam">
            <h5>
                Report A Property Scam
            </h5>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quas mollitia aut ducimus minima, ratione voluptatum eveniet,
                laborum reiciendis veritatis rerum nobis. Earum,
                iure iusto nesciunt tempora atque non maiores provident.
            </p>
            <a href="{{ route('all.scam.report') }}" class="btn btn-hero-post" style="margin-top: 5px; padding:0.8% 7%" >Report</a>
        </div>
    </div>
{{-- Report A Scam Link Ends --}}

{{-- Land Verification Link Begins --}}
    <div class="container">
        <div class="hero-land-verf">
            <span>
                <p>Land Verification, Regularization on E-property</p>
                <a href="" class="btn-hero-verf">Read More</a>
            </span>
            <img src="{{ asset('../assets/images/hero-images/hero4.png') }}" alt="phone" class=>
        </div>
    </div>
{{-- Land Verification Link Ends --}}

{{-- E-properties Numbers Begins --}}
    <div class="container">
        <div class="container mb-4 mt-5 d-flex justify-content-center">
            <h3><b>E-properties in Numbers</b></h3>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="mb-2 text-center">
                <h3 style="color: blue"><b>53,074</b></h3>
                <a href="" style="color: black"><b>Rented Properties</b></a>
            </div>
            <div class="mb-2 text-center">
                <h3 style="color: blue"><b>53,074</b></h3>
                <a href="" style="color: black"><b>Sold Properties</b></a>
            </div>
            <div class="mb-2 text-center">
                <h3 style="color: red"><b>1,122,533</b></h3>
                <a href="{{ route('user.live-auction') }}" style="color: red"><b>Ongoing Auction</b></a>
            </div>
            <div class="mb-2 text-center">
                <h3 style="color: blue"><b>34,879</b></h3>
                <a href="" style="color: black"><b>Registered Tenants</b></a>
            </div>
            <div class="mb-2 text-center">
                <h3 style="color: blue"><b>674,000</b></h3>
                <a href="{{route('all.landlords')}}" style="color: black"><b>Registered Landlords</b></a>
            </div>
            <div class="mb-2 text-center">
                <h3 style="color: red"><b>201,905</b></h3>
                <a href="{{ route('blacklist.all') }}" style="color: red"><b>Blacklist</b></a>
            </div>
        </div>
    </div>
{{-- E-properties Numbers Ends --}}

{{-- Esssential Circular-Properties Pictures Begins --}}
    @include('front.hero-sections.experts')
{{-- Esssential Circular-Properties Pictures Ends --}}

{{-- Trending Properties Begins --}}
    @include('front.hero-sections.trending')
{{-- Trending Properties Ends --}}

{{-- Property Category Begins --}}
    @include('front.hero-sections.category')
{{-- Property Category Ends --}}

{{-- New Listings Begins --}}
    @include('front.hero-sections.listing')
{{-- New Listings Ends --}}

{{-- Deals Begins --}}
    @include('front.hero-sections.deals')
{{-- Deals Ends --}}

{{-- Property Service  And Management Begins --}}
    @include('front.hero-sections.service-management')
{{-- Property Service  And Management Ends --}}


{{--Join Groups Begins --}}
    @include('front.hero-sections.groups')
{{-- Join Groups Ends --}}

@endsection