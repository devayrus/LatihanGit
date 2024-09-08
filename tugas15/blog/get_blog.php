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

$sql = "SELECT * FROM blog ORDER BY created_at DESC";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetch all data into an array
  $blogs = $result->fetch_all(MYSQLI_ASSOC);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
