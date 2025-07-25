<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('admin.dashboard');
} )->name('dashboard');

Route::resource('categories', CategoryController::class);

Route::resource('posts', PostController::class);

