<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class taskController extends Controller
{
    private $tasks;

    public function index ()
    {
        $tasks = Task::all();
        return view('task.index')->with('tasks', $tasks);
    }

    public function show( $task )
    {
        $task = Task::find($task);

        if($task === null)
            abort(404);

        return view('task.show')->with('task', $task);
    }

    public function create( )
    {
        return view('task.create');
    }

    public function store (Request $request)
    {
        $task = Task::create($request->all());
        return view('task.show')->with('task', $task);
    }

    public function destroy( $task )
    {
        $task = Task::find($task);
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
