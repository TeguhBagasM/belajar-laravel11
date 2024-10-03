<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => "About Me"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog']);
});
Route::get('/posts/{id}', function ($id) {
    return view('post-detail', ['title' => 'Blog Detail']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

// notes
// blade = templateing engine bawaannya laravel