<?php

include('../database_connection/db.php');
include_once('../controller/ProductController.php');

$request_uri = $_SERVER['REQUEST_URI'];

$uri_parts = explode('/', rtrim($request_uri, '/'));
$id = end($uri_parts);

if (is_numeric($id)) {
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
