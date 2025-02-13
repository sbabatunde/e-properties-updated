@extends('layouts.front.login-site')
@section('content')
    <div class="page-hero bg-image " style="background-image: url(../assets/images/banners/main-auction-banner.png);">
        <div class="hero-section ">
            <div class="container text-center wow zoomIn auction-sub-banner col-md-6" style="position: relative;top:45%">
                <div class="container col-md-8 text-center mt-2">
                    <span class="subhead" style="font-size:1.3rem">INVEST WITH SUCCESS BUY FROM E-PROPERTY.COM</span>
                </div>
                <div class="container col-md-10 text-center mt-4 mb-4">
                    <p style="color: white;font-size:1rem">Exclusive Property Listing From The Nation's Leading Property
                        Management</p>
                </div>
                <div class="container col-md-10 text-center mt-3 mb-3">
                    <input type="text" placeholder="Enter a state or area"
                        class="form-control mt-1 block w-full rounded-md border-gray-300
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
                    <div class="container col-lg-12 w-full">
                        <p>
                            Join our live auctions to bid on exclusive properties in real time! Engage with fellow bidders
                            and seize the opportunity to secure your dream home. Our platform provides all the details you
                            need for a seamless bidding experience!
                        </p>
                    </div>
                </div>

                {{-- Current Live Auction Properties Begins --}}
                <div class="container col-lg-12">
                    <div class="container all-auction-card">
                        @include('front.users.liveAuction.current-bids')
                    </div>
                    <div class="col-md-12 mt-3 d-flex justify-content-around align-content-center">
                        <span class="pt-2 pb-2"><a type="button" style="padding: .7vw 4vw"
                                href="{{ route('user.all-auction') }}" class="btn bid-btn">See All</a></span>
                    </div>
                </div>
                {{-- Current Live Auction Properties Begins --}}

                {{-- E-properties Statistics Begins --}}
                @include('front.hero-sections.stats')
                {{-- E-properties Statistics Ends --}}
            </div>
        </div>
    </div>


    <div class="container mt-1">
        <div class="text-center auct-testimonial-head">
            <div>
                <i class="fa fa-arrow-left fa-2x"></i>
            </div>
            <h2><b style="color: black">What Client Say</b></h2>
            <div>
                <i class="fa fa-arrow-right fa-2x"></i>
            </div>
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

    {{-- Upcoming Auction Properties Begins --}}
    <div class="container mt-5 col-lg-12 ">
        <h3 class="container text-black text-center">
            <strong>Up Coming Auctions</strong>
        </h3>
        <p class="container text-black text-center">
            Get ready for our upcoming auctions, where exciting opportunities await! Browse a curated selection of
            properties and prepare to place your bids in a dynamic and engaging environment. Our platform provides all the
            necessary details, including auction dates, property information, and bidding guidelines. Whether you’re a
            first-time buyer or a seasoned investor, our team is here to support you every step of the way. Stay tuned for
            announcements and be part of our next auction to secure your ideal property!
        </p>
        <div class="container all-auction-card">
            {{-- bid-properties --}}
            @include('front.users.liveAuction.upcoming-bids')
        </div>
        <div class="col-md-12 mt-3 d-flex justify-content-around align-content-center">
            <span class="pt-2 pb-2"><a type="button" style="padding: .7vw 4vw" href="{{ route('user.all-auction') }}"
                    class="btn bid-btn">See All</a></span>
        </div>
    </div>
    {{-- Upcoming Auction Properties Begins --}}

    {{-- Join Groups Begins --}}
    @include('front.hero-sections.groups')
    {{-- Join Groups Ends --}}
@endsection
