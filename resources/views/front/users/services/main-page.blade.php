

@extends('layouts.front.login-site')
@section('content')
<style>

</style>
<div class="page-hero bg-image " style="background-image: url(../assets/images/services/banner.png);">
  {{-- <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">A Reliable Network Connection Makes A</span>
      <h1 class="display-4">Happy Customer</h1>
      <a href="#" class="btn btn-primary">Let's Connect</a>
    </div>
  </div> --}}
</div>

<div style="background-color:white;">
  <div class="page-section py-1 mt-md-n5 custom-index ml-5">
    <div class="col-md-12">
      <div class="col-md-12 mt-3 ml-5" style="">  
        <div class="btn service-btn-group btn-container d-flex justify-content-center" >
            <button onclick="maintenance()">
                <strong>
                    Maintenance
                </strong>
            </button>
            <button onclick="property()">
                <strong>
                    Property
                </strong>
            </button>
            <button onclick="b_development()">
                <strong>
                    Building Development
                </strong>
            </button>
            <button onclick="legal()">
                <strong>
                    Legal
                </strong>
            </button>
        </div>
      </div>
      @include('front.users.services.find.maintenance')
      @include('front.users.services.find.buildin-dev')
      @include('front.users.services.find.legal')
      @include('front.users.services.find.property')
  
  </div> <!-- .page-section -->
</div>

<div class="mt-5 ml-5">
  <div class="hedin">
    <div class="row ml-4">
      <div class="col-md-10">
        <h3 class="heading-3 ml-3 mt-4"> 
            <strong style="color: black;font-weight:700">
                Connect with property experts and businesses you may like
            </strong> 
        </h3>
      </div>
      <div class="col-md-2">
        <h3 class="heading-3 ml-3 mt-4" style="float: inline-start"> 
            <strong style="color: red;font-weight:700">
                see more
            </strong> 
        </h3>
      </div>
    </div>
   
  </div>
  <div class="col-lg-12 mb-5 pb-5">
    <div class="row ml-3 service-content">
      <div class="col-md-2 mr-4 mt-2">
        <div class="service-card">
          <img  src="../assets/images/services/service5.png" alt="Avatar" style="width:100%;" height="150" width="100" >
          <div class="container mt-3 follow-text">
            <h4><b>Surveyors</b></h4>
            <h5><b>5 Followers</b></h>
               <div>
                <button class="btn follow-btn">
                    <strong>
                        Follow
                    </strong> 
                </button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 mr-4 mt-2">
        <div class="service-card">
          <img  src="../assets/images/services/service6.png" alt="Avatar" style="width:100%;" height="150" width="100" >
          <div class="container mt-3  follow-text">
            <h4><b>Electricians</b></h4>
            <h5><b>5 Followers</b></h>
               <div>
                <button class="btn follow-btn">
                    <strong>
                        Follow
                    </strong> 
                </button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 mr-4 mt-2">
        <div class="service-card">
          <img  src="../assets/images/services/service9.png" alt="Avatar" style="width:100%;" height="150" width="100" >
          <div class="container mt-3  follow-text">
            <h4><b>KJ Properties</b></h4>
            <h5><b>3 Followers</b></h>
               <div>
                <button class="btn follow-btn">
                    <strong>
                        Follow
                    </strong> 
                </button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 mr-4 mt-2">
        <div class="service-card">
          <img  src="../assets/images/services/service8.png" alt="Avatar" style="width:100%;" height="150" width="100" >
          <div class="container mt-3  follow-text">
            <h4><b>Developers</b></h4>
            <h5><b>2 Followers</b></h>
               <div>
                <button class="btn follow-btn">
                    <strong>
                        Follow
                    </strong> 
                </button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 mr-4 mt-2">
        <div class="service-card">
          <img  src="../assets/images/services/service8.png" alt="Avatar" style="width:100%;" height="150" width="100" >
          <div class="container mt-3  follow-text">
            <h4><b>Architectures</b></h4>
            <h5><b>5 Followers</b></h>
               <div>
                <button class="btn follow-btn">
                    <strong>
                        Follow
                    </strong> 
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection