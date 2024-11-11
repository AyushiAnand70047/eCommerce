<?php
session_start();
include('../includes/db.php'); // Include your DB connection

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Fetch the user ID based on the email
    $query = "SELECT id FROM users_info WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email); // Bind the email parameter
    $stmt->execute();
    $stmt->bind_result($userId); // Fetch the user ID
    $stmt->fetch();
    $stmt->close(); // Close the statement after fetching the result

    if ($userId) {
        // Now fetch the products in the cart for that user
        $cartQuery = "
            SELECT products.*, cart.id AS cart_id
            FROM cart
            JOIN products ON cart.product_id = products.id
            WHERE cart.user_id = ?
        ";
        
        $stmt = $conn->prepare($cartQuery);
        $stmt->bind_param("i", $userId); // Bind the user_id parameter
        $stmt->execute();
        $result = $stmt->get_result(); // Get the result of the query
        
        $products = [];
        while ($product = $result->fetch_assoc()) {
            $products[] = $product; // Fetch all products in the cart
        }
        $stmt->close(); // Close the statement
        
        // Now you can use $products as needed (e.g., display them in the view)
        // For example, you can return them as an array to the view.
        return $products;
    } else {
        echo "User not found.";
    }
} else {
    echo "Session not exists.";
}
?>
