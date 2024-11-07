<style>
    .custom-file-input {
        display: none;
    }

    .custom-file-label {
        border: 1px solid #ced4da;
        padding: 10px;
        border-radius: 5px;
        background-color: #fff;
        display: inline-block;
        width: 100%;
        cursor: pointer;
        text-align: center;
    }

    .custom-file-label img {
        max-height: 150px;
        margin-top: 10px;
    }

    .custom-file-label.selected {
        border-color: #80bdff;
        background-color: #e9ecef;
    }

    .img-thumbnail {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }
</style>

<!-- Loop through each group to create a separate modal form for each -->
<form class="form-group" action="{{ route('admin.group.edit', $group->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Use PUT for updating -->
    <div class="post-form modal fade" id="editGroup{{ $group->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="editGroup{{ $group->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGroup{{ $group->id }}Label">Edit Group: {{ $group->group_name }}
                    </h5>
                    <button type="button" class="btn-close pt-1 pb-1 pr-2 pl-2" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <!-- Group Name Input -->
                    <div class="form-group mb-3">
                        <label for="group_name_{{ $group->id }}">Group Name:</label>
                        <input type="text" id="group_name_{{ $group->id }}" name="group_name" class="form-control"
                            value="{{ $group->group_name }}" required>
                    </div>

                    <!-- Group Photo Input -->
                    <div class="form-group mb-3">
                        <label for="group_photo_{{ $group->id }}">Group Photo:</label>
                        <input type="file" id="group_photo_{{ $group->id }}" name="photo"
                            class="custom-file-input" accept="image/*"
                            onchange="updateFileName(this, {{ $group->id }})">
                        <label for="group_photo_{{ $group->id }}" class="custom-file-label"
                            id="label_{{ $group->id }}">
                            Select a photo...
                        </label>

                        <!-- Display the current photo or a placeholder if none exists -->
                        @if ($group->photo)
                            <img src="{{ $group->photo }}" alt="Group Photo" id="current-photo_{{ $group->id }}"
                                class="img-thumbnail mt-2">
                        @else
                            <img src="https://via.placeholder.com/150" alt="No photo available"
                                id="current-photo_{{ $group->id }}" class="img-thumbnail mt-2">
                        @endif
                    </div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline-primary">Update Group</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // Modify this function to accept the groupId and update the specific group's input and image
    function updateFileName(input, groupId) {
        const label = document.getElementById('label_' + groupId); // Select the label for this specific group
        const currentPhoto = document.getElementById('current-photo_' +
        groupId); // Get the current photo element for this group

        if (input.files.length > 0) {
            label.classList.add('selected');
            label.textContent = input.files[0].name; // Display the name of the selected file

            // Create a FileReader to read the selected image
            const reader = new FileReader();
            reader.onload = function(e) {
                // Update the src of the current photo with the new image for this group
                if (currentPhoto) {
                    currentPhoto.src = e.target.result; // Set the src to the base64 string
                }
            };
            reader.readAsDataURL(input.files[0]); // Read the file as a data URL
        } else {
            label.classList.remove('selected');
            label.textContent = 'Select a photo...'; // Reset to default text
            if (currentPhoto) {
                currentPhoto.src = ''; // Clear the image if no file is selected
            }
        }
    }
</script>
