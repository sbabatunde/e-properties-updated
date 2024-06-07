

@extends('layouts.front.login-site')
@section('content')
@include('sweetalert::alert')

    <div class="container pt-5 ">
        <div class="mt-5 mb-2 text-center">
            <strong style="font-family: Arial, Helvetica, sans-serif; font-size:2rem;color:#394293">
                REQUEST FORM
            </strong>
        </div>
        <div class="row justify-content-center mt-1 mb-5">
            <div class="col-md-8 ml-3 mt-5 mb-5">
                <div class="card" style="border: 1px solid white">
                    <div class="card-header pt-5 pb-5" style="align-content: center;background-color:white;box-shadow:
                    rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px" align="center">
                        <strong style="font-size:25px;color:bla">
                            {{ __('Listing Type') }}
                        </strong>
                        <div class=" mt-3 "> 
                            <div class="btn btn-group" style="align-content:center">
                                <button onclick="salesRequest()" class="active-btn-group">
                                    <strong>
                                        Sales
                                    </strong>
                                </button>
                                <button onclick="rentRequest()" class="active-btn-group">
                                    <strong>
                                        Rent
                                    </strong>
                                </button>
                                <button onclick="letsRequest()" class="active-btn-group">
                                    <strong>
                                        Lets
                                    </strong>
                                </button>
                                <button onclick="landRequest()" class="active-btn-group">
                                    <strong>
                                        Land
                                    </strong>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 mb-5 col-xl-12">
                            @include('front.forms.request.sales')
                            @include('front.forms.request.rent')
                            @include('front.forms.request.land')
                            @include('front.forms.request.lets')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection