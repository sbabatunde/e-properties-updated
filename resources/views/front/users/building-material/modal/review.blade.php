<!-- Share Modal -->
<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeReviewModal()">&times;</span>
        <h2>Post a Review on <span style="color: #394293">{{ $material->user->firstname }}
                {{ $material->user->lastname }}</span></h2>
        <div class="modal-form">
            <form class="d-inline" method="POST" enctype="multipart/form-data"
                action="{{ route('professional.review', $material->user->id) }}">
                @csrf
                <div class="row col-lg-12">
                    <!-- Star Rating -->
                    {{-- <div class="col-lg-12 mb-4">
                        <label for="rating" style="display: block; margin-bottom: 10px;">Rate this material:</label>
                        <div class="rating" style="align-items: left">
                            <input type="radio" name="rating" value="5" id="star5" required />
                            <label for="star5" class="star">&#9733;</label> <!-- Star symbol -->
                            <input type="radio" name="rating" value="4" id="star4" required />
                            <label for="star4" class="star">&#9733;</label> <!-- Star symbol -->
                            <input type="radio" name="rating" value="3" id="star3" required />
                            <label for="star3" class="star">&#9733;</label> <!-- Star symbol -->
                            <input type="radio" name="rating" value="2" id="star2" required />
                            <label for="star2" class="star">&#9733;</label> <!-- Star symbol -->
                            <input type="radio" name="rating" value="1" id="star1" required />
                            <label for="star1" class="star">&#9733;</label> <!-- Star symbol -->
                        </div>
                    </div> --}}

                    <div class="col-lg-12 mb-4">
                        <textarea id="postReview" name="review" rows="4"
                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="Your review..."></textarea>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success form-control"
                            style="background-color: #394293; cursor: pointer;">
                            <strong>{{ __('Post ') }}</strong>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<style>
    .rating {
        direction: rtl;
        /* Enables right to left clicking */
        display: flex;
        justify-content: flex-start;
        margin-bottom: 15px;
    }

    .rating input {
        display: none;
        /* Hide the radio buttons */
    }

    .rating label {
        font-size: 30px;
        color: #d3d3d3;
        /* Light gray */
        cursor: pointer;
    }

    .rating input:checked~label {
        color: #ffc700;
        /* Yellow color for checked */
    }

    .rating label:hover,
    .rating label:hover~label {
        color: #ffc700;
        /* Change color on hover */
    }
</style>


<script>
    function showReviewModal(event) {
        event.preventDefault();
        document.getElementById('reviewModal').style.display = 'block';
    }

    function closeReviewModal() {
        document.getElementById('reviewModal').style.display = 'none';
    }
</script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('postReview');
</script>
