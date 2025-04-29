<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

// Blog Routes
Route::get('/', [BlogController::class, 'index']); // ✔

Route::get('/category/{categoryName}', [CategoryController::class, 'show']); // ✔

Route::get('/blog/create', [BlogController::class,'create']); // ✔

Route::post('/blog/create', [BlogController::class,'store']); // ✔

Route::get('/blog/update', [BlogController::class,'edit']);

Route::put('/blog/update', [BlogController::class,'update']);

Route::get('/blog/{blog}', [BlogController::class, 'show']); // ✔

Route::delete('/blog/{blog}', [BlogController::class,'delete']); // ✔


// User Routes
Route::get('/user/register', [UserController::class, 'create']); // ✔

Route::post('/user/register', [UserController::class, 'store']); // ✔

Route::get('/user/update', [UserController::class, 'edit']); // ✔

Route::put('/user/update', [UserController::class,'update']); // ✔

Route::post('/user/logout', [UserController::class, 'logout']); // ✔

Route::delete('/user/{user}', [UserController::class,'delete']); // ✔

Route::put('/user/give-role', [UserController::class,'giveRole']); // ✔


// Admin
Route::get('/admin', [UserController::class, 'showAdminPanel']);


// Category Routes
Route::get('/category/update', [CategoryController::class, 'edit']);
Route::put('/category/update', [CategoryController::class,'update']);
Route::post('/category/create', [CategoryController::class, 'create']);
Route::delete('/category/delete', [CategoryController::class, 'delete']);