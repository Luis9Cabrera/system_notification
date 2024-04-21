<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Task CRUD</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Realtime Task CRUD</h1>
        <form id="taskForm">
            <input type="text" id="taskTitle" placeholder="Enter task title" required>
            <select id="taskCategory" required>
                <option value="Finanzas">Finanzas</option>
                <option value="Películas">Películas</option>
                <option value="Deportes">Deportes</option>
            </select>
            <button type="submit">Add Task</button>
        </form>
        <ul id="taskList"></ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
