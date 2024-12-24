@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            My Property Deals
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($propertyDeals)
                                                        @foreach ($propertyDeals as $index => $property)
                                                    <tr>

                                                        <td>
                                                            {{ ($propertyDeals->currentPage() - 1) * $propertyDeals->perPage() + $index + 1 }}
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
                                @if (count($propertyDeals) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $propertyDeals->links('vendor.pagination.custom') }}
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
