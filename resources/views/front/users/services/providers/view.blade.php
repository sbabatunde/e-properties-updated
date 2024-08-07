@extends('layouts.front.login-site')
@section('content')
    <div class="container mb-4  provider-connect">
        <div class="provider-image">
            <img src="{{ asset('/assets/images/provider/landlord.png') }}" alt="">
            <span class="provider-btn">
                <a href="" class="provider-connect-link">Connect</a>
                <a href="" class="provider-message-link">Send a Message</a>
                <a href="" class="provider-share-link"> <i class="fa fa-share-alt text-black"></i>Share</a>
            </span>
        </div>
        <div class="provider-description">
            <h3>James Crispin</h3>
            <h5>Plumber</h5>
            <div>
                <span class=" text-black mr-5">
                    <i class="fa fa-map-marker mr-2"></i>Lagos, Nigeria
                </span>
                <i class="fa fa-user ml-3 mr-2"></i>michaelhomes.com
            </div>
            <span class="">
                <i class="fa fa-envelope mr-2"> </i>Michaeltimothy@essential.com <br>
                <i class="fa fa-phone mr-2"> </i>08123456789, 0178475297
            </span>
            <span class="mt-2"><strong style="border:1px solid black">Experience</strong> Over 12 years</span>
            <div class="provider-bio mt-4">
                <h3>Bio</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Illum blanditiis distinctio
                    architecto cum cupiditate amet ratione
                    excepturi provident tempore molestiae.
                    Qui omnis fuga, accusamus voluptatem optio
                    doloribus necessitatibus quidem. Saepe.
                </p>
            </div>
        </div>
    </div>

    <div class="container mb-4 provider-services-display">
        <img src="{{ asset('/assets/images/provider/plumber-1.png') }}" class="img-1" alt="">
        <div class="two-images">
            <img src="{{ asset('/assets/images/provider/mechanic-1.png') }}" alt="">
            <img src="{{ asset('/assets/images/provider/mechanic-2.png') }}" alt="">
        </div>
        <img src="{{ asset('/assets/images/provider/plumber-2.png') }}" class="img-2" alt="">
        <img src="{{ asset('/assets/images/provider/plumber-3.png') }}" alt="" class="img-3">
    </div>

    <div class="container mb-5">
        <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600"> Reviews </h5>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
        </div>
        <span class="agent-message ml-5"><a href="">Post a comment</a></span>
    </div>

    <div class="container mb-5 provider-open">
        <div class="open-days mt-0">
            <h3 style="width:100%">Opening Hours</h3>
            <span class="day-time">
                <h5>Monday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Tuesday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Wednesday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Thursday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Monday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Friday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Saturday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
        </div>
        <div class="provider-map">
            <img src="{{ asset('/assets/images/provider/map.png') }}" alt="">
        </div>
    </div>

    <div class="container other-providers-header">
        <div class="other-providers-more">
            <h3>Other Service Providers</h3>
            <a href="" style="text-decoration: none">
                <h5 style="color: red;font-weight:700">See more</h5>
            </a>
        </div>
        <div class="other-providers">
            <div class="other-provider-sub">
                <img src="{{ asset('/assets/images/services/service1.png') }}" alt="">
                <span>
                    <h4><b>AC Repairs</b></h4>
                    <p>Available: <b>4</b></p>
                </span>
            </div>
            <div class="other-provider-sub">
                <img src="{{ asset('/assets/images/services/service2.png') }}" alt="">
                <span class="mt-2 mb-3">
                    <h4><b>Welders</b></h4>
                    <p>Available: <b>9</b></p>
                </span>
            </div>
            <div class="other-provider-sub">
                <img src="{{ asset('/assets/images/services/service3.png') }}" alt="">
                <span>
                    <h4><b>Cleaners</b></h4>
                    <p>Available: <b>2</b></p>
                </span>
            </div>
            <div class="other-provider-sub">
                <img src="{{ asset('/assets/images/services/service4.png') }}" alt="">
                <span>
                    <h4><b>Aluminium Repairs</b></h4>
                    <p>Available: <b>2</b></p>
                </span>
            </div>
        </div>
    </div>
@endsection
