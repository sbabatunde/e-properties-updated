@foreach ($upcomingAuctions as $item)
    <div class="card mb-3 mt-3 auction-card">
        <div class="row ml-1">
            <div class="col-4">
                <span><b>Days</b></span><br>
                <span><b>50</b></span>
            </div>
            <div class="col-4">
                <span><b>Hours</b></span><br>
                <span><b>20</b></span>
            </div>
            <div class="col-4">
                <span><b>Minutes</b></span><br>
                <span><b>12</b></span>
            </div>
        </div>
        <div class="live-card-body">
            <div class="auction-image">
                <img src="{{ asset($item->property->thumbnail) }}" alt="">
                <i class="fa fa-user"></i>
                <i class="fa fa-share-alt text-black"></i>
            </div>
            <div class="auct-text">
                <ul class="">
                    <li><b class="truncate">{{ $item->property['title'] }}</b></li>
                    <li>{{ $item->property['area'] }}</li>
                    <li>Current Bid:
                        <strong>
                            {{ $item->denomination }}
                            {{ number_format($item->starting_price) }}
                        </strong>
                    </li>
                    <li class="live-auction-base">
                        <span class="mr-5" style="color:red">
                            <b>Starts:</b> {{ $item->start_date }}
                        </span>
                        <a type="button" class="btn bid-btn"
                            href="{{ route('user.auction.place-bid', $item->property['id']) }}">
                            Place a bid
                        </a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
