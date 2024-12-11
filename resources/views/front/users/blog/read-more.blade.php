@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image">
        <div class="hero-section" style="background-image: url({{ asset('../assets/images/blog/blog-main.png') }});">
            <div class="search-form col-8" style="position: relative; top:50%;">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and News">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Page Banner Ends --}}

    {{-- All Blog Cards Begins --}}
    <div class="container mt-5">
        <div class="blog-card">
            <div class="blog-image">
                <img src="{{ $blog->photo }}" alt="{{ $blog->title }}">
            </div>
            <div class="blog-content">
                <div class="blog-header">
                    <h1>{!! $blog->title !!}</h1>
                    <h3>{{ $blog->user->firstname ?? '' }} {{ $blog->user->lastname ?? '' }}</h3>
                    <h5>{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</h5>
                </div>
                <div class="blog-text">
                    <p>{!! $blog->news !!}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- End of All Blog Cards --}}

    @include('front.users.newsletter.page')
    <style>
        /* General Styling */
        .container {
            max-width: 1200px;
            margin: auto;
        }

        h1,
        h3,
        h5,
        p {
            margin: 0;
        }

        /* Blog Card Styling */
        .blog-card {
            display: flex;
            flex-direction: column;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .blog-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .blog-content {
            padding: 25px;
        }

        .blog-header h1 {
            font-size: 2.2rem;
            /* Larger title font */
            font-weight: 700;
            margin-bottom: 15px;
        }

        .blog-header h3 {
            font-size: 1.2rem;
            /* Increased author name font */
            font-weight: 500;
            color: #555;
            margin-bottom: 10px;
        }

        .blog-header h5 {
            font-size: 1.1rem;
            /* Larger date font */
            color: #999;
            margin-bottom: 20px;
        }

        .blog-text p {
            font-size: 1.2rem;
            /* Larger text content */
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

        /* Search Input */
        .blog-search input {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1.2rem;
            /* Larger input font */
            width: 100%;
        }

        .blog-search input:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-card {
                flex-direction: column;
            }

            .blog-image img {
                height: 200px;
            }

            .blog-header h1 {
                font-size: 1.8rem;
                /* Adjusted for smaller screens */
            }

            .blog-header h3 {
                font-size: 1rem;
                /* Adjusted for smaller screens */
            }

            .blog-header h5 {
                font-size: 0.95rem;
                /* Adjusted for smaller screens */
            }

            .blog-text p {
                font-size: 1.1rem;
                /* Adjusted for smaller screens */
            }
        }
    </style>
@endsection
