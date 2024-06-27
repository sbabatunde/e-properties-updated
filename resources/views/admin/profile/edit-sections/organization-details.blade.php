<div class="col-md-12 pt-2">
    <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
        <strong style="color:black">
            About Your Organisation
        </strong>
    </h5>
</div>
<div class="form-group col-md-12">
    <textarea type="text" rows="5"
        style="border: 1px solid rgb(224, 223, 223);border-radius:7px;
        background-color:transparent"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="About Your Organization" value="{{ old('org_desc') }}" name="org_desc"></textarea>
    @error('org_desc')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-12">
    <textarea type="text" rows="5"
        style="border: 1px solid rgb(224, 223, 223);border-radius:7px;
        background-color:transparent"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="Services Your Organization Provides..." value="{{ old('org_service') }}" name="org_service"></textarea>
    @error('org_service')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-6 pr-5">
    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="State" value="{{ old('busi_state') }}" name="busi_state">
        <option selected disabled value="">Business State</option>
        <option>OYO</option>
    </select>
    @error('busi_state')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-6 pl-5">
    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        value="{{ old('busi_axis') }}" name="busi_axis">
        <option selected disabled value="">Business Axis</option>
        <option>+234</option>
    </select>
    @error('busi_axis')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-12">
    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        value="{{ old('business_cat') }}" name="business_cat">
        <option selected disabled value="">Business Category</option>
        <option>+234</option>
    </select>
    @error('business_cat')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
