<?php

include('../database_connection/db.php');

$sql = "CREATE TABLE IF NOT EXISTS users_info (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'users_info' created successfully.";
} else {
    echo "Error creating table.";
}

// Close connection
$conn->close();
?>