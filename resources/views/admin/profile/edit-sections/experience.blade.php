<div class="col-md-12 pt-2">
    <h5 class="pt-2 pb-2" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
        <strong style="color:black">
            Experience Length
        </strong>
    </h5>
</div>
<div class="form-group col-md-12">
    <input type="email" value="{{ old('experience') }}" name="experience"
        style="border: 1px solid rgb(224, 223, 223);border-radius:7px" placeholder="e.g. 2 years, over 2 years experience"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    @error('experience')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
