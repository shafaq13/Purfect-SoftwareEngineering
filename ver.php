<?php
session_start();

// Check if user is logged in and verification code exists in session
if(!isset($_SESSION['login_email']) && !isset($_SESSION['verification_code'])) {
    header('location: customerlogin.php');
    exit;
}

if(isset($_POST['verify'])) {
    $verification_code = $_POST['verification_code'];
    $stored_code = $_SESSION['verification_code'];

    // If verification code matches
    if($verification_code == $stored_code) {
        // Redirect to main page
        header('location: mainpage2.php');
        exit;
    } else {
        // Redirect back to verification page with error message
        header('location: verification.php?error=true');
        exit;
    }
}
?>