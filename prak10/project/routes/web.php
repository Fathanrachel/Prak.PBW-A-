<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\LogoutController;
use \App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, '__invoke']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);



Route::resource('users', UserController::class)->middleware('auth');

// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user:id}', [UserController::class, 'show'])->name('users.show');
// Route::get('/users/{user:id}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::put('/users/{user:id}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', LogoutController::class)->name('logout')->middleware('auth'); 