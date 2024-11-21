<!-- resources/views/landlord-faq.blade.php -->

@extends('layouts.front.login-site')

@section('content')
    <!-- FAQ Section -->
    <section class="faq-section">
        <h1>Frequently Asked Questions (Landlord FAQs)</h1>
        <p>Find answers to some of the most common questions about letting a property and the landlord services we offer.
        </p>

        <!-- General Questions Section -->
        <section class="faq-category">
            <h2>General Questions</h2>
            <div class="faq-item">
                <h3>What is a Buy-to-Let Property?</h3>
                <p>A buy-to-let property is one that you purchase with the intention of renting it out to tenants, either
                    long-term or short-term.</p>
            </div>
            <div class="faq-item">
                <h3>How do I become a landlord?</h3>
                <p>To become a landlord, you must first purchase a property, then ensure it meets local regulations and
                    standards before renting it out.</p>
            </div>
        </section>

        <!-- Property Management Questions Section -->
        <section class="faq-category">
            <h2>Property Management</h2>
            <div class="faq-item">
                <h3>How do I manage my rental property?</h3>
                <p>You can either manage your rental property yourself or hire a property management service to handle
                    tenant queries, rent collection, and property maintenance.</p>
            </div>
            <div class="faq-item">
                <h3>What are my responsibilities as a landlord?</h3>
                <p>As a landlord, you're responsible for maintaining the property, ensuring it meets safety standards, and
                    managing the rental process, including collecting rent and handling tenant issues.</p>
            </div>
        </section>

        <!-- Tenant & Legal Questions Section -->
        <section class="faq-category">
            <h2>Tenant & Legal Questions</h2>
            <div class="faq-item">
                <h3>How do I find tenants for my property?</h3>
                <p>Advertise your property through online property platforms, hire a letting agent, or use social media and
                    local listings to attract tenants.</p>
            </div>
            <div class="faq-item">
                <h3>What legal documents do I need as a landlord?</h3>
                <p>You will need a tenancy agreement, safety certificates, and a variety of other legal documents, depending
                    on your location and the type of rental agreement.</p>
            </div>
        </section>

        <!-- Maintenance & Insurance Questions Section -->
        <section class="faq-category">
            <h2>Maintenance & Insurance</h2>
            <div class="faq-item">
                <h3>How do I maintain my rental property?</h3>
                <p>Regular inspections, timely repairs, and ensuring that everything is up to code will keep your rental
                    property in good condition.</p>
            </div>
            <div class="faq-item">
                <h3>Do I need insurance for my rental property?</h3>
                <p>Yes, as a landlord, you should have both landlord insurance and tenant liability insurance to protect
                    your property and assets.</p>
            </div>
        </section>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            margin-top: 13px;
            padding: 0;
        }

        section {
            padding: 40px 20px;
            background-color: #fff;
            margin: 20px auto;
            border-radius: 8px;
            max-width: 800px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2,
        h3 {
            color: #131414;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 40px;
            margin-bottom: 20px;
            border-bottom: 2px solid #0056b3;
            display: inline-block;
            padding-bottom: 5px;
        }

        h3 {
            font-size: 1.2rem;
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        a {
            color: #0056b3;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3
        }

        .faq-item {
            margin-bottom: 30px;
        }

        .faq-category {
            margin-bottom: 40px;
        }
    </style>
@endsection
