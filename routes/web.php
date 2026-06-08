<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('genres', GenresController::class);
Route::resource('authors', AuthorsController::class);
Route::resource('books', BooksController::class);