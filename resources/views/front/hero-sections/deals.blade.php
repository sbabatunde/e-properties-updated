<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">Deals</h5>
        <a href="{{ route('properties.deals.all') }}" style="text-decoration: none">
            <h5 style="color: red">See more</h5>
        </a>
    </div>

    <div class="hero-listing">
        @foreach ($data['propertyDeals'] as $key => $item)
            {{-- @dd($item) --}}
            <div class="pic">
                <img src="{{ asset($item->thumbnail) }}" alt="">
                <span class="listing-text">
                    <h5 class="mt-3 truncate" style="font-weight:600">{{ $item->title }}</h5>
                    <p>
                        <span style="font-size:15px">{{ $item->area }}</span><br>
                        <span class="old-price" style="text-decoration: line-through; color: grey;">
                            {{ $item->payment->initial_denomination }}
                            {{ number_format($item->payment->initial_pay, 2) }}
                        </span>
                        <br>
                        <span style="font-size:20px;font-weight:bold">{{ $item->deals->denomination }}
                            {{ number_format($item->deals->deal_price, 2) }}</span>
                    </p>
                    <a href="{{ route('property.details', $item->id) }}" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        @endforeach
    </div>
</div>

{{-- <div class="container">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($data['properties'] as $key => $item)
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}">
                        <p> <span><Strong style="color: 394293">e-news</strong>:</span> Stay informed with instant
                            access to breaking news
                            and updates
                            from around the
                            globe, tailored to your interests and preferences.
                            Link: </p>
                        <a href="{{ route('property.details', $item->id) }}" class="btn btn-primary"
                            style="color: #3">visit</a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div> --}}
