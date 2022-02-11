<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function tasks()
    {
        $todo = Todo::all();
        return response()->json(['todo'=>$todo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
        $todo = new Todo();
        $todo->task = $request->task;
        $todo->deadline = $request->deadline;
        $todo->save();
        return redirect()->route('todo.index');
    }
}
