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
// */
// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [TaskController::class, 'index'])->middleware('is_admin');

Route::get('/admin/create', [TaskController::class, 'create'])->middleware('is_admin');

Route::get('/admin/{id}', [TaskController::class, 'show']);

Route::post('/admin', [TaskController::class, 'store']);

route::get('/admin/{id}/edit', [TaskController::class, 'edit'])->middleware('is_admin');

Route::patch('/admin/{id}', [TaskController::class, 'update'])->middleware('is_admin');

Route::delete('/admin/{id}', [TaskController::class, 'delete'])->middleware('is_admin');

