@extends('layouts.front.login-site')

@section('content')
    {{-- Page Banner --}}
    <div class="page-hero bg-image">
        <div class="hero-section" style="background:#394293; display: flex; justify-content: center; align-items: center;">
            <!-- Centered text using flexbox -->
            <div class="text-center text-white">
                <h1 class="text-white">Client Reviews</h1>
                <p class="lead text-white">See what our clients have to say about us.</p>
            </div>
        </div>
    </div>

    {{-- Reviews Section --}}
    <div class="container">
        <div class="reviews-section">
            <h2 class="text-center mb-5 text-2xl font-semibold">What Our Clients Are Saying</h2>

            {{-- Review Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Adjusted gap between cards for better spacing -->
                @foreach ($reviews as $review)
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title text-xl font-semibold" style="color: black">
                                {{ $review->reviewer->firstname ?? '' }} {{ $review->reviewer->lastname ?? '' }}</p>
                            <p class="text-gray-500 text-sm">
                                {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                            <p class="card-text mt-2 text-gray-800">{!! $review->review !!}</p>
                        </div>
                    </div>
                @endforeach
                {{-- Pagination links --}}
                @if (count($reviews) > 0)
                    <div class="pagination mt-5">
                        {{ $reviews->links('vendor.pagination.custom') }}
                    </div>
                @endif
            </div>

            {{-- View More Reviews Button --}}
            {{-- <div class="text-center mt-6">
                <a href="{{ route('reviews.index') }}"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">View More Reviews</a>
            </div> --}}

            {{-- Pagination (if needed) --}}
            <div class="mt-5">
                {{ $reviews->links() }}
            </div>
        </div>
    </div>

    <style>
        /* Reviews Section */
        .reviews-section {
            padding: 5px 0;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 8px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #0056b3;
        }

        .card-text {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
        }

        .card-text p {
            margin-top: 10px;
        }

        /* View More Button */
        .btn-view-more {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        .btn-view-more:hover {
            background-color: #003f7f;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card-title {
                font-size: 1.125rem;
            }

            .card-text {
                font-size: 0.9rem;
            }
        }
    </style>
@endsection
