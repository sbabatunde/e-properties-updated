@extends('layouts.front.login-site')
@section('content')
    <div class="page-hero bg-image " style="background:#394293;height:20vh;width:90%;margin:auto;position: relative">
        <div style="position:absolute;bottom:20px;left:10px;">
            <a href="" class="btn btn-danger mr-5" style="color:#394293;background:#ececee;font-weight:550">
                You have been outbid
            </a>
            <a href="#" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#placeBid"
                style="color:#d5d7e2;outline: 1px solid #d5d7e2">
                Place a new Bid
            </a>
        </div>

    </div>
    <div class="place-bid-box">
        {{-- Property Image And Description Starts --}}
        <div class="bid-header">
            <div class="bid-image">
                <img src="{{ asset('../assets/images/houses/residential/res-1.png') }}" class="main" alt="res-1">
                <div class="bid-sub-image">
                    <img src="{{ asset('../assets/images/houses/residential/res-2.png') }}" alt="res-2">
                    <img src="{{ asset('../assets/images/houses/residential/res-3.png') }}" alt="res-3">
                    <img src="{{ asset('../assets/images/houses/residential/res-4.png') }}" alt="res-4">
                </div>
            </div>
            <div class="bid-description">
                <h3>3 Bedroom Apartments with 4 Baths</h3>
                <div class="bid-duration">
                    <span class="bidtime mr-2">Time left</span>
                    <span style="font-size: large;color:black">5days 2hrs 12mins |</span>
                    <span class="ml-5" style="font-size: large;color:black">Thurs, 11:08am </span>
                    <span class="ml-3" style="font-size: large;color:black">|</span> <br>
                    <div class="mt-4 bidamnt">
                        <span class="cur-bid">
                            <span>Current Bid</span>
                        </span>
                        <span style="font-size: large"># 2,200,200</span>
                        <span style="font-size: 25px"> | </span>
                        <span style="font-size: large">Starting Bid </span>
                        <span style="font-size: large;color:rgb(45, 175, 45)"># 3,000,000</span>
                        <span style="font-size: 25px"> | </span>
                        <span class="ml-3">91 Bids</span>
                    </div>
                </div>
                <div class="auc-bid-desc">
                    <div class="bid-desc">
                        <h3 class="mb-4" style="font-weight: 550;color:black">Description</h3>
                        <p style="color: black">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptates asperiores animi unde quis quasi omnis
                            ratione sit ut sint ad esse perferendis,
                            voluptatem beatae facilis, nihil alias ipsum molestias cupiditate!
                            Voluptates asperiores animi unde quis quasi omnis
                            ratione sit ut sint ad esse perferendis,
                            voluptatem beatae facilis, nihil alias ipsum molestias cupiditate!
                        </p>
                        <div class="bid-anchor">
                            <a href="#" class="btn btn-place-bid" data-bs-toggle="modal"
                                data-bs-target="#placeBid">Place a Bid</a>
                            <a href="" class="btn btn-watchlist"><i class="fa fa-heart"></i> Add to Watchlist</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Property Image And Description Starts --}}

        @include('front.users.liveAuction.bid.table')
        @include('front.users.liveAuction.bid.bid-amount')
    @endsection
