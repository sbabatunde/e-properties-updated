@extends('layouts.front.login-site')
@section('content')
    <style>
        /* Page Hero Styles */
        .page-hero {
            width: 100%;
        }

        /* Hero Section Styles */
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #394293;
            /* Dark blue background */
        }

        /* Hero Auction Banner Styles */
        .hero-auction-banner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            /* Maximum width of the banner */
            padding: 20px;
            color: #FFFFFF;
            /* White text color */
            box-sizing: border-box;
            /* Include padding in width calculation */
        }

        /* Text Area Styles */
        .hero-auction-banner p {
            flex: 3;
            /* Text area takes 60% of the width */
            max-width: 60%;
            font-size: 1rem;
            /* Adjust font size as needed */
            line-height: 1.5;
            /* Improve readability */
            margin-right: 20px;
            /* Space between text and image */
        }

        /* Image Area Styles */
        .hero-auction-banner img {
            flex: 2;
            /* Image area takes 40% of the width */
            max-width: 40%;
            width: 100%;
            /* Make the image responsive */
            height: auto;
            /* Maintain aspect ratio */
        }
    </style>
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image ">
        <div class="hero-section " style="background:#394293;">
            <div class="hero-auction-banner">
                <p style="color: #FFFFFF">Join us for an exclusive property auction event! Discover a range of premium
                    properties
                    available for bidding. Don't miss your chance to secure your dream home or investment property.
                    Register now to participate and get all the latest updates.
                </p>
                <img src="{{ asset('./assets/images/banners/all-auction-banner.png') }}" alt="Auction Banner">
            </div>
            {{-- <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">

                        <a class="blacklist-search" style="font: 300;font-size:18px"><i class="fa fa-search"
                                style="color: white;cursor:"></i>Search</a>
                    </div>
                </form>
            </div> --}}
        </div>
    </div>


    {{-- Page Banner Ends  --}}
    <div class="container all-auction-main">
        @if (count($upcomingAuctions) > 0)
            <div class="all-auction-left">
                <h4 class="ml-4 mt-4 mb-3" style="font-weight: 550;color:#394293;text-align:center">Upcoming Auction</h4>
                <div class="auction-card-left">
                    @foreach ($upcomingAuctions->take(6) as $item)
                        <div class="card mb-3 mt-3 auction-card">
                            <div class="auction-image mt-0">
                                <img src="{{ asset($item->property->thumbnail) ?? $$item->property->thumbnail }}"
                                    alt="{{ $item->property->title }}">
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
        @else
        @endif
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
                                <li><b>{{ $item->property->title }}</b></li>
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
            <div class="pagination mt-5 ml-2">
                {{ $liveAuction->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endsection
