<script>
    function verifyUser(event, id) {
        event.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = new FormData(document.getElementById('verifyUser' + id));
        // const addForm = document.querySelector('.addForm');
        // const removeForm = document.querySelector('.removeForm');
        // Make an AJAX request to submit the form data
        fetch(document.getElementById('verifyUser' + id).action, {
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
                    toastr.success('User has been verified successfully!');
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
    function removeFromBlacklist(event, id) {
        event.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = new FormData(document.getElementById('removeFromBlacklist' + id));
        // const addForm = document.querySelector('.addForm');
        // const removeForm = document.querySelector('.removeForm');
        // Make an AJAX request to submit the form data
        fetch(document.getElementById('removeFromBlacklist' + id).action, {
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
