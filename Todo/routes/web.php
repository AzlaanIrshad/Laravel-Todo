<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');

//create routes
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/createRequest', [TodoController::class, 'createRequest'])->name('todo.createRequest');

//update routes
Route::get('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/updateRequest', [TodoController::class, 'updateRequest'])->name('todo.updateRequest');

//delete routes
Route::get('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
Route::post('/todo/deleteRequest', [TodoController::class, 'deleteRequest'])->name('todo.deleteRequest');