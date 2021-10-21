<?php

use Illuminate\Support\Facades\Route;

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

// Laravel Welcome
Route::get('/laravel', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Main-Page 
|--------------------------------------------------------------------------
|
| Here is where all ordinary user routing, you can add or edit
|
*/

// Login --------------------------------------------------------------------
Route::get('/', function () {
    return view('page/login', [
        "title" => "login"
    ]);
});

// Home --------------------------------------------------------------------
Route::get('/home', function () {
    return view('page/home', [
        "title" => "Home"
    ]);
});

// MyTask --------------------------------------------------------------------
Route::get('/task', function () {
    return view('page/mytask', [
        "title" => "task"
    ]);
});

// Inbox --------------------------------------------------------------------
Route::get('/inbox', function () {
    return view('page/inbox', [
        "title" => "inbox"
    ]);
});

Route::get('/inbox', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);



// Chart --------------------------------------------------------------------

Route::get('/chart', function () {
    return view('page/chart', [
        "title" => "chart"
    ]);
});

Route::get('/goal', function () {
    return view('page/goal', [
        "title" => "goal"
    ]);
});