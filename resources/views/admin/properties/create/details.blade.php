<div class="col-md-12">
    <div class="d-flex">
        <h5 style="color: black;font-size:20px;font-weight:650" class="ml-3 mr-3">
            Property details
        </h5>
        <div class="form-group col-md-6 flex align-item-center">
            <label class="container">
                <input type="checkbox" name="auction" value="Yes"
                    style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                    class="rounded-md shadow-sm border-gray-300 mt-1">
                <strong style="color: black;font-size:15px" class="mt-1 ml-5">
                    Auction Properties
                </strong>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Title" autocomplete="" value="{{ old('title') }}" required name="title">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        <select id="category-type" required type="text"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="category" value={{ old('category') }}>
            <option disabled selected value="">---Select Property Category---</option>
            @foreach ($category as $item)
                <option value="{{ $item->category_slug }}">{{ $item->category_name }}</option>
            @endforeach

        </select>
        @error('category')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        <select id="property_type" required type="text"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="type" value={{ old('type') }}>
            <option disabled selected value="">---Select Property Type---</option>
        </select>
        @error('type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Show Hide Sub Category --}}
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="landlord" required>
            <option disabled selected value="">Landlord in building?</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        @error('landlord')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="furnishing" required>
            <option disabled selected value="">Furnishing</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        @error('furnishing')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-4 ">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="status" required>
            <option disabled selected value="">--Select Propert Status---</option>
            <option>Let</option>
            <option>Sales</option>
            <option>Rent</option>
        </select>
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-4 ">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
            name="bedrooms" required>
            <option disabled selected value="">Bedrooms</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
        @error('bedrooms')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-4 ">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:rin3g focus:ring-indigo-200 focus:ring-opacity-50"
            name="bathrooms" required>
            <option disabled selected value="">Bathrooms</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
        @error('bathrooms')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-4 ">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="toilet" required>
            <option disabled selected value="">Toilets</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
        @error('toilet')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
