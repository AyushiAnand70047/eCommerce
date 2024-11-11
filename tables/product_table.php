<?php

include('../database_connection/db.php');

$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    gallery VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'products' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

?>