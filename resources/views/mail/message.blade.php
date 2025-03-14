<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #4062B1;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .email-header img {
            max-width: 150px;
            height: auto;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-body h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }
        .email-footer {
            background-color: #f8f8f8;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Infinity Co.</h1>
            <strong class="px-1 sitename">Support Message</strong>
        </div>

        <!-- Body -->
        <div class="email-body">
            <h1>New Message from {{ $data['name'] }}</h1>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
            <p><strong>Message:</strong> {{ $data['message'] }}</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Infinity Co.</strong> <span>All Rights Reserved</span></p>
            <p>Designed by Sami W. Nabhan</p>
        </div>
    </div>
</body>
</html>
