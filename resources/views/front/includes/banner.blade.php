<div class="container home-title">
    <article>
        <h1 class="home-title-main">
            Number 1 stop for your property solution in Nigeria with
            Over <span style="color: red">1,578,987</span> Registered Users
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
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            @foreach ($sliders as $key => $item)
                <li data-target="#carouselExampleIndicators" data-slide-to=""></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('assets/admin/images/sliders/hero-bg.jpg') }}"
                    alt="banner">
            </div>
            {{-- @dd($sliders) --}}

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
                        {{-- <h1>{{ $sliders[$key]->title }}</h1> --}}

                        <div id="typed-strings">
                            <p>Get Exuisite Properties And Delightful Property Deals
                                All Around You At Affordable Prices.</p>
                        </div>
                        <h1 class="typed-text tt2">&nbsp;
                            <span id="typed"></span>
                        </h1>
                        <div class="tab-box">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="pills-home-tab" data-toggle="pill"
                                        href="#pills-home" role="tab" aria-controls="pills-home"
                                        aria-selected="false">Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="search-area search-area-6">
                                        <div class="search-area-inner">
                                            <div class="search-contents">
                                                <form method="GET">
                                                    <div class="row d-flex align-item-center">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <input type="text" name="name"
                                                                    class="search-fields sf2 fc2"
                                                                    placeholder="Enter Keyword">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="type">
                                                                    <option>Property Types</option>
                                                                    <option>Residential</option>
                                                                    <option>Commercial</option>
                                                                    <option>Land</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="location">
                                                                    <option>Location</option>
                                                                    <option>United Kingdom</option>
                                                                    <option>American Samoa</option>
                                                                    <option>Belgium</option>
                                                                    <option>Canada</option>
                                                                    <option>Delaware</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="make">
                                                                    <option>Room</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                            <div class="form-group fg2">
                                                                <button
                                                                    class="search-button btn-md btn-color">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="search-area search-area-6">
                                        <div class="search-area-inner">
                                            <div class="search-contents">
                                                <form method="GET">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <input type="text" name="name"
                                                                    class="search-fields sf2 fc2"
                                                                    placeholder="Enter Keyword">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="type">
                                                                    <option>Property Types</option>
                                                                    <option>Residential</option>
                                                                    <option>Commercial</option>
                                                                    <option>Land</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="location">
                                                                    <option>Location</option>
                                                                    <option>United Kingdom</option>
                                                                    <option>American Samoa</option>
                                                                    <option>Belgium</option>
                                                                    <option>Canada</option>
                                                                    <option>Delaware</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="make">
                                                                    <option>Room</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                            <div class="form-group fg2">
                                                                <button
                                                                    class="search-button btn-md btn-color">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- banner end -->
