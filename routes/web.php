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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/library', [HomeController::class, 'index']);

Route::get('/admin', [TaskController::class, 'index'])->middleware('auth');

Route::get('/admin/create', [TaskController::class, 'create']);

Route::get('/admin/{id}', [TaskController::class, 'show']);

Route::post('/admin', [TaskController::class, 'store']);

route::get('/admin/{id}/edit', [TaskController::class, 'edit']);

Route::patch('/admin/{id}', [TaskController::class, 'update']);

Route::delete('/admin/{id}', [TaskController::class, 'delete']);

