@extends('layouts.front.login-site')
@section('content')

{{-- Page Banner Begins --}}
<div class="page-hero bg-image" style="background:#394293">
    <div class="hero-section row">
            <div class="property-request-banner col-8">
                <span class="request-text mt-5">
                    <p style="color: #fff;font-weight:bolder;font-size:medium;padding-top:30px">
                        {{-- <h3 style="color: #fff">All Property Requests</h3> --}}
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iure id fugit,
                        alias labore repellat totam nam reiciendis odio dicta voluptatem voluptate iusto incidunt quis
                        aperiam amet? Excepturi, accusantium labore?<br><br>
    
                    </p>
                </span>
                <span class="request-image">
                    <img src="{{ asset('../assets/images/banners/prof-banner.png') }}" style="min-width: 20vw;min-height: 20vw" alt="">
                </span>
            </div>
            <div class="search-form col-8 req-ban-form" style="top: 13%">
                <form action="">
                    <div class="blog-search shadow-md border-gray-500">
                        <input type="text" name="" id="" 
                        class="form-control mt-1 blog-input" placeholder="Search for Blogs and news">
                        
                        <button class="blacklist-search"  style="background:red;font: 300;font-size:18px;cursor: pointer;"><i class="fa fa-search" style="color: white;cursor:"></i>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Page Banner Ends  --}}

{{-- Material Item Begins --}}
  <div class="container proffesionals-body">
    <div class="proffesionals-search mt-4">
        <h3 class="text-left">
            <strong>Property Professionals</strong>
        </h3>
        <div class="mt-4">
            <label class="enclosure">
                <span class=" align-middle">
                    Real Estate Agents 
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >1,372</span>
                </span>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Brokers
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >67</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Property Managers
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >75</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Real Estate Appraisers
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >543</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                    Real Estate Investors
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >99</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                    Real Estate Developers  
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >62</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                    Real Estate Attorneys
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >3,090</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Home Inspectors
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >367</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Mortgage Brokers
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >378</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Residential Estate Agents
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >358</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Commercial Estate Agents
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >780</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Land Use Planners
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >300</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Real Estate Economist
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >123</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Real Estate Investment Analyser
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >4,020</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Environmental Consultants
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >3,008</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure">
                <span class=" align-middle">
                     Property Tax Consultants
                    <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end" >2,000</span>
                </span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
        </div>
    </div>

    <div class="proffesionals">
        <div class="material-items">
            @foreach ($propertyProfessionals as $item)
                <div class="pic" >
                    <img src="{{ asset('../assets/images/services/service5.png')}}" style="min-height: 250px;min-width: 300px;" alt="">
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight:700;width:inherit" >Mally Clef</h5>
                        <p>
                            <span style="font-weight:550">5 Followers</span>
                        </p>
                        <a href="{{ route('property.professional.view',$item->user_id) }}" style="float: left" class="btn btn-info listing-anchor">Connect</a>
                    </span>
                </div>
            @endforeach

            {{-- Create redundant Data --}}
                <div class="pic" >
                    <img src="{{ asset('../assets/images/services/service6.png')}}" style="min-height: 250px;min-width: 300px;" alt="">
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight:700;width:inherit" >Gentl Hsgeh</h5>
                        <p>
                            <span style="font-weight:550">5 Followers</span>
                        </p>
                        <a href="" style="float: left" class="btn btn-info listing-anchor">Connect</a>
                    </span>
                </div>
                <div class="pic" >
                    <img src="{{ asset('../assets/images/services/service7.png')}}" style="min-height: 250px;min-width: 300px;" alt="">
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight:700;width:inherit" >Michael Alele</h5>
                        <p>
                            <span style="font-weight:550">3 Followers</span>
                        </p>
                        <a href="" style="float: left" class="btn btn-info listing-anchor">Connect</a>
                    </span>
                </div>
                
               
                <div class="pic" >
                    <img src="{{ asset('../assets/images/services/service7.png')}}" style="min-height: 250px;min-width: 300px;" alt="">
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight:700;width:inherit" >Michael Alele</h5>
                        <p>
                            <span style="font-weight:550">3 Followers</span>
                        </p>
                        <a href="" style="float: left" class="btn btn-info listing-anchor">Connect</a>
                    </span>
                </div>
                
                <div class="pic" >
                    <img src="{{ asset('../assets/images/services/service6.png')}}" style="min-height: 250px;min-width: 300px;" alt="">
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight:700;width:inherit" >Gentl Hsgeh</h5>
                        <p>
                            <span style="font-weight:550">5 Followers</span>
                        </p>
                        <a href="" style="float: left" class="btn btn-info listing-anchor">Connect</a>
                    </span>
                </div>
                <div class="pic" >
                    <img src="{{ asset('../assets/images/services/service7.png')}}" style="min-height: 250px;min-width: 300px;" alt="">
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight:700;width:inherit" >Michael Alele</h5>
                        <p>
                            <span style="font-weight:550">3 Followers</span>
                        </p>
                        <a href=""  style="float: left" class="btn btn-info listing-anchor">Connect</a>
                    </span>
                </div>
            {{-- End of Redundancy --}}
        </div>
    </div>
</div>


@endsection