<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tasks (name, description) VALUES ('$name', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New task created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
