<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});

Route::post('/welcome', [AuthController::class, 'register']);
Route::get('/welcome', [AuthController::class, 'showWelcome']);

Route::get('/cast', [CastController::class, 'index']) ->name('cast.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store']) ->name('cast.store');
Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{id}', [CastController::class, 'destroy']) ->name('cast.destroy');

Route::get('/cast/{id}', [CastController::class, 'show'])->name('cast.show');
