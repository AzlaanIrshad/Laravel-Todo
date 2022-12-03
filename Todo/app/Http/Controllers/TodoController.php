<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index() {
    $todo = Todo::all();
      return view('todo', ['todo' => $todo]);
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
        //$todo->user_id = $request->user_id;
        $todo->save();
        return redirect()->route('todo.index');
   }
}
