@extends('layouts.front.login-site')
@section('content')

{{-- Page Banner Begins --}}
<div class="page-hero bg-image" style="background:#394293">
    <div class="hero-section row">
            <div class="property-request-banner col-8">
                <span class="request-text">
                    <p>
                        <h3 style="color: #fff">All Property Requests</h3>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iure id fugit,
                        alias labore repellat totam nam reiciendis odio dicta voluptatem voluptate iusto incidunt quis
                        aperiam amet? Excepturi, accusantium labore?<br><br>
    
                        <a href="{{ route('make.request') }}" class="request-anch">Make a Property Request</a>
                    </p>
                </span>
                <span class="request-image">
                    <img src="{{ asset('../assets/images/property-request/banner.png') }}" alt="">
                </span>
            </div>
            <div class="search-form col-8 req-ban-form" >
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

<div class="container mt-3">
    <div class="req-msg-row">
        <div class="req-msg-header">
            <div class="req-mes-owner">
                <div class="req-msg-dot"></div>
                <div class="msg-owner">
                    <h6 style="color: gray"><b>Paul Wilbur</b></h6>
                    <h6 style="color: gray">6:30pm</h6>
                </div>
            </div>
            <div class="req-mes-title">
                <h5 style="font-weight: 550">2 Bedroom Flat</h5>
                <h6 style="font-weight: 550">Lagos, Nigeria</h6>
            </div>
        </div>
        <div class="req-message-details">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea cum dignissimos sed nemo consequatur 
            optio alias odit, corporis voluptatibus earum impedit excepturi aliquid
             dolor numquam iste ab minus nulla sit!
        </div>
        <div class="req-message-button">
            <a href="" class="btn btn-req-msg" >
                <b>
                    Message
                </b>
            </a>
        </div>
    </div>
    @foreach ($propertyRequests as $item)
        <div class="req-msg-row">
            <div class="req-msg-header">
                <div class="req-mes-owner">
                    <div class="req-msg-dot"></div>
                    <div class="msg-owner">
                        <h6 style="color: gray"><b>{{$item->name}}</b></h6>
                        <h6 style="color: gray">{{\Carbon\Carbon::parse($item->created_at)->format('g:ia')}}</h6>
                    </div>
                </div>
                <div class="req-mes-title">
                    <h5 style="font-weight: 550">2 Bedroom Flat</h5>
                    <h6 style="font-weight: 550">{{$item->area}},{{$item->country}}</h6>
                </div>
            </div>
            <div class="req-message-details">
                {{$item->further_info}}
            </div>
            <div class="req-message-button">
                <a href="" class="btn btn-req-msg" >
                    <b>
                        Message
                    </b>
                </a>
            </div>
        </div>
    @endforeach

</div>
@endsection