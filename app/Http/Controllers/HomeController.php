<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = Todo::all();
        return view('home', compact('todo'));
    }

    public function viewUpdateTodo($id)
    {
        $todo = Todo::all();
        $todos = Todo::findOrFail($id);
        return view('update', compact('todo', 'todos'));
    }

    public function updateTodo($id){
        $todos = Todo::find($id);
        $todos->kebutuhan = $this->request->todo;
        
        $todos->update();
        $todo = Todo::all();
        return view('home', compact('todo'));
    }

    public function addTodo(){
        $input = new Todo([
            'kebutuhan' => $this->request->todo,
            ]);
        $input->save();
        return redirect('home');
    }

    public function deleteTodo($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('home');
    }
}
