@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Building Material
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            <form class="form" action="{{ route('admin.building-material.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-md-center">
                                    <div class="col-md-11">
                                        <div class="form-body">
                                            <div class="row">

                                                {{-- Material Details --}}
                                                @include('admin.building-material.form.details')
                                            </div>
                                        </div>

                                        <div class="form-group col-md-11 d-flex justify-content-end">
                                            <button class="btn btn-outline btn-info"
                                                style="color:#394293;background-color:transparent;border: 2px solid #394293;font-size:10px bold"
                                                type="button">Save</button>
                                            <button type="submit" class="btn btn-success"
                                                style="color:#fff;background-color:#394293;border: 2px solid #394293;font-size:10px bold">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <script type="text/javascript">
        // Function to fetch items based on category
        function fetchItemsByCategory(that) {
            console.log(that.value);
            fetch(`/building/materials/form/search/${that.value}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(items => {
                    var select = document.getElementById('subCat');

                    // Clear existing options
                    select.innerHTML = '<option disabled selected value="">----Select Material Type----</option>';

                    // Populate select with items
                    items.forEach(item => {
                        var option = document.createElement('option');
                        option.value = item.slug; // Adjust as per your item structure
                        option.textContent = item.type; // Adjust as per your item structure
                        select.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching items:', error);
                });
        }

        // Event listener for category select
        document.getElementById('categorySelect').addEventListener('change', function() {
            var categoryId = this.value;
            if (categoryId) {
                fetchItemsByCategory(categoryId);
            } else {
                // Clear item select if no category selected
                var select = document.getElementById('itemSelect');
                select.innerHTML = '<option value="">Select an item...</option>';
            }
        });
    </script>
@endsection
