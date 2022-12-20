<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AuthController;

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
Route::get('/todo/update/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('/todo/updateRequest', [TodoController::class, 'update'])->name('todo.updateRequest');

//delete route
Route::get('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');

//login routes
Route::get('/todo/login', [AuthController::class, 'create'])->name('login');
Route::post('/todo/login', [AuthController::class, 'store']);

//register routes
Route::get('/todo/register', [AuthController::class, 'Register'])->name('register');
Route::post('/todo/register', [AuthController::class, 'Registerstore'])->name('registerStore');
