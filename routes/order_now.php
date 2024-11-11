<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Get the user ID from the session
$email = $_SESSION['email'];

include('../database_connection/db.php');

$userQuery = "
    SELECT id 
    FROM users_info 
    WHERE email = '$email'
";
$userResult = $conn->query($userQuery);

if ($userResult && $userResult->num_rows > 0) {
    $userRow = $userResult->fetch_assoc();
    $userId = $userRow['id'];
}


if ($userId) {
    // Database connection details
    include('../database_connection/db.php');

    // Query to join cart and products tables and sum the prices
    $query = "
        SELECT SUM(products.price) as total
        FROM cart
        JOIN products ON cart.product_id = products.id
        WHERE cart.user_id = '$userId'
    ";

    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $total = $row['total'] ?? 0; // Set to 0 if null

        // Pass the total to a view or display it
        //echo "<h1>Order Total: $" . htmlspecialchars($total) . "</h1>";
        $_SESSION['total'] = $total;

        // Redirect to another page
        header("Location: ../views/ordernow.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "User not logged in.";
}
?>
