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
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house1.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5" style="color:red"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house1.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5" style="color:red"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house1.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5" style="color:red"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house8.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5" style="color:red"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="residential-right auct-right">
            <div class="auction-card-right">
                {{-- bid-properties --}}
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house2.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house2.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house2.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house2.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house2.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 mt-3 auction-card">
                    <div class="auction-image mt-0">
                        <img src="{{ asset('../assets/images/houses/house2.png') }}" alt="">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-share-alt text-black"></i>
                    </div>
                    <div class="auct-text">
                        <ul class="">
                            <li><b>4 Bedroom Terrace with Bq at Ajah</b></li>
                            <li>Lagos,Nigeria</li>
                            <li>Current Bid: <strong># 930,000</strong> </li>
                            <li class="live-auction-base">
                                <span class="mr-5"><b>Starts:</b> 20-06-2024 </span>
                                <span><a type="button" class="btn bid-btn "
                                        href="{{ route('user.auction.place-bid', 3) }}">Place a bid</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
