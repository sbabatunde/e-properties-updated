@extends('layouts.front.login-site')
@section('content')
<div class="page-hero bg-image " style="background-image: url(../assets/images/banners/main-auction-banner.png);">
    <div class="hero-section ">
      <div class="container text-center wow zoomIn auction-sub-banner col-md-6" style="position: relative;top:45%">
        <div class="container col-md-8 text-center mt-2">
            <span class="subhead" style="font-size:1.3rem">INVEST WITH SUCCESS BUY FROM E-PROPERTY.COM</span>
        </div>
        <div class="container col-md-10 text-center mt-4 mb-4">
            <p style="color: white;font-size:1rem">Exclusive Property Listing From The Nation's Leading Property Management</p>
        </div>
        <div class="container col-md-10 text-center mt-3 mb-3">
            <input type="text" placeholder="Enter a state or area" class="form-control mt-1 block w-full rounded-md border-gray-300
             shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
      </div>
    </div>
</div>
<div class="container mt-5 pt-5">
    <div class="d-flex justify-content-center">
        <div>
            <div class="hedin-mb-30 col-md-8 container">
                <h3 class="heading-3 mt-4 text-center"> 
                    <strong style="color: black;font-weight:700">
                        Live Auction
                    </strong> 
                </h3>
                <div class="container">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, iure. Nihil repellat saepe beatae odit explicabo 
                        aliquid odio, ut, maiores dicta voluptas sequi velit. Doloremque ex ipsam ad ratione architecto.</p>
            </div>
        </div>

        {{-- Current Live Auction Properties Begins --}}
            <div class="container col-lg-12">
                <div class="container all-auction-card">
                    @include('front.users.liveAuction.current-bids')
                </div>
                <div class="col-md-12 mt-3 d-flex justify-content-around align-content-center">
                    <span class="pt-2 pb-2"><a type="button"  style="padding: .7vw 4vw" href="{{ route('user.all-auction') }}" class="btn bid-btn" href="">See All</a></span>
                </div>
            </div>
        {{-- Current Live Auction Properties Begins --}}

            {{-- E-properties Statistics Begins --}}
                <div class="container mb-4 mt-5 d-flex justify-content-center">
                    <h3><b>E-properties in Numbers</b></h3>
                </div>
                <div class="container row d-flex justify-content-between">
                    <div class="mb-2 text-center">
                        <h3 style="color: blue"><b>53,074</b></h3>
                        <p><b>Rented Properties</b></p>
                    </div>
                    <div class="mb-2 text-center">
                        <h3 style="color: blue"><b>53,074</b></h3>
                        <p><b>Sold Properties</b></p>
                    </div>
                    <div class="mb-2 text-center">
                        <h3 style="color: red"><b>1,122,533</b></h3>
                        <p style="color: red"><b>Ongoing Auction</b></p>
                    </div>
                    <div class="mb-2 text-center">
                        <h3 style="color: blue"><b>34,879</b></h3>
                        <p><b>Registered Tenants</b></p>
                    </div>
                    <div class="mb-2 text-center">
                        <h3 style="color: blue"><b>674,000</b></h3>
                        <p><b>Registered Landlords</b></p>
                    </div>
                    <div class="mb-2 text-center">
                        <h3 style="color: red"><b>201,905</b></h3>
                        <p style="color: red"><b>Blacklist</b></p>
                    </div>
                </div>
            {{-- E-properties Statistics Ends --}}
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="text-center auct-testimonial-head">
        <div>
            <i class="fa fa-arrow-left fa-2x"></i>
        </div>
        <h2><b style="color: black">What Client Say</b></h2>
        <div>
            <i class="fa fa-arrow-right fa-2x"></i>
        </div>
    </div>

    <div class="container all-auction-card">
        @include('front.users.liveAuction.testimonials')
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

{{-- Upcoming Auction Properties Begins --}}
    <div class="container mt-5 col-lg-12 ">
        <h3 class="container text-black text-center">
            <strong>Up Coming Auctions</strong>
        </h3>
        <p class="container text-black text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut unde quo tempora,
             doloremque quam cumque a amet ad tempore nostrum nihil
             explicabo recusandae voluptate, facilis aliquid voluptates praesentium rerum.
        </p>
        <div class="container all-auction-card">
            {{-- bid-properties --}}
            @include('front.users.liveAuction.upcoming-bids')
        </div>
        <div class="col-md-12 mt-3 d-flex justify-content-around align-content-center">
            <span class="pt-2 pb-2"><a type="button"  style="padding: .7vw 4vw" href="{{ route('user.all-auction') }}" class="btn bid-btn" href="">See All</a></span>
        </div>
    </div>
{{-- Upcoming Auction Properties Begins --}}

{{--Join Groups Begins --}}
    @include('front.hero-sections.groups')
{{-- Join Groups Ends --}}
@endsection