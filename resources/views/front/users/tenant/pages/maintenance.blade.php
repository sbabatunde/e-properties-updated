@extends('layouts.front.login-site')

@section('content')
    <!-- Page Banner -->
    <div class="page-hero bg-image"
        style="background-image: url({{ asset('../assets/images/services/banner.png') }}); position: relative; height: 400px;">
        <div class="hero-section d-flex justify-content-center align-items-center">
            <div class="centered-text text-center text-white">
                <h1 class="text-white">Maintenance Personnel Services</h1>
                <p class="text-white">Connect with trusted professionals for all your property maintenance needs.</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mt-5">
        <!-- Service Overview -->
        <section class="overview-section mb-5">
            <h2>Why Choose Our Maintenance Personnel?</h2>
            <p>
                E-Properties connects you with reliable, skilled, and certified professionals to handle all types of
                property
                maintenance services. Whether you need a plumber to fix a leak, an electrician for repairs, or a painter for
                a
                fresh coat, we've got you covered.
            </p>
        </section>

        <!-- List of Maintenance Services -->
        <section class="services-list mb-5">
            <h2>Our Maintenance Services Include:</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-wrench"></i>
                        <h5>Plumbing Services</h5>
                        <p>From leaky faucets to complete plumbing installations, our plumbers ensure efficient and reliable
                            solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-paint-brush"></i>
                        <h5>Painting Services</h5>
                        <p>Give your property a fresh, vibrant look with professional interior and exterior painting
                            services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-bolt"></i>
                        <h5>Electrical Services</h5>
                        <p>Our certified electricians are available for installations, repairs, and maintenance of
                            electrical systems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-leaf"></i>
                        <h5>Landscaping Services</h5>
                        <p>Keep your outdoor spaces beautiful and well-maintained with expert landscaping and gardening
                            services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-window-restore"></i>
                        <h5>Window Cleaning</h5>
                        <p>Our professional cleaners ensure spotless and streak-free windows for your property.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-tools"></i>
                        <h5>General Repairs</h5>
                        <p>Need help with fixing small issues around your property? Our handymen are here to help.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta mt-5 text-center"
            style="background-color: #394293; color: #fff; padding: 30px 20px; border-radius: 8px;">
            <p style="font-size: 1.2rem; font-weight: bold; color: #fff;">Looking for reliable maintenance personnel?</p>
            <a href="{{ route('services.find') }}" class="btn-cta"
                style="background-color: #fff; color: #394293; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">
                Find Experts Today
            </a>
        </section>
    </section>

    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .page-hero {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: left;
            color: #fff;
        }

        .page-hero .centered-text h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .page-hero .centered-text p {
            font-size: 1.2rem;
        }

        .overview-section h2,
        .services-list h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .services-list .service-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            min-width: fit-content;
            text-align: center;
            transition: transform 0.3s;
        }

        .services-list .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .services-list .service-card i {
            font-size: 3rem;
            color: #0056b3;
            margin-bottom: 15px;
        }

        .services-list .service-card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #131414;
        }

        .services-list .service-card p {
            font-size: 1rem;
            color: #666;
        }

        .cta {
            background-color: #394293;
            color: #fff;
            padding: 30px 20px;
            border-radius: 8px;
        }

        .cta a {
            background-color: #fff;
            color: #0056b3;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }

        .cta a:hover {
            background-color: #003f88;
            color: #fff;
        }
    </style>

    <script>
        window.onload = function() {
            var cards = document.querySelectorAll('.service-card');
            var maxHeight = 0;

            // Find the max height
            cards.forEach(function(card) {
                card.style.height = 'auto'; // Reset height in case of previous dynamic changes
                maxHeight = Math.max(maxHeight, card.offsetHeight);
            });

            // Apply max height to all cards
            cards.forEach(function(card) {
                card.style.height = maxHeight + 'px';
            });
        };
    </script>
@endsection
