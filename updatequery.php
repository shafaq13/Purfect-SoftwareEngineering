<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "ADMINISTRATOR";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if column already exists
$sql = "SHOW COLUMNS FROM petsadopt LIKE 'statuss'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    // Column does not exist, so add it
    $sql = "ALTER TABLE petsadopt ADD COLUMN statuss VARCHAR(50)";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Column 'statuss' added successfully";
    } else {
        echo "Error adding column: " . mysqli_error($conn);
    }
} else {
    echo "Column 'statuss' already exists";
}

mysqli_close($conn);
?>
