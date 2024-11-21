@extends('layouts.front.login-site')

@section('content')
    <!-- Page Banner -->
    <div class="page-hero bg-image"
        style="background-image: url({{ asset('../assets/images/banners/tenant-banner.png') }}); position: relative; height: 400px;">
        <div class="hero-section d-flex justify-content-center align-items-center">
            <div class="centered-text text-center text-white">
                <h1 class="text-white">Income Protection</h1>
                <p class="text-white">Ensure your rental payments are covered, even if you experience unexpected changes in
                    your income.</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mt-5">
        <!-- Service Overview -->
        <section class="overview-section mb-5">
            <h2>What is Income Protection?</h2>
            <p>
                Income protection is a financial safety net that ensures your rental payments continue even in the event of
                an unexpected income change. Whether you face job loss, illness, or any unforeseen circumstances, our
                comprehensive income protection plans have you covered.
            </p>
        </section>

        <!-- Service Details -->
        <section class="service-details mb-5">
            <h2>Benefits of Income Protection</h2>
            <ul>
                <li>Keep up with rental payments even during periods of financial hardship.</li>
                <li>Provides peace of mind knowing that your housing stability is protected.</li>
                <li>Affordable and flexible plans to suit your needs.</li>
                <li>Quick approval process for timely coverage.</li>
            </ul>
        </section>

        <!-- CTA Section -->
        <section class="cta mt-5 text-center"
            style="background-color: #394293; color: #fff; padding: 30px 20px; border-radius: 8px;">
            <p style="font-size: 1.2rem; font-weight: bold; color: #fff;">Protect your rental payments today with our income
                protection plans.</p>
            <a href="{{ route('services.find') }}" class="btn-cta"
                style="background-color: #fff; color: #394293; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">
                Get Protected Now
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

        .page-hero .centered-text-left h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .page-hero .centered-text-left p {
            font-size: 1.2rem;
        }

        .overview-section h2,
        .service-details h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .overview-section p,
        .service-details ul {
            font-size: 1rem;
            color: #666;
        }

        .service-details ul {
            list-style-type: disc;
            padding-left: 20px;
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
@endsection
