@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background-image: url('{{ asset('assets/images/services/banner.png') }}');">
        <div class="hero-section ">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="" id=""
                        style="z-index:50;border: 1px solid rgb(255, 245, 245); border-radius:30px;background-color:rgb(245, 245, 245)"
                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 
                focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="Search Service Provider">
                </form>
            </div>
        </div>
    </div>
    {{-- Page Banner Ends  --}}

    <!-- All the Agents start -->
    <div class="container mt-5">
        <div class="meet-header ml-0">
            <h3 style="font-weight: 700;color:black">
                All {{ $title }}
            </h3>
        </div>
    </div>
    <div class="landlord-sub-category">
        {{-- Row 1 Begins --}}
        @foreach ($providers as $item)
            @foreach ($item->providers as $item)
                <div class="landlord-cat-venue">
                    <img class=""
                        src="{{ !empty($item->photo) ? url(asset($item->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                        alt="{{ $item->business_name }}">
                    <span class="hero-expert-text">
                        <h4 class="mb-0">{{ $item->firstname ?? '' }} {{ $item->lastname ?? '' }}</h4>
                        <p>
                            {{ $item->followers_count }}
                            {{-- {{ count($agent->property) > 1 ? count($agent->property) . ' Properties' : count($agent->property) . ' Property' }} --}}
                        </p>
                        <a href="{{ route('service.provider.view', $item->id) }}" class="btn btn-info mb-3"
                            style="background-color:#394293;font-weight:500;font-size:20px;cursor: pointer;">Connect</a>
                    </span>
                </div>
            @endforeach
        @endforeach

        {{-- Row 1 Ends --}}


    </div>
    <!-- Al the Agents  end -->

    <!-- Connect Property Expert start -->
    @include('front.hero-sections.experts')
    <!-- Connect Property Expert  end -->
@endsection
