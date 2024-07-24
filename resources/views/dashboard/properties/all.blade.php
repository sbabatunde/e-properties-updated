@extends('admin.index')
@section('content')
    <style>
        .icon-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
            /* Optional: Change cursor to pointer on hover */
        }

        .tooltip {
            visibility: hidden;
            width: 120px;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            /* Position the tooltip above the icon */
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .icon-container:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            All Properties
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            @include('dashboard.includes.alerts.success')
            @include('dashboard.includes.alerts.errors')
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            <div class="row justify-content-md-center">
                                <div class="col-md-11">
                                    <div class="form-body">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th># </th>
                                                    <th>Title </th>
                                                    <th>Code </th>
                                                    <th>Status </th>
                                                    <th>Price </th>
                                                    <th>Agent</th>
                                                    <th>Trending</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($properties)
                                                        @foreach ($properties as $index => $property)
                                                    <tr>

                                                        <td>
                                                            {{ ($properties->currentPage() - 1) * $properties->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>{{ $property->title }}</td>
                                                        <td>{{ $property->property_code }}</td>
                                                        <td>{{ $property->status }}</td>
                                                        <td>
                                                            {{ $property->payment->initial_denomination ?? '' }}
                                                            {{ number_format($property->payment->initial_pay) ?? '' }}

                                                        </td>
                                                        <td>
                                                            {{ $property->agent->firstname ?? '' }}
                                                            {{ $property->agent->lastname ?? '' }}
                                                        </td>
                                                        <td class="table-btn">
                                                            @if ($property->trending == null)
                                                                <form id="addToTrend_{{ $property->id }}" class="addForm"
                                                                    action="{{ route('admin.trending.add', $property->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button onclick="addToTrending(event,{{ $property->id }})"
                                                                        class="btn removeForm btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        <i class="bx bx-trending-up"></i>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <form id="removeTrending{{ $property->id }}"
                                                                    {{-- style="display: none" --}}
                                                                    action="{{ route('admin.trending.remove', $property->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button onclick="removeTrending(event,{{ $property->id }})"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        <i class="bx bx-trending-down"></i>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                        </td>
                                                        <td class="table-btn">
                                                            <a href="{{ route('admin.categories.edit', $property->id) }}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td class="table-btn">
                                                            <a class="icon-container"
                                                                href="{{ route('admin.categories.delete', $property->id) }}"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-trash "></i>
                                                                <span class="tooltip">Home</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endisset
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div>
                                @if (count($properties) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $properties->links('vendor.pagination.custom') }}
                                    </div>
                                @endif
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

<script>
    function addToTrending(event, id) {
        event.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = new FormData(document.getElementById('addToTrend_' + id));
        // const addForm = document.querySelector('.addForm');
        // const removeForm = document.querySelector('.removeForm');
        // Make an AJAX request to submit the form data
        fetch(document.getElementById('addToTrend_' + id).action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', // Indicate that this is an AJAX request
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // CSRF token
                }
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response from the server
                if (data.success) {
                    // Toastr success message
                    toastr.success('Added to trending successfully!');
                    // Add the desired class to the element
                    // addForm.classList.add('hidden');
                    // removeForm.classList.add('visible');

                } else {
                    // Toastr error message
                    toastr.error(data.message);
                }
            })
            .catch(error => {
                // Handle and display error
                toastr.error('An error occurred while adding to trending.');
            });
    }
</script>


<script>
    function removeTrending(event, id) {
        event.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = new FormData(document.getElementById('removeTrending' + id));
        // const addForm = document.querySelector('.addForm');
        // const removeForm = document.querySelector('.removeForm');
        // Make an AJAX request to submit the form data
        fetch(document.getElementById('removeTrending' + id).action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', // Indicate that this is an AJAX request
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // CSRF token
                }
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response from the server
                if (data.success) {
                    // Toastr success message
                    toastr.success('Property Removed from trending successfully!');
                    // Add the desired class to the element
                    // addForm.classList.add('hidden');
                    // removeForm.classList.add('visible');

                } else {
                    // Toastr error message
                    toastr.error(data.message);
                }
            })
            .catch(error => {
                // Handle and display error
                toastr.error('An error occurred while adding to trending.');
            });
    }
</script>
