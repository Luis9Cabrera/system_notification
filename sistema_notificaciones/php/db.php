<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notification";

// Crea conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
