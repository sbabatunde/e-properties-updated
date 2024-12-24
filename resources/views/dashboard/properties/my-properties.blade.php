@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            My Properties
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
                                    <!-- HTML Table Section -->
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Code</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Agent</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($properties)
                                                    @foreach ($properties as $index => $property)
                                                        <tr>
                                                            <td>
                                                                {{ ($properties->currentPage() - 1) * $properties->perPage() + $index + 1 }}
                                                            </td>
                                                            <td>
                                                                <img src="{{ asset($property->thumbnail) }}"
                                                                    alt="{{ $property->title }}" class="property-mini-image">
                                                            </td>
                                                            <td>{{ $property->title }}</td>
                                                            <td>{{ $property->property_code }}</td>
                                                            <td class="status-column">
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-primary dropdown-toggle"
                                                                        type="button" id="statusDropdown_{{ $property->id }}"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        {{ ucfirst($property->status) }}
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="statusDropdown_{{ $property->id }}">
                                                                        @if ($property->status === 'rented' || $property->status === 'sold')
                                                                            <li>
                                                                                <a class="dropdown-item change-status"
                                                                                    href="#"
                                                                                    data-property-id="{{ $property->id }}"
                                                                                    data-status="Sale">
                                                                                    <i
                                                                                        class="fa fa-arrow-circle-left text-warning"></i>
                                                                                    Mark as Sale
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item change-status"
                                                                                    href="#"
                                                                                    data-property-id="{{ $property->id }}"
                                                                                    data-status="Rent">
                                                                                    <i
                                                                                        class="fa fa-arrow-circle-left text-warning"></i>
                                                                                    Mark as Rent
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item change-status"
                                                                                    href="#"
                                                                                    data-property-id="{{ $property->id }}"
                                                                                    data-status="Let">
                                                                                    <i
                                                                                        class="fa fa-arrow-circle-left text-warning"></i>
                                                                                    Mark as Let
                                                                                </a>
                                                                            </li>
                                                                        @else
                                                                            <li>
                                                                                <a class="dropdown-item change-status"
                                                                                    href="#"
                                                                                    data-property-id="{{ $property->id }}"
                                                                                    data-status="Sold">
                                                                                    <i
                                                                                        class="fa fa-check-circle text-success"></i>
                                                                                    Mark as Sold
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item change-status"
                                                                                    href="#"
                                                                                    data-property-id="{{ $property->id }}"
                                                                                    data-status="Rented">
                                                                                    <i class="fa fa-home text-info"></i> Mark as
                                                                                    Rented
                                                                                </a>
                                                                            </li>
                                                                        @endif
                                                                    </ul>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                {{ $property->payment->initial_denomination ?? '' }}
                                                                {{ number_format($property->payment->initial_pay) ?? '' }}
                                                            </td>
                                                            <td>
                                                                {{ $property->agent->firstname ?? '' }}
                                                                {{ $property->agent->lastname ?? '' }}
                                                            </td>

                                                            <td class="table-btn row">
                                                                <a href="{{ route('admin.properties.edit', $property->id) }}"
                                                                    class="btn btn-outline-primary">
                                                                    <i class="fa fa-edit" data-title ="Edit"></i>
                                                                </a>
                                                                <a href="{{ route('admin.properties.edit', $property->id) }}"
                                                                    class="btn btn-outline-primary mr-2">
                                                                    <i class="fa fa-eye" data-title ="View"></i>
                                                                </a>
                                                                <a href="{{ route('admin.properties.delete', $property->id) }}"
                                                                    class="btn btn-outline-danger">
                                                                    <i class="fa fa-trash" data-title ="Delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endisset
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Event listener for status change
        document.querySelectorAll('.change-status').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault();

                const propertyId = this.dataset.propertyId;
                const newStatus = this.dataset.status;
                const statusButton = document.querySelector(`#statusDropdown_${propertyId}`);

                // Send AJAX request
                fetch(`properties/admin/listing/status/update/${propertyId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            status: newStatus
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Toastr success message
                            toastr.success('Status updated successfully!');
                            // Update the status in the table dynamically
                            statusButton.textContent = newStatus.charAt(0).toUpperCase() +
                                newStatus.slice(1);

                            // Update dropdown menu options
                            const dropdownMenu = statusButton.nextElementSibling;
                            dropdownMenu.innerHTML = ''; // Clear existing options

                            if (newStatus === 'Rented' || newStatus === 'Sold') {
                                dropdownMenu.innerHTML = `
                                <li>
                                    <a class="dropdown-item change-status" href="#" data-property-id="${propertyId}" data-status="Sale">
                                        <i class="fa fa-arrow-circle-left text-warning"></i> Mark as Sale
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item change-status" href="#" data-property-id="${propertyId}" data-status="Rent">
                                        <i class="fa fa-arrow-circle-left text-warning"></i> Mark as Rent
                                    </a>
                                </li>
                                
                                <li>
                                    <a class="dropdown-item change-status" href="#" data-property-id="${propertyId}" data-status="Let">
                                        <i class="fa fa-arrow-circle-left text-warning"></i> Mark as Let
                                    </a>
                                </li>`;
                            } else {
                                dropdownMenu.innerHTML = `
                                <li>
                                    <a class="dropdown-item change-status" href="#" data-property-id="${propertyId}" data-status="Sold">
                                        <i class="fa fa-check-circle text-success"></i> Mark as Sold
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item change-status" href="#" data-property-id="${propertyId}" data-status="Rented">
                                        <i class="fa fa-home text-info"></i> Mark as Rented
                                    </a>
                                </li>`;
                            }
                            // Re-bind event listeners to the new dropdown items
                            document.querySelectorAll('.change-status').forEach(newItem => {
                                newItem.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    this.click();
                                });
                            });
                        } else {
                            // Toastr error message
                            toastr.error(data.message || 'Failed to update status.');
                        }
                    })
                    .catch(error => {
                        console.error('Error updating status:', error);
                        // Toastr error message for unexpected errors
                        toastr.error('Something went wrong. Please try again.');
                    });
            });
        });
    });
</script>


<style>
    .status-column .dropdown {
        position: relative;
        display: inline-block;
    }

    .status-column .dropdown button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        font-size: 14px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .status-column .dropdown button:hover {
        background-color: #0056b3;
    }

    .status-column .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        min-width: 150px;
        padding: 10px 0;
    }

    .status-column .dropdown-menu a {
        display: block;
        padding: 8px 15px;
        font-size: 14px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .status-column .dropdown-menu a:hover {
        background-color: #f8f9fa;
        color: #007bff;
    }
</style>
