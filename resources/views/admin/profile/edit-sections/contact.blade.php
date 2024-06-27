<div class="col-md-12 pt-3">
    <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
        <strong style="color:black">
            Contact Information
        </strong>
    </h5>
</div>
<div class="form-group col-md-4">
    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="Country Code" value="{{ old('country_code') }}" name="country_code">
        <option selected disabled value="">Country Code</option>
        <option>+234</option>
    </select>
    @error('country_code')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-4">
    <input type="number" placeholder="Phone Number" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="phone" value="{{ old('phone') }}">
    @error('phone')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-4">
    <input type="number" placeholder="WhatsApp Number" value="{{ old('whatsApp_no') }}"
        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="whatsApp_no">
    @error('whatsApp_no')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-12">
    <input type="email" placeholder="Email Address" value="{{ old('email') }}"
        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="email">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
