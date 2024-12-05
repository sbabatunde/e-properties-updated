<div class="form-group col-md-12">
    <label for="" style="color: black;font-size:15px"><b>Description</b></label>
    <textarea required type="text" placeholder="Describe your property"
        style="border: 1px solid rgb(224, 223, 223); background-color:transparent" rows="3"
        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="description">{{ old('description', $property->description ?? '') }}</textarea>
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Property Thumbnail Section -->
<div class="form-group col-md-12 mt-4 mb-4">
    <span style="border: 1px solid white; background-color:rgb(240, 240, 240); padding:10px;border-radius:10px">
        <span style="font-size: 20px; color:purple"> Select Property Thumbnail</span>
    </span>
</div>

<div class="form-group col-md-12 bg-white flex" style="height:20vh">
    <input required id="thumbnail" type="file" name="thumbnail" accept="image/png, image/jpeg" style="float-left:50%"
        {{ isset($property->thumbnail) ? '' : 'required' }} />
    @error('thumbnail')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <!-- Display current thumbnail if exists -->
    @if (isset($property->thumbnail))
        <div class="mt-2">
            <img src="{{ asset($property->thumbnail) ?? $property->thumbnail }}" alt="Thumbnail"
                style="width:100px;height:auto;">
        </div>
    @endif
</div>

<!-- Amenities Section -->
<div class="form-group col-md-12 mt-4 mb-4">
    <span style="border: 1px solid white; background-color:rgb(240, 240, 240); padding:10px;border-radius:10px">
        <span style="font-size: 20px; color:blue"> Click to select Amenities</span>
    </span>
</div>

<div class="form-group col-md-12 bg-white flex" style="height:20vh">
    <input required id="avatar" type="file" name="amenities[]" multiple accept="image/png, image/jpeg"
        style="float-left:50%" />
    @error('amenities')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Display current amenities images if available -->
    @if ($property->amenities->count() > 0)
        <div class="mt-2">
            @foreach ($property->amenities as $amenity)
                <img src="{{ asset($amenity->amenities) ?? $amenity->amenities }}" alt="Amenity"
                    style="width:100px;height:auto;margin-right:10px;">
            @endforeach
        </div>
    @endif
</div>
