<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form Submission from {{ $name }}</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f4f4;">
    <table role="presentation" style="width: 100%; background-color: #f4f4f4; padding: 20px;">
        <tr>
            <td>
                <table role="presentation"
                    style="width: 100%; max-width: 600px; min-height:200px; background-color: #ffffff; margin: 0 auto; padding: 20px;">
                    <tr>
                        <td>
                            <h1 style="margin: 0; color: #333333;">New Contact Form Submission</h1>
                            <p style="margin: 10px 0; color: #666666;">
                                You have received a new message from the contact form on your website.
                            </p>
                            <p style="margin: 10px 0; color: #666666;">
                                <strong>Name:</strong> {{ $name }}<br>
                                <strong>Email:</strong> {{ $email }}<br>
                                <strong>Message:</strong><br>
                                {{ $email_message ?? 'No Message Provided' }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p style="text-align: center; color: #888888; font-size: 12px;">{{ config('app.name') }} &copy; {{ date('Y') }}
    </p>
</body>

</html>
