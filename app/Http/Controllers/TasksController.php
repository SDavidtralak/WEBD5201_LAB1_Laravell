<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
         //$taskdb = DB::table('tasks')->get();
        $tasksdb = Task::all();

        return view('tasks.index', compact('tasksdb'));
        //return view('welcome')->with('tasks', $tasks);
    }
    public function showTask(Task $tasks)

    {
        //$taskdb = DB::table('tasks')->find($id);
        $taskdb = Task::find($id);

        //return view('welcome', ['tasks' => $tasks]);
        return view('tasks.show', compact('taskdb'));
        //return view('welcome')->with('tasks', $tasks);
    }
}
