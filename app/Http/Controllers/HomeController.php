<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class HomeController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index(Request $request) {
        if ($request->search) {
            $task = Task::where('task', 'LIKE', 
            "%$request->search%")->get();
        }
        $task = Task::all();
        return view('task.tamu' ,[
        'data' => $task
    ]);
    }
}
