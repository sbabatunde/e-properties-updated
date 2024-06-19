<form id="bidPlacement" class="form-group" action="{{ route('user.auction.place-bid.amount') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="addPost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header  w-full">
                    <div class="create-post">
                        Create Post
                    </div>
                    <div class="post-close">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <div><strong>X</strong></div>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="post-user-img">
                        <img class="user-pic"
                            src="{{ !empty(Auth::user()->photo) ? url(asset(Auth::user()->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                            alt="profile">
                        <p>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                    </div>
                    <div class="col-md-12 post-form-custom">
                        <label for="fileInput">Post a media file</label>
                        <input type="file" id="fileInput" name="photo">
                        <label for="fileInput" class="post-file-upload">
                            <i class="fa fa-image"></i>
                            <i class="fa fa-archive"></i>
                        </label>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline">Post</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
