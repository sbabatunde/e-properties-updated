<div class="row col-md-12">
    <div class="form-group name2 col-md-12 ">
        <select type="text" name="location"  pl
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option disabled selected >Location</option>
            <option>Island</option>
            <option>Mainland</option>
            <option>Ogun</option>
        </select>
        @error("location")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group name2 col-md-6 ">
        <select type="text" name="area"  
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option disabled selected>---Select Area---</option>
            <option>Igando</option>
            <option>Idumota</option>
            <option>Sango</option>
        </select>
        @error("area")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group name2 col-md-6 ">
        <input type="number" name="budget"  placeholder="Budget (₦)"  
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
         focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
         @error("budget")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group name2 col-md-12 ">
        <input type="text" name="short_description"  placeholder="Property short description e.g., 3 Bedroom Apartment."
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring
         focus:ring-indigo-200 focus:ring-opacity-50">
         @error("name")
            <span class="text-danger">{{$message}}</span>
         @enderror
    </div>
    <div class="form-group name2 col-md-12 ">
        <textarea type="text" name="further_info"  placeholder="Further Information" rows="5"  class="form-control mt-1 block w-full
         rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
         @error("further_info")
            <span class="text-danger">{{$message}}</span>
         @enderror
    </div>
    <div class="form-group name2 col-md-12 ">
        <input type="text" name="name"  placeholder="Name"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring
         focus:ring-indigo-200 focus:ring-opacity-50">
         @error("name")
            <span class="text-danger">{{$message}}</span>
         @enderror
    </div>
    
    <div class="form-group name2 col-md-4 ">
        <input type="text" name="country"  placeholder="Country"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 
        focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error("country")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group name2 col-md-4 ">
        <input type="text" name="phone_no"  placeholder="Phone Number"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300
         focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
         @error("phone_no")
            <span class="text-danger">{{$message}}</span>
         @enderror
    </div>
    <div class="form-group name2 col-md-4 ">
        <input type="email" name="email"  placeholder="Email Address"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300
        focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error("email")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>