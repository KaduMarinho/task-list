<?php

use App\Task;
use Illuminate\Http\Request;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Authentication Routes...
Route::auth();

/**
 * Show Task Dashboard
 */
/*Route::get('/', function () {
    $tasks = Task::where('status', 'true')->orderBy('created_at', 'asc')->get();
 //echo(date('h:i:s'));exit;
    return view('tasks', [
        'tasks' => $tasks
    ]);
});*/

/**
 * Add New Task
 */
/*Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
 
    // Create The Task
    $task = new Task;
    $task->name = $request->name;
    $task->save();
 
    return redirect('/');
});*/

/**
 * Update Task
 */ 
/*Route::put('task/{id}', function(Task $task, $id)
{    
    $task = $task->find($id);
    $task->status = 0;
    $task->save();

    return redirect('/');
});*/
 
/**
 * Delete Task
 */
/*Route::delete('/task/{task}', function (Task $task) {    
    $task->delete();
 
    return redirect('/');
});*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::put('/task/{task}', 'TaskController@update');
Route::delete('/task/{task}', 'TaskController@destroy');
