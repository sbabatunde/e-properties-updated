@extends('layouts.front.login-site')
@section('content')
    @include('sweetalert::alert')
    <div class="container pt-5 ">
        <div class="mt-5 mb-2 text-center">
            <strong style="font-family: Arial, Helvetica, sans-serif; font-size:2rem;color:#394293">
                REPORT FORM
            </strong>
        </div>
        <div class="row justify-content-center mt-1 mb-5">
            <div class="col-md-8 ml-3 mt-5 mb-5">
                <div class="card" style="border: 1px solid white">
                    <div class="card-header pt-5 pb-5" style="align-content: center;background-color:white;box-shadow:
                    rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px" align="center">
                        <div class="mt-2 mb-5 col-xl-12">
                            <form class="d-inline" method="POST" action="{{route('scam.report')}}">
                                    @csrf
                                    <div class="row col-md-12">
                                        <div class="form-group name2 col-md-12 ">
                                            <input type="text" name="off_name"  placeholder="Name of offender"
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="form-group name2 col-md-6 ">
                                            <input type="text" name="off_business"  placeholder="Business"
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="form-group name2 col-md-6 ">
                                            <input type="text" name="off_location"  placeholder="Location"
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            <textarea type="text" rows="5" name="offence"  placeholder="Complaint" 
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                                        </div>

                                        <div class="form-group name2 col-md-12 ">
                                            <input type="text" name="reporter"  placeholder="Name"
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="form-group name2 col-md-4 ">
                                            <select type="text" name="country" 
                                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                <option disabled selected >Country</option>
                                                <option>England</option>
                                                <option>Japan</option>
                                                <option>Ghana</option>
                                            </select>
                                        </div>
                                        <div class="form-group name2 col-md-4 ">
                                            <input type="text" name="phone"  placeholder="Phone Number"
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="form-group name2 col-md-4 ">
                                            <input type="email" name="email"  placeholder="Emai Address"
                                            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                    </div>
                                
                                <div class="col-lg-4 pt-3">
                                    <button type="submit" class="btn btn-success form-control " style="background-color: #394293;cursor: pointer;">
                                        <strong>
                                            {{ __('Send Report') }}
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