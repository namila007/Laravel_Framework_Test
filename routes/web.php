<?php

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
    $name="Stranger";
    $tasks=App\Task::all();
    return view('welcome',compact('name','tasks'));
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/tasks','TaskController@show');
Route::get('/tasks/{task}','TaskController@index');

Route::get('/layouts','PostController@index');

/*Route::get('/tasks',function(){
    $name="Stranger";
    $task=DB::table("tasks")->get();
    return view('tasks.tasks',compact('task'));
});

Route::get('/tasks/{task}',function ($id){
//    $tasks=DB::table('tasks')->find($id);
    $task= App\Task::find($id);
    return view('tasks.index',compact('task'));

});*/



