@extends('layouts.front.login-site')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 agent-details">
                <img class="agent-image" src=" {{ asset('/assets/images/services/landlord.png') }}" alt="">
                <div class="agent-action">
                    <span class="agent-connect"> <a href="">Connect</a></span>
                    <span class="agent-message"><a href="">Send a Message</a></span>
                    <span class="agent-share"><a href=""><i class="fa fa-heart"></i> Share</a></span>
                </div>
            </div>
            <div class="col-lg-6 agent-desc">
                <h3>{{ $propertyProfessional->firtname }} {{ $propertyProfessional->lastname }}</h3>
                <h5 class="text-bold uppercase">Real Estate Agent</h5>
                <div class="">
                    <span class="" style="float: inline-start">
                        <i class="fa fa-map-marker mr-2" style="font-size:20px;color:black"></i>
                        {{ $propertyProfessional->axis }}
                    </span>
                    <span style="float: inline-end">Michaelhomes.com</span>
                </div>
                <div class="py-2">
                    <ul class="py-3">
                        <li><i class="fa fa-envelope mr-2 mt-2"
                                style="font-size:20px;color:black"></i>{{ $propertyProfessional->email }}</li>
                        <li><i class="fa fa-phone mr-2 mt-2" style="font-size:20px;color:black"></i>
                            {{ $propertyProfessional->phone }} {{ $propertyProfessional->whatApp }}
                        </li>
                        <li class="mt-2"><span
                                style="border: 1px solid black;padding:.2rem;font-weight:700">Experience</span> Over 12
                            years</li>
                    </ul>
                </div>

                <div class="py-2">
                    <h3>Bio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem,
                        cum? Quos enim doloribus tempore, atque deleniti animi mollitia totam reprehender
                        it tempora quaerat pariatur at ab unde distinctio saepe asperiores voluptate?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 agent-house">
                <img src="{{ asset('/assets/images/houses/house2.png') }}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 agent-house">
                <img src="{{ asset('/assets/images/houses/house1.png') }}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 agent-house">
                <img src="{{ asset('/assets/images/houses/house2.png') }}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 agent-house">
                <img src="{{ asset('/assets/images/houses/house3.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600"> Reviews </h5>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
        </div>
        <span class="agent-message ml-5"><a href="">Post a comment</a></span>
    </div>

    <div class="container">
        <div class="row mt-3">
            {{-- First Row --}}
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img src="../assets/images/services/service2.png" alt="Avatar" style="width:100%;" height="150"
                            width="100">
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Mally Cleff</h5>
                            <p>12 Followers</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                Connect
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img src="../assets/images/services/service3.png" alt="Avatar" style="width:100%;" height="150"
                            width="100">
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Jentl Hsghe</h5>
                            <p>16 Followers</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                Connect
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img src="../assets/images/services/service5.png" alt="Avatar" style="width:100%;" height="150"
                            width="100">
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Michael Alele</h5>
                            <p>24 Followers</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                Connect
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center wow fadeInLeft delay-04s">
                <div class="meet-card">
                    <div class="image">
                        <img src="../assets/images/services/service4.png" alt="Avatar" style="width:100%;" height="150"
                            width="100">
                    </div>
                    <div class="meet-card-sub">
                        <div class="card-text mb-0">
                            <h5>Emeka Davidson</h5>
                            <p>20 Followers</p>
                        </div>
                        <div class="card-footer   meet-footer">
                            <a href="services.html">
                                Connect
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
