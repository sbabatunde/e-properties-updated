<div class="card mb-3 mt-3 auction-card">
    <div class="auction-image mt-0">
        <img src="{{ asset('../assets/images/houses/house-16.png') }}" alt="">
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
                <span><a type="button" class="btn bid-btn " href="{{ route('user.auction.place-bid', 3) }}">Place a
                        bid</a></span>
            </li>
        </ul>
    </div>
</div>

<div class="card mb-3 mt-3 auction-card">
    <div class="auction-image mt-0">
        <img src="{{ asset('../assets/images/houses/house-14.png') }}" alt="">
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
                <span><a type="button" class="btn bid-btn " href="{{ route('user.auction.place-bid', 3) }}">Place a
                        bid</a></span>
            </li>
        </ul>
    </div>
</div>
<div class="card mb-3 mt-3 auction-card">
    <div class="auction-image mt-0">
        <img src="{{ asset('../assets/images/houses/house-15.png') }}" alt="">
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
                <span><a type="button" class="btn bid-btn " href="{{ route('user.auction.place-bid', 3) }}">Place a
                        bid</a></span>
            </li>
        </ul>
    </div>
</div>
<div class="card mb-3 mt-3 auction-card">
    <div class="auction-image mt-0">
        <img src="{{ asset('../assets/images/houses/house7.png') }}" alt="">
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
                <span>
                    <a type="button" class="btn bid-btn " href="{{ route('user.auction.place-bid', 3) }}">
                        Place a bid
                    </a>
                </span>
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
                <span><a type="button" class="btn bid-btn " href="{{ route('user.auction.place-bid', 3) }}">Place a
                        bid</a></span>
            </li>
        </ul>
    </div>
</div>
@foreach ($upcomingAuctions as $item)
    <div class="card mb-3 mt-3 auction-card">
        <div class="auction-image mt-0">
            <img src="{{ asset($item->property['thumbnail']) }}" alt="">
            <i class="fa fa-user"></i>
            <i class="fa fa-share-alt text-black"></i>
        </div>
        <div class="auct-text">
            <ul class="">
                <li><b>{{ $item->property['title'] }}</b></li>
                <li>{{ $item->property['area'] }}</li>
                <li>Current Bid:
                    <strong>
                        {{ $item->denomination }}
                        {{ number_format($item->starting_price) }}
                    </strong>
                </li>
                <li class="live-auction-base">
                    <span class="mr-5" style="color:red"><b>Starts:</b> {{ number_format($item->start_date) }}
                    </span>
                    <span>
                        <a type="button" class="btn bid-btn "
                            href="{{ route('user.auction.place-bid', $item->property['id']) }}">
                            Place a bid
                        </a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
@endforeach
