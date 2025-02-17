<?php
include("ver.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <style>
        body {
            background-color: #ffffcc; /* Light yellow background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .verification-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .verification-box h1 {
            margin-bottom: 20px;
        }

        .verification-box form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .verification-box input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }

        .verification-box button {
            padding: 10px 20px;
            background-color: #008080;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .verification-box button:hover {
            background-color: #006666;
        }
    </style>
</head>

<body>

    <div class="verification-box">
        <h1>Verification Page</h1>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
            <p>Incorrect verification code. Please try again.</p>
        <?php endif; ?>
        <form action="verification.php" method="post">
            <input type="text" name="verification_code" placeholder="Enter Verification Code">
            <button type="submit" name="verify">Verify</button>
        </form>
    </div>

</body>

</html>
