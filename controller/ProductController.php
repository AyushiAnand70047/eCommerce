<?php
session_start();

include('../includes/db.php');

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
    $stmt->bind_param("i", $id);  // Bind the integer ID
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();  // Return the product as an associative array
    } else {
        return null;  // No product found
    }
}

$id = $_GET['id'];

$product = getProductById($conn, $id);

$products = getProducts($conn);

?>