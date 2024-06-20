<form id="bidPlacement" class="form-group" action="{{ route('admin.media.post') }}" method="POST"
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
                        <div>
                            <label for="imageUpload">
                                <img src="path_to_your_image_icon" alt="Image" width="100" height="100">
                                <input type="file" id="imageUpload" name="file" accept="image/jpeg,image/png"
                                    style="display:none;">
                            </label>
                            <label for="videoUpload">
                                <img src="path_to_your_video_icon" alt="Video" width="100" height="100">
                                <input type="file" id="videoUpload" name="file" accept="video/mp4,video/webm"
                                    style="display:none;">
                            </label>
                        </div>
                        <input type="hidden" name="type" id="uploadType">
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
