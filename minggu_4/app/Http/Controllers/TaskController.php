<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('task.index',compact('task'));
    }
    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        $validatedData = $request->validated(); 
        Task::create($validatedData);
        return redirect('/task');
    }

    public function show(Task $task){
        return view('task.show',compact('task'));
    }

    public function edit($id){
        $task= Task::findOrFail($id);
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect('/task');
    }



    
    
}