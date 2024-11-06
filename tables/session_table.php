<?php

include('../includes/db.php');

$sql = "CREATE TABLE IF NOT EXISTS sessions (
    id VARCHAR(255) PRIMARY KEY,
    user_id INT(10) UNSIGNED NULL,
    ip_address VARCHAR(45) NULL,
    user_agent TEXT NULL,
    payload LONGTEXT NOT NULL,
    last_activity INT(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users_info(id) ON DELETE SET NULL
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'sessions' created successfully.";
} else {
    echo "Error creating table: ";
}

// Close connection
$conn->close();

?>