<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create: Todo-list</title>
</head>
<body>
    <form class="todo-form" action="{{ route('todo.createRequest')}}" method="POST">
        @csrf
        <label for="todo">Todo:</label>
        <input type="text" name="todo" placeholder="Todo"><br>
        <label for="deadline">Deadline:</label>
        <input type="text" name="deadline" placeholder="22/12/2022"><br>
        <label for="priority">Priority:</label>
        <input type="number" name="priority" placeholder="Priority"><br>
        <label for="completed">Completed:</label>
        <input type="checkbox" name="completed" value="completed"><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>