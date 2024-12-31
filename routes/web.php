<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

Route::get('/', [BlogPostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [BlogPostController::class, 'create'])->name('posts.create');
Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [BlogPostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [BlogPostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [BlogPostController::class, 'destroy'])->name('posts.destroy');

