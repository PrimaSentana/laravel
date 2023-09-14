<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/sketches', [HomeController::class, 'app']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/about/{id}', [HomeController::class, 'show']);

// Post
Route::get('/post', [PostController::class, 'index']);

// Create Post
Route::get('/post/create', [PostController::class, 'createPost']);
// Store data post
Route::post('/post', [PostController::class, 'store']);

// Read (show) data post
Route::get('/post/{id}', [PostController::class, 'show']);

// Update post
Route::get('/post/{id}/edit', [PostController::class, 'editPost']);
Route::put('/post/{id}', [PostController::class, 'updatePost']);

// Delete post
Route::delete('/post/{id}', [PostController::class, 'delete']);