@extends('layouts.front.login-site')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 agent-details bm">
                <img class="agent-image " src=" {{ asset('/assets/images/building/bm-2.png') }}" alt="">
            </div>
            <div class="col-lg-6 agent-desc">
                <span>Verified</span>
                <h3>Roofing Nail</h3>
                <div class="">
                    <ul class="py-2">
                        <li><i class="fa fa-bell mr-2 "></i>Michaelhomes.com</li><i class="fas fa-toilet"></i>
                        <li><i class="fas fa-facebook-f mr-2 mt-2" style="color: black"></i>Lagos, Nigeria</li>
                        <li><i class="fa fa-envelope mr-2 mt-2" style="color: black"></i>michaeltimothy@essential.com</li>
                        <li><i class="fa fa-phone mr-2 mt-2" style="color: black"></i>08123457689, 0178475298</li>
                    </ul>
                </div>
               
                <div class="pt-2">
                    <h6 style="font-weight: 700">Description</h6>
                    <ol>
                        <li>Half bag ---- #300000</li>
                        <li>1 bag ---- #600000</li>
                    </ol>
                </div>
                <span class="agent-share mb-3"><a href="">
                    <i class="fa fa-share-alt mr-2" style="color: black;font-size:25px;"></i>
                     Share
                    </a>
                </span><br>
                <div class="agent-action">
                    <span class="agent-connect"> <a href="">Buy</a></span>
                    <span class="agent-message"><a href="">Send a Message</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600"> Reviews </h5>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <span class="blacklist-review-dot">B</span>Blessing Lainus <br>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit. 
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et. 
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <span class="blacklist-review-dot">B</span>Blessing Lainus <br>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit. 
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et. 
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <span class="blacklist-review-dot">B</span>Blessing Lainus <br>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit. 
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et. 
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <span class="blacklist-review-dot">B</span>Blessing Lainus <br>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit. 
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et. 
                </p>
            </div>
        </div>
        <span class="agent-message ml-5"><a href="" class="btn" style="">Post a comment</a></span>
    </div>

    {{-- Deals Begins --}}
    <div class="hero-category">
        <div class="hero-meet-expert">
            <h5 style="color: black;font-weight:600">Other Nails Option</h5>
            <a href="" style="text-decoration: none"><h5 style="color: red">See more</h5></a>
        </div>
        
        <div class="hero-listing">
            <div class="pic">
                <img src="../assets/images/building/bm-1.png" alt="">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-2.png" alt="">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-3.png" alt="">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-4.png" alt="">
                <span class="listing-text">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        </div>
    </div>
    {{-- Deals Begins --}}
@endsection