<!-- reservation.php -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'connect.php';
    // Retrieve reservation data from POST
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"]; 

   // SQL query to insert data into the reservations table
    $sql = "INSERT INTO reservations (fullName, email, phone, reservationDate, reservationTime, message) VALUES ('$fullName', '$email', '$phone', '$date', '$time', '$message')";

// Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
