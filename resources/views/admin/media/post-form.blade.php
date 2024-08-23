<style>
    .preview-container {
        margin-top: 20px;
    }

    .image-preview,
    .video-preview {
        display: none;
        width: 100%;
        height: auto;
        max-height: 300px;
    }

    .video-preview {
        max-height: 200px;
    }

    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: transparent;
        resize: vertical;
    }

    textarea:focus {
        border-color: #007bff;
        /* Change this color to fit your theme */
        outline: none;
    }
</style>


<form id="bidPlacement" class="form-group" action="{{ route('admin.media.post') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="addPost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header w-full">
                    <div class="create-post">Create Post</div>
                    <div class="post-close">
                        <button type="button" class="btn-close pl-2 pr-2 pt-1 pb-1" data-bs-dismiss="modal"
                            aria-label="Close">
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
                                <input type="file" id="imageUpload" name="image" accept="image/jpeg,image/png"
                                    style="display:none;">
                                <i class="fa fa-image" style="cursor: pointer"></i>
                            </label>
                            <label for="videoUpload">
                                <input type="file" id="videoUpload" name="video" accept="video/mp4,video/webm"
                                    style="display:none;">
                                <i class="fa fa-video-camera" style="cursor: pointer"></i>
                            </label>
                        </div>
                        <input type="hidden" name="type" id="uploadType">
                        <div class="preview-container">
                            <img id="imagePreview" class="image-preview" style="display:none;" />
                            <video id="videoPreview" class="video-preview" style="display:none;" controls></video>
                        </div>
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2 post-form-custom">
                        <label for="comment">Comment</label><br>
                        <textarea id="comment" name="comment" rows="2" placeholder="Enter your comment here"></textarea>
                    </div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline">Post</button>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const imageUpload = document.getElementById('imageUpload');
        const videoUpload = document.getElementById('videoUpload');
        const imagePreview = document.getElementById('imagePreview');
        const videoPreview = document.getElementById('videoPreview');
        const uploadType = document.getElementById('uploadType');

        // Handle image upload
        imageUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                uploadType.value = 'image'; // Set type to image
                videoPreview.style.display = 'none'; // Hide video preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Show image preview
                };
                reader.readAsDataURL(file);
            }
        });

        // Handle video upload
        videoUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                uploadType.value = 'video'; // Set type to video
                imagePreview.style.display = 'none'; // Hide image preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    videoPreview.src = e.target.result;
                    videoPreview.style.display = 'block'; // Show video preview
                };
                reader.readAsDataURL(file);
            }
        });
    });

    // Function to resize video
    function resizeVideo(src, width, height) {
        return new Promise((resolve, reject) => {
            const video = document.createElement('video');
            video.src = src;
            video.addEventListener('loadeddata', () => {
                const canvas = document.createElement('canvas');
                canvas.width = width;
                canvas.height = height;
                const ctx = canvas.getContext('2d');

                video.addEventListener('play', function() {
                    ctx.drawImage(video, 0, 0, width, height);
                    canvas.toBlob(blob => {
                        resolve(blob);
                    }, 'video/mp4');
                });

                video.play();
            });
        });
    }
</script>
