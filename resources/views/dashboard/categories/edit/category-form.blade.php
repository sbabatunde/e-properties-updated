<div id="mainCat" style="display: none">
    <form class="form" action="{{ route('admin.categories.update', $category->category->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-11">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12 mt-2 justify-content-center">
                            <div class="form-group col-md-5">
                                <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Category Title" autocomplete=""
                                    value="{{ $category->category->category }}" id="name" required name="category">
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-5 ">
                                <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    id="slug" placeholder="Category Slug" autocomplete=""
                                    value="{{ old('slug'), $category->category->slug }}" id="name" required
                                    name="slug">
                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="text" name="old_slug" hidden value="{{ $category->category->slug }}">
                            <div class="form-group mt-4 col-md-12 flex align-item-center">
                                <label class="container">
                                    <input type="radio" value="main_category" onclick="showForm(this);" checked
                                        style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        id="main_category" class="rounded-md shadow-sm border-gray-300 mt-1"
                                        name="type">
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
                                    <input type="radio" value="sub_category" onclick="showForm(this);"
                                        style="border: 1px solid rgb(224, 223, 223);border-radius:7px" id=""
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

                    </div>
                </div>
                <div class="item form-group  col-md-12 mt-4">
                    <div class="col-md-6 col-sm-6 offset-md-3 mt-2">
                        <button class="btn btn-outline btn-info"
                            style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:10px bold"
                            type="button">Cancel</button>
                        <button type="submit" class="btn btn-success"
                            style="color:#fff;background-color:#394293;border: 2px solid #394293;font-size:10px bold">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
