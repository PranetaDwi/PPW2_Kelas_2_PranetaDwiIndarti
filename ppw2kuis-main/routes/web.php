<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


//route resource
Route::resource('/post',PostController::class);


