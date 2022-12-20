<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-list</title>
</head>
<body>
    

<h1>Todo List</h1>
<button><a href="{{route('todo.create')}}">Create</a></button>
@foreach($todos as $todo)
<p>{{$todo['todo']}}
{{$todo['time']}}
{{$todo['priority']}}
<button><a href="{{route('todo.edit', $todo['id'])}}">Edit</a></button>
<button><a href="{{route('todo.delete', $todo['id'])}}">Delete</a></button>
</p>
@endforeach
</body>
</html>