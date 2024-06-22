@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image " style="background-image: url(../assets/images/services/banner.png);">
        <div class="hero-section ">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="" id=""
                        style="z-index:50;border: 1px solid rgb(255, 245, 245); border-radius:30px;background-color:rgb(245, 245, 245)"
                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-300 
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="Location">
                </form>
            </div>
        </div>
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
                    Category
                </h5>
            </div>
        </div>
    </div>
    {{-- Houses Pictures --}}
    <div class="container">
        <div class="category-card-container mt-3">
            @foreach ($respropertyCategories as $item)
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
            @endforeach
        </div>
    </div>
    {{-- End of houses pictures --}}
    <!-- All Category -->
@endsection
