@extends('layouts.front.login-site')

@section('content')
    <!-- Page Banner -->
    <div class="page-hero bg-image"
        style="background-image: url({{ asset('../assets/images/banners/property-banner.png') }}); position: relative; height: 400px;">
        <div class="hero-section">
            <div class="centered-text-left">
                <h1 class="text-white">Yield Calculator</h1>
                <p class="text-white">Calculate the potential rental yield of your investment property.</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mt-5">
        <!-- Overview Section -->
        <section class="overview-section mb-5">
            <h2>Why Use Our Yield Calculator?</h2>
            <p>
                Our Yield Calculator helps you determine the potential rental income your property could generate.
                By calculating the rental yield, you can evaluate whether a buy-to-let investment will provide the returns
                you need.
                Whether you're new to property investment or a seasoned landlord, this tool is essential for making informed
                decisions.
            </p>
        </section>

        <!-- How It Works Section -->
        <section class="how-it-works mb-5">
            <h2>How the Yield Calculator Works</h2>
            <p>
                Our simple tool takes into account the property's purchase price and expected rental income, allowing you to
                easily calculate your
                expected rental yield. Here's how it works:
            </p>
            <ul>
                <li><strong>Step 1:</strong> Enter the property purchase price.</li>
                <li><strong>Step 2:</strong> Input the monthly rental income.</li>
                <li><strong>Step 3:</strong> The tool will calculate the rental yield based on these figures.</li>
            </ul>
        </section>

        <!-- CTA Section -->
        <section class="cta mt-5 text-center"
            style="background-color: #394293; color: #fff; padding: 30px 20px; border-radius: 8px;">
            <p style="font-size: 1.2rem; font-weight: bold; color: #fff;">Ready to calculate your rental yield?</p>
            <a href="{{ route('yield.calculator') }}" class="btn-cta"
                style="background-color: #fff; color: #394293; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">
                Try the Calculator
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
        .how-it-works h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .how-it-works ul {
            list-style: none;
            padding-left: 0;
        }

        .how-it-works li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .cta {
            background-color: #394293;
            color: #fff;
            padding: 30px 20px;
            border-radius: 8px;
        }

        .cta a {
            background-color: #fff;
            color: #394293;
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
