<form class="form-group" action="{{ route('admin.users.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="addAdminUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header  w-full">
                    <div class="create-post">
                        Add Admin User
                    </div>
                    <div class="post-close">
                        <button type="button" class="btn-close pl-2 pr-2 pt-1 pb-1" data-bs-dismiss="modal"
                            aria-label="Close">
                            <div><strong>X</strong></div>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mt-1 justify-content-center">
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Firstname" required autocomplete="" id="firstname" required
                                name="firstname">
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Lastname" required autocomplete="" id="lastname" required name="lastname">
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="email" autocomplete="" id="email" required name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Photo">Photo</label>
                            <input type="file" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px" accept="jpg"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                required name="Photo">
                            @error('Photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group name2 col-md-12" id="enclosure" style="display: none">
                            <select type="text" name="service_type" id="service_type"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline">Edit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
