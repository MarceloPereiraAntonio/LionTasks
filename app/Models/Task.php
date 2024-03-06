<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;

    public function allTasks()
    {
        $tasks = DB::table('tasks as t')
            ->select('t.id', 't.title', 't.description', 't.category_id', 'c.name as name_category', 't.completed', 't.created_at', 't.updated_at')
            ->join('category as c', 't.category_id', '=', 'c.id')
            ->get();
        return $tasks;
    }

    public function getTask($id)
    {
        $tasks = DB::table('tasks as t')
            ->select('t.id', 't.title', 't.description', 't.category_id', 'c.name as name_category', 't.completed', 't.created_at', 't.updated_at')
            ->join('category as c', 't.category_id', '=', 'c.id')
            ->where('t.id', '=', $id)
            ->first();
        return $tasks;
    }
}
