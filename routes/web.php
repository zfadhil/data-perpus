<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth');

Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('is_admin');

Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::post('/tasks', [TaskController::class, 'store'])->middleware('is_admin');

route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->middleware('is_admin');

Route::patch('/tasks/{id}', [TaskController::class, 'update'])->middleware('is_admin');

Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->middleware('is_admin');

