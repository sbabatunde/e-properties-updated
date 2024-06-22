@php
    $categories = App\Models\Site\ServiceCategory::get();
@endphp

<div class="row col-md-10" id="servProvForm" style="display: none">
    <form class="d-inline" method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="user_type" value="service_provider" hidden>
        <div class="form-group name2 col-md-12 ">
            <select type="text" name="category" id="service_category"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option disabled selected>---Select Service Type---</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->slug }}">{{ $item->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group name2 col-md-12" id="enclosure" style="display: none">
            <select type="text" name="service_type" id="service_type"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

            </select>
        </div>

        <div class="form-group name2 col-md-12 ">
            <input type="text" name="bussiness_ID" placeholder="Business ID"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div class="form-group name2 col-md-12 ">
            <input type="text" name="bussiness_name" placeholder="Business Name"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div class="form-group name2 col-md-12 ">
            <input type="email" name="email" placeholder="Email"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="form-group name2 col-md-12 ">
            <input type="password" name="password" placeholder="Password"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div class="form-group name2 col-md-12 ">
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <strong style="float: inline-start" class="mt-3">
                <a href="" style="color: rgb(81, 113, 219);cursor: pointer;">
                    {{ __('Sign in to your Account') }}
                </a>
            </strong>
        </div>
        <div class="col-lg-10">
            <button type="submit" class="btn btn-success form-control "
                style="background-color: #394293;cursor: pointer;">
                <strong>
                    {{ __('Sign Up') }}
                </strong>
            </button>
        </div>
    </form>
</div>
