<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
     //
    public function  index($id){

        $task=Task::find($id);
        return view('tasks.index',compact('task'));
    }

    public function show(){
        $name="Stranger";
        $task=Task::get();
        return view('tasks.tasks',compact('task'));
    }
}
