<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;


Route::get('/', [PostsController::class, 'index'])->name('welcome');

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');

Route::post('/posts/create', [PostsController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::post('/posts/{post}/comments', [CommentsController::class, 'store'])->name('comments.store');


// 1ere facon Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('tasks.show');

// Route::get('/register', [PostsController::class, 'register']);
// Route::get('/contact', [PostsController::class, 'contact'])->name('contact');
