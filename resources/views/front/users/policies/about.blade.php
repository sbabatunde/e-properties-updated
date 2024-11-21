@extends('layouts.front.login-site')

@section('content')
    {{-- Page Banner --}}
    <div class="page-hero bg-image">
        <div class="hero-section" style="background-image: url({{ asset('../assets/images/About/about-banner.png') }});">
            <div class="text-center text-white" style="position: relative; top: 50%; transform: translateY(-50%);">
                <h1>About Us</h1>
                <p class="lead">Learn more about our mission, vision, and the people behind our success.</p>
            </div>
        </div>
    </div>

    {{-- About Us Section --}}
    <div class="container mt-5">
        <div class="about-us-section">
            {{-- Mission Card --}}
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Our Mission</h2>
                    <p class="card-text">
                        At E-Properties, our mission is to empower individuals, businesses, and service providers by
                        creating a seamless, reliable platform for real estate solutions. We simplify property management,
                        acquisition, and maintenance, ensuring that everyone—whether you're looking for a place to call
                        home, grow your business, or provide essential property services—has access to the resources they
                        need.
                    </p>
                </div>
            </div>

            {{-- Vision Card --}}
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Our Vision</h2>
                    <p class="card-text">
                        Our vision is to revolutionize the real estate industry by integrating technology and innovation.
                        E-Properties is more than just a platform for buying, selling, and renting properties—it's a hub
                        where agents, landlords, tenants, service providers, and building material suppliers can connect,
                        fostering growth, trust, and transparency across the entire real estate ecosystem.
                    </p>
                </div>
            </div>

            {{-- Team Card --}}
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Meet Our Partners</h2>
                    <p class="card-text">
                        E-Properties is powered by a diverse group of partners, including real estate agents, property
                        owners, service providers, and building material suppliers. Each partner plays a vital role in
                        ensuring that the platform offers comprehensive services—from property acquisition to maintenance
                        and legal services, as well as providing essential materials for property development.
                    </p>
                </div>
            </div>

            {{-- Values Card --}}
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Our Core Values</h2>
                    <ul class="card-text">
                        <li><strong>Integrity:</strong> We operate with honesty and transparency in all our dealings.</li>
                        <li><strong>Innovation:</strong> We continuously embrace new ideas and technology to improve.</li>
                        <li><strong>Customer Focus:</strong> Your needs are at the heart of everything we do.</li>
                        <li><strong>Excellence:</strong> We are committed to delivering top-notch services.</li>
                        <li><strong>Collaboration:</strong> We believe in the power of partnerships and work together with
                            agents, service providers, and material suppliers to deliver comprehensive real estate
                            solutions.</li>
                    </ul>
                </div>
            </div>

            {{-- Services Offered --}}
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Our Services</h2>
                    <p class="card-text">
                        At E-Properties, we offer a wide range of services designed to meet the needs of property seekers,
                        owners, and service providers:
                    </p>
                    <ul class="card-text">
                        <li><strong>Property Listings:</strong> Browse or list properties for sale, rent, or lease.</li>
                        <li><strong>Property Maintenance:</strong> Connect with service providers for plumbing, electrical,
                            legal services, and more.</li>
                        <li><strong>Building Materials:</strong> Purchase quality materials for construction and property
                            development.</li>
                        <li><strong>Agent & Tenant Services:</strong> Real estate agents can connect with tenants and
                            property owners to facilitate smooth transactions.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    {{-- Newsletter Section --}}
    @include('front.users.newsletter.page')

    <style>
        /* General Styling */
        .container {
            max-width: 1200px;
            margin: auto;
        }

        .page-hero {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .page-hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .page-hero p {
            font-size: 1.2rem;
        }

        /* About Us Cards */
        .about-us-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 25px;
        }

        .card-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #0056b3;
        }

        .card-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
        }

        .card-text ul {
            padding-left: 20px;
        }

        .card-text li {
            margin-bottom: 10px;
            list-style-type: disc;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-hero h1 {
                font-size: 2rem;
            }

            .page-hero p {
                font-size: 1rem;
            }

            .card-title {
                font-size: 1.8rem;
            }

            .card-text {
                font-size: 1rem;
            }
        }
    </style>
@endsection
