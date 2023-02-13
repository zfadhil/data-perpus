<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(Request $request) {
        if ($request->search) {
            $task = Task::where('task', 'LIKE', 
            "%$request->search%")->get();
        }
        $task = Task::paginate(5);
        return view('welcome' ,[
        'data' => $task
    ]);
    }

    public function show($id) {
        $task = Task::find($id);
        return $task;
    }
}
