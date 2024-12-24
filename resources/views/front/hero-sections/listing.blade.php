<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">New Listing (For Sale)</h5>
        <a href="{{ route('all.properties.listing') }}" style="text-decoration: none">
            <h5 style="color: red">See more</h5>
        </a>
    </div>

    <div class="hero-listing">
        @foreach ($data['salesProperties'] as $key => $item)
            {{-- @dd($item) --}}
            <div class="pic">
                <img src="{{ asset($item->thumbnail) ?? $item->thumbnail }}" alt="{{ $item->title }}">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit">{{ $item->title }}</h5>
                    <p>
                        <span style="font-size:15px">{{ $item->area }}</span><br>
                        <span style="font-size:20px;font-weight:bold">{{ $item->payment->initial_denomination }}
                            {{ number_format($item->payment->initial_pay) }}</span>
                    </p>
                    <a href="{{ route('property.details', $item->id) }}" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        @endforeach
    </div>
</div>

<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">New Listing (For Rent)</h5>
        <a href="{{ route('all.properties.listing') }}" style="text-decoration: none">
            <h5 style="color: red">See more</h5>
        </a>
    </div>

    <div class="hero-listing">
        @foreach ($data['rentProperties'] as $key => $item)
            {{-- @dd($item) --}}
            <div class="pic">
                <img src="{{ asset($item->thumbnail) ?? $item->thumbnail }}" alt="{{ $item->title }}">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit">{{ $item->title }}</h5>
                    <p>
                        <span style="font-size:15px">{{ $item->area }}</span><br>
                        <span style="font-size:20px;font-weight:bold">{{ $item->payment->initial_denomination }}
                            {{ number_format($item->payment->initial_pay) }}</span>
                    </p>
                    <a href="{{ route('property.details', $item->id) }}" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        @endforeach
    </div>
</div>
