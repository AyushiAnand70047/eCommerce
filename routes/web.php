<?php
// Include necessary files for DB connection and functions
include('../includes/db.php');
include('../controller/ProductController.php'); // Assuming functions like getProductById() are here

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Route handling
if (preg_match(`/^\/E-commerce PHP\/views\/detail\/(\d+)\/?$/`, $request_uri, $matches)) {
    $id = (int) $matches[1];  // Ensure $id is treated as an integer
    $product = getProductById($conn, $id);  // Fetch product details from the database

    if ($product) {
        // Include the product detail view file
        include('views/product_detail.php');
    } else {
        echo "Product not found!";
    }
} else {
    echo "Page not found!";
}

$conn->close();
?>
