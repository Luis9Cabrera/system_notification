
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category']; // Obtener la categoría seleccionada

    $sql = "INSERT INTO tasks (title, category) VALUES ('$title', '$category')";
    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
