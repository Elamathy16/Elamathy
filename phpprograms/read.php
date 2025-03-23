<?php
include('db.php');

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. "<br>";
    }
} else {
    echo "No tasks found.";
}

$conn->close();
?>
