<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\GalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, '__invoke']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);


Route::get('users', function () {
    $users = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@parsinta.com'],
        ['id' => 2, 'name' => 'John Doe', 'email' => 'jane@parsinta.com'],
    ];

    return view('users.index', compact('users'));
});