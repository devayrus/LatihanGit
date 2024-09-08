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
  $title = $_POST['title'];
  $author = $_POST['author'];
  $content = $_POST['content'];
  $image = $_POST['image'];

  // Tangkap dan simpan file gambar
  $target_dir = "uploads/"; // Direktori penyimpanan gambar
  $image = $_FILES['image']['name'];
  $target_file = $target_dir . basename($image);
  move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

  // Prepare SQL query
  $sql = "INSERT INTO blog (title, author, content, image) 
            VALUES ('$title', '$author', '$content', '$image')";

  // Execute the query
  if ($conn->query($sql) === TRUE) {
    header("location: add_blog.php?status=success");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close connection
  $conn->close();
}
