<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Task deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
