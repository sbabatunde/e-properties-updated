@if ($reviews !== null)
    @foreach ($reviews as $item)
        <div class="card mb-3 mt-3 mr-5 testimonials-cards">
            <div class="card-body text-success ">
                <h4 style="color: #3394293">"</h4>
                <h5 class="card-title">
                    {!! $item->review !!}
                </h5>
            </div>
            <div class="card-footer mb-0 testimonaial-footer d-flex justify-content-between">
                <span class="">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                </span>
                <span class="">
                    <b>{{ $item->user->firstname }} {{ $item->user->lastname }}</b> <br>
                    <p class="font-2px mt-0">
                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                    </p>
                </span>
            </div>
        </div>
    @endforeach
@endif


<script>
    window.onload = function() {
        var reviewsCount = @json(count($reviews)); // Get the number of reviews from the server-side
        var dotsWrapper = document.querySelector('.tenant-dots-wrapper');
        var tenantComments = document.querySelector('.tenant-comment-cards');
        var tenantCommentDots = [];

        // Calculate how many dots are needed
        var dotsNeeded = Math.ceil(reviewsCount / 3); // Each dot represents 3 reviews

        // Limit the number of dots to 4
        if (dotsNeeded > 4) dotsNeeded = 4;

        // Clear existing dots (if any)
        dotsWrapper.innerHTML = '';

        // Add the necessary number of dots
        for (var i = 0; i < dotsNeeded; i++) {
            var dot = document.createElement('button');
            dot.classList.add('tenant-dots');
            if (i === 0) dot.classList.add('active'); // Activate the first dot by default
            dotsWrapper.appendChild(dot);
        }

        // Grab the newly created dots
        tenantCommentDots = document.querySelectorAll('.tenant-dots');

        // Initialize the sliding logic
        let activeDotNum = 0;

        tenantCommentDots.forEach((comDot, idx) => {
            comDot.setAttribute('data-num', idx);

            comDot.addEventListener('click', e => {
                let clickedDotNum = e.target.dataset.num;
                if (clickedDotNum == activeDotNum) return;
                else {
                    let displayAreaWidth = document.querySelector('.display-area').clientWidth;
                    console.log(displayAreaWidth);

                    let pixelsToMove = -displayAreaWidth * clickedDotNum;
                    // Move the slide
                    tenantComments.style.transform = 'translateX(' + pixelsToMove + 'px)';
                    tenantCommentDots[activeDotNum].classList.remove('active');
                    tenantCommentDots[clickedDotNum].classList.add('active');
                    // Update active dot number
                    activeDotNum = clickedDotNum;
                }
            });
        });
    }
</script>
