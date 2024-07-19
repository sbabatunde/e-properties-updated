<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four Level Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 20px;
        }

        .level {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            margin-bottom: 20px;
            padding: 10px;
        }

        .grouped {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            flex: 1;
        }

        .input,
        .select {
            padding: 10px;
            margin: 0;
            font-size: 16px;
            flex: 1;
            border: none;
            border-right: 2px solid black;
        }

        .select {
            width: 20%;
        }

        .input {
            width: calc(80% - 2px);
            /* 80% - border-right */
        }

        .input:last-child,
        .select:last-child {
            border-right: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/submit-form" method="post">
            <!-- First Level -->
            <div class="row">
                <div class="col-md-6">
                    <div class="level">
                        <div class="grouped">
                            <select id="first-select" class="select" name="first_select">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                            </select>
                            <input type="text" id="first-input" class="input" name="first_input"
                                placeholder="Input">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="level">
                        <div class="grouped">
                            <select id="second-select1" class="select" name="second_select1">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                            </select>
                            <select id="second-select2" class="select" name="second_select2">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Level -->
            <div class="row">
                <div class="col-md-6">
                    <div class="level">
                        <div class="grouped">
                            <input type="text" id="third-input1" class="input" name="third_input1"
                                placeholder="Input">
                            <input type="text" id="third-input2" class="input" name="third_input2"
                                placeholder="Input">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="level">
                        <div class="grouped">
                            <select id="fourth-select1" class="select" name="fourth_select1">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                            </select>
                            <input type="text" id="fourth-input" class="input" name="fourth_input"
                                placeholder="Input">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" style="padding: 10px 20px; font-size: 18px;">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
