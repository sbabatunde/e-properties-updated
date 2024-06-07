		
@extends('admin.index')
@section('content')

<!-- page content -->
<div class="right_col" style="background-color: #eff0ff" role="main">
    <div class="">
        <div class="page-title ml-5">
            <div class="title_left">
                <h3>
                    <strong style="color: black">
                        Hello, 
                        {{-- {{ Admin::name()}} --}}
                    </strong> 
                </h3>
                <h6 class=""> today's date </h6>
            </div>
        
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-11 col-md-11 ml-5">
                <div class="col-md-12 mt-3 ml-5" style="">  
                    <div class="btn service-btn-group btn-container d-flex justify-content-center" >
                        <button onclick="myProfile()" class="ml-0">
                            <strong>
                                My Profile
                            </strong>
                        </button>
                        <button onclick="editProfile()" class="mr-0">
                            <strong>
                                Edit Profile
                            </strong>
                        </button>
                    </div>
                  </div>
                  @include('admin.profile.edit')
                  @include('admin.profile.my-profile')
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@stop
