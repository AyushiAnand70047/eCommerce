<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('../database_connection/db.php');

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Fetch the user ID based on the email
    $query = "SELECT id FROM users_info WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userId);
    $stmt->fetch();
    $stmt->close();

    if ($userId) {
        
        $cartQuery = "
            SELECT products.*, cart.id AS cart_id
            FROM cart
            JOIN products ON cart.product_id = products.id
            WHERE cart.user_id = ?
        ";
        
        $stmt = $conn->prepare($cartQuery);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $products = [];
        while ($product = $result->fetch_assoc()) {
            $products[] = $product;
        }
        $stmt->close();
        
        return $products;
    } else {
        echo "User not found.";
    }
} else {
    echo "Session not exists.";
}
?>
