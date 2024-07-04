{{-- <script>
    // Assuming you have a button with class 'compare-btn'
    $('.compare-btn').click(function(e) {
        e.preventDefault();
        console.log('test');
        var itemId = $(this).data('item-id'); // Assuming data-item-id attribute holds the item ID
        var url = '/compare/add/' + itemId;

        $.ajax({
            url: url,
            type: 'POST', // or 'GET' depending on your route and controller setup
            success: function(response) {
                // Handle success response
                console.log('Item added to compare list!');
                // Update UI to display the added item
                var item = response.item; // Assuming your response contains the added item details
                displayItem(item); // Call function to display item (defined below)
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error adding item to compare:', error);
            }
        });
    });

    // Function to display the added item
    function displayItem(item) {
        // Assuming you have a div with id 'compare-list' to display the items
        var itemHtml = '<div class="item">' +
            '<h3>' + item.name + '</h3>' +
            '<p>' + item.description + '</p>' +
            // Add other item details as needed
            '</div>';

        $('#compare-list').append(itemHtml); // Append item HTML to the compare list container
    }
</script> --}}


<script>
    // Define a function to handle adding items to compare
    function addToCompare(property_id) {
        var url = '/add-property-to-compare/' + property_id;
        console.log('test');
        $.ajax({
            url: url,
            type: 'POST', // or 'GET' depending on your route and controller setup
            data: {
                _token: '{{ csrf_token() }}', // Add this line to include CSRF token
                // other data as needed
            },
            success: function(response) {
                // Handle success response
                console.log('Item added to compare list!');
                // Call another function to update UI or perform additional actions
                updateUI(response); // Example function call
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error adding item to compare:', error);
            }
        });
    }

    // Example function to update UI
    function updateUI(response) {
        // Example: Display a success message in a div with id 'success-message'
        $('#success-message').text(response.success); // Assuming your response has a 'success' field
    }
</script>
