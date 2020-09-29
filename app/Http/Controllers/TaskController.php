<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $request;
    public function  __construct(Request $request){
        $this->request=$request;

    }
    public function index(){
        $tasks=Task::all();
        
        return view("tasks.index", ["tasks"=> $tasks]);
    }
    public function create(){
        return view("tasks.create");
    }
    public function store(Request $request){

            $task= new Task;
            $task->name= $request->nome;
            $task->situation="Aberta";
            $task->save();
               
            return redirect()->route("tasks.index");
        
    }
    public function delete($id){
        $task=Task::where('id', $id)->first();
        if(!$task){
            return redirect()->back();
        }
        $task->delete();

        return redirect()->route("tasks.index");
        }
    public function edit($id){
        $task=Task::where('id', $id)->first();
        if(!$task){
            return redirect()->back();
        }
        return view("tasks.edit", ["task"=> $task]);
    }
    public function update(Request $request){
        $task=Task::where('id', $request->id)->first();
        if(!$task){
            return redirect()->back();
        }
        $task->name= $request->nome;
        $task->save();
        return redirect()->route("tasks.index");
    }
}
