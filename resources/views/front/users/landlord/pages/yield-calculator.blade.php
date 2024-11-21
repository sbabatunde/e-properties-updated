<!-- resources/views/yield-calculator.blade.php -->

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
        <h2>Calculate Your Rental Yield</h2>

        <!-- Display the result after calculation -->
        @if (isset($yield))
            <div class="alert alert-success">
                <p><strong>Calculated Yield:</strong> {{ number_format($yield, 2) }}%</p>
                <p><strong>Purchase Price:</strong> ₦{{ number_format($purchasePrice) }}</p>
                <p><strong>Monthly Rent:</strong> ₦{{ number_format($monthlyRent) }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('yield.calculate') }}">
            @csrf
            <div class="form-group">
                <label for="purchase_price">Purchase Price (₦)</label>
                <input type="text" id="purchase_price" name="purchase_price" class="form-control"
                    value="{{ old('purchase_price') }}" required>
                @error('purchase_price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="monthly_rent">Monthly Rent (₦)</label>
                <input type="text" id="monthly_rent" name="monthly_rent" class="form-control"
                    value="{{ old('monthly_rent') }}" required>
                @error('monthly_rent')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary yield-button">Calculate Yield</button>
        </form>
    </section>

    <style>
        /* Form Styling */
        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }

        .yield-button {
            background-color: #394293;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
        }

        .yield-button:hover {
            background-color: #003f88;
            color: #fff;
            cursor: pointer;
        }
    </style>

    <!-- JavaScript to Auto-Insert Commas -->
    <script>
        // Function to format numbers with commas
        function formatNumberWithCommas(value) {
            // Remove all non-numeric characters except for the decimal point
            value = value.replace(/[^0-9.]/g, "");

            // Format the number with commas
            return value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Function to handle the input event and apply formatting
        function applyNumberFormatting(event) {
            const input = event.target;
            let value = input.value;

            // Format the number with commas and set it back to the input field
            value = formatNumberWithCommas(value);

            // Set the formatted value back to the input field
            input.value = value;
        }

        // Get the input fields and add the input event listener
        document.addEventListener('DOMContentLoaded', function() {
            const purchasePriceInput = document.getElementById('purchase_price');
            const monthlyRentInput = document.getElementById('monthly_rent');

            if (purchasePriceInput) {
                purchasePriceInput.addEventListener('input', applyNumberFormatting);
            }

            if (monthlyRentInput) {
                monthlyRentInput.addEventListener('input', applyNumberFormatting);
            }
        });
    </script>
@endsection
