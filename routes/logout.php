<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the homepage or login page
header("Location: ../views/login_form.php");
exit();
?>