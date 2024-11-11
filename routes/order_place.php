<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Get the email from the session
$email = $_SESSION['email'];

// Database connection details
include('../database_connection/db.php');

// Get the user ID using the email
$userQuery = "
    SELECT id 
    FROM users_info 
    WHERE email = '$email'
";
$userResult = $conn->query($userQuery);

if ($userResult && $userResult->num_rows > 0) {
    $userRow = $userResult->fetch_assoc();
    $userId = $userRow['id'];

    // Retrieve all cart items for the user
    $cartQuery = "
        SELECT * 
        FROM cart 
        WHERE user_id = '$userId'
    ";
    $cartResult = $conn->query($cartQuery);

    if ($cartResult && $cartResult->num_rows > 0) {
        while ($cart = $cartResult->fetch_assoc()) {
            // Insert each cart item as an order
            $orderQuery = "
                INSERT INTO orders (product_id, user_id, status, payment_method, payment_status, address)
                VALUES ('{$cart['product_id']}', '$userId', 'pending', '{$_POST['payment']}', 'pending', '{$_POST['address']}')
            ";
            $conn->query($orderQuery);
        }

        // Delete all cart items for the user
        $deleteCartQuery = "
            DELETE FROM cart 
            WHERE user_id = '$userId'
        ";
        $conn->query($deleteCartQuery);

        // Redirect to the home page or orders page after placing the order
        header("Location: ../views/product.php");
        exit();
    } else {
        echo "No items in the cart.";
    }
} else {
    echo "User not found.";
}

// Close the connection
$conn->close();
?>
