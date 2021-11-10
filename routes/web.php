<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
$data= App\Models\Task::all();
    return view('tasks')->with('tasks',$data);
});

//data adding to the database
Route::post('/saveTask', 'App\Http\Controllers\TaskController@store' );
Route::get('/markascompleted/{id}', 'App\Http\Controllers\TaskController@UpdateTaskCompleted' );
Route::get('/markasnotcompleted/{id}', 'App\Http\Controllers\TaskController@UpdateTaskNotCompleted' );
Route::get('/deletetask/{id}', 'App\Http\Controllers\TaskController@deleteTask' );
Route::get('/updatetask/{id}', 'App\Http\Controllers\TaskController@updateTaskView' );

Route::post('/updatetasks', 'App\Http\Controllers\TaskController@updatetask' );




