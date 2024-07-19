<div class="col-md-12 mt-2 justify-content-center">
    <div class="form-group col-md-5">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Category Title" autocomplete="" value="{{ old('category') }}" id="name" required
            name="category">
        @error('category')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-5 ">
        <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            id="slug" placeholder="Category Slug" autocomplete="" value="{{ old('slug') }}" id="name"
            required name="slug">
        @error('slug')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group hidden col-md-5" id="cats_list">
        <select type="text" placeholder="" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="building_category_slug">
            <optgroup>
                <option value="">---Select Category --- </option>
                @if ($categories && $categories->count() > 0)
                    @foreach ($categories as $category)
                        <option value="{{ $category->slug }}">{{ $category->category }}
                        </option>
                    @endforeach
                @endif
            </optgroup>
        </select>
        @error('building_category_slug')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group mt-4 col-md-12 flex align-item-center">
        <label class="container">
            <input type="radio" value="main_category" onclick="show1();" checked
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px" id="switchery"
                class="rounded-md shadow-sm border-gray-300 mt-1" name="type">
            <strong style="color: black;font-size:15px" class="ml-5">
                Category
            </strong>
            <span class="checkmark"></span>
        </label>
        @error('type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group  col-md-12 mt-2 flex align-item-center">
        <label class="container">
            <input type="radio" value="sub_category" onclick="show2();"
                style="border: 1px solid rgb(224, 223, 223);border-radius:7px" id="switchery"
                class="rounded-md shadow-sm border-gray-300 mt-1" name="type">
            <strong style="color: black;font-size:15px" class="ml-5">
                SubCategory
            </strong>
            <span class="checkmark"></span>
        </label>
        @error('type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
