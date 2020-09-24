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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', function () {
    return 'task_view';
});

Route::get('tasks', 'App\Http\Controllers\TaskController@showIndex')->name('tasks.index');

Route::get('tasks/{id}', 'App\Http\Controllers\TaskController@showTask');

Route::get('test/task', function () {
    return view('task');
});*/

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

Route::get('/', function() {
    return redirect()->route('tasks.index');
});
