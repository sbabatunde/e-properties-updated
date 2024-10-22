<div class="hero-category">
    <div class="hero-meet-expert">
        <h5 style="color: black">Category</h5>
        <a href="{{ route('property.category.all') }}" style="color: red;text-decoration:none;cursor: pointer;">
            <h5 style="color: red;">See more</h5>
        </a>
    </div>

    <div class="hero-sub-category">
        @foreach ($data['category'] as $key => $item)
            <a href="{{ route('property.by.type', $item->property_type_slug) }}">
                <div class="category-card categoryss">
                    <div class="image">
                        <img src="{{ $item['image_path'] ?? asset($item['image_path']) }}"
                            alt="{{ asset($item['property_type']) }}" style="width:100%;" height="150" width="100">
                        <div class="category-card-sub ">
                            <div class="card-text mb-0">
                                <h5>{{ $item['property_type'] }}</h5>
                                <p>Available: <b>{{ count($item['property']) }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>


<style>
    .hero-category {
        padding: 20px;
    }

    .hero-meet-expert {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        /* Add margin for spacing */
    }

    .hero-sub-category {
        display: flex;
        flex-wrap: wrap;
        /* Allows cards to wrap on smaller screens */
        justify-content: flex-start;
        /* Align cards to the left for wider screens */
    }

    .category-card {
        margin: 30px;
        /* Add margin around each card */
        flex: 1 1 210px;
        /* Flex-grow, flex-shrink, and basis for responsive sizing */
        max-width: 210px;
        /* Limit max width for cards */
        text-align: center;
        /* Center text inside the card */
        border: 1px solid #ddd;
        /* Optional: Add a border for better visibility */
        border-radius: 8px;
        /* Optional: Add rounded corners */
        overflow: hidden;
        /* Ensure content doesn't overflow */
        background-color: #f9f9f9;
        /* Optional: Add a background color */
    }

    .image {
        overflow: hidden;
        /* Ensure the image doesn't overflow the card */
        border-radius: 8px 8px 0 0;
        /* Optional: Rounded corners for the image */
    }

    .category-card img {
        width: 100%;
        height: 150px;
        /* Fixed height */
        object-fit: cover;
        /* Ensures image covers the area without distortion */
    }

    .category-card-sub {
        padding: 10px;
        /* Add padding inside the card */
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 600px) {
        .hero-sub-category {
            justify-content: center;
            /* Center cards on smaller screens */
        }

        .category-card {
            flex: 1 1 90%;
            /* Take more width on smaller screens */
            max-width: 90%;
            /* Limit max width */
            margin: 10px 0;
            /* Add vertical margin for spacing */
        }
    }
</style>
