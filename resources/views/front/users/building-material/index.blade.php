<!-- resources/views/materials/index.blade.php -->

@extends('layouts.front.login-site')

@section('content')
    <style>
        /* Page Hero Styles */
        .page-hero {
            width: 100%;
        }

        /* Hero Section Styles */
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #394293;
            /* Dark blue background */
        }

        /* Hero Auction Banner Styles */
        .hero-auction-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Centering content */
            width: 100%;
            max-width: 1200px;
            /* Maximum width of the banner */
            padding: 20px;
            color: #FFFFFF;
            /* White text color */
            box-sizing: border-box;
            /* Include padding in width calculation */
        }

        /* Text Area Styles */
        .hero-auction-banner p {
            flex: 3;
            /* Text area takes 60% of the width */
            max-width: 60%;
            font-size: 1rem;
            /* Adjust font size as needed */
            line-height: 1.5;
            /* Improve readability */
            margin-right: 20px;
            /* Space between text and image */
            text-align: center;
            /* Center text */
        }

        /* Image Area Styles */
        .hero-auction-banner img {
            flex: 2;
            /* Image area takes 40% of the width */
            max-width: 40%;
            width: 100%;
            /* Make the image responsive */
            height: auto;
            /* Maintain aspect ratio */
        }

        /* New Material List Styles */
        .new-material-list {
            max-width: 1200px;
            /* Center the list */
            margin: 40px auto;
            /* Centering with margin */
            padding: 20px;
            /* Added padding for spacing */
            background: #f9f9f9;
            /* Light background for the material list */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
        }

        /* Header Styles */
        .new-mat-list-header {
            text-align: center;
            /* Center the header text */
            margin-bottom: 20px;
            /* Space below the header */
        }

        .new-mat-list-header h4 {
            color: #394293;
            /* Dark blue color for header */
            font-weight: 700;
            /* Bold font weight */
            font-size: 36px;
            /* Font size */
            text-transform: uppercase;
            /* Uppercase text for emphasis */
            padding: 10px 20px;
            /* Padding around the header */
            display: inline-block;
            /* Makes the header width only as wide as the text */
        }

        .new-material-items {
            display: flex;
            gap: 20px;
            /* Space between items */
            align-items: flex-start;
            /* Align items to the top */
            justify-content: space-between;
            /* Space out items evenly */
            flex-wrap: wrap;
            /* Wrap items to the next line */
            width: 100%;
        }

        .new-material-items .pic {
            border: 1px solid #f4f5fa;
            border-radius: 10px;
            background: #f4f5fa;
            box-shadow: 5px 10px 15px rgba(83, 82, 82, 0.5);
            position: relative;
            padding: 10px;
            /* Added padding for better spacing */
            transition: transform 0.2s;
            /* Smooth hover effect */
            flex: 1 1 calc(25% - 20px);
            /* 4 items per row, adjusting for gap */
            /* 25% for four items per row, with space for the gap */
            max-width: calc(25% - 20px);
            /* Maximum width of each item */
        }

        .new-material-items .pic:hover {
            transform: scale(1.05);
            /* Slight zoom on hover */
        }

        .new-material-items .pic img {
            min-width: 259px;
            min-height: 164px;
            max-width: 100%;
            /* Ensure the image is responsive */
            height: auto;
            /* Maintain aspect ratio */
        }

        /* Pagination Styles */
        .pagination {
            justify-content: center;
        }
    </style>

    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image">
        <div class="hero-section">
            <div class="hero-auction-banner">
                <p style="color: #FFFFFF; text-align: center;">
                    Explore our extensive collection of building materials! From roofing to flooring, find premium materials
                    suitable for all your construction needs. Don't miss the opportunity to enhance your projects with the
                    best quality materials available. Browse now to discover the perfect fit for your next build!
                </p>
                <img src="https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330634/building_materials/mzve1d4zrbka2pcloen7.png"
                    alt="Building Materials Banner">
            </div>
        </div>
    </div>

    {{-- New Arrival Material Item Begins --}}
    <div class="new-material-list">
        <div class="new-mat-list-header">
            <h4>All Building Materials</h4>
        </div>
        <div class="new-material-items">
            @foreach ($materials as $item)
                <div class="pic">
                    <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                    <i class="fa fa-heart"></i>
                    <span class="listing-text mat-cost" style="background: #d6daf3">
                        <h5 class="mt-3" style="font-weight: 700;">{{ $item->title }}</h5>
                        <p>
                            <span>{{ $item->denomination ?? '₦' }} {{ number_format($item->price) }}</span><br>
                            <span>{{ $item->quantity }}</span><br>
                            <span style="font-weight: 550;">{{ $item->state ?? 'Lagos' }}</span>
                        </p>
                        <a href="{{ route('user.materials.get', $item->id) }}" class="btn btn-info listing-anchor">View</a>
                    </span>
                </div>
            @endforeach
        </div>
        {{-- Pagination links --}}
        @if (count($materials) > 0)
            <div class="pagination mt-5">
                {{ $materials->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>
    {{-- New Arrival Material Item Ends --}}
@endsection
