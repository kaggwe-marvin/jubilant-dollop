<?php
// Include the database connection file
include 'connect.php';

// SQL query to create a table for user feedback
//$sql = "CREATE TABLE comments (
  //  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   // name VARCHAR(50) NOT NULL,
   // email VARCHAR(50) NOT NULL,
   // message TEXT NOT NULL,
   // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//)";
// SQL to create the reservation table
$sql = "CREATE TABLE reservations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    reservationDate DATE NOT NULL,
    reservationTime TIME NOT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Table 'comments' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
