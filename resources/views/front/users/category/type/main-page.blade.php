@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background-image: url({{ asset('assets/images/services/banner.png') }});">
        <div class="hero-section">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search shadow-md border-gray-500">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">

                        <button class="blacklist-search" style="font: 300;font-size:18px;cursor: pointer;"><i
                                class="fa fa-search" style="color: white;cursor:"></i>Search</button>
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
                <div class="btn category-btn-group res-btn-container d-flex justify-content-center">
                    <button onclick="showTypeSales()" class="active-btn-group">
                        <strong>
                            Sales
                        </strong>
                    </button>
                    <button onclick="showTypeRents()" class="active-btn-group">
                        <strong>
                            Rent
                        </strong>
                    </button>
                    <button onclick="showTypeLets()" class="active-btn-group">
                        <strong>
                            Let
                        </strong>
                    </button>
                </div>
            </div>
            @include('front.users.category.type.status.lets')
            @include('front.users.category.type.status.sales')
            @include('front.users.category.type.status.rents')
        </div>
    </div>
    </div>

    {{-- Similar category List --}}
    @include('front.users.category.type.similar')
@endsection
