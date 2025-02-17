<?php
include("session.php");
//echo $registered_user;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ADMINISTRATOR";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$pet_id = isset($_GET['pet_id']) ? $_GET['pet_id'] : null;
$check_request_sql = "SELECT * FROM adoptinfo WHERE pet_id = '$pet_id' AND email = '$registered_user'";
$existing_request_result = $conn->query($check_request_sql);

if ($existing_request_result->num_rows > 0) {
    // If the customer has already requested this pet, show a message or take necessary action
    echo "You have already submitted a request for this pet.";
} else{
if ($_POST) {
    $experience = $_POST['experience'];
    $years = $_POST['years'];
    $needs_aware = $_POST['needs_aware'];
    $training_familiar = $_POST['training_familiar'];
    $financial_prep = $_POST['financial_prep'];

    $sql = "INSERT INTO adoptinfo (experience, years, pet_id, email, needs_aware, training_familiar, financial_prep, statuss) 
    VALUES ('$experience', '$years', '$pet_id', '$registered_user', '$needs_aware', '$training_familiar', '$financial_prep', 'pending')";

    if ($conn->query($sql) === true) {
        echo "Request sent successfully";
    } else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:  rgb(214, 250, 214);
        }
        </style>
    <meta charset="UTF-8">
    <title>Pet Adoption Request Form</title>
    <link rel="stylesheet" href="infostyle.css">
  <link rel="stylesheet" href="cusdisplay.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css2/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css2/responsive.css" rel="stylesheet" />
</head>
<body>
<header class="header_section" style="background-color: #ced08b;">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
        <a class="navbar-brand" href="index.html">
          <img src="images2/logo.png" alt="">
        </a>
  
        <!-- Navbar links -->
        <div class="navbar-collapse justify-content-center" id="navbarSupportedContent">
           <!-- Navbar links -->
      <div class="navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="mainpage2.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donateview2.php">Donation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adoptview1.php">Adoption</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ'S</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resource.php">Resource Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commentsindex.php">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="displaypet.php">Find Your Pet</a>
          </li>
          <?php
            if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == '1') {
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="myprofile2.php">My Profile</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="logout.php">Logout</a>';
                echo '</li>';
            } else {
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="customerlogin2.php">Login</a>';
                echo '</li>';
            }
          ?>

        </ul>
      </div>
        </div>

       
        
      </nav>
    </div>
  </header>
<div class="form-container">
    
    <?php if ($existing_request_result->num_rows === 0) { ?>
        <h2>Pet Adoption Request Form</h2>
        <form id="adoption-form" action="adoptinfoform2.php?pet_id=<?php echo isset($_GET['pet_id']) ? $_GET['pet_id'] : ''; ?>" method="post">
        <label for="pet-experience">Have you had pets before?</label>
        <input type="text" id="experience" name="experience" pattern="Yes|No|yes|no" title="Please enter 'Yes' or 'No'" required>

        <label for="pet-years">If yes, for how many years?</label>
        <input type="text" id="years" name="years" pattern="\d*" title="Please enter a number if applicable">

        <label for="pet-needs">Are you aware of the specific needs of the pet you are adopting?</label>
        <input type="text" id="needs_aware" name="needs_aware" pattern="Yes|No|yes|no" title="Please enter 'Yes' or 'No'" required>

        <label for="pet-training">Are you familiar with basic pet training and behavioral needs?</label>
        <input type="text" id="training_familiar" name="training_familiar" pattern="Yes|No|yes|no" title="Please enter 'Yes' or 'No'" required>

        <label for="financial-preparedness">Are you financially prepared to cover the costs of pet care?</label>
        <input type="text" id="financial_prep" name="financial_prep" pattern="Yes|No|yes|no|" title="Please enter 'Yes' or 'No'" required>

        <button type="submit" id="submit-button">Submit Adoption Request</button>
    </form>
    <?php } ?>
</div>

</body>
</html>
