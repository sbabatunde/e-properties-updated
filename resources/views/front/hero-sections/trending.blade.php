<div class="trend-container mb-5">
    <h1 class="mt-5 pt-3 text-black" style="font-weight: bold">Trending</h1>
    <div class="trend-card">
        <div class="swiper-container testimonial-slider-rtl" dir="rtl">
            <div class="swiper-wrapper">
                @foreach ($data['trending'] as $item)
                    <div class="swiper-slide hero-trending">
                        <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}">
                        <div class="hero-trend-text">
                            <h3 class="text-white">
                                {{ number_format($item->payment->initial_pay) }}
                                {{ $item->payment->initial_denomination }}
                            </h3>
                            <h5 class="text-white">{{ $item->title }}</h5>
                            <p class="mt-2">
                                <span class="text-white">{{ $item->area }}</span> <br>
                                <i class="fa fa-star" style="color: #fff"></i>
                                <i class="fa fa-star" style="color: #fff"></i>
                                <i class="fa fa-star" style="color: #fff"></i>
                                <i class="fa fa-star" style="color: #fff"></i>
                                <i class="fa fa-star" style="color:none"></i>
                            </p>
                            <a href="{{ route('property.details', $item->id) }}" class="btn btn-info mb-3"
                                style="background-color: #394293;border-radius:5px;padding:10px 35px">
                                {{ $item->status }}
                            </a>
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
    </div>
</div>
