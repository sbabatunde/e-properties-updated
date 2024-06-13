@extends('layouts.front.login-site')
@section('content')

{{-- Page Banner Begins --}}
<div class="page-hero bg-image"  style="background-image: url(../assets/images/building/bm-main-2.png);" >
    <div class="hero-section" >
            <div class="search-form col-8" style="position: relative;top:50%">
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="blog-search">
                        <input type="text" name="" id="" 
                        class="form-control mt-1 blog-input" placeholder="Search for materials...">
                        
                        <a class="blacklist-search" style="font: 300;font-size:18px"><i class="fa fa-search" style="color: white;cursor:"></i>Search</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Page Banner Ends  --}}
  
{{-- Search Materials Begins --}}
  <div style="background-color:white;" class="mt-3">
    <div class="page-section py-1 mt-md-n5 custom-index ml-5">
      <div class="col-md-12">
        <div class="col-md-12 mt-3 " style="">  
          <div class="btn service-btn-group btn-mat-group" >
              <button onclick="roofing()">
                  <strong>
                      Roofing
                  </strong>
              </button>
              <button onclick="dry()">
                  <strong>
                      Dry Lining and Plaster
                  </strong>
              </button>
              <button onclick="timber()">
                  <strong>
                      Timber & Joinery
                  </strong>
              </button>
              <button onclick="insulat()">
                  <strong>
                      Insulation
                  </strong>
              </button>
              <button onclick="garden()">
                <strong>
                    Garden & Outdoor
                </strong>
            </button>
            <button onclick="door()">
                <strong>
                    Door
                </strong>
            </button>
            <button onclick="tools()">
                <strong>
                    Tools & Machineries
                </strong>
            </button>
          </div>
        </div>
    </div> <!-- .page-section -->
  </div>
{{-- Search Materials Ends --}}

{{-- Material Item Begins --}}
  <div class="material-body">
    <div class="material-search">
        <h1 class="text-left">Materials</h1>
        <div class="checkbox-input">
            <form class="form" action="" method="POST" enctype="multipart/form-data">
                <div class="mat-search">
                    <input type="text" name="" id="" 
                    class="form-control mt-1 mat-input" placeholder="Search Tools">
                    <button class="blacklist-search" style="font: 300;font-size:18px">Search</button>
                </div>
            </form>
        </div>
        <div class="search-tools">
            <label class="enclosure"><span class="ml-2 align-middle">Roofing hammer</span>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing nail gun</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing knife</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Chalk line</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing pry bar</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing safety harness</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing boots</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing sealants</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing screws</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Flashing</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Ladder</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Nail</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Roofing wire</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
              <label class="enclosure"><span class="ml-2 align-middle">Anticulut</span>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
              </label>
        </div>
    </div>
    <div class="material-list">
        <div class="mat-list-header">
            <h4 style="color: black;font-weight:700;font-size:29px">Nails</h4>
            <h4  style="color: red;font-weight:550;font-size:18px">See more</h4>
        </div>
        <div class="material-items">
            <div class="pic">
                <img src="../assets/images/building/bm-2.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="{{ route('user.materials.get') }}" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-1.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-3.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-4.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-5.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-6.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-3.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-5.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Nail</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        </div>
    </div>
  </div>
{{-- Material Item Ends --}}
  
<div class="">
    <div class="hero-scam material-store">
        <h5>
            See Stores
        </h5>
        <p>
            Buy your building materials from stores around you.
        </p>
        <a href="{{ route('all.scam.report') }}" class="btn btn-hero-post" style="margin-top: 5px; padding:10px 25px" >See Stores</a>
    </div>
</div>

{{-- New Arrival Material Item Begins --}}
    <div class="new-material-list">
        <div class="new-mat-list-header">
            <h4 style="color: black;font-weight:700;font-size:29px">New arrivals</h4>
            <h4 >
                <a href="" style="text-decoration: none;color: red;font-weight:550;font-size:18px">See more</a>
            </h4>
        </div>
        <div class="new-material-items">
            <div class="pic">
                <img src="../assets/images/building/bm-9.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >10<sub>tons</sub> Bulldozer</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-12.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Pipes</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-7.jpg" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Bricks</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-10.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Measuring tools</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-8.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Honing Guide</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-12.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Metal Saw</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-11.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Edger</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
            <div class="pic">
                <img src="../assets/images/building/bm-main-2.png" alt="">
                <i class="fa fa-heart"></i>
                <span class="listing-text mat-cost" style="background: #d6daf3">
                    <h5 class="mt-3" style="font-weight:700;width:inherit" >Sharpener</h5>
                    <p>
                        <span># 20,000</span> 
                        <span>$ 200,000</span> 
                        <span>180,000</span><br>
                        <span style="font-weight:550">Lagos</span>
                    </p>
                    <a href="" class="btn btn-info listing-anchor">View</a>
                </span>
            </div>
        </div>
    </div>
{{-- New Arrival  Material Item Ends --}}

{{-- Connect With Property Experts Begins --}}
   @include('front.hero-sections.experts')
{{-- Connect With Property Experts Ends --}}


    {{-- For Verified Icon --}}
    {{-- <div class="rectangle">
        <div class="circle"></div>
    </div> --}}
    {{-- For Verified Icon --}}
  
@endsection