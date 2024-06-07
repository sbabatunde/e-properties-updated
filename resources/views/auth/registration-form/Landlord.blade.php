    <div class="row col-md-10" id="landlordForm" style="display: none">
        <form class="d-inline" method="POST" action="{{route('user.register')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group name2 col-md-12 ">
                <select type="text" name="user_type"  
                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option disabled selected>---Select Account Type---</option>
                    <option value="landlord">Landlord</option>
                    <option value="agent">Agent</option>
                </select>
                
            </div>
            <div class="form-group name2 col-md-12 ">
                <input type="text" name="bussiness_ID"  placeholder="Business ID"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="form-group name2 col-md-12 ">
                <input type="text" name="bussiness_name"  placeholder="Business Name"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="form-group name2 col-md-12 ">
                <input type="email" name="email"  placeholder="Email"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            
            <div class="form-group name2 col-md-12 ">
                <input type="password" name="password"  placeholder="Password"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="form-group name2 col-md-12 ">
                <input type="password" name="password_confirmation"  placeholder="Confirm Password"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <strong style="float: inline-start" class="mt-3">
                    <a href="" style="color: rgb(81, 113, 219);cursor: pointer;">
                        {{ __('Sign in to your Account') }}
                    </a>
                </strong> 
            </div>
            <div class="col-lg-10">
                <button type="submit" class="btn btn-success form-control " style="background-color: #394293; cursor: pointer;">
                    <strong>
                        {{ __('Sign Up') }}
                    </strong>  
                </button>
            </div>
        </form>
    </div>
           
