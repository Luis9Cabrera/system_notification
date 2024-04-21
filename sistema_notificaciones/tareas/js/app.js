$(document).ready(function() {
    // Función para cargar tareas desde el servidor
    function loadTasks() {
        $.ajax({
            url: 'get_tasks.php',
            method: 'GET',
            success: function(response) {
                $('#taskList').html(response);
            }
        });
    }

    // Cargar tareas al cargar la página
    loadTasks();

    // Enviar datos del formulario al crear una nueva tarea
    $('#taskForm').submit(function(e) {
        e.preventDefault();
        var taskTitle = $('#taskTitle').val();
        var taskCategory = $('#taskCategory').val(); // Obtener la categoría seleccionada

        $.ajax({
            url: 'add_task.php',
            method: 'POST',
            data: { title: taskTitle, category: taskCategory }, // Enviar también la categoría
            success: function(response) {
                $('#taskTitle').val('');
                loadTasks(); // Recargar la lista de tareas después de añadir una nueva
            }
        });
    });

    // Escuchar eventos en tiempo real usando setInterval para actualizar las tareas cada 2 segundos
    setInterval(function() {
        loadTasks();
    }, 2000);
});
