<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\TaskController;

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
// Route::get('/task', function () {
//     return view('page/mytask', [
//         "title" => "task"
//     ]);
// });

Route::get('/task', [TaskController::class, 'sourcetask']);


// Inbox --------------------------------------------------------------------

Route::get('/inboxs', [InboxController::class, 'index']);

Route::get('/inboxs/{inbox:slug}', [InboxController::class, 'show']);

Route::get('/outboxs', [InboxController::class, 'type']);

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