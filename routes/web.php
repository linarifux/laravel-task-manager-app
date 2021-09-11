<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index']);

Route::get('/tasks/create', [TaskController::class, 'createTaskView']);

Route::post('/task', [TaskController::class, 'createTask']);

Route::delete('/tasks/{task}', [TaskController::class, 'deleteTask']);

Route::get('/tasks/{task}/edit', [TaskController::class, 'editTaskView']);
Route::put('/tasks/{task}', [TaskController::class, 'editTask']);