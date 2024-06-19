<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Overlap Demo</title>

    <style>
        .form-container {
            position: absolute;
            left: 169px;
            top: 524px;
            display: inline-flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 2.5rem;
        }

        .form-image {
            width: 200px;
            /* Adjust as per your design */
            height: 200px;
            /* Adjust as per your design */
            background-color: #E5E7EB;
            /* Use your actual background color */
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Example shadow */
        }

        .form-content {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
            background-color: #FFFFFF;
            /* Use your actual background color */
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Example shadow */
        }

        .form-header {
            font-size: 2rem;
            font-weight: bold;
            font-family: 'Inter', sans-serif;
            color: #1F2937;
            /* Use your text color */
        }

        .form-section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 2rem;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-field {
            position: relative;
        }

        .input-field {
            width: 100%;
            height: 40px;
            /* Adjust height as needed */
            padding: 0.5rem;
            border: 1px solid #D1D5DB;
            /* Example border color */
            border-radius: 4px;
            font-size: 0.875rem;
            font-family: 'Inter', sans-serif;
        }

        .field-info {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 0.5rem;
            font-size: 0.875rem;
            color: #4B5563;
            /* Example color */
        }

        .search-button {
            width: 100%;
            padding: 1rem;
            background-color: #4C51BF;
            /* Example background color */
            color: #FFFFFF;
            /* Example text color */
            border: none;
            border-radius: 4px;
            font-size: 1.125rem;
            font-weight: bold;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #4338CA;
            /* Example hover background color */
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <!-- Sidebar content here -->
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
        </ul>
    </div>

    <div class="main-content">
        <button id="sidebar-toggle">Toggle Sidebar</button>
        <!-- Main content here -->
        <p>


        <div class="form-container">
            <div class="form-image"></div>
            <div class="form-content">
                <div class="form-header">
                    <h1>Search for properties across Nigeria</h1>
                </div>
                <div class="form-section">
                    <div class="form-group">
                        <div class="form-field">
                            <input type="text" class="input-field" placeholder="Enter Location">
                            <div class="field-info">Radius</div>
                            <div class="field-info">0 Miles</div>
                        </div>
                        <div class="form-field">
                            <input type="text" class="input-field" placeholder="Maximum price">
                            <input type="text" class="input-field" placeholder="Minimum price">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <input type="text" class="input-field" placeholder="Maximum bedroom">
                            <input type="text" class="input-field" placeholder="Minimum bedroom">
                        </div>
                        <div class="form-field">
                            <input type="text" class="input-field" placeholder="Property type(s)">
                            <div class="field-info">0 selected</div>
                            <div class="field-info">Any</div>
                        </div>
                    </div>
                </div>
                <button class="search-button">Search</button>
            </div>
        </div>

        </p>
    </div>

    <script>
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');

            // Toggle the 'active' class on both sidebar and main content
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('active');
        });
    </script>
</body>



</html>
