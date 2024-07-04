<div class="my-profile">

    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="col-md-11">
                            <div class="row mt-5" style="border-top: 1px solid #bdbec7;border-bottom: 1px solid #bdbec7;">
                                <div class="message-header">
                                    <div class="col-md-3">
                                        <h4 class="pt-3 pb-0">
                                            <strong style="color:black;">
                                                inbox({{ $inbox }})
                                            </strong>
                                        </h4>
                                    </div>
                                    <div class="message-button">
                                        <button onclick="refresh()" class="btn message-btn">
                                            Refresh
                                        </button>
                                        <button onclick="read()" class="btn message-btn">
                                            Mark as Read
                                        </button>
                                        <button onclick="trash()" class="btn message-btn">
                                            Trash
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <form class="form" action="{{ route('admin.profile.edit.additional', $user->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row pt-3 ">
                                    <div class="col-md-12 message-search">
                                        <label for="fileInput">Search Email</label>
                                        <input type="file" id="fileInput" name="photo">
                                        <label for="fileInput" class="custom-file-upload">Search</label>
                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                            <div class="all-group-btn container">
                                <button onclick="myProfile()" class="all-group-btn active-btn-group">
                                    <strong>
                                        Inbox({{ $inbox }})
                                    </strong>
                                </button>
                                <button onclick="editProfile()" class="all-group-btn active-btn-group">
                                    <strong>
                                        Trash(0)
                                    </strong>
                                </button>
                            </div>
                            <div class="message-table">
                                @include('admin.property-messages.table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
