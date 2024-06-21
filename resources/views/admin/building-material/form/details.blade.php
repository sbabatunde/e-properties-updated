<div class="col-md-12">
    <div class="form-group col-md-6">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Material title" autocomplete="" value="{{ old('title') }}" required name="title">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div id="" class="form-group col-md-3">
        <select id="subCat" required onchange="subCategory(this)" type="text"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            autocomplete="" value="{{ old('category') }}" name="category">
            <option disabled selected value="">---Select Material Category---</option>
            <option>Roofing</option>
            <option>Dry Lining and Plaster</option>
        </select>
        @error('category')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div id="" class="form-group col-md-3">
        <select id="subCat" required type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            autocomplete="" value="{{ old('type') }}" name="type">
            <option disabled selected value="">---Select Material Type---</option>
            <option>Roofing Hammer</option>
            <option>Roofing Nail</option>
        </select>
        @error('type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


{{-- Address Details Begins --}}
<div class="col-md-12 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                Address details
            </strong>
        </h5>
    </div>

    <div class="form-group col-md-12">
        <input type="text" placeholder="Address" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            autocomplete="" value="{{ old('address') }}" name="address" required>
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
{{-- Address Details Ends --}}


{{-- Pricing Details Begins --}}
<div class="col-md-12 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                Pricing details
            </strong>
        </h5>
    </div>

    <div class="form-group col-md-6">
        <div class="form-group name2 col-md-12">
            <input type="text" name="price" id="currency-field"
                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                pattern="^\₦ \d{1,3}(,\d{3})*(\.\d+)?₦" required data-type="currency" placeholder="Price(₦)"
                autocomplete="" value="{{ old('price') }}" style="border: 1px solid #2626ac">
        </div>

        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="text" placeholder="Quantity" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            autocomplete="" value="{{ old('quantity') }}" name="quantity" required>
        @error('quantity')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-12">
        <label class="container">
            <input type="checkbox" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="rounded-md shadow-sm border-gray-300 mt-2" name="installment" value="Yes">
            <strong style="color: black;font-size:15px" class="ml-5">
                Installment payment
            </strong>
            <span class="checkmark"></span>
        </label>
        @error('installment')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

{{-- Description --}}
<div class="col-md-12 mt-2">
    <div class="form-group col-md-12">
        <label for="" style="color: black;font-size:15px"><b>Description</b></label>
        <textarea required type="text" placeholder="Short description of material"
            style="border: 1px solid rgb(224, 223, 223); 
        background-color:transparent" rows="3" autocomplete=""
            value="{{ old('description') }}"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="description"></textarea>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-12 mt-4 mb-4">
        <span style="border: 1px solid white; background-color:rgb(240, 240, 240); padding:10px;border-radius:10px">
            <span style="font-size: 20px; color:purple"> Select Material Thumbnail</span>
        </span>
    </div>
    <div class="form-group col-md-12 bg-white flex" style="height:20vh;text-center">
        <input required id="thumbnail" autocomplete="" value="{{ old('thumbnail') }}" type="file"
            name="thumbnail" accept="image/png, image/jpeg" />
        @error('thumbnail')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
