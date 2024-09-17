<style>
    .left-item {
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.5s ease-in-out;
        position: absolute;
        left: 0;
        width: 100%;
    }

    .left-item.active {
        transform: translateX(0);
    }

    .left-item.hidden {
        transform: translateX(100%);
        visibility: hidden;
    }

    .toggle-button {
        position: absolute;
        bottom: 50%;
        rotate: 90deg;
        left: -10%;
        padding: 5px 15px;
        border: 1px solid black;
        font-weight: bold;
        border-radius: 7px 7px 0 0;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out
    }

    .toggle-button:hover {
        cursor: pointer;
    }

    .toggle-button.compare {
        position: absolute;
        bottom: 50%;
        rotate: 90deg;
        width: fit-content;
        left: 94%;
    }
</style>

@extends('layouts.front.login-site')
@section('content')
    {{-- Page Banner Begins --}}
    <div class="page-hero bg-image" style="background:#5856cf">
        <div class="hero-section" style="display: flex;flex-direction:column;width:90vw;margin:auto">
            {{-- @include('front.hero-sections.search-form') --}}
        </div>
    </div>
    {{-- Page Banner Ends  --}}

    {{-- Residential Properties List --}}
    <!-- Hidden form for Property Interaction Submission -->

    <form id="submitForm" method="POST" action="" style="display:none;">
        @csrf
        <input type="hidden" name="id" id="LikesFormId"> <!-- Hidden input to store ID -->
    </form>

    <div class="residential-main">
        {{-- @include('front.users.properties.commercial.compare')
        @include('front.users.properties.commercial.live-auction') --}}
        <div class="residential-right">
            <div class="res-btn-group">
                <div class="btn category-btn-group res-btn-container d-flex justify-content-center">
                    <button onclick="showResSales()" class="req-target active-btn-group">
                        <strong>
                            Sales
                        </strong>
                    </button>
                    <button onclick="showResRents()" class="active-btn-group">
                        <strong>
                            Rent
                        </strong>
                    </button>
                    <button onclick="showResLets()" class="active-btn-group">
                        <strong>
                            Let
                        </strong>
                    </button>
                </div>
            </div>
            <div id= "residentialLets" style="display:none">
                <div class="container res-properties">
                    @foreach ($properties as $item)
                        <div class="res-prop-items mt-4">
                            <img src="{{ $item->thumbnail ?? asset($item->thumbnail) }}" alt="">
                            <p style="color: black">
                                <span style="font-weight:550;font-size:4vmin">{{ $item->title }}</span><br>
                                {{ $item->area }}
                            </p>
                            <a href="{{ route('property.details', $item->id) }}" class="btn res-prop-view"> View</a><br>
                            <div class="res-price">
                                <span style="color: black">Price:
                                    <b>
                                        {{ $item->payment->initial_denomination ?? '' }}
                                        {{ number_format($item->payment->initial_pay ?? '') }}
                                    </b>
                                </span>
                                <span style="color: #394293" class="mr-2">{{ $item->payment->sequence }}</span>
                            </div>
                            <div class="comp-like-share">
                                <span style="font-weight:550">
                                    <a href="#" onclick="addToCompare({{ $item->id }}); return false;">Compare</a>
                                </span>
                                <span>
                                    <a href="#" onclick="addToFav({{ $item->id }}); return false;">
                                        <i class="fa fa-heart ml-2" style="color: rgb(131, 131, 131);font-size:25px"></i>
                                    </a>

                                    <a href="#" id="shareLink" data-id="{{ $item->id }}">
                                        <i class="fa fa-share-alt" style="color: rgb(131, 131, 131);font-size:25px"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if (count($properties) > 0)
                    <div class="pagination mt-5 ml-2">
                        {{ $properties->links('vendor.pagination.custom') }}
                    </div>
                @endif

            </div>
        </div>
    </div>
    </div>

    {{-- Similar Properties List --}}
    {{-- @include('front.users.properties.commercial.similar') --}}

    {{-- Compare property Script --}}
    <script>
        const leftItems = document.querySelectorAll('.left-item');
        const toggleButtons = document.querySelectorAll('.toggle-button');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                leftItems.forEach((item, i) => {
                    if (i === index) {
                        item.classList.toggle('active');
                        item.classList.toggle('hidden');
                    } else {
                        if (item.classList.contains('active')) {
                            item.classList.remove('active');
                            item.classList.add('hidden');
                        } else {
                            item.classList.remove('hidden');
                            item.classList.add('active');
                        }
                    }
                });
            });
        });
    </script>

    {{-- For Property Likes update in database --}}
    <script>
        // Function to get the CSRF token from meta tag
        function getCsrfToken() {
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            console.log("CSRF Token:", token); // Debug output
            return token;
        }

        function addToFav(id) {
            $.ajax({
                type: "POST",
                url: "/property/likes/" + id,
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken() // Include CSRF token in request headers
                },
                success: function(data) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success,
                        });
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.error,
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        }
    </script>
@endsection
