<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::all();
        return view('layouts.task', compact('tasks'));
    }

    function create()
    {
        return view("layouts/AddTask");
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|max:255',
            'description' => 'required|max:255',
            'due_date' => 'required|date'
        ]);
        $task = new Task();
        $task->task = $request->task;
        $task->checked = 0;
        $task->description = $request->description;
        $task->created_at = now();
        $task->due_date = $request->due_date;

        $task->save();

        return redirect()->route('tasks.index');
    }

    public function SearchTask(Request $request)
    {
        $search = $request->get('task');
        $tasks = Task::where('task', 'like', '%' . $search . '%')->get();
        return view('layouts.task', compact('tasks'));
    }

    public function updateTaskStatus(Request $request, $id)
    {
        $request->validate([
            'checked' => 'required|boolean',
        ]);

        $task = Task::findOrFail($id);
        $task->checked = $request->input('checked');
        $task->save();

        return response()->json(['message' => 'Task status updated successfully']);
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }


}
