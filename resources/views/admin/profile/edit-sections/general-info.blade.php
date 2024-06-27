<div class="col-md-12">
    <div class="col-md-12">
        <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
            <strong style="color:black">
                My Profile
            </strong>
        </h5>
    </div>
    <div class="form-group col-md-6">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="First Name" value="{{ old('f_name') }}" name="f_name">
        @error('f_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Last Name" value="{{ old('l_name') }}" name="l_name">
        @error('l_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-12">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="bus_name" placeholder="Business Name" value="{{ old('bus_name') }}">
        @error('bus_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12 mt-2">
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
            placeholder="Business Image" value="{{ old('busi_img') }}" name="busi_img">
        @error('busi_img')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="password" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Password" value="{{ old('password') }}" name="password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="password" style="border: 1px solid rgb(224, 223, 223);border-radius:7px;"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Confirm Password" value="{{ old('confirm_password') }}" name="confirm_password">
        @error('confirm_password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
