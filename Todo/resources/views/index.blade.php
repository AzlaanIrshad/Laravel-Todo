

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