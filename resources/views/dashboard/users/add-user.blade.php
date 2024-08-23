<form class="form-group" action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPostLabel">Add New User</h5>
                    <button type="button" class="btn-close pt-1 pb-1 pr-2 pl-2" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="Firstname" required>
                                @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="Lastname" required>
                                @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" />

                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-password">
                                <label for="email">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirm Password" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_type">User Type</label>
                                <select id="user_type" name="user_type" class="form-control" required
                                    onchange="toggleAdditionalFields()">
                                    <option value="" selected disabled>---Select User Type---</option>
                                    <option value="agent">Agent</option>
                                    <option value="tenant">Tenant</option>
                                    <option value="landlord">Landlord</option>
                                    <option value="service_provider">Service Provider</option>
                                </select>
                                @error('user_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6" id="businessNameField" style="display: none;">
                            <div class="form-group">
                                <label for="business_name">Business Name</label>
                                <input type="text" class="form-control" id="business_name" name="business_name"
                                    placeholder="Business Name">
                                @error('business_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6" id="businessIDField" style="display: none;">
                            <div class="form-group">
                                <label for="business_ID">Business ID</label>
                                <input type="text" class="form-control" id="business_ID" name="business_ID"
                                    placeholder="Business ID">
                                @error('business_ID')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6" id="serviceCategoryField" style="display: none;">
                            <div class="form-group">
                                <label for="service_category">Service Category</label>
                                <select id="service_category" name="category" onchange="getServiceType(this)"
                                    class="form-control">
                                    <option value="" disabled selected>---Select Service Category---</option>
                                    @foreach (App\Models\Site\ServiceCategory::get() as $item)
                                        <option value="{{ $item->slug }}">{{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="serviceField" style="display: none" class="form-group col-md-6">
                            <label for="service_category">Service Type</label>
                            <select id="serviceTypeField" type="text" class="form-control" autocomplete=""
                                value="{{ old('type') }}" name="service_type">
                                <option disabled selected value="">----Select Service Type----</option>'
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <div class="custom-file-input-container">
                                    <button type="button" class="custom-file-button"
                                        onclick="document.getElementById('photoInput').click()">Choose
                                        Photo</button>
                                    <input type="file" accept="image/*" id="photoInput" name="photo"
                                        class="custom-file-input">
                                </div>
                                <div id="photoPreviewContainer" class="mt-2">
                                    <img id="photoPreview" src="" alt="Image Preview" style="display:none;">
                                </div>
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    function toggleAdditionalFields() {
        const userType = document.getElementById('user_type').value;
        document.getElementById('businessNameField').style.display = (userType !== 'tenant') ? 'block' :
            'none';
        document.getElementById('businessIDField').style.display = (userType !== 'tenant') ? 'block' : 'none';
        document.getElementById('serviceCategoryField').style.display = (userType === 'service_provider') ? 'block' :
            'none';
        document.getElementById('serviceField').style.display = (userType === 'service_provider') ? 'block' :
            'none';
    }

    // Function to fetch items based on category
    function getServiceType(that) {
        console.log(that.value);
        fetch(`/staff/users/service-types/search/${that.value}`)
            .then(response => {
                console.log(response);
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(items => {
                console.log(items); // Add this line
                var select = document.getElementById('serviceTypeField');

                // Clear existing options
                select.innerHTML = '<option disabled selected value="">----Select Service Type----</option>';

                // Populate select with items
                items.forEach(item => {
                    var option = document.createElement('option');
                    option.value = item.id; // Adjust as per your item structure
                    option.textContent = item.service; // Adjust as per your item structure
                    select.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error fetching items:', error);
            });
    }


    document.addEventListener('DOMContentLoaded', function() {
        const photoInput = document.getElementById('photoInput');
        const photoPreview = document.getElementById('photoPreview');
        const photoPreviewContainer = document.getElementById('photoPreviewContainer');

        photoInput.addEventListener('change', function() {
            const file = photoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.style.display = 'block';
                    photoPreviewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                photoPreview.style.display = 'none';
                photoPreviewContainer.style.display = 'none';
            }
        });
    });
</script>


<style>
    .custom-file-input-container {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .custom-file-input {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .custom-file-button {
        display: inline-block;
        padding: 6px 12px;
        background-color: #007bff;
        color: white;
        border-radius: 7px;
        border: 1px solid #007bff;
        cursor: pointer;
        text-align: center;
        font-size: 1rem;
        line-height: 1.5;
        width: 100%;
    }

    .custom-file-button:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .modal-content {
        background: #ececee;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .post-footer {
        text-align: center;
        padding: 1rem;
    }

    #photoPreviewContainer {}

    .form-group img {
        /* max-width: 100%;
        border-radius: 7px; */
        width: 250px;
        clip-path: circle();
    }
</style>
