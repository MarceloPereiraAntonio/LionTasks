<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $taskModel = new Task();
        return view('dashboard', [
            'tasks' =>$taskModel->allTasks()
        ]);
    }
    public function show($id)
    {
        $modelTask = new Task();
        $task = $modelTask->getTask($id);
        return view('task-show', [
            'task'   => $task
        ]);
    }
}
