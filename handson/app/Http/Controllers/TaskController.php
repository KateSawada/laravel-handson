<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new Task;
        $task->title = $request->title ?? ""; // null の防止
        $task->isDone = false;
        $task->save();
        return redirect(url('/handson'));
    }

    public function index(){
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function details(Request $request, $id){
        $task = Task::getTaskFromId($id);
        return view('task.details', compact('task'));
    }

    public function done(Request $request){
        Task::done($request->id);
        return redirect(url('/task'));
    }
}
