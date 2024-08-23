<!-- Share Modal -->
<div id="messageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeReviewModal()">&times;</span>
        <h2>Post a Review on <span style="color: #394293">{{ $property->title }}</span> </h2>
        <div class="modal-form">
            <form class="d-inline" method="POST" enctype="multipart/form-data"
                action="{{ route('property.review', $property->id) }}">
                @csrf
                <div class="row col-lg-12">
                    <div class="col-lg-12 mb-4">
                        <textarea type="text" id="postReview" name="review" value="Your review..." rows="20" cols="80"
                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            
                        </textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success form-control "
                            style="background-color: #394293;cursor: pointer;">
                            <strong>
                                {{ __('Post ') }}
                            </strong>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border-radius: 8px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Close button styles */
    .close {
        color: #aaa;
        float: right;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script>
    function showReviewModal(event) {
        event.preventDefault();
        document.getElementById('messageModal').style.display = 'block';
    }

    function closeReviewModal() {
        document.getElementById('messageModal').style.display = 'none';
    }
</script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('postReview');
</script>
