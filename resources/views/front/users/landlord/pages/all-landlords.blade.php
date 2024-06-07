@extends('layouts.front.login-site')
@section('content')
{{-- Page Banner Begins --}}
<div class="page-hero bg-image " style="background-image: url(../assets/images/services/banner.png);">
    <div class="hero-section ">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="" id="" style="z-index:50;border: 1px solid rgb(255, 245, 245); border-radius:30px;background-color:rgb(245, 245, 245)"
                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 
                    focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search Landlord">
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Page Banner Ends  --}}

<!-- All the Landlord start -->
    <div class="container mt-5">
        <div class="meet-header ml-0">
            <h3 style="font-weight: 700;color:black">
                Meet The Lanlords
            </h3>
        </div>
    </div>
    <div class="landlord-sub-category">
        {{-- Row 1 Begins--}}
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Sven Botman</h4>
                    <p>5 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">Connect</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Sven Botman</h4>
                    <p>5 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service4.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Mally Cleff</h4>
                    <p>12 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Ugochukwu Sunday</h4>
                    <p>25 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service11.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Hgenl Benjami</h4>
                    <p>14 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
        {{-- Row 1 Ends --}}

        {{-- Row 2 Begins--}}
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Sven Botman</h4>
                    <p>5 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">Connect</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Sven Botman</h4>
                    <p>5 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service4.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Mally Cleff</h4>
                    <p>12 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Ugochukwu Sunday</h4>
                    <p>25 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service11.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Hgenl Benjami</h4>
                    <p>14 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
        {{-- Row 2 Ends --}}

        {{-- Row 3 Begins--}}
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Sven Botman</h4>
                    <p>5 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">Connect</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Sven Botman</h4>
                    <p>5 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service4.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Mally Cleff</h4>
                    <p>12 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service5.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Ugochukwu Sunday</h4>
                    <p>25 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
            <div class="landlord-cat-venue">
                <img src="{{ asset('../assets/images/services/service11.png') }}" alt="">
                <span class="hero-expert-text">
                    <h4 class="mb-0">Hgenl Benjami</h4>
                    <p>14 Properties</p>
                    <a href="" class="btn btn-info mb-3" style="background-color:#394293;font-weight:500;font-size:20px">View</a>
                </span>
            </div>
        {{-- Row 3 Ends --}}

    </div>
<!-- Al the Landlord  end -->





<!-- Connect Property Expert start -->
@include('front.hero-sections.experts')
<!-- Connect Property Expert  end -->

@endsection
