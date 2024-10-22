@extends('layouts.front.login-site')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-6 agent-details">
                <img class="agent-image"
                    src="{{ !empty($propertyProfessional->photo) ? url(asset($propertyProfessional->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                    alt="{{ $propertyProfessional->firstname }}">
                <div class="agent-action">
                    <span class="agent-connect"> <a href="#">Connect</a></span>
                    <span class="agent-message"><a href="#" onclick="showMessageModal(event);checkAuthMessage();">Send
                            a Message</a></span>
                    <span class="agent-message">
                        <a href="#" onclick="showShareModal(event);">
                            <i class="fa fa-share-alt text-black" style="color: rgb(82, 80, 182)"></i> Share
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-lg-6 agent-desc">
                <h3>{{ $propertyProfessional->firstname }} {{ $propertyProfessional->lastname }}</h3>
                @if ($propertyProfessional->user_type == 'agent')
                    <h5 class="text-bold uppercase">Real Estate Agent</h5>
                @elseif($propertyProfessional->user_type == 'landlord')
                    <h5 class="text-bold uppercase">Landlord</h5>
                @else
                    @foreach ($propertyProfessional->providers as $item)
                        {{ $item->serviceType->service }}
                    @endforeach
                @endif
                <div class="">
                    <span class="" style="float: inline-start">
                        <i class="fa fa-map-marker mr-2" style="font-size:20px;color:black"></i>
                        {{ $propertyProfessional->org_axis }},{{ $propertyProfessional->org_state }}
                    </span>
                    <span style="float: inline-end">{{ $propertyProfessional->email }}</span>
                </div>
                <div class="py-2">
                    <ul class="py-3">
                        <li><i class="fa fa-envelope mr-2 mt-2"
                                style="font-size:20px;color:black"></i>{{ $propertyProfessional->email }}</li>
                        <li><i class="fa fa-phone mr-2 mt-2" style="font-size:20px;color:black"></i>
                            {{ $propertyProfessional->phone }}
                            {{ $propertyProfessional->whatApp ? ', ' . $propertyProfessional->whatApp : '' }}
                        </li>
                        <li class="mt-2"><span
                                style="border: 1px solid black;padding:.2rem;font-weight:700">Experience</span>
                            {{ $propertyProfessional->experience }} years
                        </li>
                    </ul>
                </div>

                <div class="py-2">
                    <h3>Bio</h3>
                    <p>{{ $propertyProfessional->about_org }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($propertyProfessional->property->take(8) as $item)
                <div class="col-lg-3 col-md-3 col-sm-6 agent-house">
                    <a href="{{ route('property.details', $item->id) }}">
                        <img src="{{ asset($item->thumbnail) }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

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

    <div class="container">
        <div class="row mt-3">
            @foreach ($similarProfs as $item)
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center wow fadeInLeft delay-04s">
                    <div class="meet-card">
                        <div class="image">
                            <img src="{{ !empty($item->photo) ? url(asset($item->photo)) : url('/assets/admin/images/no_image.jpg') }}"
                                alt="{{ $item->firstname }}" style="width:100%;" height="150" width="100">
                        </div>
                        <div class="meet-card-sub">
                            <div class="card-text mb-0">
                                <h5>{{ $item->firstname }} {{ $item->lastname }}</h5>
                                <p>12 Followers</p>
                            </div>
                            <div class="card-footer meet-footer">
                                <a href="{{ route('property.professionals.view', $item->id) }}">
                                    Connect
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Share Modal -->
    @include('front.users.agents.share-modal')

    <!-- Message Modal -->
    @include('front.users.agents.message-modal')

    <!-- Review Modal -->
    @include('front.users.agents.review-modal')

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


@endsection
