<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Under Maintenance</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            text-align: center;
        }

        .container h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .icon {
            font-size: 100px;
            color: #ff6f61;
            margin-bottom: 20px;
        }

        .button {
            padding: 12px 25px;
            background-color: #ff6f61;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #d45848;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .container h1 {
                font-size: 28px;
            }

            .container p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="icon">
        <span>&#9888;</span>
    </div>
    <h1>We'll Be Back Soon!</h1>
    <p>We are currently undergoing maintenance to improve our services. We apologize for any inconvenience.</p>
    <p>Please check back later.</p>
</div>

</body>
</html>
