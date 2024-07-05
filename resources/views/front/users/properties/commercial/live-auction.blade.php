    <div class="residential-left auction left-item active">
        <h4 class="ml-4 mt-4 mb-3" style="font-weight: 550;color:#394293;text-align:center">Live Auction</h4>
        <div class="all-auction-card" style="display: block">
            @foreach ($liveAuction->take(4) as $item)
                {{-- @dd($item) --}}
                {{-- Brekadown date difference into Days,Hours and Minutes --}}
                @php
                    // Assuming you have two dates
                    $date1 = \Carbon\Carbon::parse(\Carbon\Carbon::now());
                    $date2 = \Carbon\Carbon::parse($item->end_date . $item->end_time);
                    $difference = $date2->diffInSeconds($date1);

                    // To get how many days are left from the time difference in seconds
                    $days = floor($difference / 86400);
                    // To get how many hours are left after days have been substracted
                    $hours = floor(($difference % 86400) / 3600);
                    //To calculate how many minutes are left
                    $minutes = floor(($difference % 3600) / 60);
                @endphp
                <div class="commercial-auction-card  mb-3">
                    <div class="d-flex justify-content-between">
                        <span>
                            <b>Days</b>
                        </span>
                        <span>
                            <b>Hours</b>
                        </span>
                        <span>
                            <b>Minutes</b>
                        </span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="ml-2">
                            {{ $days }}
                        </span>
                        <span class="mr-3">
                            {{ $hours }}
                        </span>
                        <span class="mr-3">
                            {{ $minutes }}
                        </span>
                    </div>
                    <p class="mt-3">
                        <span style="font-size: 16px;color:black"> <b>{{ $item->property['title'] }}</b></span><br>
                        <span style="color: black">{{ $item->property['area'] }}</span><br>
                        <span style="color: black">Starting Bid:
                            <b style="font-size: 20px">
                                {{ $item->denomination }}
                                {{ number_format($item->starting_price) }}
                            </b>
                        </span>
                    </p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="com-auct-live-btn"></span>
                            <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                        </div>
                        <a
                            href="{{ route('property.details', $item->property['id']) }}"class="btn res-prop-view">View</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div style="display:flex;justify-content:center">
            <a href="{{ route('user.all-auction') }}" class="btn"
                style="padding:3% 10%;border:1px solid #394293;border-radius:10px;
                color:#394293;font-weight:bold">See
                All</a>
        </div>
        <button class="toggle-button">Compare</button>
    </div>
