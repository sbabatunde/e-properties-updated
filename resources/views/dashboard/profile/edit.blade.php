<div class="pl-5 " id="editProfile" style="display:none;border: 2px solid #e1e3f0;border-radius:15px;background-color: #edeef5;padding:3vw 0vw 0vw 0vw">
    <form class="form" action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="col-md-12">
                                <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                    <strong  style="color:black">
                                        My Profile
                                    </strong>
                                </h5>
                            </div>
                            <div class="form-group col-md-6 pr-5">
                                <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="First Name" value="{{old('f_name')}}" name="title">
                                @error("f_name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pl-5">
                                <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Last Name" value="{{old('l_name')}}" name="title">
                                @error("l_name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="bus_name" placeholder="Business Name">
                            </div>
                        </div>
                        <div class="col-md-11 mt-2">
                            <div class="col-md-12">
                                <h5>
                                    <strong style="color:black">
                                        Upload Business Image
                                    </strong>
                                </h5>
                            </div>
                            <div class="form-group col-md-12 d-flex">
                                <input type="file" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control  mt-1 pb-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="busi_img" value="{{old('busi_img')}}" name="title">
                                @error("busi_img")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pr-5">
                                <input type="password" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Password" value="{{old('password')}}" name="title">
                                @error("password")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pl-5">
                                <input type="password" style="border: 1px solid rgb(224, 223, 223);border-radius:7px;"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Confirm Password" value="{{old('confirm_password')}}" name="title">
                                @error("confirm_password")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 pt-3">
                            <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                <strong  style="color:black">
                                    Contact Information
                                </strong>
                            </h5>
                        </div>
                        <div class="col-md-11 mt-2">
                            <div class="form-group col-md-4">
                                <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="First Name" value="{{old('country_code')}}" name="title">
                                    <option selected disabled value="">Country Code</option>
                                    <option>+234</option>
                                </select>
                                @error("country_code")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <input type="number"  placeholder="Phone Number" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="phone">
                                @error("phone")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <input type="number"  placeholder="WhatsApp Number" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="whatsApp_no">
                                @error("whatsApp_no")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email"  placeholder="Email Address" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="email">
                                @error("email")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 pt-3">
                                <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                    <strong  style="color:black">
                                        Address Details
                                    </strong>
                                </h5>
                            </div>

                            <div class="col-md-12 mt-1">
                                <div class="form-group col-md-6 pr-5">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="State" value="{{old('state')}}" name="state">
                                        <option selected disabled value="">State</option>
                                        <option>OYO</option>
                                    </select>
                                    @error("state")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 pl-5">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="Axis" value="{{old('axis')}}" name="axis">
                                        <option selected disabled value="">Axis</option>
                                        <option>+234</option>
                                    </select>
                                    @error("axis")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                    <strong  style="color:black">
                                        About Your Organisation
                                    </strong>
                                </h5>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea type="text" rows="5" style="border: 1px solid rgb(224, 223, 223);border-radius:7px;
                                background-color:transparent"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="About Your Organization" value="{{old('org_desc')}}" name="org_desc"></textarea>
                                @error("org_desc")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <textarea type="text" rows="5" style="border: 1px solid rgb(224, 223, 223);border-radius:7px;
                                background-color:transparent"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Services Your Organization Provides..." value="{{old('org_service')}}" name="org_service"></textarea>
                                @error("org_service")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pr-5">
                                <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="State" value="{{old('busi_state')}}" name="busi_state">
                                    <option selected disabled value="">Business State</option>
                                    <option>OYO</option>
                                </select>
                                @error("busi_state")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pl-5">
                                <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    value="{{old('busi_axis')}}" name="busi_axis">
                                    <option selected disabled value="">Business Axis</option>
                                    <option>+234</option>
                                </select>
                                @error("busi_axis")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    value="{{old('busi_cat')}}" name="busi_cat">
                                    <option selected disabled value="">Business Category</option>
                                    <option>+234</option>
                                </select>
                                @error("busi_cat")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 pt-2">
                                <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                    <strong  style="color:black">
                                        Social Media
                                    </strong>
                                </h5>
                            </div>
                            <div class=" col-md-12">
                                <div class="form-group col-md-3">
                                    <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="Facebook" value="{{old('fb')}}" name="fb">
                                    </select>
                                    @error("fb")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="Twitter" value="{{old('twitter')}}" name="twitter">
                                    </select>
                                    @error("twitter")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="LinkedIn" value="{{old('linked_in')}}" name="linked_in">
                                    </select>
                                    @error("linked_in")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="Instagram" value="{{old('instagram')}}" name="instagram">
                                    </select>
                                    @error("instagram")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group col-md-10 mr-4 pt-4 d-flex justify-content-end" >
                <button class="btn btn-outline btn-info mr-3"
                style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:20px bold;
                border-radius:10px; width:6em"
                type="button" >Cancel</button>
                <button type="submit" class="btn"
                style="color:white;background-color:#394293;border: 2px solid #394293;font-size:20px bold;
                border-radius:10px; width:6em">Submit</button>
            </div>
        </div>
    </form>
</div>
