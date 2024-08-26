<style>
    .preview-container {
        margin-top: 20px;
    }

    .image-preview {
        display: none;
        width: 100%;
        height: auto;
        max-height: 300px;
    }

    textarea {
        width: 100%;
        padding: 10px 0 10px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: transparent;
        resize: vertical;
    }

    .text-input {
        width: 100%;
        padding: 2px 0 0 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: transparent;
        resize: vertical;
    }

    textarea:focus,
    .text-input:focus {
        border-color: #007bff;
        /* Change this color to fit your theme */
        outline: none;
    }
</style>

<form id="bidPlacement" class="form-group" action="{{ route('admin.blog.post') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="newBlog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="newBlogLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="margin-top:20vh">
            <div class="modal-content" style="background:#ececee;">
                <div class="modal-header w-full">
                    <div class="create-post">Post Blog News</div>
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
                    <div class="col-md-12 mt-0 mb-2 post-form-custom">
                        <label for="comment">Title</label><br>
                        <input id="comment" name="title" class="text-input" placeholder="Blog title" />
                    </div>
                    <div class="col-md-12 post-form-custom">
                        <label for="fileInput">Blog Photo</label>
                        <div>
                            <label for="imageUpload">
                                <input type="file" id="imageUpload" name="photo" accept="image/jpeg,image/png"
                                    style="display:none;">
                                <i class="fa fa-image" style="cursor: pointer"></i>
                            </label>
                        </div>
                        <input type="hidden" name="type" id="uploadType">
                        <div class="preview-container">
                            <img id="imagePreview" class="image-preview" style="display:none;" />
                        </div>
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2 post-form-custom">
                        <label for="comment">News</label><br>
                        <textarea id="comment" name="news" rows="2" placeholder="Blog news..."></textarea>
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
        const imagePreview = document.getElementById('imagePreview');

        // Handle image upload
        imageUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                uploadType.value = 'image'; // Set type to image
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Show image preview
                };
                reader.readAsDataURL(file);
            }
        });


    });
</script>
