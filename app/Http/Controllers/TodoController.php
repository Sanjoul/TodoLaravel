<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Console\View\Components\Task;


class TodoController extends Controller

{
    public function index(){
        $tasks= Todo::all();
        return view('todo.index',compact('tasks'));
    }

    public function create(){
        return view('todo.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required',
            'task'=>'required',

        ]);

        $newTask = Todo::create($data);
        return redirect(route('todo.index'));

    }

    public function edit(Todo $todo){
        return view('todo.edit',['todo'=>$todo]);
    }

    public function update(Todo $todo,Request $request){

        $data=$request->validate([
            'name'=>'required',
            'task'=>'required',

        ]);
        $todo->update($data);
        return redirect(route('todo.index'))->with('success','Product updated Successfully');


    }

    public function destroy(Todo $todo){
        $todo->delete();
        return redirect(route('todo.index'))->with('success','Product is Deleted successfully');

    }

}
