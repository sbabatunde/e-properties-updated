@extends('layouts.front.login-site')
@section('content')
    <div class="page-hero bg-image"
        style="background-image: url({{ asset('../assets/images/banners/landlord-banner.png') }}); position: relative; height: 400px;">
        <div class="hero-section">
            <!-- Left-aligned, centered text -->
            <div class="centered-text-left">
                <h1 class="text-white" style="font-size: 2.5rem; font-weight: bold;">Welcome, Landlords</h1>
                <p class="text-white" style="font-size: 1.2rem; margin-top: 10px;">
                    Simplify your property management with our tailored solutions for efficiency and peace of mind.
                </p>
            </div>
        </div>
    </div>

    <!-- Apartment Cleaning Services Section -->
    <section class="apartment-cleaning">
        <h1>Apartment Cleaning Services</h1>
        <p>
            Your home is your haven. At E-Properties, we ensure your apartment is sparkling clean and move-in ready for
            tenants or personal use. Our dedicated team of professionals delivers thorough evaluations and detailed cleaning
            services tailored to your needs.
        </p>

        <!-- Highlights -->
        <section class="highlights">
            <div class="highlight">
                <div class="icon">
                    <img src="{{ asset('../assets/images/services/service3.png') }}" alt="Sparkling Clean Icon">
                </div>
                <h2>Spotless Cleaning</h2>
                <p>We provide deep cleaning that leaves no corner untouched, ensuring a fresh and inviting space.</p>
            </div>
            <div class="highlight">
                <div class="icon">
                    <img src="{{ asset('../assets/images/services/service5.png') }}" alt="Evaluation Icon">
                </div>
                <h2>Thorough Evaluations</h2>
                <p>Our team conducts detailed assessments to address every cleaning need and meet your expectations.</p>
            </div>
            <div class="highlight">
                <div class="icon">
                    <img src="{{ asset('../assets/images/services/service4.png') }}" alt="Eco-Friendly Icon">
                </div>
                <h2>Eco-Friendly Products</h2>
                <p>We use environmentally safe cleaning products, prioritizing your health and sustainability.</p>
            </div>
            <div class="highlight">
                <div class="icon">
                    <img src="{{ asset('../assets/images/services/service7.png') }}" alt="Ready for Tenants Icon">
                </div>
                <h2>Move-In Ready</h2>
                <p>Your apartment will be perfectly prepared for tenants or personal use, meeting all hygiene standards.</p>
            </div>
        </section>

        <!-- Contact Us CTA -->
        <section class="cta">
            <p>
                Ready to experience unmatched apartment cleaning? Let us connect you with trusted experts who deliver
                exceptional services.
            </p>
            <a href="{{ route('services.find') }}" class="btn-cta">Find Cleaning Experts</a>
        </section>

    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .apartment-cleaning {
            padding: 40px 20px;
            background-color: #fff;
            margin: 20px auto;
            border-radius: 8px;
            max-width: 800px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #131414;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .highlights {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }

        .highlight {
            text-align: center;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .highlight .icon img {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .highlight h2 {
            color: #0056b3;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .cta {
            margin-top: 40px;
            padding: 20px;
            background-color: #394293;
            color: #1a1919;
            font-weight: 500;
            border-radius: 8px;
        }

        .cta p {
            margin-bottom: 20px;
            color: #fff
        }

        .btn-cta {
            background-color: #fff;
            color: #0056b3;
            padding: 10px 20px;
            border: 2px solid #fff;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-cta:hover {
            background-color: #3b5570;
            color: #fff;
        }

        @media (max-width: 600px) {
            .highlights {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection
