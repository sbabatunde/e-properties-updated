@extends('layouts.front.login-site')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            {{-- <h1>Property Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Property Detail</li>
            </ul>
             --}}
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <div class="heading-properties-2">
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="informeson">
                                   <h1 style="color: black;font-weight:600">{{$property -> title}}<span>
                                    <ul class="clearfix mt-3">
                                        <li><i class="fa fa-bed" aria-hidden="true" style="color: #394293;font-weight:500;font-size:1.5vw"></i>
                                            {{$property->bedroom}} <br>
                                            bedroom
                                         </li>
                                        <li><i class="fa fa-bath"  style="color: #394293;font-weight:500;font-size:1.5vw"></i>
                                            {{$property->bathrooms}} <br>
                                            bathrooms 
                                        </li>
                                       
                                        <li>
                                            <i class="fa-solid fa-toilet"></i>{{$property ->toilets}} <br>
                                            toilets <i class="fa-solid fa-house"></i>

                                        </li>
                                        <li>
                                            <a href="{{ route('home') }}" class="btn home-prop" style="cursor: pointer">
                                                <span style="color: white">
                                                    Home
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                        </span>
                                    </h1>
                                   <div>
                                       <div class="float-left">
                                        <span class="column" style="color: black;font-weight:550">
                                            <b>{{ $property -> localty }}</b> <br>
                                        </span>
                                        <span class="column" style="color: black;font-weight:550">
                                            <b> Price:</b>
                                        </span>
                                        <span style="color: #394293;font-weight:500;font-size:1.5vw">
                                           <strong>
                                                ₦ {{ number_format($property['payment'][0]['initial_pay']) }}
                                            </strong>  
                                        </span>

                                       </div>
                                       {{-- <div class="float-right">
                                           <p>₦ {{ number_format($property -> price_meter)}} / metre</p>
                                       </div> --}}
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    {{-- <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="{{ asset($property->thumbnail)?? ''}}" class="img-fluid" alt="properties-photo">
                        </div>
                    
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators sp-2 smail-properties list-inline nav nav-justified ">
                        @isset($amenities)
                            @foreach($amenities  as $image)
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                        <img src="{{ asset($image->amenities) }}" class="img-fluid" alt="properties-photo-smale">
                                    </a>
                                </li>
                            @endforeach
                       @endisset 
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="row">
                <!-- Property details start -->
                @include('front.users.properties.home.prop-details-extension.table')
                <!-- Property description start -->
                <div class="property-table mt-5 prop-description">
                    <div class="property-description mb-30">
                        <h3 class="heading-3">
                           <strong style="color: black">
                                Description
                            </strong> 
                        </h3>
                        <p>{{$property -> description}} </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    <div class="widget search-area advanced-searchs">
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <div class=" col-lg-12 schedule-header">
                                    <img src="{{ asset('../assets/images/properties-1.png') }}" alt="">
                                    <h6>{{ $agent->business_name }}</h6>
                                </div>
                                <ul class="col-lg-12 mb-2">
                                    <li>
                                        <i class="fa fa-phone mr-2" style="color: black"></i>{{ $agent->phone }} <br>
                                        <i class="fa fa-envelope mr-2" style="color: black"></i>{{ $agent->email }}
                                    </li>
                                </ul>
                                <form class="d-inline" method="POST" action="">
                                    @csrf
                                    <div class="row col-lg-12">
                                        <div class="col-lg-12 form-group">
                                            <span class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 meet">
                                                <strong>
                                                    To Schedule Meeting 
                                                   <i class="fa fa-arrow-down ml-2" style="color: #394293;font-weight:300;font-size:1rem"></i>
                                                </strong> 
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-2 mt-2">
                                            <input type="email" name="user_email"  placeholder="Your name"
                                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <input type="email" name="user_email"  placeholder="Your Email"
                                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <input type="email" name="user_email"  placeholder="Your Phone number"
                                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <textarea type="email" name="user_email" value="I am interested in buying..." rows="3"
                                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                
                                            </textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-success form-control " style="background-color: #394293;">
                                                <strong>
                                                    {{ __('Send Email') }}
                                                </strong>  
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('front.users.properties.home.prop-details-extension.reviews')
@include('front.users.properties.home.prop-details-extension.similar-properties')
<!-- Properties details page start -->

@endsection