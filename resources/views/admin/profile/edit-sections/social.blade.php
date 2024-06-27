<div class="col-md-12 pt-2">
    <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
        <strong style="color:black">
            Social Media
        </strong>
    </h5>
</div>
<div class=" col-md-12">
    <div class="form-group col-md-3">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Facebook" value="{{ old('fb') }}" name="fb">
        </select>
        @error('fb')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Twitter" value="{{ old('twitter') }}" name="twitter">
        </select>
        @error('twitter')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="LinkedIn" value="{{ old('linked_in') }}" name="linked_in">
        </select>
        @error('linked_in')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Instagram" value="{{ old('instagram') }}" name="instagram">
        </select>
        @error('instagram')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
