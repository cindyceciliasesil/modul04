<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcone');
});
Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);