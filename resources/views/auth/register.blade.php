@extends('layouts.front.login-site')
@section('content')

<div class="container pt-5 ">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8 ml-3 mt-5 mb-5">
            <div class="card  ">
               
                <div class="card-header pt-5 pb-5" style="align-content: center;background-color:white;box-shadow:
                 rgba(0, 0, 0, 0.24) 0px 3px 8px;" align="center">
                      <span>
                          <div>
                            <strong style="font-family: Arial, Helvetica, sans-serif; font-size:2rem">
                                Sign Up 
                            </strong>
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                          </div>
                    </span>
                    <strong>
                        {{ __('Enter Your Credentials to Login') }}
                    </strong>
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert"><strong>Error:</strong>{{Session::get('error')}}</div>
                    @endif
                    <div class="row">
                        <div class="row col-md-12">
                            
                        </div>
                    </div>
                    <div class="mt-2 mb-5">
                        <div class="row mt-3 col-md-11 ml-3">
                            <div class="col-md-4">
                                <button class="btnreg btn-register form-control " id="btnreg" onclick="showLandlord()">
                                    <strong>
                                        {{ __('Landlord/Agents') }}
                                    </strong>  
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button class="btnreg btn-register form-control" id="tenant" onclick="showTenant()">
                                    <strong>
                                        {{ __('Tenants') }}
                                    </strong>  
                                </button>
                            </div>
                            <div class="col-md-4">
                                <button class="btnreg btn-register form-control" onclick="showAgent()">
                                    <strong>
                                        {{ __('Service Provider') }}
                                    </strong>  
                                </button>
                            </div>
                        </div>
                        @include('auth.registration-form.Landlord')
                        @include('auth.registration-form.tenant')
                        @include('auth.registration-form.serviceProvider')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

@endsection