<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code Data</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="adminstyle.css">
    <style>
        body {
            background-color: #ffffcc; /* Light yellow background */
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .go-back-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            background-color: #000; /* Black background */
            border: 1px solid #fff; /* White border */
            border-radius: 5px;
            text-decoration: none;
            color: #fff; /* White text color */
        }
        .go-back-btn:hover {
            background-color: #333; /* Darker shade on hover */
        }
        h2 {
            margin-top: 50px; /* Adjust the top margin to move the heading down */
        }
    </style>
</head>
<body>
    <a href="adminhomepage.php" class="go-back-btn">Go Back</a>
    <h2>Verification Code Data</h2>
    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = ""; // Password for your MySQL server
    $database = "administrator"; // Name of your MySQL database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch verification code data
    $sql = "SELECT * FROM verification_codes";
    $result = $conn->query($sql);

    // Display verification code data
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Email</th><th>Code</th><th>Created At</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["code"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td><a href='delete_verification.php?id=" . $row["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No verification code data available";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
