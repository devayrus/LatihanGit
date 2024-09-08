<?php
// Database connection details
$servername = "localhost"; // Server database
$username = "root"; // Username MySQL
$password = ""; // Password MySQL
$dbname = "sanbercode_ecourse"; // Nama database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $course_name = $_POST['course_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $whatsapp_number = $_POST['whatsapp_number'];
    $payment_method = $_POST['payment_method'];

    // Prepare SQL query
    $sql = "INSERT INTO checkout_course (full_name, email, course_name, whatsapp_number, payment_method) 
            VALUES ('$full_name', '$email', '$course_name', '$whatsapp_number', '$payment_method')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("location: success_enroll.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
