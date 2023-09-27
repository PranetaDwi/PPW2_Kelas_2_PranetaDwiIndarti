<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);

Route::get('/get',[PostController::class, 'show']);

Route::get('/post',[PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create'])->name('create');

Route::post('/post/store/', [PostController::class, 'store'])->name('store');

Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('edit');

Route::post('/post/update/{id}', [PostController::class, 'update'])->name('update');

Route::post('/post/delete/', [PostController::class, 'destroy'])->name('destroy');

