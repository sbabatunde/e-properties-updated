<div class="col-md-12">
    <div class="d-flex">
        <h5 style="color: black;font-size:20px;font-weight:650" class="ml-3 mr-3">
            Property details
        </h5>
        <div class="form-group col-md-6 flex align-item-center">
            <label class="container">
                <input type="checkbox" name="auction" value="Yes"
                    style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                    class="rounded-md shadow-sm border-gray-300 mt-1"
                    {{ $property->auction == 'Yes' ? 'checked' : '' }}>
                <strong style="color: black;font-size:15px" class="mt-1 ml-5">
                    Auction Properties
                </strong>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>

    <!-- Title Field -->
    <div class="form-group col-md-6">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Title" value="{{ old('title', $property->title) }}" name="title" required>
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Property Category -->
    <div class="form-group col-md-3">
        <select id="category-type" required type="text"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="category">
            <option disabled selected value="">---Select Property Category---</option>
            @foreach ($category as $item)
                <option value="{{ $item->category_slug }}"
                    {{ old('category', $property->category_slug) == $item->category_slug ? 'selected' : '' }}>
                    {{ $item->category_name }}
                </option>
            @endforeach
        </select>
        @error('category')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Property Type -->
    <div class="form-group col-md-3">
        <select id="property_type" required type="text"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="type">
            <option disabled selected value="">---Select Property Type---</option>
            <option value="Residential" {{ old('type', $property->type) == 'Residential' ? 'selected' : '' }}>
                Residential</option>
            <option value="Commercial" {{ old('type', $property->type) == 'Commercial' ? 'selected' : '' }}>Commercial
            </option>
        </select>
        @error('type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Landlord in Building -->
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="landlord" required>
            <option disabled selected value="">Landlord in building?</option>
            <option value="Yes" {{ old('landlord', $property->landlord) == 'Yes' ? 'selected' : '' }}>Yes</option>
            <option value="No" {{ old('landlord', $property->landlord) == 'No' ? 'selected' : '' }}>No</option>
        </select>
        @error('landlord')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Furnishing -->
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="furnishing" required>
            <option disabled selected value="">Furnishing</option>
            <option value="Yes" {{ old('furnishing', $property->furnishing) == 'Yes' ? 'selected' : '' }}>Yes
            </option>
            <option value="No" {{ old('furnishing', $property->furnishing) == 'No' ? 'selected' : '' }}>No</option>
        </select>
        @error('furnishing')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Property Status -->
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="status" required>
            <option disabled selected value="">--Select Property Status---</option>
            <option value="Let" {{ old('status', $property->status) == 'Let' ? 'selected' : '' }}>Let</option>
            <option value="Sale" {{ old('status', $property->status) == 'Sale' ? 'selected' : '' }}>Sale</option>
            <option value="Rent" {{ old('status', $property->status) == 'Rent' ? 'selected' : '' }}>Rent</option>
        </select>
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Bedrooms -->
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="bedrooms" required>
            <option disabled selected value="">Bedrooms</option>
            @foreach ([0, 1, 2, 3, 4, 5, 6] as $i)
                <option value="{{ $i }}"
                    {{ old('bedrooms', $property->bedrooms) == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endforeach
        </select>
        @error('bedrooms')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Bathrooms -->
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="bathrooms" required>
            <option disabled selected value="">Bathrooms</option>
            @foreach ([0, 1, 2, 3, 4, 5, 6] as $i)
                <option value="{{ $i }}"
                    {{ old('bathrooms', $property->bathrooms) == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endforeach
        </select>
        @error('bathrooms')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Toilets -->
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="toilet" required>
            <option disabled selected value="">Toilets</option>
            @foreach ([0, 1, 2, 3, 4, 5, 6] as $i)
                <option value="{{ $i }}" {{ old('toilet', $property->toilet) == $i ? 'selected' : '' }}>
                    {{ $i }}</option>
            @endforeach
        </select>
        @error('toilet')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
