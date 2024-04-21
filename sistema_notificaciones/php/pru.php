<?php
include 'db.php';
    $DateAndTime = date('Y-m-d H:i');
    echo $DateAndTime;

    $categoria = "Peliculas";
    $mensaje = "ESTRENO ConFu Panda 4";

    $consulta = "SELECT * FROM $categoria"; // seleccionamos todos los usuarios de la categoria actual
    $result = $conn->query($consulta); // ejecutamos la consulta
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { //se ejecuta mientras haya filas
            $usuario = $row['id_user']; //guardas el id del usuario

            //Registrar notificaciones enviadas a push
            $cons = "SELECT * FROM notif_correo WHERE id_user = $usuario"; // guardamos una consulta para buscar al usuario
            $res = $conn->query($cons); //ejecutamos la consulta
            if ($res->num_rows > 0) { ////si el resultado tiene numero de filas mayor a 0 entonces insertamos datos en la tabla
                $sql = "INSERT INTO registro (mensaje, tipo_notificacion, user, fecha, categoria) VALUES ('$mensaje', 'Correo Electronico', '$usuario', '$DateAndTime', '$categoria')";
                if ($conn->query($sql) === TRUE) {
                    echo "Registro agregado correctamente";
                } else {//si no, hacemos otra consulta
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $cons . "<br>" . $conn->error;
            }
            
            //Registrar notificaciones enviadas a sms
            $cons = "SELECT * FROM notif_correo WHERE id_user = $usuario"; // guardamos una consulta para buscar al usuario
            $res = $conn->query($cons); //ejecutamos la consulta
            if ($res->num_rows > 0) { ////si el resultado tiene numero de filas mayor a 0 entonces insertamos datos en la tabla
                $sql = "INSERT INTO registro (mensaje, tipo_notificacion, user, fecha, categoria) VALUES ('$mensaje', 'Correo Electronico', '$usuario', '$DateAndTime', '$categoria')";
                if ($conn->query($sql) === TRUE) {
                    echo "Registro agregado correctamente";
                } else {//si no, hacemos otra consulta
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $cons . "<br>" . $conn->error;
            }

            //Registrar notificaciones enviadas a push
            $cons = "SELECT * FROM notif_correo WHERE id_user = $usuario"; // guardamos una consulta para buscar al usuario
            $res = $conn->query($cons); //ejecutamos la consulta
            if ($res->num_rows > 0) { ////si el resultado tiene numero de filas mayor a 0 entonces insertamos datos en la tabla
                $sql = "INSERT INTO registro (mensaje, tipo_notificacion, user, fecha, categoria) VALUES ('$mensaje', 'Correo Electronico', '$usuario', '$DateAndTime', '$categoria')";
                if ($conn->query($sql) === TRUE) {
                    echo "Registro agregado correctamente";
                } else {//si no, hacemos otra consulta
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $cons . "<br>" . $conn->error;
            }
        }
    }
?>