<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit: Todo-list</title>
</head>
<body>
    <form class="todo-form" action="{{ route('todo.updateRequest')}}" method="POST">
        @csrf
        <label for="todo">Todo:</label>
        <input type="text" name="todo" value={{$todo["todo"]}}><br>
        <label for="deadline">Deadline:</label>
        <input type="text" name="deadline" value={{$todo["time"]}}><br>
        <label for="priority">Priority:</label>
        <input type="number" name="priority" value={{$todo["priority"]}}><br>
        <label for="completed">Completed:</label>
        @if ($todo["completed"] == 1)
            <input type="checkbox" name="completed" value="completed" checked><br>
        @else
        <input type="checkbox" name="completed" value={{$todo["completed"]}}><br>
        @endif
        <input type="hidden" name="id" value={{$todo["id"]}}>
        <input type="submit" value="Create">
    </form>
</body>
</html>