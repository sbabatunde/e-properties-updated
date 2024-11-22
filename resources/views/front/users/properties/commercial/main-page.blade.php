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
            @include('front.hero-sections.search-form')
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
        @include('front.users.properties.commercial.compare')
        @include('front.users.properties.commercial.live-auction')
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
            @include('front.users.properties.commercial.category.lets')
            @include('front.users.properties.commercial.category.sales')
            @include('front.users.properties.commercial.category.rents')
        </div>
    </div>
    </div>

    {{-- Similar Properties List --}}
    @include('front.users.properties.commercial.similar')
    {{-- @include('front.users.properties.commercial.share-modal') --}}

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

    {{-- For Checking whether user can share or not --}}

    {{-- <script>
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
    </script> --}}
@endsection
