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

// Fetch the search parameters
$gender = $_GET['gender'];
$age = $_GET['age'];
$breed = $_GET['breed'];
$size = $_GET['size'];
$color = $_GET['color'];
$weight = $_GET['weight'];

// Prepare the SQL query
$sql = "SELECT * FROM petsadopt WHERE gender = '$gender' AND age = '$age' AND breed = '$breed' AND size = '$size' AND color = '$color' AND weight = '$weight' AND statuss != 'accept'";

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
