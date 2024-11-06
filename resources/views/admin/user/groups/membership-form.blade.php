<form class="form-group" action="{{ route('admin.group.members.store', $group->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="post-form modal fade" id="addMember{{ $group->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="addMember{{ $group->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:20vh">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMember{{ $group->id }}Label">Members to {{ $group->group_name }}
                    </h5>
                    <button type="button" class="btn-close pt-1 pb-1 pr-2 pl-2" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user-search">Search for Users:</label>
                        <input type="text" id="user-search" class="form-control" placeholder="Search users...">
                    </div>
                    <div id="user-list" class="list-group" style="max-height: 200px; overflow-y: auto; display: none;">
                    </div>

                    <h5>Selected Users:</h5>
                    <ul id="selected-users" class="list-group mb-3"></ul>

                    <!-- Hidden input container will be created dynamically -->
                    <div id="hidden-inputs"></div>
                </div>
                <div class="post-footer">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    const selectedUsers = [];

    document.getElementById('user-search').addEventListener('input', function() {
        const query = this.value;

        if (query.length > 0) {
            fetch(`/admin/users/search?q=${query}`)
                .then(response => response.json())
                .then(data => {
                    const userList = document.getElementById('user-list');
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
                        selectButton.onclick = () => selectUser(user.id, user.firstname + " " + user
                            .lastname);

                        item.appendChild(selectButton);
                        userList.appendChild(item);
                    });
                });
        } else {
            document.getElementById('user-list').style.display = 'none';
        }
    });

    function selectUser(id, name) {
        if (!selectedUsers.includes(id)) {
            selectedUsers.push(id);
            const selectedUsersList = document.getElementById('selected-users');
            const item = document.createElement('li');
            item.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
            item.innerText = name;

            const removeButton = document.createElement('button');
            removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
            removeButton.innerText = 'Remove';
            removeButton.onclick = () => removeUser(id, item);

            item.appendChild(removeButton);
            selectedUsersList.appendChild(item);
            updateHiddenInputs(); // Update hidden inputs after selecting a user
        }
    }

    function removeUser(id, item) {
        const index = selectedUsers.indexOf(id);
        if (index > -1) {
            selectedUsers.splice(index, 1);
            item.remove();
            updateHiddenInputs(); // Update hidden inputs after removing a user
        }
    }

    function updateHiddenInputs() {
        // Clear existing hidden inputs
        let hiddenInputContainer = document.getElementById('hidden-inputs');

        if (!hiddenInputContainer) {
            // Create a container to hold hidden inputs if it doesn't exist
            hiddenInputContainer = document.createElement('div');
            hiddenInputContainer.id = 'hidden-inputs';
            document.querySelector('form').appendChild(hiddenInputContainer);
        } else {
            hiddenInputContainer.innerHTML = ''; // Clear previous inputs
        }

        // Create hidden input for each selected user
        selectedUsers.forEach(userId => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'user_ids[]'; // This makes it an array in Laravel
            hiddenInput.value = userId;
            hiddenInputContainer.appendChild(hiddenInput);
        });

        // Debugging: Check the contents of the hidden input container
        console.log("Hidden Inputs:", hiddenInputContainer.innerHTML);
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
