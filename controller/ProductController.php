<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('../database_connection/db.php');

// Function to get all products
function getProducts($conn)
{
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getProductById($conn, $id) {
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

$products = getProducts($conn);

?>