<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index() {
    $todos = Todo::where('user_id', auth()->user()->id)->get();
      return view('todo', ['todos' => $todos]);
   }

   public function create() {
        return view('create');
   }

   public function createRequest(Request $request) {

        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->time = $request->deadline;
        $todo->priority = $request->priority;
        if ($request->completed == 'completed') {
            $todo->completed = true;
        } else {
            $todo->completed = false;
        }
        $todo->user_id = auth()->user()->id;
        $todo->save();
        return redirect()->route('todo.index');
   }

    public function edit($id) {
          $todo = Todo::find($id);
          return view('edit', ['todo' => $todo]);
    }

    public function update(Request $request) {
        
        $todo = Todo::find($request->id);

        $todo->todo = $request->todo;
        $todo->time = $request->deadline;
        $todo->priority = $request->priority;
        if ($request->completed == 'completed') {
            $todo->completed = true;
        } else {
            $todo->completed = false;
        }
        $todo->save();
        return redirect()->route('todo.index');
    }

    public function delete($id) {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }


}
