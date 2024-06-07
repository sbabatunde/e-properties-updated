@extends('layouts.front.login-site')
@section('content')

{{-- Page Banner Begins --}}
<div class="page-hero bg-image" style="background-image: url(../assets/images/services/banner.png);">
    <div class="hero-section">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search shadow-md border-gray-500">
                        <input type="text" name="" id="" 
                        class="form-control mt-1 blog-input" placeholder="Search for Blogs and news">
                        
                        <button class="blacklist-search"  style="font: 300;font-size:18px;cursor: pointer;"><i class="fa fa-search" style="color: white;cursor:"></i>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Page Banner Ends  --}}

{{-- Residential Properties List --}}
<div class="residential-main">
   @include('front.users.properties.residential.compare')
    <div class="residential-right">
        <div class="res-btn-group">
            <div class="btn category-btn-group res-btn-container d-flex justify-content-center" >
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
            @include('front.users.properties.residential.category.lets')
            @include('front.users.properties.residential.category.sales')
            @include('front.users.properties.residential.category.rents')
        </div>
    </div>
</div>

{{-- Similar Properties List --}}
@include('front.users.properties.residential.similar')

@endsection