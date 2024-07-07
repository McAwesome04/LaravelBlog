<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/index', function(){
    return view('index');
});
Route::get('/new-user', function(){
    return view('new-user');
});
