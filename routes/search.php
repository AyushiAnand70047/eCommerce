<?php

include('../database_connection/db.php');
include_once('../controller/ProductController.php');

$query = $_GET['query'];

$stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
$searchTerm = '%' . $query . '%';
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Fetch results as an array
$products = $result->fetch_all(MYSQLI_ASSOC);

// Pass data to the view
include '../views/search_view.php';

$conn->close();
?>