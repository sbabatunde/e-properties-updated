@extends('admin.index')
@section('content')
<!-- page content -->
<div class="right_col" style="background-color: #eff0ff" role="main">
    <div class="">
        <div class="page-title mb-3 flex">
            <div class="title_left">
                <h3>
                    <strong style="color: black">
                       My Listings
                    </strong> 
                </h3>
            </div>
        
        </div>
        <div class="clearfix"></div>
            <div class="row flex justify-center">
                <div class="col-lg-11 col-md-11">
                    <div class="col-md-12 mt-3" style="">  
                        <div class="btn service-btn-group btn-container d-flex justify-content-center" >
                            <button onclick="salesL()">
                                <strong>
                                    Sales (5)
                                </strong>
                            </button>
                            <button onclick="rentsL()">
                                <strong>
                                    Rents (0)
                                </strong>
                            </button>
                            <button onclick="shortletsL()">
                                <strong>
                                    Short let(0)
                                </strong>
                            </button>
                            <button onclick="landL()">
                                <strong>
                                    Land (0)
                                </strong>
                            </button>
                        </div>
                    </div>
                    @include('dashboard.my-listings.search.rents')
                    @include('dashboard.my-listings.search.sales')
                    @include('dashboard.my-listings.search.shortlets')
                    @include('dashboard.my-listings.search.land')

                    <div class="ln_solid"></div>
                    <div class="form-group col-md-11 pt-2">
                        <input type="text" readonly  placeholder="List is empty" style="border: 1px solid rgb(224, 223, 223);border-radius:7px;
                        background-color:#eff0ff;font-weight:bold"
                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    >
                    <p class="pt-4" style="font-size:1.5rem"> 1 - 0 of <b>0</b> Results</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mt-4 text-center   d-flex justify-content-end">
    <div class="col-md-10 mr-5" style="border: 2px solid #e1e3f0;border-radius:5px;
            background-color: #edeef5;">
        <div class="col-md-12 pt-2 pb-2">
            <div class="col-md-3">
                <img src="{{ asset('/assets/images/services/service6.png') }}" alt="Avatar" style="width:100%;" height="150" width="100" >
            </div>
            <div class="col-md-4">
                <span class="pb-3"><b style="color:black;font-size:1rem;float:inline-start">Oloripkun Pent House</b></span> 
                <span class="" style="float:inline-start"><b style="color:black;font-size:1rem;;border: 1px solid black">Price</b></span>
            </div>
            <div class="col-md-4">
                <span style="border: 1px solid black;border-height:20px"><b style="color:black;font-size:1rem">Price</b>This </span>
            </div>
        </div>
        <div class="col-md-5 pt-2 pb-2 align-item-between" >
            
            
        </div>
    </div>
</div>

<!-- /page content -->
@stop
