<div class="container home-title">
    <article>
        <h1 class="home-title-main">
            Number 1 stop for your property solution in Nigeria with
            Over <span style="color: red">{{ count($data['users']) }}</span> Registered Users
        </h1>
        <p class="home-title-sub mt-1">
            Search deals on;Property Building Materials, Auction, Rents, Sales,Development, Maintenance, Valuation
            services and others...
        </p>
    </article>
</div>



<!-- Banner start -->
<div class="banner pt-3" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active hidden"></li>
            @foreach ($sliders as $key => $item)
                <li data-target="#carouselExampleIndicators" class="hidden" data-slide-to=""></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('assets/admin/images/sliders/hero-bg.jpg') }}"
                    alt="banner">
            </div>
            @foreach ($sliders as $key => $item)
                <div class="slider_wrapper carousel-item item-bg">
                    <img class="d-block w-100 h-100" src="{{ asset($item['photo']) }}"
                        alt="banner{{ $sliders[$key]->photo }}">
                </div>
            @endforeach
            <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                <div class="carousel-content container b1-inner">
                    <div class="tab-search-section">
                        <h1>Locate Your Treasured Properties Through E-Properties</h1>
                        <div id="typed-strings">
                            <p>Get Exuisite Properties And Delightful Property Deals
                                All Around You At Affordable Prices.</p>
                        </div>
                        <h1 class="typed-text tt2">&nbsp;
                            <span id="typed"></span>
                        </h1>
                        @include('front.hero-sections.search-form')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- banner end -->
