<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }

    public function createTaskView()
    {
        return view('task.taskview');
    }

    public function createTask(Task $task)
    {
        request()->validate([
            'name' => 'required',
        ]);

        Task::create([
            'name' => request('name')
        ]);

        return redirect('/');
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

    public function editTaskView(Task $task)
    {
        return view('task.editview', ['task' => $task]);
    }

    public function editTask(Task $task)
    {
        request()->validate([
            'name' => 'required',
        ]);

        $task->update([
            $task->name = request('name')
        ]);
        $task->save();
        return redirect('/');
    }
}