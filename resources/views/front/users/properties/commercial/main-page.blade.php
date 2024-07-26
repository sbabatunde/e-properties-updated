<style>
    .left-item {
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.5s ease-in-out;
        position: absolute;
        left: 0;
        width: 100%;
    }

    .left-item.active {
        transform: translateX(0);
    }

    .left-item.hidden {
        transform: translateX(100%);
        visibility: hidden;
    }

    .toggle-button {
        position: absolute;
        bottom: 50%;
        rotate: 90deg;
        left: -10%;
        padding: 5px 15px;
        border: 1px solid black;
        font-weight: bold;
        border-radius: 7px 7px 0 0;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out
    }

    .toggle-button:hover {
        cursor: pointer;
    }

    .toggle-button.compare {
        position: absolute;
        bottom: 50%;
        rotate: 90deg;
        width: fit-content;
        left: 94%;
    }
</style>


@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background-image: url(../assets/images/services/banner.png);">
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
        @include('front.users.properties.commercial.compare')
        @include('front.users.properties.commercial.live-auction')
        <div class="residential-right">
            <div class="res-btn-group">
                <div class="btn category-btn-group res-btn-container d-flex justify-content-center">
                    <button onclick="showResSales()" class="req-target active-btn-group">
                        <strong>
                            Sales
                        </strong>
                    </button>
                    <button onclick="showResRents()" class="active-btn-group">
                        <strong>
                            Rent
                        </strong>
                    </button>
                    <button onclick="showResLets()" class="active-btn-group">
                        <strong>
                            Let
                        </strong>
                    </button>
                </div>
            </div>
            @include('front.users.properties.commercial.category.lets')
            @include('front.users.properties.commercial.category.sales')
            @include('front.users.properties.commercial.category.rents')
        </div>
    </div>
    </div>

    {{-- Similar Properties List --}}
    @include('front.users.properties.commercial.similar')
    {{-- @include('front.users.properties.commercial.add-to-compare-script') --}}

    <script>
        const leftItems = document.querySelectorAll('.left-item');
        const toggleButtons = document.querySelectorAll('.toggle-button');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                leftItems.forEach((item, i) => {
                    if (i === index) {
                        item.classList.toggle('active');
                        item.classList.toggle('hidden');
                    } else {
                        if (item.classList.contains('active')) {
                            item.classList.remove('active');
                            item.classList.add('hidden');
                        } else {
                            item.classList.remove('hidden');
                            item.classList.add('active');
                        }
                    }
                });
            });
        });
    </script>
@endsection
