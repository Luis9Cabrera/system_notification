<?php
include 'db.php';

$sql = "SELECT * FROM registro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $user = $row['user'];
        $consulta = "SELECT * FROM users WHERE id_user = $user";
        $res = $conn->query($consulta);
        if ($res->num_rows > 0) {
            while($row2 = $res->fetch_assoc()) {
                $nombre = $row2['nombre'];
                $correo = $row2['correo'];
                $telefono = $row2['telefono'];
            }
        }else {
            echo "Registro no encontrado";
        }
        echo "<tr><td>{$row['mensaje']}</td> <td>{$row['tipo_notificacion']}</td> <td>{$nombre}</td> <td>{$correo}</td> <td>{$telefono}</td> <td>{$row['fecha']}</td> <td>{$row['categoria']}</td></tr>";
    }
} else {
    echo "Registro no encontrado";
}
?>