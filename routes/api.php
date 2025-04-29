<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

// Blog Routes
Route::get('/', [BlogController::class, 'index']); 

Route::get('/category/{categoryName}', [CategoryController::class, 'show']); 

Route::get('/blog/create', [BlogController::class,'create']);