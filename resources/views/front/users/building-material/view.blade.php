@extends('layouts.front.login-site')
@section('content')
    {{-- get Category type manually --}}
    @php
        use App\Models\Admin\BuildingCategoryType;
        $type = BuildingCategoryType::where('slug', $material->type)->first();
    @endphp
    {{-- @dd($material) --}}

    <div class="container">
        <div class="row">
            <div class="col-lg-6 agent-details bm">
                <img class="agent-image " src="{{ $material->thumbnail }}" alt="{{ $material->title }}">
            </div>
            <div class="col-lg-6 agent-desc">
                <span>{{ $material->user->status ?? '' }}</span>
                <h3>{{ $material->title }}</h3>
                <h5>{{ $type->type }}</h5>
                <div class="">
                    <ul class="py-2">
                        {{-- <li><i class="fa fa-bell mr-2 "></i>Michaelhomes.com</li><i class="fas fa-toilet"></i> --}}
                        <li><i class="fa fa-facebook mr-2 mt-2" style="color: black"></i>{{ $material->user->fb ?? '' }}
                        </li>
                        <li><i class="fa fa-envelope mr-2 mt-2" style="color: black"></i>{{ $material->user->email ?? '' }}
                        </li>
                        <li><i class="fa fa-phone mr-2 mt-2" style="color: black"></i>{{ $material->user->phone ?? '+234' }}
                        </li>
                    </ul>
                </div>

                <div class="pt-2">
                    <h6 style="font-weight: 700">Description</h6>
                    <ol>
                        <li>{{ $material->quantity }} ---- {{ $item->denomination ?? '₦' }}
                            {{ number_format($material->price) }}</li>
                        {{-- <li>1 bag ---- #600000</li> --}}
                    </ol>
                </div>
                <span class="agent-share mb-3">
                    <a href="#" onclick="showShareModal(event)">
                        <i class="fa fa-share-alt mr-2" style="color: black;font-size:25px;"></i>
                        Share
                    </a>
                </span><br>
                <div class="agent-action">
                    <span class="agent-connect"> <a href="#"
                            onclick="showMessageModal(event);checkAuthMessage();">Buy</a></span>
                    <span class="agent-message"><a href="#" onclick="showMessageModal(event);checkAuthMessage();">Send
                            a Message</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h5 class="ml-5 pl-2 mb-4 mt-5" style="font-weight:600">Reviews</h5>
        @if ($reviews !== null)
            {{-- @dd($reviews) --}}
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

    @if ($similarMaterial->count() > 0)
        {{-- Deals Begins --}}
        <div class="hero-category">
            <div class="hero-meet-expert">

                <h5 style="color: black;font-weight:600">Other {{ $type->type }} Option</h5>
                <a href="{{ route('user.buiding-materials.index') }}" style="text-decoration: none">
                    <h5 style="color: red">See more</h5>
                </a>
            </div>

            <div class="hero-listing">
                @foreach ($similarMaterial as $item)
                    <div class="pic">
                        <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                        <span class="listing-text">
                            <h5 class="mt-3" style="font-weight:700;width:inherit">{{ $item->title }}</h5>
                            <p>
                                <span> {{ $item->denomination ?? '₦' }} {{ number_format($item->price) }}</span>
                                {{-- <span>$ 200,000</span> --}}
                                <span> {{ $item->quantity }}</span>
                            </p>
                            <a href="{{ route('user.materials.get', $item->id) }}"
                                class="btn btn-info listing-anchor">View</a>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <!-- Share Material Modal -->
    @include('front.users.agents.share-modal')

    <!-- Review Modal -->
    @include('front.users.building-material.modal.review')
    @include('front.users.building-material.modal.message')


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
