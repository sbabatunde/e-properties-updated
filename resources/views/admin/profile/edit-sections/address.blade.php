<div class="col-md-12 pt-3">
    <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
        <strong style="color:black">
            Address Details
        </strong>
    </h5>
</div>

<div class="col-md-12 mt-1">
    <div class="form-group col-md-6 pr-5">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="State" value="{{ old('state') }}" name="state">
            <option selected disabled value="">State</option>
            <option>OYO</option>
        </select>
        @error('state')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6 pl-5">
        <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Axis" value="{{ old('axis') }}" name="axis">
            <option selected disabled value="">Axis</option>
            <option>+234</option>
        </select>
        @error('axis')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
