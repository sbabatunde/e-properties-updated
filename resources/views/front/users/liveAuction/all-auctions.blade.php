@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background:#394293">
        <div class="hero-section row">
            <div class="property-request-banner col-8" style="margin-top: 6%">
                <span class="request-text mt-5">
                    <p style="color: #fff;font-weight:bolder;font-size:medium;padding-top:30px">
                        {{-- <h3 style="color: #fff">All Property Requests</h3> --}}
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iure id fugit,
                        alias labore repellat totam nam reiciendis odio dicta voluptatem voluptate iusto incidunt quis
                        aperiam amet? Excepturi, accusantium labore?<br><br>

                    </p>
                </span>
                <span class="request-image">
                    <img src="{{ asset('../assets/images/banners/all-auction-banner.png') }}"
                        style="min-width: 20vw;min-height: 20vw" alt="">
                </span>
            </div>
            <div class="search-form col-8 req-ban-form" style="top: 9%">
                <form action="">
                    <div class="blog-search shadow-md border-gray-500">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">

                        <button class="blacklist-search" style="background:red;font: 300;font-size:18px;cursor: pointer;"><i
                                class="fa fa-search" style="color: white;cursor:"></i>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- Page Banner Ends  --}}
    <div class="container all-auction-main">
        <div class="all-auction-left">
            <h4 class="ml-4 mt-4 mb-3" style="font-weight: 550;color:#394293;text-align:center">Upcoming Auction</h4>
            <div class="auction-card-left">
                @foreach ($upcomingAuctions->take(6) as $item)
                    <div class="card mb-3 mt-3 auction-card">
                        <div class="auction-image mt-0">
                            <img src="{{ asset($item->property->thumbnail) }}" alt="{{ $item->property->title }}">
                            <i class="fa fa-user"></i>
                            <i class="fa fa-share-alt text-black"></i>
                        </div>
                        <div class="auct-text">
                            <ul class="">
                                <li><b class="truncate">{{ $item->property->title }}</b></li>
                                <li>{{ $item->property->area }}</li>
                                <li>Current Bid:
                                    <strong>
                                        {{ $item->denomination }}
                                        {{ number_format($item->starting_price) }}
                                    </strong>
                                </li>
                                <li class="live-auction-base">
                                    <span class="mr-5" style="color:red"><b>Starts:</b>
                                        {{ $item->start_date }}
                                    </span>
                                    <span>
                                        <a type="button" class="btn bid-btn "
                                            href="{{ route('user.auction.place-bid', $item->property->id) }}">
                                            Place a bid
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="residential-right auct-right">
            <div class="auction-card-right">
                {{-- bid-properties --}}
                @foreach ($liveAuction as $item)
                    <div class="card mb-3 mt-3 auction-card">
                        <div class="auction-image mt-0">
                            <img src="{{ asset($item->property->thumbnail) }}" alt="{{ $item->property->title }}">
                            <i class="fa fa-user"></i>
                            <i class="fa fa-share-alt text-black"></i>
                        </div>
                        <div class="auct-text">
                            <ul class="">
                                <li><b class="truncate">{{ $item->property->title }}</b></li>
                                <li>{{ $item->property->area }}</li>
                                <li>Current Bid:
                                    <strong>
                                        {{ $item->denomination }}
                                        {{ number_format($item->starting_price) }}
                                    </strong>
                                </li>
                                <li class="live-auction-base">
                                    <span class="mr-5" style="color:red"><b>Starts:</b>
                                        {{ $item->start_date }}
                                    </span>
                                    <span>
                                        <a type="button" class="btn bid-btn "
                                            href="{{ route('user.auction.place-bid', $item->property->id) }}">
                                            Place a bid
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
