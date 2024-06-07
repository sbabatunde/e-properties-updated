@extends('layouts.front.login-site')
@section('content')
<div class="container pt-5 ">
  <div class="row justify-content-center mt-5 mb-5">
      <div class="col-md-8 ml-3 mt-5 mb-5">
          <div class="card  ">
              <div class="card-header pt-5 pb-5" style="align-content: center;background-color:white;box-shadow:
               rgba(0, 0, 0, 0.24) 0px 3px 8px;" align="center">
                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{Session::get('error')}}
                            </div>
                        @endif
                    <span>
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert"><strong>Success:</strong>{{Session::get('message')}}</div>
                        @endif
                        <div>
                            <strong style="font-family: Arial, Helvetica, sans-serif; font-size:2rem">
                                Log In
                            </strong>
                        </div>
                    </span>
                    <strong>{{ __('Enter Your Credentials to Login') }}</strong>
                    <div class="mt-2 mb-5">
                        <form class="d-inline" method="POST" action="{{ route('registered.user.login') }}">
                            @csrf
                            <div class="row mt-3 col-md-10 ">
                                <div class="form-group name2 col-md-12 ">
                                    <input type="email" name="email"  placeholder="User/Email"
                                    class="form-control @error('email') is-invalid @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group name2 col-md-12 ">
                                    <input type="password" name="password"  placeholder="password"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    
                                    <div class="row" style="display: flex;justify-content:space-between">
                                        <div style="">
                                            <button type="submit" class="btn btn-link" style="color: #394293;">
                                               <strong>
                                                    {{ __('Forgot Password') }}
                                                </strong> 
                                            </button>
                                        </div>
                                        <div style="">
                                            <a type="submit" class="btn btn-link" href="{{ route('register') }}" style="color: #394293;text-decoration:none">
                                                <strong>
                                                    {{ __('Create new account') }}
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-success form-control " style="background-color: #394293;">
                                    <strong>
                                        {{ __('Login') }}
                                    </strong>  
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
          </div>
      </div>
  </div>
</div>
@endsection