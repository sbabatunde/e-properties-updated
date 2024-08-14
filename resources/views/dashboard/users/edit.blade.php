<form class="form-group" action="{{ route('admin.users.edit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="editUser{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="addPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header  w-full">
                    <div class="create-post">
                        Edit User
                    </div>
                    <div class="post-close">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <div><strong>X</strong></div>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="post-user-img mb-0">
                        <img class="user-pic"
                            src="{{ !empty($user->photo) ? url(asset($user->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                            alt="profile">
                        <p>{{ $user->firstname }} {{ $user->lastname }}</p>
                    </div>
                    <div class="col-md-12 mt-1 justify-content-center">
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Firstname" required autocomplete="" value="{{ $user->firstname }}"
                                id="name" required name="firstname">
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Lastname" required autocomplete="" value="{{ $user->lastname }}"
                                id="name" required name="lastname">
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
                                placeholder="email" autocomplete="" value="{{ $user->email }}" id="name" required
                                name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user_type">User Type</label>
                            <select type="user_type" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="user_type" autocomplete="" id="typeSelect{{ $user->id }}"
                                onchange="userType({{ $user->id }})">
                                <option selected value="{{ $user->user_type }}">{{ $user->user_type }}</option>
                                <option value="agent">Agent</option>
                                <option value="tenant">Tenant</option>
                                <option value="landlord">Landlord</option>
                                <option value="service_provider">Service Provider</option>
                            </select>
                            @error('user_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6" id="bname{{ $user->id }}" style="display: none">
                            <label for="business_name">Business Name</label>
                            <input type="business_name" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="business_name" autocomplete="" value="{{ $user->business_name }}"
                                id="name" required name="business_name">
                            @error('business_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group business col-md-6" id="bID{{ $user->id }}" style="display: none">
                            <label for="business_ID">Business ID</label>
                            <input type="business_ID" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="business_ID" autocomplete="" value="{{ $user->business_ID }}"
                                id="name" required name="business_ID">
                            @error('business_ID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group name2 col-md-12 " id="sType{{ $user->id }}"
                            style="display: none">
                            @php
                                $categories = App\Models\Site\ServiceCategory::get();
                            @endphp
                            <select type="text" name="category" id="service_category"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option disabled selected>---Select Service Type---</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->slug }}">{{ $item->category }}</option>
                                @endforeach
                            </select>
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
