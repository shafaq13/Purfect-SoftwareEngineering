<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ADMINISTRATOR";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$error = '';
$comment_name = '';
$comment_content = '';

// Check if the user is logged in
if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == '1') {
    if(empty($_POST["comment_name"])) {
        $error .= '<p class="text-danger">Name is required</p>';
    } else {
        $comment_name = $_POST["comment_name"];
    }

    if(empty($_POST["comment_content"])) {
        $error .= '<p class="text-danger">Comment is required</p>';
    } else {
        $comment_content = $_POST["comment_content"];
    }
} else {
    $error .= '<p class="text-danger">You must be logged in to add a comment</p>';
}

if($error == '') {
    $query = "INSERT INTO comments (parent_comment_id, comment, comment_sender_name) VALUES (?, ?, ?)";
    $statement = $connect->prepare($query);
    if (!$statement) {
        $error = "Prepare failed: (" . $connect->errno . ") " . $connect->error;
    } else {
        $bind = $statement->bind_param("iss", $_POST["comment_id"], $comment_content, $comment_name);
        if ($bind) {
            $execute = $statement->execute();
            if ($execute) {
                $error = '<label class="text-success">Comment Added</label>';
            } else {
                $error = "Execute failed: (" . $statement->errno . ") " . $statement->error;
            }
        } else {
            $error = "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
        }
    }
}

$data = array(
    'error'  => $error
);

echo json_encode($data);

$connect->close();
?>
