<div class="form-group col-md-12">
    <label for="" style="color: black;font-size:15px"><b>Description</b></label>
    <textarea required type="text" placeholder="Describe your property"
        style="border: 1px solid rgb(224, 223, 223); 
        background-color:transparent" rows="3"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="description" value="{{ old('description') }}"> </textarea>
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-12 mt-4 mb-4">
    <span style="border: 1px solid white; background-color:rgb(240, 240, 240); padding:10px;border-radius:10px">
        <span style="font-size: 20px; color:purple"> Select Property Thumbnail</span>
    </span>
</div>
<div class="form-group col-md-12 bg-white flex" style="height:20vh">
    <input required id="thumbnail" type="file" name="thumbnail" accept="image/png, image/jpeg"
        style="float-left:50%" />
    @error('thumbnail')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group col-md-12 mt-4 mb-4">
    <span style="border: 1px solid white; background-color:rgb(240, 240, 240); padding:10px;border-radius:10px">
        <span style="font-size: 20px; color:blue"> Click to select Amenities</span>
    </span>
</div>
<div class="form-group col-md-12 bg-white flex" style="height:20vh">
    <input required id="avatar" type="file" name="amenities[]" multiple accept="image/png, image/jpeg"
        style="float-left:50% " />
    @error('amenities')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
