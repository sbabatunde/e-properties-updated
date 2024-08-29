<form class="form-group" action="{{ route('admin.blacklist.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="Blacklist{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="BlacklistLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header  w-full">
                    <div class="create-post">
                        Blacklist User
                    </div>
                    <div class="post-close">
                        <button type="button" class="btn-close pl-2 pr-2 pt-1 pb-1" data-bs-dismiss="modal"
                            aria-label="Close">
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
                            <label for="reported_by">Reported By?</label>
                            <select type="reported_by" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="reported_by" autocomplete="">
                                <option value="">---Select Reprter--</option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->lastname }}
                                    </option>
                                @endforeach
                            </select>
                            @error('reported_by')
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
                        <div class="form-group name2 col-md-12 " id="sType{{ $user->id }}" style="display: none">
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
