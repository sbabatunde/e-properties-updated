@extends('layouts.front.login-site')
@section('content')
    <style>
        .sub-banner {
            position: relative;
            color: #fff;
            padding: 50px 0;
        }

        .sub-banner .container {
            position: relative;
            z-index: 2;
        }

        .sub-banner .breadcrumb-area h1 {
            font-size: 36px;
            font-weight: bold;
            color: #fff;
        }

        .sub-banner .breadcrumb-area ul.breadcrumbs {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .sub-banner .breadcrumb-area ul.breadcrumbs li {
            font-size: 16px;
            color: #fff;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .sub-banner .breadcrumb-area {
                text-align: center;
                padding: 20px;
            }

            .sub-banner .breadcrumb-area h1 {
                font-size: 28px;
            }

            .sub-banner .breadcrumb-area ul.breadcrumbs li {
                font-size: 14px;
            }

            .sub-banner {
                background-position: center center;
                padding: 30px 0;
            }
        }

        @media (max-width: 480px) {
            .sub-banner .breadcrumb-area h1 {
                font-size: 24px;
            }

            .sub-banner .breadcrumb-area ul.breadcrumbs li {
                font-size: 12px;
            }

            .sub-banner {
                background-position: center center;
                padding: 20px 0;
            }
        }
    </style>
    <!-- Sub banner start -->
    <div class="sub-banner mt-5"
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
                @include('front.users.groups.share-post')
            </div>
            <div class="about-grp">
                <h3 class="mb-3"><b>Other Groups</b></h3>
                @include('front.users.groups.other-groups')
            </div>
        </div>
    </div>
    <style>
        .post-anonymous {
            display: flex;
            flex-wrap: nowrap;
            width: 89%;
            margin-bottom: 10px;
            align-items: center;
            /* Ensures both elements are vertically centered */
        }

        .post-anonymous div {
            border: 1px solid #cfd2f8;
            border-radius: 7px 0 0 7px;
            height: 40px;
            display: flex;
            justify-content: left;
            align-items: center;
            /* Ensures the content inside the div is centered vertically */
            width: 50%;
            background: #cfd2f8;
        }

        .post-anonymous .post-submit {
            color: #fff;
            background: #394293;
            border-radius: 0 7px 7px 0;
            width: 50%;
            height: 40px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            /* Centers the button text horizontally */
            align-items: center;
            /* Centers the button text vertically */
            margin: 0;
            /* Ensures no extra margin is added */
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection
