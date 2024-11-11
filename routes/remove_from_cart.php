<?php
session_start(); // Ensure session is started
include('../includes/db.php'); // Include your DB connection

// Check if cart_id is passed in the URL
if (isset($_GET['cart_id'])) {
    $cartId = $_GET['cart_id']; // Get the cart item ID from the URL

    // Prepare the SQL query to delete the cart item by its ID
    $query = "DELETE FROM cart WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $cartId); // Bind the cart item ID to the query

    // Execute the query and check if the delete was successful
    if ($stmt->execute()) {
        // Redirect to the cartlist page after successful deletion
        header("Location: ../views/cartlist.php");
        exit(); // Always call exit after a redirect
    } else {
        // Error message if something goes wrong with the delete operation
        echo "Error removing item from cart: " . $stmt->error;
    }

    $stmt->close(); // Close the statement after execution
} else {
    // If cart_id is not passed in the URL, show an error message
    echo "Invalid cart item ID.";
}

$conn->close(); // Close the connection when done
?>
