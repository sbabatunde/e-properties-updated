@extends('layouts.front.login-site')

@section('content')
    <!-- Page Banner -->
    <div class="page-hero bg-image"
        style="background-image: url({{ asset('../assets/images/banners/main-auction-banner.png') }}); position: relative; height: 400px;">
        <div class="hero-section">
            <div class="centered-text-left">
                <h1 class="text-white">Commercial Property Services</h1>
                <p class="text-white">Expert advice and services to keep your commercial properties running smoothly.</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mt-5">
        <!-- Overview Section -->
        <section class="overview-section mb-5">
            <h2>Why Choose Our Commercial Services?</h2>
            <p>
                Managing commercial properties requires expertise, precision, and a deep understanding of tenant needs
                and property dynamics. Our comprehensive services ensure your commercial properties are well-maintained,
                legally compliant, and equipped to foster productivity and success.
            </p>
        </section>

        <!-- Services Provided -->
        <section class="services-provided">
            <h2>Our Expertise Includes:</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <i class="fa fa-wrench"></i>
                        <h5>Property Maintenance</h5>
                        <p>Keep your commercial spaces in excellent condition with our regular maintenance services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <i class="fa fa-gavel"></i>
                        <h5>Legal Assistance</h5>
                        <p>Get expert legal guidance to ensure your properties adhere to all regulations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <i class="fa fa-shield"></i>
                        <h5>Security Upgrades</h5>
                        <p>Enhance safety with tailored security solutions for your commercial properties.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta mt-5 text-center">
            <p class="text-white">Ready to take your commercial property management to the next level?</p>
            <a href="{{ route('services.find', ['category' => 'commercial-maintenance']) }}" class="btn-cta">Find Experts
                Today</a>
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

        .page-hero .centered-text-left h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .page-hero .centered-text-left p {
            font-size: 1.2rem;
        }

        .overview-section h2,
        .services-provided h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .services-provided .service-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            min-width: fit-content;
            transition: transform 0.3s;
        }

        .services-provided .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .services-provided .service-card i {
            font-size: 3rem;
            color: #0056b3;
            margin-bottom: 15px;
        }

        .services-provided .service-card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #131414;
        }

        .services-provided .service-card p {
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


        /* Ensure Cards are Responsively Sized */
        @media (max-width: 768px) {
            .services-provided .service-card {
                min-height: 280px;
                /* Ensure cards are tall enough on mobile */
            }

            .row {
                display: flex;
                flex-direction: column;
                /* Stack the columns vertically */
            }

            /* Ensure cards are full width on small screens */
            .col-lg-4,
            .col-md-6 {
                flex: 1 0 100%;
                /* Allow cards to take full width */
            }
        }

        @media (max-width: 480px) {
            .page-hero .centered-text h1 {
                font-size: 1.5rem;
            }

            .page-hero .centered-text p {
                font-size: 0.9rem;
            }

            /* Card Layout for smaller screens */
            .services-provided .service-card {
                min-height: 280px;
            }
        }
    </style>

    <script>
        window.onload = function() {
            var cards = document.querySelectorAll('.services-provided .service-card');
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
