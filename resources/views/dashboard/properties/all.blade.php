@extends('admin.index')
@section('content')
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
                                                    <th>Trending</th>
                                                    <th>Featured</th>
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
                                                            <td class="table-btn">
                                                                @if ($property->trending == null)
                                                                    <form id="addToTrend_{{ $property->id }}"
                                                                        action="{{ route('admin.trending.add', $property->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button title="Add Property to Trending"
                                                                            onclick="addToTrending(event,{{ $property->id }})"
                                                                            class="btn btn-outline-primary">
                                                                            <i class="bx bx-trending-up"></i>
                                                                        </button>
                                                                    </form>
                                                                @else
                                                                    <form id="removeTrending{{ $property->id }}"
                                                                        action="{{ route('admin.trending.remove', $property->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button title="Remove Property from Trending"
                                                                            onclick="removeTrending(event,{{ $property->id }})"
                                                                            class="btn btn-outline-danger">
                                                                            <i class="bx bx-trending-down"></i>
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            </td>
                                                            <td class="table-btn">

                                                                <a href="#" class="feature-toggle btn btn-success"
                                                                    data-property-id="{{ $property->id }}"
                                                                    data-featured="{{ $property->featured === 'Yes' ? 'Yes' : 'No' }}"
                                                                    title="{{ $property->featured === 'Yes' ? 'Remove from featured' : 'Add to featured' }}">
                                                                    <i
                                                                        class="{{ $property->featured === 'Yes' ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                                    {{ $property->featured === 'Yes' ? 'Unfeature' : 'Feature' }}

                                                                </a>

                                                            </td>
                                                            <td class="table-btn row">
                                                                <a href="{{ route('admin.properties.edit', $property->id) }}"
                                                                    title="Edit Property" class="btn btn-outline-primary">
                                                                    <i class="fa fa-edit" data-title ="Edit"></i>
                                                                </a>

                                                                <a href="{{ route('admin.properties.edit', $property->id) }}"
                                                                    class="btn btn-outline-primary mr-2">
                                                                    <i class="fa fa-eye" data-title ="View"></i>
                                                                </a>
                                                                @if ($property->blacklist == null)
                                                                    <a href="#"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                        data-bs-toggle="modal" title="Add Property to Blacklist"
                                                                        data-bs-target="#BlacklistModal{{ $property->id }}">
                                                                        <i class="fa fa-ban" style="color: red"></i>
                                                                    </a>

                                                                    <!-- Modal for Adding to Blacklist -->
                                                                    <div class="modal fade"
                                                                        id="BlacklistModal{{ $property->id }}" tabindex="-1"
                                                                        aria-labelledby="BlacklistModalLabel{{ $property->id }}"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="BlacklistModalLabel{{ $property->id }}">
                                                                                        Confirm Blacklist</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Are you sure you want to add this property
                                                                                    to the blacklist?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                                    <form
                                                                                        action="{{ route('admin.property.blacklist.add', $property->id) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-danger">Yes, Add to
                                                                                            Blacklist</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <strong>Blacklisted</strong>
                                                                    <form id="removeFromBlacklist{{ $property->id }}"
                                                                        action="{{ route('admin.property.blacklist.remove', $property->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1">
                                                                            <i class="fa fa-unlock"></i> Remove from Blacklist
                                                                        </button>
                                                                    </form>
                                                                @endif

                                                                <a href="{{ route('admin.properties.delete', $property->id) }}"
                                                                    class="btn btn-outline-danger" title="Delete Property">
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
    @include('dashboard.properties.scripts')
@endsection

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
