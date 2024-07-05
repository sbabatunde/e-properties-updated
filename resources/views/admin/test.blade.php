<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide and Hide Divs</title>
    <style>
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .left-container {
            width: 40%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .left-item {
            background-color: #f1f1f1;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.5s ease-in-out;
            position: absolute;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .left-item.active {
            transform: translateX(0);
            z-index: 2;
        }

        .left-item.hidden {
            transform: translateX(-100%);
            z-index: 1;
            visibility: hidden;
        }

        .right-item {
            width: 60%;
            height: 100%;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .toggle-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-container">
            <div class="left-item active">
                <h2>Left Item 1</h2>
                <p>This is the first left item.</p>
                <button class="toggle-button">Toggle</button>
            </div>
            <div class="left-item hidden">
                <h2>Left Item 2</h2>
                <p>This is the second left item.</p>
                <button class="toggle-button">Toggle</button>
            </div>
        </div>
        <div class="right-item">
            <h2>Right Item</h2>
            <p>This is the right item.</p>
        </div>
    </div>

    <script>
        const leftItems = document.querySelectorAll('.left-item');
        const toggleButtons = document.querySelectorAll('.toggle-button');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                leftItems.forEach((item, i) => {
                    if (i === index) {
                        item.classList.toggle('active');
                        item.classList.toggle('hidden');
                    } else {
                        if (item.classList.contains('active')) {
                            item.classList.remove('active');
                            item.classList.add('hidden');
                        } else {
                            item.classList.remove('hidden');
                            item.classList.add('active');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
