<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Prospect Mail</title>
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
                            <h1 style="margin: 0px; color: #333333;"> Hi {{ $details['agent'] }}</h1>
                            <p style="margin: 0px; padding: 10px;  color: #666666;">
                                You have a message on the subject property.

                            <div class="mt-2 mb-2">
                                **Sent By**: {{ $details['name'] }}
                            </div>
                            <div class="mt-2 mb-2">
                                **Phone Number**: {{ $details['contact'] }}
                            </div>
                            <div class="mt-2 mb-2">
                                <div class="mb-3">
                                    **Message Details**:
                                </div>
                                {{ $details['message'] }}
                            </div>

                            Best Regards.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        {{ config('app.name') }}
    </table>
</body>

</html>
