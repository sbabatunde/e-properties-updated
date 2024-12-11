@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image ">
        <div class="hero-section" style="background-image: url(../assets/images/blog/blog-main.png);">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" class="form-control mt-1 blog-input"
                            placeholder="Search for Blogs and news">

                        <a class="blacklist-search" style="font: 300;font-size:18px"><i class="fa fa-search"
                                style="color: white;cursor:"></i>Search</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- Page Banner Ends  --}}

    <!-- All Blogs -->
    {{-- All Blog Cards Begins --}}
    <div class="container">
        <div class="row mt-5">
            @foreach ($blogs as $item)
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center wow fadeInLeft delay-04s">
                    <div class="blog-card">
                        <div class="image">
                            <img src="{{ $item->photo }}" alt="{{ $item->title }}" style="width:100%;" height="150"
                                width="100">
                        </div>
                        <div class="blog-card-sub">
                            <div class="card-text mb-0">
                                <h5>{{ \Carbon\Carbon::parse($item->created_at)->format('F-d-Y') }}</h5>

                                <p>
                                    {!! $item->title !!}
                                </p>
                                <span class="blog"><a href="{{ route('blog.read_more', $item->id) }}">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- End of all Blog Cards --}}

    @include('front.users.newsletter.page')
    <!-- All Blogs -->
@endsection
