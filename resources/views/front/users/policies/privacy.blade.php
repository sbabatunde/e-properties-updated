@extends('layouts.front.login-site')

@section('content')
    <!-- Privacy Policy Section -->
    <section class="privacy-policy">
        <h1>Privacy Policy</h1>
        <p>
            At E-Properties, we value your privacy and are committed to protecting your personal data.
            This Privacy Policy outlines how we collect, use, and safeguard your information when you use our website
            and services.
        </p>
    </section>

    <!-- Information Collection Section -->
    <section class="info-collection">
        <h2>Information We Collect</h2>
        <p>We collect the following types of information:</p>
        <ul>
            <li>
                <strong>Personal Information:</strong> This includes details such as your name, email address, and
                contact information when you sign up or use our services.
            </li>
            <li>
                <strong>Usage Data:</strong> We gather information about how you interact with our website, such as
                the pages you visit and the actions you take.
            </li>
            <li>
                <strong>Cookies and Tracking Technologies:</strong> We use cookies to enhance your experience and track
                your behavior on the website.
            </li>
        </ul>
    </section>

    <!-- How We Use Your Information Section -->
    <section class="how-we-use">
        <h2>How We Use Your Information</h2>
        <p>We use the information we collect for the following purposes:</p>
        <ul>
            <li>
                To provide, personalize, and improve our services and your experience on our website.
            </li>
            <li>
                To communicate with you, including sending service-related updates, promotional content, and other
                information.
            </li>
            <li>
                To analyze website usage and improve our services and content.
            </li>
            <li>
                To comply with legal obligations and enforce our terms of service.
            </li>
        </ul>
    </section>

    <!-- Data Security Section -->
    <section class="data-security">
        <h2>Data Security</h2>
        <p>
            We take reasonable precautions to protect your personal data from unauthorized access, alteration,
            disclosure, or destruction. However, no method of transmission over the Internet or method of electronic
            storage is 100% secure.
        </p>
    </section>

    <!-- Sharing Your Information Section -->
    <section class="sharing-info">
        <h2>Sharing Your Information</h2>
        <p>
            We do not sell or rent your personal information to third parties. However, we may share your information
            in the following circumstances:
        </p>
        <ul>
            <li>
                With service providers who help us operate our website and deliver services (e.g., hosting, email
                delivery).
            </li>
            <li>
                When required by law or in response to legal requests, such as a subpoena or court order.
            </li>
            <li>
                To protect the safety, rights, or property of E-Properties, its users, or others.
            </li>
        </ul>
    </section>

    <!-- Your Rights Section -->
    <section class="your-rights">
        <h2>Your Rights</h2>
        <p>
            You have the right to access, correct, or delete your personal data. You can update your information or
            request to delete your account by contacting us at admin@eproperties.ng.
        </p>
    </section>

    <!-- Changes to This Policy Section -->
    <section class="policy-changes">
        <h2>Changes to This Policy</h2>
        <p>
            We may update this Privacy Policy from time to time. Any changes will be posted on this page with an
            updated revision date. We encourage you to review this policy periodically.
        </p>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us">
        <h2>Contact Us</h2>
        <p>If you have any questions about this Privacy Policy or how we handle your data, please contact us at:</p>
        <p>
            Email: admin@eproperties.ng <br />
            Address: 23-24 Iyala Street, Beside Ikeja Shopping Mall, Alausa, Ikeja, Lagos, Nigeria
        </p>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            margin-top: 14px;
            padding: 0;
        }

        /* Section Styling */
        section {
            padding: 40px 20px;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            /* Light shadow for depth */
            max-width: 1200px;
            margin: 20px auto;
        }

        a:hover {
            text-decoration: underline;
        }

        h1,
        h2,
        h3,
        h4 {
            margin-bottom: 20px;
            color: #131414;
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
        }

        h2 {
            font-size: 2rem;
            border-bottom: 2px solid #0056b3;
            display: inline-block;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        h3 {
            font-size: 1.8rem;
        }

        h4 {
            font-size: 1.5rem;
            margin-top: 30px;
        }

        /* Paragraphs and Lists */
        p {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding-left: 20px;
        }

        section ul li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }

        section ul li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #191a1b;
            font-size: 1.6rem;
            font-weight: bold;
        }

        /* Specific Section Styling */
        .key-steps ul li {
            padding-left: 30px;
        }

        .property-acquisition p,
        .instructions p,
        .importance p {
            text-align: justify;
        }

        .property-acquisition h3,
        .instructions h3,
        .importance h3 {
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                margin-top: 7vh
            }

            .header .div-content {
                flex-direction: column;
                text-align: center;
            }

            .header .nav ul {
                flex-direction: column;
                gap: 10px;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            h3 {
                font-size: 1.5rem;
            }

            h4 {
                font-size: 1.2rem;
            }

            section {
                padding: 20px 15px;
            }

            p {
                font-size: 0.95rem;
            }
        }
    </style>
@endsection
