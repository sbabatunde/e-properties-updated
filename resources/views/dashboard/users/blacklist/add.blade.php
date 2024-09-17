<form class="form-group" action="{{ route('admin.blacklist.add', $user->id) }}" method="POST"
    enctype="multipart/form-data">
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
                        <input type="hidden" value="{{ $user->user_type }}" name="category">
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
                            <label for="business_name">Business Name</label>
                            <input type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Enter business name" required autocomplete=""
                                value="{{ $user->business_name }}" id="name" required name="business_name">
                            @error('business_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group business col-md-6">
                            <label for="org_description">Brief Description</label>
                            <input type="text" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="What does the organization deal in" autocomplete=""
                                value="{{ $user->org_service }}" id="name" required name="org_description">
                            @error('org_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reported_by">Reported By?</label>
                            <select type="text" name="reported_by" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="reported_by" autocomplete="">
                                <option value="">---Select Reporter--</option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->lastname }}
                                    </option>
                                @endforeach
                            </select>
                            @error('reported_by')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group business col-md-6">
                            <label for="reported_on">Reported On</label>
                            <input type="date" required
                                style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="What does the organization deal in" autocomplete=""
                                value="{{ $user->org_service }}" id="name" required name="reported_on">
                            @error('reported_on')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group business col-md-12">
                            <label for="org_description">Reason for Blacklisting</label>
                            <textarea type="text" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
                                class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="What was the reported offence" required name="reason"></textarea>
                            @error('reason')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
