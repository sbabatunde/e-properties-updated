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

{{-- Add Property To Trending Script  --}}
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

{{-- Change Property Status Script  --}}
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

{{-- Add To Blacklist Script  --}}
<script>
    function removeFromBlacklist(event, propertyId) {
        event.preventDefault();
        if (confirm("Are you sure you want to remove this property from the blacklist?")) {
            document.getElementById('removeFromBlacklist' + propertyId).submit();
        }
    }
</script>

{{-- Add to Feature Script  --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const anchors = document.querySelectorAll('.feature-toggle');

        anchors.forEach(anchor => {
            anchor.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior

                const propertyId = anchor.getAttribute('data-property-id');
                const isFeatured = anchor.getAttribute('data-featured') === 'Yes';

                // Toggle featured state
                const newState = isFeatured ? 'No' : 'Yes';

                // Send AJAX request
                fetch(`/properties/admin/${propertyId}/toggle-featured`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({
                            featured: newState
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update anchor state
                            anchor.setAttribute('data-featured', newState);
                            anchor.title = newState === 'Yes' ? 'Remove from featured' :
                                'Add to featured';
                            anchor.innerHTML = `
                        <i class="${newState === 'Yes' ? 'fa fa-star' : 'fa fa-star-o'}"></i>
                        ${newState === 'Yes' ? 'Unfeature' : 'Feature'}
                    `;
                            console.log(data);

                            // Show toast message
                            toastr.success(data.message);
                        } else {
                            toastr.error('Failed to toggle featured state.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        toastr.error('An error occurred.');
                    });
            });
        });
    });
</script>
