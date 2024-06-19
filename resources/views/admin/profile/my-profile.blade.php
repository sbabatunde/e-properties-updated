<div class="my-profile" id="myProfile" style="display:block;">
    <form class="form" action="{{ route('admin.profile.edit.additional', $user->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="col-md-12">
                                <div class="row"
                                    style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                    <div class="col-md-10">
                                        <h4 class="pt-3 pb-0">
                                            <strong style="color:black;">
                                                Personal Details
                                            </strong>
                                        </h4>
                                    </div>
                                    <div class="col-md-2 pt-2  pb-1">
                                        <button type="submit" class="btn mb-0"
                                            style=";color:white;background-color:#394293;border: 1px solid #394293;
                                        border-radius:10px; width:8em; ">Edit
                                            Profile</button>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-md-12 ">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                {{ Auth::user()->phone }}
                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                Dial Code: {{ Auth::user()->country_code }}
                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                {{ Auth::user()->email }}
                                            </p>
                                        </span>
                                    </div>
                                    <div class="mb-3 profile-span">
                                        <i class="fa fa-user 2x"
                                            style="color: black;font-weight: 600 bold;font-size:3rem">
                                        </i>
                                    </div>
                                    <div class="col-md-12 form-custom">
                                        <label for="fileInput">Choose a file</label>
                                        <input type="file" id="fileInput" name="photo">
                                        <label for="fileInput" class="custom-file-upload">Change Photo</label>
                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
