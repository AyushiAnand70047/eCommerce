<?php
// Include necessary files for DB connection and functions
include('../includes/db.php');
include_once('../controller/ProductController.php');

// Get the full request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Extract the product ID from the request URI (last part of the URL)
$uri_parts = explode('/', rtrim($request_uri, '/'));
$id = end($uri_parts);  // The last part is assumed to be the product ID

if (is_numeric($id)) {  // Check if the extracted ID is numeric
    $product = getProductById($conn, $id);
    if ($product) {
        header("Location: /E-commercePHP/views/product_detail.php?id=$id");
    } else {
        echo "Product not found!";
    }
} else {
    echo "Page not found!";
}

$conn->close();
?>
