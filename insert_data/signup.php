<?php

include('../database_connection/db.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO users_info (name, email, password) VALUES ('$name','$email','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../views/login_form.php");
    exit();
} else {
    echo "Unable to signup";
}

$conn->close();

?>