@if (!is_null($upcomingAuctions))
    @foreach ($upcomingAuctions as $item)
        @php
            // Assuming you have two dates
            $now = \Carbon\Carbon::parse(\Carbon\Carbon::now());
            $startDate = \Carbon\Carbon::parse($item->start_date . $item->start_time);
            $difference = $startDate->diffInSeconds($now);
            // To get how many days are left from the time difference in seconds
            $days = floor($difference / 86400);
            // To get how many hours are left after days have been substracted
            $hours = floor(($difference % 86400) / 3600);
            //To calculate how many minutes are left
            $minutes = floor(($difference % 3600) / 60);

        @endphp
        <div class="card mb-3 mt-3 auction-card">
            <div class="row">
                <div class="col-4">
                    <span><b>Days</b></span><br>
                    <span><b>{{ $days }}</b></span>
                </div>
                <div class="col-4">
                    <span><b>Hours</b></span><br>
                    <span><b>{{ $hours }}</b></span>
                </div>
                <div class="col-4">
                    <span><b>Minutes</b></span><br>
                    <span><b>{{ $minutes }}</b></span>
                </div>
            </div>
            <div class="live-card-body">
                <div class="auction-image">
                    <img src="{{ asset($item->property->thumbnail) ?? $item->property->thumbnail }}" alt="">
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
@endif
