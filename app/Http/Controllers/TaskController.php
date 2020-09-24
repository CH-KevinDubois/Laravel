<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
    private $tasks;

    public function __construct() {

        $this->tasks = collect([
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
                ])->keyBy('id');
        }
    public function index ()
    {
        return view('index')->with('tasks', $this->tasks)
                                 ->with('test', 'TASK2');
    }

    public function show ( $task )
    {
        return view('show')->with('task', $this->tasks[$task]);
    }
}
