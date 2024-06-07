    <div class="row col-md-10 " id="tenantForm" style="display: block">
        <form class="d-inline" method="POST" action="{{route('user.register')}}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="user_type" value="tenant" hidden>
            <div class="form-group name2 col-md-12 ">
                <input type="text" name="name"  placeholder="Full Name"
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
                <button type="submit" class="btn btn-success form-control " style="background-color: #394293;cursor: pointer;">
                    <strong>
                        {{ __('Sign Up') }}
                    </strong>  
                </button>
            </div>
        </form>
    </div>
           
