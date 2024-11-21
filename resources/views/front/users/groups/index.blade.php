@extends('layouts.front.login-site')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner"
        style="background: url({{ asset('assets/images/services/banner.png') }});
    background-size:cover;">
        <div class="container">
            <div class="breadcrumb-area text-left col-md-6">
                <h1 class="fs-bold" style="colo">About Group</h1>
                <ul class="breadcrumbs">
                    <li class="text-white">
                        Join our vibrant community where real estate, tech, health, and more come together. Whether you're
                        looking for the latest industry insights or tips on technology and well-being, our groups offer a
                        space for learning, sharing, and connecting with like-minded individuals.
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="group-btn">
        <a href="#join-group" class="btn">Join</a>
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
                    Our community groups are designed to bring together individuals with shared interests in real estate,
                    technology, health, and more. Whether you're a real estate professional looking to stay updated on
                    industry trends, a tech enthusiast eager to explore the latest innovations, or someone focused on
                    maintaining a healthy lifestyle, this is the place for you. We aim to foster engaging discussions, share
                    valuable insights, and provide a supportive space where members can learn from each other and grow. Join
                    us to stay informed, connect with like-minded individuals, and explore a diverse range of topics that
                    matter to you.
                </p>

                <a href="#" onclick="showShareModal(event);" class="btn share-grp"> Share Group</a>
                @include('front.users.groups.share-group')
            </div>
            <div class="about-grp">
                <h3 class="mb-3"><b>Other Groups</b></h3>
                @include('front.users.groups.other-groups')
            </div>
        </div>
    </div>
@endsection

<style>
    html {
        scroll-behavior: smooth;
    }
</style>
