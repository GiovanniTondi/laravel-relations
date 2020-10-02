<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();

        return view('task-index', compact('tasks'));
    }

    public function show($id) {

        $task = Task::findOrFail($id);

        return view('task-show', compact('task'));
    }

    public function save(Request $request, $id) {

        $data = $request -> all();
        $task = Task::findOrFail($id);

        $task -> update($data);

        return redirect() -> route('task-show', $id);
    }

}
