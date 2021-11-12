<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function sourcetask()
    {
        return view('page/mytask', [
            "title" => "MyTask",
            "tasks" => Task::all()
        ]);
    }
}
