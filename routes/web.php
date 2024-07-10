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
Route::get('/sign-up-email', function(){
    return view('sign-up-email');
});
Route::get('/verify-c-a', function(){
    return view('verify-c-a');
});
Route::get('/log-in', function(){
    return view('log-in');
});
Route::get('/forget-pass', function(){
    return view('forget-pass');
});
Route::get('/create-post', function(){
    return view('create-post');
});
