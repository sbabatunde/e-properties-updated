@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background:#394293">
        <div class="hero-section row">
            <div class="property-request-banner col-8">
                <span class="request-text mt-5">
                    <p style="color: #fff;font-weight:bolder;font-size:medium;padding-top:30px">
                        {{-- <h3 style="color: #fff">All Property Requests</h3> --}}
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iure id fugit,
                        alias labore repellat totam nam reiciendis odio dicta voluptatem voluptate iusto incidunt quis
                        aperiam amet? Excepturi, accusantium labore?<br><br>

                    </p>
                </span>
                <span class="request-image">
                    <img src="{{ asset('../assets/images/banners/prof-banner.png') }}"
                        style="min-width: 20vw;min-height: 20vw" alt="">
                </span>
            </div>
            <div class="search-form col-8 req-ban-form" style="top: 13%">
                <form action="">
                    <div class="blog-search shadow-md border-gray-500">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">

                        <button class="blacklist-search" style="background:red;font: 300;font-size:18px;cursor: pointer;"><i
                                class="fa fa-search" style="color: white;cursor:"></i>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Page Banner Ends  --}}

    {{-- Material Item Begins --}}
    <div class="proffesionals-body">
        <div class="proffesionals-search mt-4">
            <h3 class="text-left">
                <strong>Property Professionals</strong>
            </h3>
            @include('front.users.property-professionals.checkboxes')
        </div>

        <div class="proffesionals mt-4">
            <div class="material-items">
                @foreach ($propertyProfessionals as $item)
                    <div class="pic">
                        <img src="{{ asset($item->photo) }}"
                            style="min-height: 250px;min-width: 300px;
                        border:1px solid #d6daf3;border-radius:12px 12px 0 0"
                            alt="">
                        <span class="listing-text mat-cost" style="background: #d6daf3">
                            <h5 class="mt-3" style="font-weight:700;width:inherit">
                                {{ $item->firstname }} {{ $item->lastname }}
                            </h5>
                            <p>
                                <span style="font-weight:550">5 Followers</span>
                            </p>
                            <a href="{{ route('property.professional.view', $item->id) }}" style="float: left"
                                class="btn btn-info listing-anchor">Connect</a>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
