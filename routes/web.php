<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/tasks', [TaskController::class, 'index']);
// Route::get('/task', [TaskController::class, 'doSomething']);
Route::resource('/tasks', TasksController::class);
