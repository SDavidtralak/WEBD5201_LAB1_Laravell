<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//controller routes
Route::get('/tasksCon', [TasksController::class, 'index']);
Route::get('/tasksCon/{tasks}', [TasksController::class, 'showTask']);
Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::get('/post/create',[PostsController::class, 'create']);
Route::post('/post',[PostsController::class, 'store']);
Route::post('posts/{post}/comments', [CommentsController::class, 'store']);

//non-controller routes
/*
Route::get('/', function () {
    //$name = 'Laracasts';
    $tasks = [
     'Go to the store',
     'Finish my screencast',
     'Clean the house'];
    $tasksdb = DB::table('tasks')->get();
    //Lesson 5, 3 ways to pass data to view
    //return view('welcome', ['tasks' => $tasks]);
    return view('welcome', compact('tasksdb', 'tasks'));
    //return view('welcome')->with('tasks', $tasks);
});
*/
Route::get('/tasks', function () {

    //$taskdb = DB::table('tasks')->get();
    $tasksdb = Task::all();

    return view('tasks.index', compact('tasksdb'));
    //return view('welcome')->with('tasks', $tasks);
});

Route::get('/tasks/{tasks}', function ($id) {

    //$taskdb = DB::table('tasks')->find($id);
    $taskdb = Task::find($id);

    //return view('welcome', ['tasks' => $tasks]);
    return view('tasks.show', compact('taskdb'));
    //return view('welcome')->with('tasks', $tasks);
});

Route::get('/about', function () {
    return view('about');
});
