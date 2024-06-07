<div class="pl-5 " id="landListings" style="display:block;border: 2px solid #e1e3f0;border-radius:15px;background-color: #edeef5;padding:3vw 0vw 0vw 0vw">
        <form class="form" action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-11 mt-2">
                                <div class="form-group col-md-4 pb-3">
                                    <input type="text"  placeholder="Search by title" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                    class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="title">
                                    @error("title")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 pb-3">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="{{old('cat_srch')}}" name="cat_srch">
                                        <option selected disabled value="">Category</option>
                                        <option></option>
                                    </select>
                                    @error("cat_srch")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 pb-3">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="{{old('type')}}" name="type">
                                        <option selected disabled value="">Types</option>
                                        <option></option>
                                    </select>
                                    @error("type")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4 pb-3">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="{{old('bed')}}" name="bed">
                                        <option selected disabled value="">Bed</option>
                                        <option></option>
                                    </select>
                                    @error("bed")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4 pb-3">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="{{old('price_srch')}}" name="price">
                                        <option selected disabled value="">Price</option>
                                        <option></option>
                                    </select>
                                    @error("price_srch")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4 pb-3">
                                    <select type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="{{old('status')}}" name="status">
                                        <option selected disabled value="">Status</option>
                                        <option></option>
                                    </select>
                                    @error("status")
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
        </form>


