@extends('layouts.front.login-site')

@section('content')
    <!-- FAQ Section -->
    <section class="faq-section">
        <h1>Frequently Asked Questions (FAQs)</h1>
        <p>Find answers to some of the most common questions about E-Properties and our services.</p>

        <!-- General Questions Section -->
        <section class="faq-category">
            <h2>General Questions</h2>
            <div class="faq-item">
                <h3>What is E-Properties?</h3>
                <p>E-Properties is an online platform that connects property owners, agents, and potential buyers or
                    tenants. We provide tools to simplify property listing, searching, and management.</p>
            </div>
            <div class="faq-item">
                <h3>How do I create an account?</h3>
                <p>Click on the "Sign Up" button at the top right corner of the homepage. Fill in your details, and you'll
                    receive a confirmation email to activate your account.</p>
            </div>
        </section>

        <!-- Property Listing Questions Section -->
        <section class="faq-category">
            <h2>Property Listing Questions</h2>
            <div class="faq-item">
                <h3>How do I list a property?</h3>
                <p>Once you log into your account, navigate to the "Add Property" section. Provide all necessary details,
                    upload images, and submit your listing for approval.</p>
            </div>
            <div class="faq-item">
                <h3>Are there any fees for listing properties?</h3>
                <p>Listing properties is free. However, we offer premium listing options for better visibility and
                    additional features.</p>
            </div>
        </section>

        <!-- Support and Assistance Section -->
        <section class="faq-category">
            <h2>Support and Assistance</h2>
            <div class="faq-item">
                <h3>How can I contact support?</h3>
                <p>You can reach our support team via email at <a
                        href="mailto:support@eproperties.ng">support@eproperties.ng</a> or call our helpline at
                    +234-800-123-4567.</p>
            </div>
            <div class="faq-item">
                <h3>What should I do if I forget my password?</h3>
                <p>Click on the "Forgot Password" link on the login page. Enter your registered email address, and we will
                    send you instructions to reset your password.</p>
            </div>
        </section>

        <!-- Account Management Questions Section -->
        <section class="faq-category">
            <h2>Account Management</h2>
            <div class="faq-item">
                <h3>Can I edit my profile information?</h3>
                <p>Yes, log into your account, go to the "Profile" section, and update your information as needed.</p>
            </div>
            <div class="faq-item">
                <h3>Can I delete my account?</h3>
                <p>Yes, you can request account deletion by contacting our support team at <a
                        href="mailto:support@eproperties.ng">support@eproperties.ng</a>. Note that this action is
                    irreversible.</p>
            </div>
        </section>

        <!-- Miscellaneous Questions Section -->
        <section class="faq-category">
            <h2>Miscellaneous</h2>
            <div class="faq-item">
                <h3>Is my personal information secure?</h3>
                <p>Yes, we prioritize your privacy and security. Refer to our <a href="{{ route('policy') }}">Privacy
                        Policy</a> for more details.</p>
            </div>
            <div class="faq-item">
                <h3>Can I advertise on E-Properties?</h3>
                <p>Yes, we offer advertising opportunities for businesses. Please contact <a
                        href="mailto:ads@eproperties.ng">ads@eproperties.ng</a> for more details.</p>
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
    </style>
@endsection
