{{-- Connect With Properties Experts Begins --}}
<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black;font-weight:700">Connect with property experts and businesses you may like</h5>
        <a href="{{ route('property.professionals.all') }}" style="text-decoration: none">
            <h5 style="color: red;font-weight:700">See more</h5>
        </a>
    </div>

    <div class="hero-sub-category">
        @foreach ($proffessionals->take(5) as $item)
            <div class="hero-cat-venue">
                <img src="{{ asset($item->image) ?? $item->image }}" alt="{{ $item->service }}">
                <span class="hero-expert-text">
                    <h4 class="mb-0">{{ $item->service }}</h4>
                    <p>5 Followers</p>
                    <a href="" class="btn btn-info mb-3"
                        style="background-color:#394293;font-weight:500;font-size:20px">Connect</a>
                </span>
            </div>
        @endforeach
    </div>
</div>
{{-- Connect With Properties Experts Ends --}}

<style>
    .truncate-text {
        white-space: nowrap;
        /* Prevent text from wrapping */
        overflow: hidden;
        /* Hide overflowing content */
        text-overflow: ellipsis;
        /* Display ellipsis for overflowing text */
    }

    .hero-expert-text h4 {
        max-height: 40px;
        /* Set a max height for text */
        overflow: hidden;
        /* Hide overflow to maintain div size */
        text-align: left;
        /* Align the text centrally */
        font-size: 18px;
        line-height: 1.2;
    }
</style>
