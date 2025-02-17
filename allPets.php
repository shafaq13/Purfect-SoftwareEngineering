<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ADMINISTRATOR";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to select all pets
$sql = "SELECT * FROM petsadopt WHERE statuss != 'accept'";

$result = $conn->query($sql);

$petData = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $petData[] = $row;
    }
} else {
    echo "0 results";
}

// Return the pet data as JSON
echo json_encode($petData);

$conn->close();
?>
