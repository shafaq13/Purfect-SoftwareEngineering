<?php
session_start();

if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == '1'){        
$registered_user=$_SESSION['login_email'];

//echo 'Registered or login user email is: '.$registered_user;
}else{
        header('location: customerlogin2.php?login=false');

}
?>

