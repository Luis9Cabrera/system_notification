<?php
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>{$row['title']} - <strong>{$row['category']}</strong></li>";
    }
} else {
    echo "No tasks found";
}
?>
