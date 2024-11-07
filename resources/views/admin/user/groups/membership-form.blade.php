<form class="form-group" action="{{ route('admin.group.members.store', $group->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="addMemberModal{{ $group->id }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="addMemberModalLabel{{ $group->id }}"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel{{ $group->id }}">Members to
                        {{ $group->group_name }}</h5>
                    <button type="button" class="btn-close pt-1 pb-1 pr-2 pl-2" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <!-- Hidden input for group_id -->
                    <input type="hidden" name="group_id" value="{{ $group->id }}">

                    <div class="form-group">
                        <label for="user-search{{ $group->id }}">Search for Users:</label>
                        <input type="text" id="user-search{{ $group->id }}" class="form-control"
                            placeholder="Search users...">
                    </div>
                    <div id="user-list{{ $group->id }}" class="list-group"
                        style="max-height: 200px; overflow-y: auto; display: none;">
                    </div>

                    <h5>Selected Users:</h5>
                    <ul id="selected-users{{ $group->id }}" class="list-group mb-3"></ul>

                    <!-- Hidden input container will be created dynamically -->
                    <div id="hidden-inputs{{ $group->id }}"></div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // Define variables specific to each group using the group's ID
    const selectedUsers{{ $group->id }} = [];

    document.getElementById('user-search{{ $group->id }}').addEventListener('input', function() {
        const query = this.value;

        if (query.length > 0) {
            fetch(`/admin/users/search?q=${query}`)
                .then(response => response.json())
                .then(data => {
                    const userList = document.getElementById('user-list{{ $group->id }}');
                    userList.innerHTML = '';
                    userList.style.display = 'block';

                    data.forEach(user => {
                        const item = document.createElement('li');
                        item.classList.add('list-group-item', 'd-flex', 'justify-content-between',
                            'align-items-center');
                        item.innerText = user.firstname + " " + user
                        .lastname; // Adjust according to your user model
                        item.dataset.id = user.id; // Store user ID in data attribute

                        const selectButton = document.createElement('button');
                        selectButton.classList.add('btn', 'btn-primary', 'btn-sm');
                        selectButton.innerText = 'Select';
                        selectButton.type = 'button'; // Prevents form submission
                        selectButton.onclick = () => selectUser{{ $group->id }}(user.id, user
                            .firstname + " " + user.lastname);

                        item.appendChild(selectButton);
                        userList.appendChild(item);
                    });
                });
        } else {
            document.getElementById('user-list{{ $group->id }}').style.display = 'none';
        }
    });

    function selectUser{{ $group->id }}(id, name) {
        if (!selectedUsers{{ $group->id }}.includes(id)) {
            selectedUsers{{ $group->id }}.push(id);
            const selectedUsersList = document.getElementById('selected-users{{ $group->id }}');
            const item = document.createElement('li');
            item.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
            item.innerText = name;

            const removeButton = document.createElement('button');
            removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
            removeButton.innerText = 'Remove';
            removeButton.onclick = () => removeUser{{ $group->id }}(id, item);

            item.appendChild(removeButton);
            selectedUsersList.appendChild(item);
            updateHiddenInputs{{ $group->id }}(); // Update hidden inputs after selecting a user
        }
    }

    function removeUser{{ $group->id }}(id, item) {
        const index = selectedUsers{{ $group->id }}.indexOf(id);
        if (index > -1) {
            selectedUsers{{ $group->id }}.splice(index, 1);
            item.remove();
            updateHiddenInputs{{ $group->id }}(); // Update hidden inputs after removing a user
        }
    }

    function updateHiddenInputs{{ $group->id }}() {
        // Clear existing hidden inputs
        let hiddenInputContainer = document.getElementById('hidden-inputs{{ $group->id }}');

        if (!hiddenInputContainer) {
            // Create a container to hold hidden inputs if it doesn't exist
            hiddenInputContainer = document.createElement('div');
            hiddenInputContainer.id = 'hidden-inputs{{ $group->id }}';
            document.querySelector('form').appendChild(hiddenInputContainer);
        } else {
            hiddenInputContainer.innerHTML = ''; // Clear previous inputs
        }

        // Create hidden input for each selected user
        selectedUsers{{ $group->id }}.forEach(userId => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'user_ids[]'; // This makes it an array in Laravel
            hiddenInput.value = userId;
            hiddenInputContainer.appendChild(hiddenInput);
        });
    }
</script>

<style>
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
</style>
