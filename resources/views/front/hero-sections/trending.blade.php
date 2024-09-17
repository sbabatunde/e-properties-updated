<div class="trend-container mb-5">
    <h1 class="mt-5 pt-3 text-black" style="font-weight: bold">Trending</h1>
    <div class="trend-card">
        <div class="swiper-container testimonial-slider-rtl" dir="rtl">
            <div class="swiper-wrapper">
                @foreach ($data['trending'] as $item)
                    <div class="swiper-slide hero-trending">
                        <div class="hero-trending-image">
                            <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}">
                            <div class="hero-trend-content mt-0">
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
                                        style="background-color: #394293; border-radius: 5px; padding: 10px 35px;">
                                        {{ $item->status }}
                                    </a>
                                </div>
                            </div>
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


<style>
    /* styles.css */
    .trend-container {
        padding: 10px;
    }

    .hero-trending {
        position: relative;
        overflow: hidden;
        /* Ensuring each slide has a fixed height to make sure the content fits */
        height: 400px;
        /* Adjust this value based on your design requirements */
    }

    .hero-trending-image {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .hero-trending-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures images cover the container without distortion */
    }

    .hero-trend-content {
        position: absolute;
        top: 0;
        /* Start from the top */
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        /* Semi-transparent overlay */
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        /* Align content to the top */
        align-items: center;
        /* Center content horizontally */
        padding: 10px;
        /* Add padding for spacing inside the overlay */
        box-sizing: border-box;
    }

    .hero-trend-text {
        position: relative;
        z-index: 1;
        /* Ensure text and button are above the overlay */
        text-align: center;
        height: 100%;
    }

    .hero-trend-text h3,
    .hero-trend-text h5,
    .hero-trend-text p {
        margin: 0;
        padding: 5px 0;
    }

    .hero-trend-text .btn {
        background-color: #394293;
        /* Button color */
        border-radius: 5px;
        padding: 12px 36px;
        /* Adjust padding for larger button */
        color: #fff;
        /* Text color for the button */
        text-decoration: none;
        /* Remove underline */
        display: inline-block;
        margin-top: 15px;
        /* Spacing above the button */
    }

    /* Swiper styles */
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        /* Adjust flex basis for slide width, making each slide larger */
        flex: 0 0 100%;
        /* Each slide takes the full width of the container */
    }

    /* Responsive slides */
    @media (min-width: 600px) {
        .swiper-slide {
            flex: 0 0 50%;
            /* Two slides visible on larger screens */
        }
    }

    @media (min-width: 900px) {
        .swiper-slide {
            flex: 0 0 33.33%;
            /* Three slides visible on even larger screens */
        }
    }

    @media (min-width: 1200px) {
        .swiper-slide {
            flex: 0 0 25%;
            /* Four slides visible on extra large screens */
        }
    }
</style>
