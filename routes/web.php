<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('post', [App\Http\Controllers\PostsController::class, 'index']);
//Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\PostsController::class, 'dash'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('post/create', [App\Http\Controllers\PostsController::class, 'create']);
    Route::post('post/create', [App\Http\Controllers\PostsController::class, 'store']);
    Route::get('post/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit']);
    Route::put('post/{id}/edit', [App\Http\Controllers\PostsController::class, 'update']);
    Route::get('post/{id}/delete', [App\Http\Controllers\PostsController::class, 'destroy']);
});

require __DIR__.'/auth.php';
