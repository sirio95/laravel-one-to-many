<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home'])
    ->name('home');

Route::get('/posts', [MainController::class, 'posts'])
    ->name('posts');
require __DIR__ . '/auth.php';