@extends('layouts.front.login-site')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner"
        style="background: url({{ asset('assets/images/services/banner.png') }});
    background-size:cover;">
        <div class="container">
            <div class="breadcrumb-area text-left col-md-5">
                <h1 class="fs-bold" style="colo">About Group</h1>
                <ul class="breadcrumbs">
                    <li class="text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Non, repellat! Repudiandae, iste impedit labore eos voluptatum fugit
                        smagnam laudantium dolore unde facere eum, et harum
                        consectetur excepturi perferendis qui. Labore?
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="group-btn">
        <a href="" class="btn">Join</a>
    </div>

    <div class="all-group">
        <div class="left-grp">
            <div class="btn all-group-btn btn-container d-flex justify-content-center ">
                <button class="all-group-btn active-btn-group toggleButton req-target" data-target="showPost">
                    <strong>
                        Post
                    </strong>
                </button>
                <button class="all-group-btn active-btn-group toggleButton" data-target="showAnonymous">
                    <strong>
                        Annonymous Post
                    </strong>
                </button>
                <button class="all-group-btn active-btn-group toggleButton" data-target="showMembers">
                    <strong>
                        Members
                    </strong>
                </button>
            </div>
            <div class="all-members-card">
                @include('front.users.groups.known-post')
                @include('front.users.groups.anonymous')
                @include('front.users.groups.members')
            </div>
        </div>
        <div class="right-grp">
            <div class="about-grp">
                <h3 class="mb-3"><b>About Group</b></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere fuga rem quos excepturi!
                    Repellendus facere placeat error numquam beatae maiores nemo.
                    Velit dolorem vel accusamus veniam dolor voluptas, enim accusantium.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque
                    a dolores aliquam voluptatibus sunt et repudiandae! Molestiae aperiam quibusdam,
                    iusto laboriosam neque magni voluptate odio nisi dolor illum obcaecati!
                </p>
                <a href="" class="btn share-grp"> Share Group</a>
            </div>
            <div class="about-grp">
                <h3 class="mb-3"><b>Other Groups</b></h3>
                @include('front.users.groups.other-groups')
            </div>
        </div>
    </div>
@endsection
