@extends('layouts.front.login-site')

@section('content')
    <!-- Contact Us Section -->
    <section class="contact-us">
        <h1>Contact Us</h1>
        <p>We’re here to help! Feel free to reach out to us using any of the methods below.</p>

        <!-- Contact Information -->
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p>
                <strong>Email:</strong> <a href="mailto:admin@eproperties.ng">admin@eproperties.ng</a><br>
                <strong>Phone:</strong> +234-800-123-4567<br>
                <strong>Address:</strong> 23-24 Iyala Street, Beside Ikeja Shopping Mall, Alausa, Ikeja, Lagos, Nigeria
            </p>
        </section>

        <!-- Contact Form -->
        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Write your message here"></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
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
        h2 {
            color: #131414;
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .btn-submit {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #003f88;
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
