<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index (){
      $tasks=Task::all();
       return view('temp',compact('tasks'));
    }
    public function store(Request $request){
       $task=new Task();
       $task->name=$request->name;
       $task->save();
       return redirect()->back();
    }

    public function delete($id){
        Task::find($id)->delete(); //fast way
        return redirect()->back();
        /*
            secure way
            Task::find($id);
            Task->delete();
        */
    }
}


