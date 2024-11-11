<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the homepage or login page
header("Location: ../views/login_form.php");
exit();
?>