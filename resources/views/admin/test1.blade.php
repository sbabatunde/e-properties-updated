<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Overlap Demo</title>

    <style>
        .slide-button {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 1;
            transform: rotate(90deg);
            /* Center and rotate 180 degrees */

        }

        .content-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-item {
            background-color: #f1f1f1;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 2s ease-in-out;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .content-item.hidden {
            transform: translate(-150%, -50%);
            visibility: hidden
        }
    </style>
</head>

<body>
    <button class="slide-button">
        Compare
    </button>
    <div class="content-wrapper">
        <div class="content-item">
            <h2>Current Content</h2>
            <p>This is the current content that will be replaced.</p>
        </div>
        <div class="content-item hidden">
            <h2>New Content</h2>
            <p>This is the new content that will slide in.</p>
        </div>
    </div>

    <script>
        const slideButton = document.querySelector('.slide-button');
        const contentItems = document.querySelectorAll('.content-item');

        slideButton.addEventListener('click', () => {
            contentItems.forEach((item) => {
                item.classList.toggle('hidden');
            });
        });
    </script>
</body>



</html>
