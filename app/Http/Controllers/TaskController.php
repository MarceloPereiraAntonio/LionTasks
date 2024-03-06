<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateRequest;
use App\Models\{Category, Task};

class TaskController extends Controller
{
    private $modelTask;
    private $modelCategory;
    public function __construct()
    {
        $this->modelTask = new Task();
        $this->modelCategory = new Category();
    }

    public function index()
    {
        return view('dashboard', [
            'tasks' => $this->modelTask->allTasks()
        ]);
    }
    public function create()
    {
        return view ('task-create');
    }

    public function store(StoreUpdateRequest $request)
    {
        $category = $this->modelCategory->firstOrCreate(['name' => $request->input('name_category')]);

        $task = $this->modelTask->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $category->id,
            'completed' => $request->input('completed'),
        ]);
        session()->flash('success', 'Tarefa criada com sucesso!');
        return redirect()->back();
    }
    public function show($id)
    {
        $task = $this->modelTask->getTask($id);
        return view('task-show', [
            'task'   => $task
        ]);
    }

    public function edit($id)
    {
        $task = $this->modelTask->getTask($id);
        if(!$task){
            return redirect()->back();
        }
        return view('task-edit', [
            'task' => $task
        ]);

    }

    public function update(StoreUpdateRequest $request, $id)
    {
        $task = $this->modelTask->find($id);
        if(!$task){
            return redirect()->back();
        }

        $category = $this->modelCategory->firstOrCreate(['name' => $request->input('name_category')]);

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->category_id = $category->id;
        $task->completed = $request->input('completed');
        $task->save();
        session()->flash('success', 'Tarefa atualizada com sucesso!');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/dashboard');


    }

}
