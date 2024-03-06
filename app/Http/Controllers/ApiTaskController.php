<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ApiTaskController extends Controller
{
    public function index()
    {
        $modelTask = new Task();
        $tasks = $modelTask->apiAllTasks();

        return response()->json($tasks);
    }
}
