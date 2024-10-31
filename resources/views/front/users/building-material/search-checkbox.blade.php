<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all radio buttons
        const radios = document.querySelectorAll('.search-radio');

        // Attach event listener to all radio buttons
        radios.forEach(function(radio) {
            radio.addEventListener('change', function() {
                // Get the selected slug
                const selectedSlug = document.querySelector('.search-radio:checked')?.value;

                // Perform AJAX request only if a slug is selected
                if (selectedSlug) {
                    fetch(`{{ route('search.radio') }}?slug=${encodeURIComponent(selectedSlug)}`, {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            const container = document.querySelector('.material-items');
                            const categoryHeader = document.querySelector(
                                '.mat-list-header h4'
                            ); // Target the <h4> element for category header
                            container.innerHTML = ''; // Clear existing items

                            console.log(data); // Debugging: log the response data

                            // Update the category header with the fetched category name
                            categoryHeader.textContent =
                                `${data.type}`; // Set the header to the fetched category

                            // Check if there are any materials
                            if (data.length === 0) {
                                const noDataMessage = document.createElement('p');
                                noDataMessage.textContent = 'No materials found.';
                                noDataMessage.style.color = 'red';
                                noDataMessage.style.fontWeight = 'bold';
                                container.appendChild(noDataMessage);
                            } else {
                                // Append new items if materials exist
                                data.materials.forEach(item => {
                                    const div = document.createElement('div');
                                    div.className = 'pic';
                                    div.dataset.slug = item.slug;

                                    // Dynamically create the route in JavaScript using item.id
                                    const viewUrl =
                                        `{{ url('building-material-view') }}/${item.id}`;

                                    div.innerHTML = `
                                    <img src="${item.thumbnail}" alt="${item.title}">
                                    <i class="fa fa-heart"></i>
                                    <span class="listing-text mat-cost" style="background: #d6daf3">
                                        <h5 class="mt-3" style="font-weight:700;width:inherit">${item.title}</h5>
                                        <p>
                                            <span>${item.title}</span>
                                            <span>$ ${item.price}</span>
                                            <span>${item.quantity}</span>
                                            <br>
                                            <span style="font-weight:550">${item.quantity}</span>
                                        </p>
                                        <a href="${viewUrl}" class="btn btn-info listing-anchor">View</a>
                                    </span>
                                `;

                                    container.appendChild(div);
                                });
                            }
                        })
                        .catch(error => console.error('An error occurred:', error));
                }
            });
        });
    });
</script>
