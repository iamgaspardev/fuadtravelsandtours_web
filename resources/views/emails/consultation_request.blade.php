<!-- resources/views/emails/consultation_request.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Consultation Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: red;
        }

        p {
            margin-bottom: 10px;
        }

        .details {
            margin-top: 20px;
        }

        .details p {
            margin-bottom: 5px;
        }

        .highlight {

            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Consultation Request Received From Website Online</h2>
        <div class="details">
            <p><span class="highlight">Name:</span> {{ $consultation->name }}</p>
            <p><span class="highlight">Email:</span> {{ $consultation->email }}</p>
            <p><span class="highlight">Phone:</span> {{ $consultation->phone }}</p>
            <p><span class="highlight">Message:</span> {{ $consultation->message }}</p>
        </div>
    </div>
</body>

</html>
