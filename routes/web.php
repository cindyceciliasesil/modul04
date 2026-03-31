<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

// HALAMAN LOGIN (awal buka web)
Route::get('/', [AuthController::class, 'showLogin'])
    ->name('login')
    ->middleware('guest');

// PROSES LOGIN
Route::post('/login', [AuthController::class, 'login']);

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// HALAMAN SETELAH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('welcome'); // ini home kamu
    })->name('home');

    Route::resource('books', BookController::class);
    Route::resource('categories', CategoryController::class);

});