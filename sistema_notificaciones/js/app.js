$(document).ready(function() {
    // Función para cargar tareas desde el servidor
    function cargaregistros() {
        $.ajax({
            url: 'php/obten-registros.php',
            method: 'GET',
            success: function(response) {
                $('#registroslist').html(response);
            }
        });
    }

    // Cargar tareas al cargar la página
    cargaregistros();

    // Enviar datos del formulario al crear una nueva tarea
    $('#notification-form').submit(function(e) {
        e.preventDefault();
        var rcategoria = $('#categoria').val();
        var rmensaje = $('#mensaje').val(); // Obtener la categoría seleccionada

        $.ajax({
            url: 'php/agregar-registro.php',
            method: 'POST',
            data: { categoria: rcategoria, mensaje: rmensaje }, // Enviar también la categoría
            success: function(response) {
                $('#mensaje').val('');
                cargaregistros(); // Recargar la lista de tareas después de añadir una nueva
            }
        });
    });

    // Escuchar eventos en tiempo real usando setInterval para actualizar las tareas cada 2 segundos
    setInterval(function() {
        cargaregistros();
    }, 2000);
});
