<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/user', [UserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::prefix('users')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('users-index');
    Route::get('/', [UserController::class, 'create'])->name('users-create');
    Route::post('/', [UserController::class, 'store'])->name('users-store');
    Route::delete('/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]+')->name('users-destroy');
});

Route::fallback(function(){
    return "Erro";
});
