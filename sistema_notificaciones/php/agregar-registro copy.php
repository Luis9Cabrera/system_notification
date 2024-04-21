<?php
include 'db.php';
$DateAndTime = date('m-d-Y h:i:s a', time());
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //obtenemos los datos
    $categoria = $_POST['categoria'];
    $mensaje = $_POST['mensaje'];

    $consulta = "SELECT * FROM $categoria"; // seleccionamos todos los usuarios de la categoria actual
    $result = $conn->query($consulta); // ejecutamos la consulta
    if ($result->num_rows > 0) { //si el resultado tiene numero de filas mayor a 0 entonces
        while($row = $result->fetch_assoc()) { //se ejecuta mientras haya filas
            $usuario = $row['id_user']; //guardas el id del usuario
            $cons = "SELECT * FROM notif_correo WHERE id_user = $usuario"; // guardamos una consulta para buscar al usuario
            $res = $conn->query($cons); //ejecutamos la consulta
            if ($res->num_rows > 0) { ////si el resultado tiene numero de filas mayor a 0 entonces insertamos datos en la tabla
                $sql = "INSERT INTO registro (mensaje, tipo_notificacion, user, fecha, categoria) VALUES ('$mensaje', 'Correo Electronico', '$usuario', '$DateAndTime', '$categoria')";
                if ($conn->query($sql) === TRUE) {
                    echo "Registro agregado correctamente";
                } else {//si no, hacemos otra consulta
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }else{
                echo "No se encontro al usuario en este tipo de notificacion";
                }

            // consulta notificacion sms
            $cons = "SELECT * FROM notif_sms WHERE id_user = $usuario"; // guardamos una consulta para buscar al usuario
            $res = $conn->query($cons); //ejecutamos la consulta
            if ($res->num_rows > 0) { ////si el resultado tiene numero de filas mayor a 0 entonces insertamos datos en la tabla
                $sql = "INSERT INTO registro (mensaje, tipo_notificacion, user, fecha, categoria) VALUES ('$mensaje', 'sms', '$usuario', '$DateAndTime', '$categoria')";
                if ($conn->query($sql) === TRUE) {
                    echo "Registro agregado correctamente";
                } else {//si no, hacemos otra consulta
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }else{
                echo "No se encontro al usuario en este tipo de notificacion";
                }

            //consulta notificacion push
            $cons = "SELECT * FROM notif_push WHERE id_user = $usuario"; // guardamos una consulta para buscar al usuario
            $res = $conn->query($cons); //ejecutamos la consulta
            if ($res->num_rows > 0) { ////si el resultado tiene numero de filas mayor a 0 entonces insertamos datos en la tabla
                $sql = "INSERT INTO registro (mensaje, tipo_notificacion, user, fecha, categoria) VALUES ('$mensaje', 'push', '$usuario', '$DateAndTime', '$categoria')";
                if ($conn->query($sql) === TRUE) {
                    echo "Registro agregado correctamente";
                } else {//si no, hacemos otra consulta
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }else{
                echo "No se encontro al usuario en este tipo de notificacion";
                }
    
        } 
    }
}
?>