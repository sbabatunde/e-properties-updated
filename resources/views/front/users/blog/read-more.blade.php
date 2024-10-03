@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image ">
        <div class="hero-section" style="background-image: url({{ asset('../assets/images/Blog/blog-main.png') }});">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- Page Banner Ends  --}}

    <!-- All Blogs -->
    {{-- All Blog Cards Begins --}}
    <div class="container mt-5">
        <div class="blog-container mb-5">
            <div class="blog-image">
                <img src="{{ $blog->photo }}" alt="{{ $blog->title }}">
            </div>
            <div class="title">
                <h1>{!! $blog->title !!}</h1>
                <h3>{{ $blog->user->firstname ?? '' }} {{ $blog->user->lastname ?? '' }}</h3>
                <h5>{{ \Carbon\Carbon::parse($blog->created_at)->format('F-d-Y') }}</h5>
            </div>
            <div class="news">
                <p>
                    {!! $blog->news !!}
                </p>
            </div>
        </div>
        {{-- End of all Blog Cards --}}

        @include('front.users.newsletter.page')
        <!-- All Blogs -->
    @endsection

    <style>
        .blog-container {
            display: flex;
            width: 100%;
            margin: auto;
            flex-direction: column;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif
        }

        .blog-image {
            width: 100%;
            text-align: center;
            margin: 20px auto;
        }

        .blog-image img {
            width: 80%;
            margin: auto;
            height: 200px;
        }

        .news p {
            margin: 30px auto;
            font: 300;
            font-size: 18px;
        }
    </style>
