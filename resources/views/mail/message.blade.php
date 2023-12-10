<!-- BEGIN: mail/message.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Message</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #007bff;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div style="margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2>Xabar qoldirildi!</h2>
        <p>Hi, {{ $data['name'] }}</p>
        <p>Email: {{ $data['email'] }}</p>
        <p>Murojat mavzusi: {{ $data['subject'] }}</p>
        <p>Murojat matni: {{ $data['message'] }}</p>
    </div>
</body>
</html>
<!-- END: mail/message.blade.php -->
