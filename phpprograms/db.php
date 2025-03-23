<?php
$servername = "localhost";
$username = "root";  // Default username for MySQL
$password = "";      // Default password for MySQL (use your actual password if different)
$dbname = "crud_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
