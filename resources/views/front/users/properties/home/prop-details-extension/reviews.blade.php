<div class="container mb-5">
    <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600"> Reviews </h5>
    @if ($reviews !== null)
        <div class="row mb-5">
            @foreach ($reviews->take(4) as $item)
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <p>
                        {!! $item->review !!}
                    </p>
                </div>
            @endforeach
        </div>
    @endif

    <span class="agent-message ml-5"><a href="#" onclick="showReviewModal(event)">Post a comment</a></span>
</div>

@include('front.users.properties.home.prop-details-extension.review-modal')
