@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background-image: url({{ asset('../assets/images/building/bm-main-') }}2.png);">
        <div class="hero-section">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for materials...">

                        <a class="blacklist-search" style="font: 300;font-size:18px"><i class="fa fa-search"
                                style="color: white;cursor:"></i>Search</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- Page Banner Ends  --}}

    {{-- Search Materials Begins --}}
    <div style="background-color:white;" class="mt-3">
        <div class="page-section py-1 mt-md-n5 custom-index">
            <div class="col-md-12">
                <div class="col-md-12 mt-3 " style="">
                    {{-- <div class="btn service-btn-group btn-mat-group">
                        <button class="all-group-btn active-btn-group toggleButton req-target" data-target="roofing">
                            <strong>
                                Roofing
                            </strong>
                        </button>
                        <button class="all-group-btn active-btn-group toggleButton" data-target="lining">
                            <strong>
                                Dry Lining and Plaster
                            </strong>
                        </button>
                        <button class="all-group-btn active-btn-group toggleButton" data-target="timber">
                            <strong>
                                Timber & Joinery
                            </strong>
                        </button>
                        <button class="all-group-btn active-btn-group toggleButton" data-target="insulation">
                            <strong>
                                Insulation
                            </strong>
                        </button>
                        <button class="all-group-btn active-btn-group toggleButton" data-target="garden">
                            <strong>
                                Garden & Outdoor
                            </strong>
                        </button>
                        <button class="all-group-btn active-btn-group toggleButton" data-target="door">
                            <strong>
                                Door
                            </strong>
                        </button>
                        <button class="all-group-btn active-btn-group toggleButton" data-target="tools">
                            <strong>
                                Tools & Machineries
                            </strong>
                        </button>
                    </div> --}}

                    <div class="btn service-btn-group btn-mat-group">
                        <button class="all-group-btn toggleCategory" data-target="roofing">
                            <strong>Roofing</strong>
                        </button>
                        <button class="all-group-btn toggleCategory" data-target="dry-lining-plaster">
                            <strong>Dry Lining and Plaster</strong>
                        </button>
                        <button class="all-group-btn toggleCategory" data-target="timber-joinery">
                            <strong>Timber & Joinery</strong>
                        </button>
                        <button class="all-group-btn toggleCategory" data-target="insulation">
                            <strong>Insulation</strong>
                        </button>
                        <button class="all-group-btn toggleCategory" data-target="garden-outdoor">
                            <strong>Garden & Outdoor</strong>
                        </button>
                        <button class="all-group-btn toggleCategory" data-target="door">
                            <strong>Door</strong>
                        </button>
                        <button class="all-group-btn toggleCategory" data-target="tools-machineries">
                            <strong>Tools & Machineries</strong>
                        </button>
                    </div>
                </div>
            </div> <!-- .page-section -->
        </div>
        {{-- Search Materials Ends --}}

        {{-- Material Item Begins --}}
        <div class="material-body ">
            <div class="material-search">
                <h1 class="text-left" style="font-size:4.8vmin">Materials</h1>
                <div class="checkbox-input">
                    <form class="form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mat-search">
                            <input type="text" name="" id="" class="form-control mt-1 mat-input"
                                placeholder="Search Tools">
                            <button class="blacklist-search" style="font: 300;font-size:18px">Search</button>
                        </div>
                    </form>
                </div>
                <div class="search-tools">
                    @foreach ($types as $item)
                        <label class="enclosure"><span class="ml-2 align-middle">{{ $item->type }}</span>
                            <input type="radio" name="material" class="search-radio" value="{{ $item->slug }}">
                            {{-- <input type="radio" checked="checked" name="radio"> --}}
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                </div>
            </div>
            @include('front.users.building-material.category')

            <div class="material-list">
                <div class="mat-list-header">
                    <h4 style="color: black;font-weight:700;font-size:4.5vmin">Roofing Materials</h4>
                    <a href="{{ route('user.buiding-materials.index') }}">
                        <h4 style="color: red;font-weight:550;font-size:4.5vmin">See more</h4>
                    </a>
                </div>
                <div class="material-items">
                    {{-- @dd($materials) --}}
                    @foreach ($materials as $item)
                        @foreach ($item->materials as $item)
                            <div class="pic">
                                <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                                <i class="fa fa-heart"></i>
                                <span class="listing-text mat-cost" style="background: #d6daf3">
                                    <h5 class="mt-3" style="font-weight:700;width:inherit">{{ $item->title }}</h5>
                                    <p>
                                        <span>{{ $item->denomination ?? '₦' }} {{ number_format($item->price) }}</span>
                                        <span>{{ $item->quantity }}</span><br>
                                        <span style="font-weight:550">{{ $item->state ?? 'Lagos' }}</span>
                                    </p>
                                    <a href="{{ route('user.materials.get', $item->id) }}"
                                        class="btn btn-info listing-anchor">View</a>
                                </span>
                            </div>
                        @endforeach
                        {{-- @if (count($item->materials) > 8)
                            <div class="pagination mt-5 ml-2">
                                {{ $item->materials->links('vendor.pagination.custom') }}
                            </div>
                        @endif --}}
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Material Item Ends --}}

        <div class="">
            <div class="hero-scam material-store">
                <h5>
                    See Stores
                </h5>
                <p>
                    Buy your building materials from stores around you.
                </p>
                <a href="{{ route('all.scam.report') }}" class="btn btn-hero-post"
                    style="margin-top: 5px; padding:10px 25px">See Stores</a>
            </div>
        </div>

        {{-- New Arrival Material Item Begins --}}
        <div class="new-material-list">
            <div class="new-mat-list-header">
                <h4 style="color: black;font-weight:700;font-size:29px">New arrivals</h4>
                <h4>
                    <a href="{{ route('user.buiding-materials.index') }}"
                        style="text-decoration: none;color: red;font-weight:550;font-size:18px">See more</a>
                </h4>
            </div>
            <div class="new-material-items">
                @foreach ($latest as $item)
                    <div class="pic">
                        <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                        <i class="fa fa-heart"></i>
                        <span class="listing-text mat-cost" style="background: #d6daf3">
                            <h5 class="mt-3" style="font-weight:700;width:inherit">{{ $item->title }}</h5>
                            <p>
                                <span>{{ $item->denomination ?? '₦' }} {{ number_format($item->price) }}</span>
                                <span>{{ $item->quantity }}</span><br>
                                <span style="font-weight:550">{{ $item->state ?? 'Lagos' }}</span>
                            </p>
                            <a href="{{ route('user.materials.get', $item->id) }}"
                                class="btn btn-info listing-anchor">View</a>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- New Arrival  Material Item Ends --}}

        {{-- Connect With Property Experts Begins --}}
        @include('front.hero-sections.experts')
        {{-- Connect With Property Experts Ends --}}


        {{-- For Verified Icon --}}

        {{-- For checkbox-search by type  Icon --}}
        @include('front.users.building-material.search-checkbox')
        {{-- For checkbox-search by type Icon --}}
    </div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all toggle buttons
        const buttons = document.querySelectorAll('.toggleButton');

        // Add event listener to each button
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the target group (category) from the data attribute
                const target = button.getAttribute('data-target');

                // Hide all material divs
                const allMaterialDivs = document.querySelectorAll('.material-group');
                allMaterialDivs.forEach(function(div) {
                    div.style.display = 'none'; // Hide all divs
                });

                // Show the selected material group div
                const targetDiv = document.querySelector(
                    `.material-group[data-group="${target}"]`);
                if (targetDiv) {
                    targetDiv.style.display = 'block'; // Show the targeted div
                }
            });
        });

        // Initially show the first group (optional, if needed)
        const firstGroupDiv = document.querySelector('.material-group');
        if (firstGroupDiv) {
            firstGroupDiv.style.display = 'block';
        }
    });
</script>
