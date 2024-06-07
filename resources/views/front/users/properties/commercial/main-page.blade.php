@extends('layouts.front.login-site')
@section('content')

{{-- Page Banner Begins --}}
<div class="page-hero bg-image" style="background:#394293">
    <div class="hero-section">
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search shadow-md border-gray-500">
                        <input type="text" name="" id="" 
                        class="form-control mt-1 blog-input" placeholder="Search for Blogs and news">
                        
                        <button class="blacklist-search"  style="font: 300;font-size:18px;cursor: pointer;"><i class="fa fa-search" style="color: white;cursor:"></i>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Page Banner Ends  --}}


<div class="residential-main">
    <div class="residential-left" style="display: none">
        <h4 class="ml-4 mt-4" style="font-weight: 550">Compare Properties</h4>
        <div class="res-comp-prop mt-3">
            <img src="{{ asset('../assets/images/houses/house1.png') }}" alt="">
            <div class="res-prop-details">
                <span>
                    <h6><b>3 Rooms Office Space</b></h6>
                    <h6>Lagos Nigeria</h6>
                </span>
                <span class="comp-price">
                    Price: <b style="font-size: 20px"># 1,930,000</b>
                </span>
            </div>
        </div>
        <div class="res-comp-prop mt-3">
            <img src="{{ asset('../assets/images/houses/residential/res-1.png') }}" alt="">
            <div class="res-prop-details">
                <span>
                    <h6><b>3 Rooms Office Space</b></h6>
                    <h6>Lagos Nigeria</h6>
                </span>
                <span class="comp-price">
                    Price: <b style="font-size: 20px"># 1,930,000</b>
                </span>
            </div>
        </div>
        <div class="res-comp-button">
            <a href="" class="btn res-compare" style="font-weight:550;">Compare</a>
            <a href="" class="btn btn-danger res-cancel">Cancel</a>
        </div>
    </div>
    <div class="live-auction-left" style="display: block">
        <h4 class="ml-4 mt-4 mb-3" style="font-weight: 550;color:#394293;text-align:center">Live Auction</h4>
        <div class="all-auction-card">
            <div class="commercial-auction-card">
                <div class="d-flex justify-content-between">
                    <span>
                        <b>Days</b>
                    </span>
                    <span>
                        <b>Hours</b>
                    </span>
                    <span>
                        <b>Minutes</b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="ml-2">
                        50
                    </span>
                    <span class="mr-3">
                        20
                    </span>
                    <span class="mr-3">
                        12
                    </span>
                </div>
                <p class="mt-3">
                    <span style="font-size: 16px;color:black"> <b>4 Bedroom Terrace with Bq at Ajah</b></span><br>
                    <span style="color: black">Lagos, Nigeria</span><br>
                    <span style="color: black">Starting Bid: <b style="font-size: 20px"> # 930,000</b></span>
                </p>
                <div class="d-flex justify-content-between">
                    <div >
                        <span class="com-auct-live-btn"></span>
                        <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                    </div>
                    <a href="" class="btn res-prop-view">View</a>
                </div>
            </div>
            <div class="commercial-auction-card">
                <div class="d-flex justify-content-between">
                    <span>
                        <b>Days</b>
                    </span>
                    <span>
                        <b>Hours</b>
                    </span>
                    <span>
                        <b>Minutes</b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="ml-2">
                        50
                    </span>
                    <span class="mr-3">
                        20
                    </span>
                    <span class="mr-3">
                        12
                    </span>
                </div>
                <p class="mt-3">
                    <span style="font-size: 16px;color:black"> <b>4 Bedroom Terrace with Bq at Ajah</b></span><br>
                    <span style="color: black">Lagos, Nigeria</span><br>
                    <span style="color: black">Starting Bid: <b style="font-size: 20px"> # 930,000</b></span>
                </p>
                <div class="d-flex justify-content-between">
                    <div >
                        <span class="com-auct-live-btn"></span>
                        <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                    </div>
                    <a href="" class="btn res-prop-view">View</a>
                </div>
            </div>
            <div class="commercial-auction-card">
                <div class="d-flex justify-content-between">
                    <span>
                        <b>Days</b>
                    </span>
                    <span>
                        <b>Hours</b>
                    </span>
                    <span>
                        <b>Minutes</b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="ml-2">
                        50
                    </span>
                    <span class="mr-3">
                        20
                    </span>
                    <span class="mr-3">
                        12
                    </span>
                </div>
                <p class="mt-3">
                    <span style="font-size: 16px;color:black"> <b>4 Bedroom Terrace with Bq at Ajah</b></span><br>
                    <span style="color: black">Lagos, Nigeria</span><br>
                    <span style="color: black">Starting Bid: <b style="font-size: 20px"> # 930,000</b></span>
                </p>
                <div class="d-flex justify-content-between">
                    <div >
                        <span class="com-auct-live-btn"></span>
                        <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                    </div>
                    <a href="" class="btn res-prop-view">View</a>
                </div>
            </div>
            <div class="commercial-auction-card">
                <div class="d-flex justify-content-between">
                    <span>
                        <b>Days</b>
                    </span>
                    <span>
                        <b>Hours</b>
                    </span>
                    <span>
                        <b>Minutes</b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="ml-2">
                        50
                    </span>
                    <span class="mr-3">
                        20
                    </span>
                    <span class="mr-3">
                        12
                    </span>
                </div>
                <p class="mt-3">
                    <span style="font-size: 16px;color:black"> <b>4 Bedroom Terrace with Bq at Ajah</b></span><br>
                    <span style="color: black">Lagos, Nigeria</span><br>
                    <span style="color: black">Starting Bid: <b style="font-size: 20px"> # 930,000</b></span>
                </p>
                <div class="d-flex justify-content-between">
                    <div >
                        <span class="com-auct-live-btn"></span>
                        <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                    </div>
                    <a href="" class="btn res-prop-view">View</a>
                </div>
            </div>
            <div class="commercial-auction-card">
                <div class="d-flex justify-content-between">
                    <span>
                        <b>Days</b>
                    </span>
                    <span>
                        <b>Hours</b>
                    </span>
                    <span>
                        <b>Minutes</b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="ml-2">
                        50
                    </span>
                    <span class="mr-3">
                        20
                    </span>
                    <span class="mr-3">
                        12
                    </span>
                </div>
                <p class="mt-3">
                    <span style="font-size: 16px;color:black"> <b>4 Bedroom Terrace with Bq at Ajah</b></span><br>
                    <span style="color: black">Lagos, Nigeria</span><br>
                    <span style="color: black">Starting Bid: <b style="font-size: 20px"> # 930,000</b></span>
                </p>
                <div class="d-flex justify-content-between">
                    <div >
                        <span class="com-auct-live-btn"></span>
                        <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                    </div>
                    <a href="" class="btn res-prop-view">View</a>
                </div>
            </div>
            <div class="commercial-auction-card  mb-3">
                <div class="d-flex justify-content-between">
                    <span>
                        <b>Days</b>
                    </span>
                    <span>
                        <b>Hours</b>
                    </span>
                    <span>
                        <b>Minutes</b>
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="ml-2">
                        50
                    </span>
                    <span class="mr-3">
                        20
                    </span>
                    <span class="mr-3">
                        12
                    </span>
                </div>
                <p class="mt-3">
                    <span style="font-size: 16px;color:black"> <b>4 Bedroom Terrace with Bq at Ajah</b></span><br>
                    <span style="color: black">Lagos, Nigeria</span><br>
                    <span style="color: black">Starting Bid: <b style="font-size: 20px"> # 930,000</b></span>
                </p>
                <div class="d-flex justify-content-between">
                    <div >
                        <span class="com-auct-live-btn"></span>
                        <span style="color: rgba(9, 202, 9, 0.774);font-weight: 550" class="ml-2">Live</span>
                    </div>
                    <a href="" class="btn res-prop-view">View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="residential-right">
        <div class="res-properties">
            <div class="res-prop-items">
                <img src="{{ asset('../assets/images/houses/residential/res-1.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">3 Bedroom Flat</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items">
                <img src="{{ asset('../assets/images/houses/residential/res-2.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">5 Bedroom 3 Bath</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items">
                <img src="{{ asset('../assets/images/houses/residential/res-3.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">Student Apartment</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items">
                <img src="{{ asset('../assets/images/houses/residential/res-4.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">2 Bedroom Apartment</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items">
                <img src="{{ asset('../assets/images/houses/residential/res-5.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">Room and Parlour Self Contain</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="res-prop-items">
                <img src="{{ asset('../assets/images/houses/residential/res-5.png') }}" alt="">
                <p style="color: black">
                    <span style="font-weight:550;">Room and Parlour Self Contain</span><br>
                    Lagos, Nigeria
                </p>
                <a href="" class="btn res-prop-view"> View</a><br>
                <div class="res-price">
                    <span style="color: black">Price: <b># 1,930,000</b></span>
                    <span style="color: #394293" class="mr-2">Annually</span>
                </div>
                <div class="comp-like-share">
                    <span style="font-weight:550">
                        <a href="">Compare</a>
                    </span>
                    <span>
                        <a href="">
                            <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- s --}}
@endsection