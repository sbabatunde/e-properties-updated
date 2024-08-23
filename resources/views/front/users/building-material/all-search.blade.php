<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all radio buttons
        const radios = document.querySelectorAll('.search-material');

        // Define the route pattern in JavaScript
        const viewRoute = @json(route('user.materials.get', ['id' => ':id']));

        // Debug the viewRoute
        console.log('View Route:', viewRoute);

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
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            const container = document.querySelector('.material-items');
                            container.innerHTML = ''; // Clear existing items
                            console.log(data);
                            console.log(selectedSlug);

                            // Append new items
                            data.forEach(item => {
                                console.log(item.thumbnail);

                                const div = document.createElement('div');
                                div.className = 'pic';
                                div.dataset.slug = item.slug;
                                if (item.id) {
                                    console.error('Item ID is undefined:', item);
                                    return; // Skip this item if id is not defined
                                }
                                // Replace :id in viewRoute with actual item.id
                                const itemUrl = viewRoute.replace(':id', item.id);

                                div.innerHTML = `
                                    <img src="${item.thumbnail}" alt="${item.title}">
                                    <i class="fa fa-heart"></i>
                                    <span class="listing-text mat-cost" style="background: #d6daf3">
                                        <h5 class="mt-3" style="font-weight:700;width:inherit">${item.title}</h5>
                                        <p>
                                            <span>${item.title}</span>
                                            <span>$ ${number_format(item.price)}</span>
                                            <span>${item.quantity}</span>
                                            <br>
                                            <span style="font-weight:550">${item.quantity}</span>
                                        </p>
                                        <a href="${itemUrl}" class="btn btn-info listing-anchor">View</a>
                                    </span>
                                `;

                                container.appendChild(div);
                            });
                        })
                        .catch(error => console.error('An error occurred:', error));
                }
            });
        });
    });
</script>
