<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "UPDATE tasks SET name='$name', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
