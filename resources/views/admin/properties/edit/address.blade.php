<div class="col-md-12 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                Edit Address Details
            </strong>
        </h5>
    </div>

    <!-- State Selection -->
    <div class="form-group col-md-5">
        <select type="text" placeholder="State" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="state" required>
            <option selected disabled value="">State</option>
            <option value="Ogun" {{ old('state', $property->state) == 'Ogun' ? 'selected' : '' }}>Ogun</option>
            <option value="Lagos" {{ old('state', $property->state) == 'Lagos' ? 'selected' : '' }}>Lagos</option>
            <option value="Oyo" {{ old('state', $property->state) == 'Oyo' ? 'selected' : '' }}>Oyo</option>
            <option value="Abia" {{ old('state', $property->state) == 'Abia' ? 'selected' : '' }}>Abia</option>
            <option value="Rivers" {{ old('state', $property->state) == 'Rivers' ? 'selected' : '' }}>Rivers</option>
            <option value="Nassarawa" {{ old('state', $property->state) == 'Nassarawa' ? 'selected' : '' }}>Nassarawa
            </option>
            <option value="Kano" {{ old('state', $property->state) == 'Kano' ? 'selected' : '' }}>Kano</option>
        </select>
        @error('state')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Locality Input -->
    <div class="form-group col-md-5">
        <input type="text" placeholder="Locality" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="locality" value="{{ old('locality', $property->localty) }}" required>
        @error('locality')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Area Input -->
    <div class="form-group col-md-5">
        <input type="text" placeholder="Area" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="area" value="{{ old('area', $property->area) }}" required>
        @error('area')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Street Input -->
    <div class="form-group col-md-5">
        <input type="text" placeholder="Street/Estate/Neighborhood"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="street" value="{{ old('street', $property->street) }}" required>
        @error('street')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Installment Payment Checkbox -->
    <div class="form-group col-md-5">
        <label class="container">
            <input type="checkbox" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                class="rounded-md shadow-sm border-gray-300 mt-2" name="installment" value="Yes"
                {{ old('installment', $property->installment) == 'Yes' ? 'checked' : '' }}>
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
