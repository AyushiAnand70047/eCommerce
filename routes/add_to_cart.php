<?php
session_start(); // Ensure session is started
include('../database_connection/db.php');

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Retrieve product ID from POST request
    $product_id = $_POST['product_id'];

    if ($product_id) {
        // Fetch the user's ID from the database based on their email
        $email = $_SESSION['email'];
        $query = $conn->prepare("SELECT id FROM users_info WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $query->bind_result($user_id);
        $query->fetch();
        $query->close();

        if ($user_id) {
            // Insert into the cart table using prepared statement
            $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $user_id, $product_id);

            if ($stmt->execute()) {
                header("Location: ../views/product.php"); // Redirect to the home or cart page
                exit();
            } else {
                echo "Error adding product to cart: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "User ID not found.";
        }
    } else {
        echo "Product ID is not provided.";
    }
} else {
    // Redirect to login if not logged in
    header("Location: ../views/login_form.php");
    exit();
}

$conn->close();
?>
