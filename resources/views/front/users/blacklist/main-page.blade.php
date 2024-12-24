@extends('layouts.front.login-site')
@section('content')
    <style>
        .rating {
            display: flex;
            font-size: 2rem;
            /* Adjust size as needed */
        }

        .star {
            color: gray;
            /* Default color for empty stars */
            margin: 0 0px;
        }

        .star.filled {
            color: gold;
            /* Color for filled stars */
        }
    </style>

    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image ">
        <div class="hero-section " style="background-image: url(../assets/images/blacklist/blacklist-main.png);">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">

                        <a class="blacklist-search" style="font: 300;font-size:18px"><i class="fa fa-search"
                                style="color: white;cursor:"></i>Search</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- Page Banner Ends  --}}

    <!-- All Blacklisted -->
    {{-- All Blacklisted Landlord Cards Begins --}}
    @if (!$blacklisted['Landlords']->isEmpty())
        <div class="container blacklisted-landlords">
            <h3 class="mt-5" style=""><b>Blacklisted Landlords</b></h3>
            <div class="row mt-5">
                @foreach ($blacklisted['Landlords'] as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                        <div class="blacklist-card">
                            <div class="image">
                                <img src="{{ $item->reported->photo ?? '../assets/images/blacklist/blacklist-6.png' }}"
                                    alt="{{ $item->business_name }}" style="width:100%;" height="150" width="100">
                            </div>
                            <div class="blacklist-card-sub">
                                <div class="card-text blacklist-text mb-0 mt-2">
                                    <h6>{{ $item->axis }},{{ $item->state }}</h6>
                                    <h4>{{ $item->business_name }}</h4>
                                    <h6>{{ $item->org_description }}</h6>
                                    <span class="blacklist-review-dot">B</span>{{ $item->reported->firstname }}
                                    {{ $item->reported->lastname }}<br>
                                    <div class="row d-flex justify-content-between mt-2">
                                        {{-- @for ($i = 1; $i <= 5; $i++)
                                            <span class="star {{ $i <= $item->rating ? 'filled' : '' }}">
                                                ★
                                            </span>
                                        @endfor --}}
                                        <span class="blacklist-rating ml-3">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $item->rating ? 'filled' : '' }}"></i>
                                            @endfor
                                        </span>
                                        <span>{{ \Carbon\Carbon::parse($item->reported_on)->format('d/m/Y') }}</span>
                                    </div>
                                    <p>
                                        {{ $item->reason }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- All Blacklisted Landlord Cards Ends --}}

    {{-- All Blacklisted Tenants Cards Begins --}}
    @if (!$blacklisted['Tenants']->isEmpty())
        <div class="container blacklisted-landlords">
            <h3 class="mt-5" style=""><b>Blacklisted Tenants</b></h3>
            <div class="row mt-5">
                @foreach ($blacklisted['Tenants'] as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                        <div class="blacklist-card">
                            <div class="image">
                                <img src="{{ $item->reported->photo ?? '../assets/images/blacklist/blacklist-7.png' }}"
                                    alt="{{ $item->business_name }}" style="width:100%;" height="150" width="100">
                            </div>
                            <div class="blacklist-card-sub">
                                <div class="card-text blacklist-text mb-0 mt-2">
                                    <h6>{{ $item->axis }},{{ $item->state }}</h6>
                                    <h3>{{ $item->firstname }} {{ $item->lastname }}</h3>
                                    <h6>{{ $item->org_description }}</h6>
                                    <span class="blacklist-review-dot">B</span>{{ $item->reported->firstname }}
                                    {{ $item->reported->lastname }}<br>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <span class="blacklist-rating ml-3">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $item->rating ? 'filled' : '' }}"></i>
                                            @endfor
                                        </span>
                                        <span>{{ \Carbon\Carbon::parse($item->reported_on)->format('d/m/Y') }}</span>
                                    </div>
                                    <p>
                                        {{ $item->reason }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- All Blacklisted Tenants Cards Ends --}}

    {{-- All Blacklisted Properties Cards Begins --}}
    @if (!$blacklisted['Properties']->isEmpty())
        <div class="container blacklisted-landlords">
            <h3 class="mt-5" style=""><b>Blacklisted Properties</b></h3>
            <div class="row mt-5">
                @foreach ($blacklisted['Properties'] as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                        <div class="blacklist-card">
                            <div class="image">
                                <img src="{{ asset($item->reportedProperty->thumbnail) ?? $item->reportedProperty->thumbnail }}"
                                    alt="{{ $item->reportedProperty->title }}" style="width:100%;" height="150"
                                    width="100">
                            </div>
                            <div class="blacklist-card-sub">
                                <div class="card-text blacklist-text mb-0 mt-2">
                                    <h6>{{ $item->reportedProperty->localty }},{{ $item->reportedProperty->area }}</h6>
                                    <h3>{{ $item->reportedProperty->agent->firstname }}
                                        {{ $item->reportedProperty->agent->lastname }}</h3>
                                    <h6>{{ $item->org_description }}</h6>
                                    <span
                                        class="blacklist-review-dot">B</span>{{ $item->reportedProperty->agent->firstname }}
                                    {{ $item->reportedProperty->agent->lastname }}<br>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <span class="blacklist-rating ml-3">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $item->rating ? 'filled' : '' }}"></i>
                                            @endfor
                                        </span>
                                        <span>{{ \Carbon\Carbon::parse($item->reported_on)->format('d/m/Y') }}</span>
                                    </div>
                                    <p>
                                        {{ $item->reason }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- All Blacklisted Properties Cards Ends --}}

    {{-- All Blacklisted Agents Cards Begins --}}
    @if (!$blacklisted['Agents']->isEmpty())
        <div class="container blacklisted-landlords">
            <h3 class="mt-5" style=""><b>Blacklisted Agents</b></h3>
            <div class="row mt-5">
                @foreach ($blacklisted['Tenants'] as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                        <div class="blacklist-card">
                            <div class="image">
                                <img src="{{ $item->reported->photo ?? $item->reported->photo }}"
                                    alt="{{ $item->business_name }}" style="width:100%;" height="150" width="100">
                            </div>
                            <div class="blacklist-card-sub">
                                <div class="card-text blacklist-text mb-0 mt-2">
                                    <h6>{{ $item->axis }},{{ $item->state }}</h6>
                                    <h3>{{ $item->firstname }} {{ $item->lastname }}</h3>
                                    <h6>{{ $item->org_description }}</h6>
                                    <span class="blacklist-review-dot">B</span>{{ $item->reported->firstname }}
                                    {{ $item->reported->lastname }}<br>
                                    <div class="row d-flex justify-content-between mt-2">
                                        <span class="blacklist-rating ml-3">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $item->rating ? 'filled' : '' }}"></i>
                                            @endfor
                                        </span>
                                        <span>{{ \Carbon\Carbon::parse($item->reported_on)->format('d/m/Y') }}</span>
                                    </div>
                                    <p>
                                        {{ $item->reason }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    {{-- All Blacklisted Agents Cards Ends --}}
    <!-- All Blacklisted -->

    @include('front.users.newsletter.page')
@endsection
