<?php
$servername = "localhost";   // Local server
$username   = "root";        // Default XAMPP user
$password   = "";            // Default XAMPP password is empty
$dbname     = "softbd_db";

// Connection create
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
