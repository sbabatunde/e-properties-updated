<div class="col-md-12 mt-2">
    <div class="col-md-12">
        <h5>
            <strong style="color:black">
                Address details
            </strong>
        </h5>
    </div>
    <div class="form-group col-md-5 ">
        <select type="text" placeholder="State" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="state" required>
            <option selected disabled value="">State</option>
            <option>Ogun</option>
            <option>Lagos</option>
            <option>Oyo</option>
            <option>Abia</option>
            <option>Rivers</option>
            <option>Nassarawa</option>
            <option>Kano</option>
        </select>
        @error('state')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-5">
        <input type="text" placeholder="Localty" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="localty" required>
        @error('localty')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-5 ">
        </label>
        <input type="text" placeholder="Area" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="area" required>
        @error('area')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-5">
        <input type="text" placeholder="Street/Estate/Neighborhood"
            style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="street" required>
        @error('street')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-5">
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
