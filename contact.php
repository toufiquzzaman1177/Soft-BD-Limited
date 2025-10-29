<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Message Sent Successfully!</h2>";
        echo "<a href='index.html'>Back to Home</a>";
    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
