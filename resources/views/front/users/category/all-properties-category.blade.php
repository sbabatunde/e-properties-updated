@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background:#5856cf">
        <div class="hero-section" style="display: flex;flex-direction:column;width:90vw;margin:auto">
            @include('front.hero-sections.search-form')
        </div>
    </div>
    {{-- Page Banner Ends  --}}
    <div class="container mt-5">
        <div class="btn category-btn-group btn-container d-flex justify-content-center">
            <button onclick="salesCat()">
                <strong>
                    Sales
                </strong>
            </button>
            <button onclick="rentCat()">
                <strong>
                    Rent
                </strong>
            </button>
            <button onclick="letCat()">
                <strong>
                    Let
                </strong>
            </button>
        </div>
    </div>
    <!-- All Category -->
    <div class="container mt-2">
        <div class="row col-12 d-flex justify-content-between">
            <div class="meet-header">
                <h5 style="font-weight: 700;font-size:x-large">
                    Categories
                </h5>
            </div>
        </div>
    </div>@dd($respropertyCategories)
    {{-- Houses Pictures --}}
    <div class="container">
        <div class="category-card-container mt-3">
            @foreach ($respropertyCategories as $item)
                <a href="{{ route('property.by.type', $item->property_type_slug) }}">
                    <div class="category-card category">
                        <div class="image">
                            <img src="{{ asset($item->image_path) }}" alt="{{ asset($item->property_type) }}"
                                style="width:100%;" height="150" width="100">
                            <div class="category-card-sub ">
                                <div class="card-text mb-0">
                                    <h5>{{ $item->property_type }}</h5>
                                    <p>Available: <b>{{ count($item->property) }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{-- End of houses pictures --}}
    <!-- All Category -->
@endsection
