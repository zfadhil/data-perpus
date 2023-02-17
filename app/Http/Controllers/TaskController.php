<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
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
        $task = Task::paginate(6);
        return view('task.index' ,[
        'data' => $task
    ]);
    }

    public function show($id) {
        $task = Task::find($id);
        return $task;
    }

    public function store(TaskRequest $request) {

        
        // $this->taskList[$request->key] = $request->task;
        // return $this->taskList;
        Task::create([
            'task' => $request->task,
            'user' => $request->user,
            'statuss' => $request->statuss
        ]);
        return redirect('/admin');
    }

    public function update(TaskRequest $request,$id){
        $task = Task::find($id);
        $task->update([
            'task' => $request->task,
            'user' => $request->user,
            'statuss' => $request->statuss
        ]);
        return redirect('/admin');
    }

    public function edit($id){
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }

    public function delete($id){
        $tasK = Task::find($id)->delete();
        return redirect('/admin');
    }

    public function create(){
        return view('task.create');
    }
}
