<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesControllers;

Route::get('/', function () {
    return view('welcome');
});

//router is define for projects
Route::resource('/movies',MoviesControllers::class);
// Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
// Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
