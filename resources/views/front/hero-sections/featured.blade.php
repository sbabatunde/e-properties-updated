<div class="trend-container mb-2">
    <h1 class="mt-5 pt-3 text-black" style="font-weight: bold">Featured Properties</h1>
    <div class="featured-card-container">
        @foreach ($data['featured'] as $item)
            <div class="featured-property">
                <div class="featured-image">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}">
                    <div class="featured-content mt-0">
                        <div class="featured-text">
                            <h3 class="text-black">
                                {{ $item->payment->initial_denomination }}

                                {{ number_format($item->payment->initial_pay) }}
                            </h3>
                            <h5 class="text-black">{{ $item->title }}</h5>
                            <p class="mt-2">
                                <span class="text-black">{{ $item->area }}</span> <br>
                            </p>
                        </div>
                        <div class="btn-container">
                            <a href="{{ route('property.details', $item->id) }}" class="btn btn-info"
                                style="background-color: #394293; border-radius: 5px; padding: 10px 35px;">
                                {{ $item->status }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<style>
    /* Base styles */
    .featured-card-container {
        display: flex;
        overflow-x: auto;
        /* Enable horizontal scrolling */
        white-space: nowrap;
        padding: 0 10px;
        scrollbar-width: thin;
        /* For Firefox, hides scrollbar but keeps it thin */
        scrollbar-color: transparent transparent;
        /* Hides scrollbar */
    }

    /* Hide scrollbar for Chrome, Safari, and Opera */
    .featured-card-container::-webkit-scrollbar {
        display: none;
    }

    /* For each property card */
    .featured-property {
        display: inline-block;
        width: 300px;
        /* Set fixed width for larger screens */
        margin-right: 20px;
        background-color: #f2f2f7;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .featured-property:hover {
        transform: translateY(-10px);
        /* Hover effect for 3D */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Enhanced shadow on hover */
    }

    /* Adjust image width */
    .featured-image img {
        width: 100%;
        border-radius: 10px 10px 0 0;
    }

    /* Featured content */
    .featured-content {
        padding: 15px;
    }

    /* Text and buttons */
    .featured-text {
        font-size: 14px;
        color: #333;
    }

    .featured-text h3,
    .featured-text h5 {
        margin-bottom: 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        width: 100%;
    }

    .featured-text h5 {
        font-size: 16px;
        font-weight: bold;
        text-overflow: ellipsis;
        /* Prevent text overflow */
    }

    /* Button styling */
    .btn-container a {
        padding: 10px 20px;
        background-color: #394293;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    /* Responsive styles */

    /* For tablets and below */
    @media (max-width: 1024px) {
        .featured-card-container {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping of cards */
            justify-content: center;
            /* Center align the cards */
        }

        .featured-property {
            width: 45%;
            /* 2 items per row on medium screens */
            margin-right: 10px;
            /* Reduced right margin */
            margin-bottom: 20px;
        }
    }

    /* For mobile devices (phones in landscape) */
    @media (max-width: 768px) {
        .featured-card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .featured-property {
            width: 100%;
            /* 1 item per row */
            margin-right: 0;
            margin-bottom: 20px;
            /* Ensure spacing between rows */
        }
    }

    /* For very small mobile devices (phones in portrait) */
    @media (max-width: 480px) {
        .featured-text {
            font-size: 12px;
            /* Smaller font size */
        }

        .featured-property {
            width: 100%;
            /* 1 item per row */
            margin-right: 0;
            margin-bottom: 20px;
        }

        .btn-container a {
            padding: 8px 15px;
            /* Smaller padding for buttons */
        }
    }
</style>
