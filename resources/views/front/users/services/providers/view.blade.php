@extends('layouts.front.login-site')
@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@endsection
@php
    // Define a mapping for converting service names to profession titles
    $professionMapping = [
        'AC Repairs' => 'AC Repairer',
        'Electricians' => 'Electrician',
        'Painters' => 'Painter',
        'Carpenters' => 'Carpenter',
        'Plumbers' => 'Plumber',
        'Welders' => 'Welder',
        'Cleaners' => 'Cleaner',
        'Aluminium Repairs' => 'Aluminium Repairer',
        'Real Estate Developers' => 'Real Estate Developer',
        'Real Estate Investors' => 'Real Estate Investor',
        'Land Use Planners' => 'Land Use Planner',
        'Real Estate Economists' => 'Real Estate Economist',
        'Home Inspectors' => 'Home Inspector',
        'Environmental Consultants' => 'Environmental Consultant',
        'Real Estate Attorneys' => 'Real Estate Attorney',
        'Property Tax Consultants' => 'Property Tax Consultant',
        'Real Estate Agents' => 'Real Estate Agent',
        'Real Estate Brokers' => 'Real Estate Broker',
        'Property Managers' => 'Property Manager',
        'Real Estate Appraisers' => 'Real Estate Appraiser',
        'Mortgage Brokers' => 'Mortgage Broker',
        'Residential Estate Agents' => 'Residential Estate Agent',
        'Commercial Estate Agents' => 'Commercial Estate Agent',
        'Real Estate Investment Analyser' => 'Real Estate Investment Analyser',
    ];

    $profession = $professionMapping[$service] ?? $service; // Get mapped profession or original service
@endphp
@section('content')
    <div class="container mb-4  provider-connect">
        <div class="provider-image">
            <img src="{{ !empty($selectedProvider->photo) ? url(asset($selectedProvider->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                alt="">
            <span class="provider-btn">
                <a href="" class="provider-connect-link">Connect</a>
                <a href="#" onclick="showMessageModal(event);checkAuthMessage();" class="provider-message-link">Send a
                    Message</a>
                <a href="#" onclick="showShareModal(event);" class="provider-share-link"> <i
                        class="fa fa-share-alt text-black"></i>Share</a>
            </span>
        </div>
        <div class="provider-description">
            <h3>{{ $selectedProvider->firstname }} {{ $selectedProvider->lastname }}</h3>
            <h5>{{ $profession }}</h5>
            <div>
                <span class=" text-black mr-5">
                    <i class="fa fa-map-marker mr-2"></i>
                    {{ $selectedProvider->org_axis }},{{ $selectedProvider->org_state }}
                </span>
                <i class="fa fa-user ml-3 mr-2"></i>{{ $selectedProvider->email }}
            </div>
            <span class="">
                <i class="fa fa-envelope mr-2"> </i>Michaeltimothy@essential.com <br>
                <i class="fa fa-phone mr-2"> </i>{{ $selectedProvider->phone }}
                {{ $selectedProvider->whatApp ? ', ' . $selectedProvider->whatApp : '' }}
            </span>
            <span class="mt-2"><strong style="border:1px solid black">Experience</strong>
                {{ $selectedProvider->experience . ' years' ?? 'NA' }}</span>
            <div class="provider-bio mt-4">
                <h3>Bio</h3>
                <p>{{ $selectedProvider->about_org }}</p>
            </div>
        </div>
    </div>

    <div class="container mb-4 provider-services-display">
        <img src="{{ asset('/assets/images/provider/plumber-1.png') }}" class="img-1" alt="">
        <div class="two-images">
            <img src="{{ asset('/assets/images/provider/mechanic-1.png') }}" alt="">
            <img src="{{ asset('/assets/images/provider/mechanic-2.png') }}" alt="">
        </div>
        <img src="{{ asset('/assets/images/provider/plumber-2.png') }}" class="img-2" alt="">
        <img src="{{ asset('/assets/images/provider/plumber-3.png') }}" alt="" class="img-3">
    </div>

    {{-- <div class="container mb-5">
        <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600"> Reviews </h5>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Recusandae, nam hic! Suscipit temporeanimi omnis at et.
                </p>
            </div>
        </div>
        <span class="agent-message ml-5"><a href="">Post a comment</a></span>
    </div> --}}
    <div class="container mb-5">
        <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600">Reviews</h5>
        @if ($reviews !== null)
            <div class="row mb-5">
                @foreach ($reviews->take(4) as $item)
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <p>
                            {!! $item->review !!}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif
        <span class="agent-message ml-5"><a href="#" onclick="showReviewModal(event)">Post a comment</a></span>
    </div>

    <div class="container mb-5 provider-open">
        <div class="open-days mt-0">
            <h3 style="width:100%">Opening Hours</h3>
            <span class="day-time">
                <h5>Monday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Tuesday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Wednesday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Thursday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Monday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Friday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
            <span class="day-time">
                <h5>Saturday</h5>
                <h5>10:00 - 15:00</h5>
            </span>
        </div>
        {{-- <div class="provider-map">
            <img src="{{ asset('/assets/images/provider/map.png') }}" alt="">
        </div> --}}
        <div class="provider-map" id="map" style="height: 400px; width: 100%;"></div>

    </div>

    <div class="container other-providers-header">
        <div class="other-providers-more">
            <h3>Other Service Providers</h3>
            <a href="" style="text-decoration: none">
                <h5 style="color: red;font-weight:700">See more</h5>
            </a>
        </div>
        <div class="other-providers">
            @foreach ($otherProviders->take(4) as $item)
                <a href="{{ route('services.type.all', $item->first()->slug) }}">
                    <div class="other-provider-sub">
                        <img src="{{ asset($item->first()->image) ?? $item->first()->image }}"
                            alt="{{ $item->first()->service }}">
                        <span>
                            <h4><b>{{ $item->first()->service }}</b></h4>
                            <p>Available: <b>{{ $item->first()->providers_count }}</b></p>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @include('front.users.agents.share-modal')

    <!-- Message Modal -->
    @include('front.users.services.providers.message-modal')

    <!-- Review Modal -->
    @include('front.users.services.providers.review-modal')
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Set initial coordinates for the marker
        var initialCoordinates = [6.5965157, 3.3491287]; // Lagos coordinates
        var map = L.map('map').setView(initialCoordinates, 13); // Initialize the map

        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Create a marker and set it at the initial position
        var marker = L.marker(initialCoordinates).addTo(map);
        marker.bindPopup(
            '<b>{{ $selectedProvider->firstname }} {{ $selectedProvider->lastname }}</b><br>{{ $profession }}'
        ).openPopup();

        // Function to update the marker's position
        function updateMarker(newLat, newLng) {
            marker.setLatLng([newLat, newLng]);
            map.setView([newLat, newLng]); // Center map on new location
        }

        // Example of how to update the marker with new coordinates
        function fetchNewCoordinates() {
            // Simulate a new location for demonstration purposes
            var newCoordinates = [6.5965157, 3.3491287]; // New example coordinates
            updateMarker(newCoordinates[0], newCoordinates[1]);
        }

        // Call fetchNewCoordinates() when you want to update the marker
        setInterval(fetchNewCoordinates, 30000); // Update every 30 seconds

        // Add event listener for zoom events to show more information
        map.on('zoomend', function() {
            var zoomLevel = map.getZoom();
            if (zoomLevel > 15) {
                marker.bindPopup(
                    '<b>{{ $selectedProvider->firstname }} {{ $selectedProvider->lastname }}</b><br>{{ $profession }}<br><i>Zoom level: ' +
                    zoomLevel +
                    '</i>').openPopup();
            } else {
                marker.bindPopup(
                    '<b>{{ $selectedProvider->firstname }} {{ $selectedProvider->lastname }}</b><br>{{ $profession }}'
                ).openPopup();
            }
        });
    });
</script>

<script>
    function showMessageModal(event) {
        event.preventDefault(); // Prevent the default anchor behavior

        var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};

        if (isAuthenticated) {
            // If the user is authenticated, show the modal
            document.getElementById('messageModal').style.display = 'block';
        } else {
            // If the user is not authenticated, show a Toastr error\

            toastr.error('You must be logged in to send a message.', 'Authentication Required', {
                closeButton: true,
                progressBar: true,
                timeOut: 5000, // Auto-dismiss after 5 seconds
            });
        }
    }

    // Toastr settings (optional customization)
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>


<style>
    .provider-open-content {
        display: flex;
        /* Flexbox for layout */
        justify-content: space-between;
        /* Space between children */
        align-items: flex-start;
        /* Align items at the start */
    }

    .provider-map {
        border-radius: 8px;
        /* Add border radius */
        overflow: hidden;
        /* Hide overflow for the border radius */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Optional: add a slight shadow */
        flex: 1;
        /* Allow the map to take remaining space */
        margin-left: 20px;
        /* Space between the open days and the map */
        height: 400px;
        /* Keep the height consistent */
    }

    .leaflet-popup-content {
        font-size: 14px;
    }
</style>
