<?php
include('../includes/db.php');

//session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users_info";
$result = $conn->query($sql);

$userExists = false;

while ($row = $result->fetch_assoc()) {
    if($row['email'] == $email && $row['password'] == $password){
        $userExists = true;
        break;
    }
}

if ($userExists) {
    $_SESSION['user_email'] = $email;
    header("Location: ../views/product.php");
    exit();
} else {
    echo "User does not exist";
}

$conn->close();
?>