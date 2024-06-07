		
@extends('admin.index')
@section('content')

		<!-- page content -->
		<div class="right_col" style="background-color: #eff0ff" role="main">
				<div class="">
					<div class="page-title ml-5">
						<div class="title_left">
							<h3> <strong style="color: black">
                      Post A property
                  </strong> 
              </h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-lg-11 col-md-11 ml-5">
							<div class="">
								<div class="">
									<br />
									<form class="form" action="{{route('admin.properties.general.store')}}" method="POST" enctype="multipart/form-data">
											@csrf
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
                            <div class="row">
                              {{-- Property details --}}
                           
                              <div class="col-md-11">
                                <div class="col-md-12">
                                  <h5>
                                    <strong style="color:black">
                                      Property details
                                    </strong>
                                  <span class="ml-5">
                                    <input type="checkbox" class="form-group">
                                    <strong style="color: black;font-size:15px">
                                      Auction Properties
                                    </strong>
                                  </span>
  
                                  </h5>
                                </div>
                                <div class="form-group col-md-6">
                                  <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="Title" value="{{old('name')}}" name="title">
                                  @error("title")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>

                                <div class="form-group col-md-3">
                                  <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="category">
                                  <option disabled selected value="">Category</option>
                                  <option value=""></option>
                                  </select>
                                  @error("category")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>

                                <div class="form-group col-md-3">
                                  <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="furnishing">
                                  <option disabled selected value="">Furnishing</option>
                                  <option value=""></option>
                                  </select>
                                  @error("furnishing")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-12 mt-2">
                                <div class="form-group col-md-3 mr-4">
                                  <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="type">
                                  <option disabled selected value="">Select Type</option>
                                  <option value=""></option>
                                  </select>
                                  @error("type")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>

                                <div class="form-group col-md-4 pl-5 mr-5">
                                  <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="bathrooms">
                                  <option disabled selected value="">Bathrooms</option>
                                  <option value=""></option>
                                  </select>
                                  @error("bathrooms")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>

                                <div class="form-group col-md-3 ml-4" >
                                  <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="toilet">
                                  <option disabled selected value="">Toilets</option>
                                  <option value=""></option>
                                  </select>
                                  @error("toilet")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>

                              {{-- Property Auction details --}}
                              <div class="col-md-12 mt-2">
                                <div class="col-md-12">
                                  <h5>
                                    <strong style="color:black">
                                      Property Auction details
                                    </strong>
                                  </h5>
                                </div>
                                <div class="form-group col-md-5 mr-5">
                                  <input type="date" placeholder="Start Date" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="start_date">
                                  @error("start_date")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5 ml-5">
                                  <input type="time"  placeholder="Start Time" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="start_time">
                                  @error("start_time")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5 mr-5">
                                  </label>
                                  <input type="date" placeholder="End Date" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="end_date">
                                  @error("end_date")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5 ml-5">
                                  </label>
                                  <input type="time"  placeholder="End Time" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="end_time">
                                  @error("end_time")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>

                              {{-- Pricing Details --}}
                              <div class="col-md-11 mt-2">
                                <div class="col-md-12">
                                  <h5>
                                    <strong style="color:black">
                                      Pricing Details
                                    </strong>
                                  </h5>
                                </div>
                                <div class="form-group col-md-4">
                                  <input type="number" placeholder="Starting price" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="starting_price">
                                  @error("starting_price")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-4">
                                  <select type="text"  placeholder="Denomination" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="denomination">
                                      <option disabled selected value="">Denomination</option>
                                      <option value=""></option>
                                  </select>
                                  @error("denomination")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-4">
                                  <select type="text"  placeholder="Append to" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="append_to">
                                      <option disabled selected value="">Append to</option>
                                      <option value=""></option>
                                  </select>
                                  @error("append_to")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>

                              {{-- Property Address Details --}}
                              <div class="col-md-12 mt-2">
                                <div class="col-md-12">
                                  <h5>
                                    <strong style="color:black">
                                      Address details
                                    </strong>
                                  </h5>
                                </div>
                                <div class="form-group col-md-5 mr-5">
                                  <select type="text" placeholder="State" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="state">
                                    <option selected disabled value="">State</option>
                                    <option value=""></option>
                                  </select>
                                  @error("state")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5 ml-5">
                                  <input type="text"  placeholder="Localty" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="localty">
                                  @error("localty")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5 mr-5">
                                  </label> 
                                  <input type="text" placeholder="Area" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="area">
                                  @error("area")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5 ml-5">
                                  <input type="text"  placeholder="Street/Estate/Neighborhood" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="street">
                                  @error("street")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group col-md-5">
                                  <input type="checkbox"  placeholder="Street/Estate/Neighborhood" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  name="installment">
                                  <strong style="color: black;font-size:15px">
                                    Installment payment
                                  </strong> 
                                  @error("installment")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>

                              {{-- Payment Method --}}
                              <div class="col-md-12 mt-2">
                                <div class="col-md-3">
                                  <h5>
                                    <strong style="color:black;font-size:15px;">
                                      Select Payment Methods
                                    </strong>
                                  </h5>
                                </div>
                                <div class="col-md-2">
                                  <select type="text" placeholder="Payment Method"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="payment_mthd">
                                    <option selected disabled value="">Monthly</option>
                                    <option value=""></option>
                                  </select>
                                  @error("payment_mthd")
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <div class="form-group col-md-3 mr-4">
                                    <input type="text" placeholder="Initial Payment" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                      class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="init_pay">
                                    @error("init_pay")
                                      <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
  
                                  <div class="form-group col-md-4 pl-5 mr-5">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                      class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                      focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="init_denomination">
                                    <option disabled selected value="">Denomination</option>
                                    <option value=""></option>
                                    </select>
                                    @error("init_denomination")
                                      <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
  
                                  <div class="form-group col-md-3 ml-4" >
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                      class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="init_append">
                                    <option disabled selected value="">Append to</option>
                                    <option value=""></option>
                                    </select>
                                    @error("init_append")
                                      <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <div class="form-group col-md-3 mr-4">
                                    <input type="text" placeholder="Subsequent Payment" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                      class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="subs_pay">
                                    @error("subs_pay")
                                      <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
                                  <div class="form-group col-md-4 pl-5 mr-5">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                      class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                      focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="subs_denomination">
                                    <option disabled selected value="">Denomination</option>
                                    <option value=""></option>
                                    </select>
                                    @error("subs_denomination")
                                      <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
                                  <div class="form-group col-md-3 ml-4" >
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                      class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="subs_append">
                                    <option disabled selected value="">Append to</option>
                                    <option value=""></option>
                                    </select>
                                    @error("subs_append")
                                      <span class="text-danger">{{$message}}</span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                              {{-- Property Info --}}
                              <div class="col-md-12 mt-2">
                                <h5>
                                  <strong style="color:black;font-size:17px;">
                                    Property Info 
                                  </strong>
                                  <strong style="color: black;font-size:13px">
                                    (Please thick the available once for your property)
                                  </strong>  
                                </h5>
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  placeholder="Street/Estate/Neighborhood" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="C_of_O">
                                <strong style="color: black;font-size:15px">
                                  C of O
                                </strong> 
                                @error("C_of_O")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="survey_plan">
                                <strong style="color: black;font-size:15px">
                                  Survey Plan
                                </strong> 
                                @error("survey_plan")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="deed_ass">
                                <strong style="color: black;font-size:15px">
                                  Deed of Assignment
                                </strong> 
                                @error("deed_ass")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="land_receipt">
                                <strong style="color: black;font-size:15px">
                                  Land/Property Reciept
                                </strong> 
                                @error("land_receipt")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="grant_prob">
                                <strong style="color: black;font-size:15px">
                                  Grant of Probate
                                </strong> 
                                @error("grant_prob")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="deed_mortgage">
                                <strong style="color: black;font-size:15px">
                                  Deed of Mortgage
                                </strong> 
                                @error("deed_mortgage")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="deed_gift">
                                <strong style="color: black;font-size:15px">
                                  Deed of Gift
                                </strong> 
                                @error("deed_gift")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <input type="checkbox"  style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                  class="form-group mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="property_doc">
                                <strong style="color: black;font-size:15px">
                                  Property Document
                                </strong> 
                                @error("property_doc")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                             
                              <div class="form-group col-md-12">
                                <label for="" style="color: black;font-size:15px"><b>Description</b></label>
                                <textarea type="text"  placeholder="Describe your property" style="border: 1px solid rgb(224, 223, 223); 
                                    background-color:transparent" rows="3"
                                  class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="description"> </textarea>
                                @error("description")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group col-md-12 mt-4 mb-4">
                                <span style="border: 1px solid white; background-color:rgb(240, 240, 240); padding:10px;border-radius:10px">
                                  <a href="" style="font-size: 20px; color:blue"> Click to select Amenities</a>
                                </span>
                              </div>
                              <div class="form-group col-md-12 bg-white">
                                <input id="avatar" type="file" name="avatar" accept="image/png, image/jpeg" />
                                @error("description")
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group col-md-12 d-flex justify-content-end" >
                          <button class="btn btn-outline btn-info" 
                          style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:10px bold"
                           type="button" >Save</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                  </form>
								</div>
							</div>
						</div>
					</div>
				</div>
    </div>
    <!-- /page content -->
@stop
