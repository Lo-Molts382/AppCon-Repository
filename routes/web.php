<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/* User-defined web routes */

Route::get('post', [App\Http\Controllers\PostsController::class, 'index']);
Route::get('post/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::post('post/create', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('post/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit']);
Route::put('post/{id}/edit', [App\Http\Controllers\PostsController::class, 'update']);
Route::get('post/{id}/delete', [App\Http\Controllers\PostsController::class, 'destroy']);

/* */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');

/* */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
