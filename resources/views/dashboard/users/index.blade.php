@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            All Users
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
                                                    <th>Photo </th>
                                                    <th>Name </th>
                                                    <th>Email </th>
                                                    <th>Type </th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($users)
                                                        {{-- @dd($users) --}}

                                                        @foreach ($users as $index => $user)
                                                    <tr>
                                                        <td>
                                                            {{ ($users->currentPage() - 1) * $users->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset($user->photo) }}" alt="{{ $user->title }}"
                                                                class="property-mini-image">
                                                        </td>
                                                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                                        @if ($user->user_type !== 'service_provider')
                                                            <td class="text-bold">{{ $user->user_type }}</td>
                                                        @else
                                                            @foreach ($user->providers as $provider)
                                                                @php
                                                                    $service = App\Models\Site\ServiceType::where(
                                                                        'id',
                                                                        $provider->service_type_id,
                                                                    )->first();
                                                                @endphp
                                                            @endforeach
                                                            <td class="text-bold">Provider-{{ $service->service }}</td>
                                                        @endif
                                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('D,M j,Y g:i A') }}
                                                        </td>

                                                        <td class="table-btn">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editUser{{ $user->id }}">
                                                                {{-- <a href="{{ route('admin.categories.edit', $user->id) }}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3
                                                                     mr-1 mb-1"> --}}
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td class="table-btn">
                                                            <a class="icon-container"
                                                                href="{{ route('admin.categories.delete', $user->id) }}"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-trash "></i>
                                                                <span class="tooltip">Delete</span>
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
                                @if (count($users) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $users->links('vendor.pagination.custom') }}
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
    @foreach ($users as $user)
        @include('dashboard.users.edit')
    @endforeach
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
