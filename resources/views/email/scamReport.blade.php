<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scam Report on {{ $details['reported'] }} </title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f4f4;">
    <table role="presentation" style="width: 100%; background-color: #f4f4f4; padding: 20px;">
        <tr>
            <td>
                <table role="presentation"
                    style="width: 100%; max-width: 600px; min-height:200px; background-color: #ffffff; margin: 0 auto; padding: 20px;">
                    <tr>
                        <td>
                            <!-- Your email content goes here -->
                            <h1 style="margin: 0; color: #333333;">Dear Admin</h1>
                            <p style="margin: 0; color: #666666;">
                                I write to lodge a complaint regarding the subject user. <br>

                                {{ $details['complaint'] }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    {{ config('app.name') }}
</body>

</html>
