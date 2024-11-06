<?php

include('../includes/db.php');

$sql = "CREATE TABLE IF NOT EXISTS cart (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_id INT(10) NOT NULL,
    user_id INT(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'cart' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

?>