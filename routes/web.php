<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('genres', GenresController::class);
Route::resource('authors', AuthorsController::class);