@extends('layouts.front.login-site')
@section('content')
    {{-- calculate the difference in end date --}}
    @php

        $endDate = Carbon\Carbon::parse($bidProperty->end_date . '' . $bidProperty->end_time);
        $startDate = Carbon\Carbon::parse($bidProperty->start_date . '' . $bidProperty->start_time);
        $now = Carbon\Carbon::now();
        $live = $endDate->diffForHumans($now);
        $upcoming = $startDate->diffForHumans($now);
    @endphp
    {{-- @dd($upcoming) --}}
    {{-- calculate the difference in end date --}}

    <div class="page-hero bg-image " style="background:#394293;height:20vh;width:90%;margin:auto;position: relative">
        <div style="position:absolute;bottom:20px;left:10px;">
            @if ($outBid == 'Yes')
                <a href="#" class="btn btn-danger mr-5" style="color:#394293;background:#ececee;font-weight:550">
                    You have been outbid
                </a>
                <a href="#" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#placeBid"
                    style="color:#d5d7e2;outline: 1px solid #d5d7e2">
                    Place a new Bid
                </a>
            @endif
        </div>

    </div>
    <div class="place-bid-box">
        {{-- Property Image And Description Starts --}}
        <div class="bid-header">
            <div class="bid-image">
                <img src="{{ asset($bidProperty->property->thumbnail) }}" class="main" alt="res-1">
                <div class="bid-sub-image">
                    @foreach ($bidProperty->amenities->take(3) as $key => $item)
                        <img src="{{ asset($item->amenities) }}" alt="res-{{ $key }}">
                    @endforeach
                </div>
            </div>
            <div class="bid-description">
                <h3>{{ $bidProperty->property->title }}</h3>
                <div class="bid-duration">
                    <span class="bidtime mr-2">Time left</span>
                    @if ($startDate > $now)
                        <span style="font-size: large;color:black">{{ $upcoming }} | </span>
                        <span class="ml-5" style="font-size: large;color:black">
                            {{ $startDate->format('D, g:ia') }}
                        </span>
                    @else
                        <span style="font-size: large;color:black">{{ $live }} |</span>
                        <span class="ml-5" style="font-dsize: large;color:black">
                            {{ $endDate->format('D, g:ia') }}
                        </span>
                    @endif
                    <span class="ml-3" style="font-size: large;color:black">|</span> <br>
                    <div class="mt-4 bidamnt">
                        <span class="cur-bid">
                            <span>Current Bid</span>
                        </span>
                        <span style="font-size: large">{{ $bidProperty->denomination }}
                            {{ number_format($bidProperty->starting_price) }}</span>
                        <span style="font-size: 25px"> | </span>
                        <span style="font-size: large">Starting Bid </span>
                        <span style="font-size: large;color:rgb(45, 175, 45)">
                            {{ $bidProperty->denomination }} {{ number_format($bidProperty->starting_price) }}
                        </span>
                        <span style="font-size: 25px"> | </span>
                        <span class="ml-3">{{ count($bidProperty->auctionBid) }} Bids</span>
                    </div>
                </div>
                <div class="auc-bid-desc">
                    <div class="bid-desc">
                        <h3 class="mb-4" style="font-weight: 550;color:black">Description</h3>
                        <p style="color: black">
                            {{ $bidProperty->property->description }}
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
