@extends('layouts.front.login-site')
@section('content')
    <style>
        /* Page Hero Styles */
        .page-hero {
            width: 100%;
        }

        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #394293;
        }

        .hero-auction-banner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            color: #FFFFFF;
            box-sizing: border-box;
        }

        .hero-auction-banner p {
            flex: 3;
            max-width: 60%;
            font-size: 1rem;
            line-height: 1.5;
            margin-right: 20px;
        }

        .hero-auction-banner img {
            flex: 2;
            max-width: 40%;
            width: 100%;
            height: auto;
        }

        .professional-item {
            display: block;
            /* Hide all items initially */
        }

        .professional-item.visible {
            display: block;
            /* Show visible items */
        }
    </style>

    <div class="page-hero bg-image">
        <div class="hero-section" style="background:#394293;">
            <div class="hero-auction-banner">
                <p style="color: #FFFFFF">Welcome to our community of property professionals!
                    Whether you’re an agent, broker, property manager, or real estate investor, our
                    platform connects you with the resources and networks you need to thrive in the real estate industry.
                </p>
                <img src="{{ asset('../assets/images/banners/prof-banner.png') }}" alt="Auction Banner">
            </div>
        </div>
    </div>

    <div class="proffesionals-body">
        <form id="serviceTypeForm" method="GET" action="{{ route('property.professionals.all') }}">
            <div class="proffesionals-search mt-4">
                <h3 class="text-left"><strong>Property Professionals</strong></h3>
                <div class="mt-4">
                    @foreach ($serviceTypes as $serviceType)
                        <label class="enclosure">
                            <span class="align-middle">
                                {{ $serviceType->service }}
                                <span style="color: rgb(175, 170, 170);font-weight: 400;float:inline-end">
                                    {{ $serviceType->providers_count }}
                                </span>
                            </span>
                            <input type="radio" name="service_type" value="{{ $serviceType->id }}">
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                </div>
            </div>
        </form>

        <div class="proffesionals mt-4">
            <div class="material-items">
                @foreach ($propertyProfessionals as $item)
                    <div class="pic professional-item" data-service-type="{{ $item->service_type_id }}">
                        <img src="{{ asset($item->photo) }}"
                            style="min-height: 250px; min-width: 300px; border: 1px solid #d6daf3; border-radius: 12px 12px 0 0"
                            alt="">
                        <span class="listing-text mat-cost" style="background: #d6daf3">
                            <h5 class="mt-3" style="font-weight: 700;">{{ $item->firstname }} {{ $item->lastname }}</h5>
                            <p><span style="font-weight: 550">{{ $item->followers->count() }} Followers</span></p>
                            <a href="{{ route('property.professionals.view', $item->id) }}"
                                class="btn btn-info listing-anchor">Connect</a>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if (count($propertyProfessionals) > 1)
        <div class="pagination mt-5 mb-5 text-center" style="display:flex;flex-direction:column; justify-content:center">
            {{ $propertyProfessionals->links('vendor.pagination.custom') }}
        </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Submit the form using jQuery when a radio button is selected
            $('input[name="service_type"]').change(function() {
                $('#serviceTypeForm').submit();
            });

            // Show all professionals initially
            const selectedServiceType = "{{ $selectedServiceTypeId }}";
            const professionals = $('.professional-item');

            professionals.each(function() {
                $(this).removeClass('visible');
                if (!selectedServiceType || $(this).data('service-type') == selectedServiceType) {
                    $(this).addClass('visible');
                }
            });
        });
    </script>
@endsection
