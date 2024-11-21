@extends('layouts.front.login-site')

@section('content')
    <!-- Page Banner -->
    <div class="page-hero bg-image"
        style="background-image: url({{ asset('../assets/images/services/banner.png') }}); position: relative; height: 400px;">
        <div class="hero-section d-flex justify-content-center align-items-center">
            <div class="centered-text text-center text-white">
                <h1 class="text-white">Property Repair Services</h1>
                <p class="text-white">Professional solutions for every property repair need.</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mt-5">
        <!-- Service Overview -->
        <section class="overview-section mb-5">
            <h2>Why Choose Our Repair Services?</h2>
            <p>
                E-Properties provides top-notch repair services for all types of properties, ensuring they remain in
                excellent condition. Whether it’s fixing structural damage, repairing electrical issues, or refurbishing
                interiors, we have skilled professionals to handle it all.
            </p>
        </section>

        <!-- List of Repair Services -->
        <section class="services-list mb-5">
            <h2>Comprehensive Repair Solutions</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-hammer"></i>
                        <h5>Structural Repairs</h5>
                        <p>Restore your property’s structural integrity with expert repair solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-tools"></i>
                        <h5>Appliance Repairs</h5>
                        <p>Fix damaged or malfunctioning appliances quickly and efficiently.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-plug"></i>
                        <h5>Electrical Repairs</h5>
                        <p>Ensure the safety of your property with professional electrical repair services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-paint-roller"></i>
                        <h5>Interior Refurbishment</h5>
                        <p>Revamp your interiors with detailed repairs and refurbishing services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-water"></i>
                        <h5>Water Damage Repairs</h5>
                        <p>Address leaks, dampness, and other water-related damages promptly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <i class="fa fa-wrench"></i>
                        <h5>General Repairs</h5>
                        <p>Fix minor issues across your property with reliable general repair services.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta mt-5 text-center"
            style="background-color: #394293; color: #fff; padding: 30px 20px; border-radius: 8px;">
            <p style="font-size: 1.2rem; font-weight: bold; color: #fff;">Need reliable repair services for your property?
            </p>
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
            text-align: center;
            min-width: fit-content;
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
