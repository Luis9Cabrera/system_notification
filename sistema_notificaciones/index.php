<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
        <css></css>
    </link>
    <title>Sistema de Notificaciones</title>
</head>
<body>
    <main class="main">
        <div class="cont-form">
            <h2>Bienvenido al sistema de notificaciones</h2>
            <p>Este es un sistema de notificaciones que se encarga de enviar mensajes de notificaciones al usuario</p> 
            <form action="php/agregar-registro.php" method="POST" id="notification-form" class="form">
                <div class="element-form">
                    <label for="categorias">Categorias:</label>
                    <select name="categoria" id="categoria">
                    <option value="ninguna">Ninguna</option>
                    <option value="peliculas">Peliculas</option>
                    <option value="finanzas">Finanzas</option>
                    <option value="deportes">Deportes</option>
                    </select>
                </div>
                <div class="element-form">
                    <textarea name="mensaje" placeholder="Mensaje" id="mensaje"></textarea>
                </div>
                <div class="element-form">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="registros">
            <h2>Registros</h2>
            <table>
                <thead>
                    <tr>
                        <th>Notificación</th>
                        <th>Tipo de notificación</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Categoría</th>
                    </tr>
                </thead>
                <tbody id="registroslist"></tbody>
                        <!-- Agrega más filas según tus necesidades -->
            </table>
        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>   
</body>
</html>