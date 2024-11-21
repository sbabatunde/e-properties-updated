@extends('layouts.front.login-site')

@section('content')
    <!-- Terms and Conditions Section -->
    <section class="terms-and-conditions">
        <h1>Terms and Conditions</h1>
        <p>Welcome to E-Properties. These terms and conditions outline the rules and regulations for the use of our website
            and services. By accessing or using our services, you agree to be bound by these terms. Please read them
            carefully.</p>

        <!-- Acceptance of Terms Section -->
        <section class="acceptance-terms">
            <h2>Acceptance of Terms</h2>
            <p>
                By using this website, you confirm that you accept these terms and conditions and agree to comply with them.
                If you do not agree, please refrain from using our website.
            </p>
        </section>

        <!-- Changes to Terms Section -->
        <section class="changes-to-terms">
            <h2>Changes to Terms</h2>
            <p>
                We reserve the right to revise these terms and conditions at any time without prior notice. Continued use of
                the website following any changes indicates your acceptance of the new terms.
            </p>
        </section>

        <!-- Use of Website Section -->
        <section class="use-of-website">
            <h2>Use of Website</h2>
            <ul>
                <li>You must be at least 18 years old to use our website and services.</li>
                <li>All information you provide must be accurate, complete, and up-to-date.</li>
                <li>You agree not to use the website for any unlawful or prohibited purposes.</li>
                <li>You must not attempt to gain unauthorized access to any part of the website.</li>
            </ul>
        </section>

        <!-- Intellectual Property Section -->
        <section class="intellectual-property">
            <h2>Intellectual Property</h2>
            <p>
                All content on this website, including text, graphics, logos, and images, is the property of E-Properties or
                its licensors. You may not copy, reproduce, or distribute any content without our written consent.
            </p>
        </section>

        <!-- Limitation of Liability Section -->
        <section class="limitation-liability">
            <h2>Limitation of Liability</h2>
            <p>
                E-Properties will not be held liable for any damages arising from your use of the website, including but not
                limited to direct, indirect, incidental, or consequential damages.
            </p>
        </section>

        <!-- Termination Section -->
        <section class="termination">
            <h2>Termination</h2>
            <p>
                We reserve the right to terminate your access to the website at any time without notice if we believe you
                have violated these terms and conditions.
            </p>
        </section>

        <!-- Governing Law Section -->
        <section class="governing-law">
            <h2>Governing Law</h2>
            <p>
                These terms and conditions are governed by the laws of Nigeria. Any disputes arising under these terms will
                be subject to the exclusive jurisdiction of the courts in Lagos, Nigeria.
            </p>
        </section>

        <!-- Contact Section -->
        <section class="contact">
            <h2>Contact Us</h2>
            <p>
                If you have any questions or concerns about these terms, please contact us at:<br>
                Email: <a href="mailto:admin@eproperties.ng">admin@eproperties.ng</a><br>
                Address: 23-24 Iyala Street, Beside Ikeja Shopping Mall, Alausa, Ikeja, Lagos, Nigeria
            </p>
        </section>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            margin-top: 14px;
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

        a:hover {
            text-decoration: underline;
        }

        h1,
        h2 {
            color: #131414;
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
        }

        section ul {
            list-style-type: disc;
            margin-left: 20px;
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
        }
    </style>
@endsection
