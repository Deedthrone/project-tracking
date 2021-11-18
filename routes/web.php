<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeuserController;
use App\Models\Type;

// Laravel Welcome
Route::get('/laravel', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Route User
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login --------------------------------------------------------------------
Route::get('/', function () {
    return view('page/login'    , [
        "title" => "login"
    ]);
});

/*
|--------------------------------------------------------------------------
| Route Homeuser - User
|--------------------------------------------------------------------------
*/

Route::get('/home', [HomeuserController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Route Task - User
|--------------------------------------------------------------------------
*/

// MyTask --------------------------------------------------------------------
// Route::get('/task', function () {
//     return view('page/mytask', [
//         "title" => "task"
//     ]);
// });

Route::get('/task', [TaskController::class, 'sourcetask']);


/*
|--------------------------------------------------------------------------
| Route Inbox - User
|--------------------------------------------------------------------------
*/
Route::get('/inboxs', [InboxController::class, 'index']);

Route::get('/inboxs/{inbox:slug}', [InboxController::class, 'show']);

Route::get('/outboxs/{type:name}', [InboxController::class, 'outbox']);

Route::get('{inbox:slug}', [InboxController::class, 'test']);

Route::get('/inbox', [InboxController::class, 'else']);

Route::get('/inbox', [InboxController::class, 'subindex']);

Route::get('/{inbox:slug}', [InboxController::class, 'test']);

/*
|--------------------------------------------------------------------------
| Route Chart - User
|--------------------------------------------------------------------------
*/
Route::get('/chart', function () {
    return view('page/chart', [
        "title" => "chart"
    ]);
});


/*
|--------------------------------------------------------------------------
| Route Goal - User
|--------------------------------------------------------------------------
*/

Route::get('/goal', function () {
    return view('page/goal', [
        "title" => "goal"
    ]);
});


/*
|--------------------------------------------------------------------------
| Route Master
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/mainpage', function () {
    return view('page/master/homemaster');
});

/*
|--------------------------------------------------------------------------
| Route Inbox - Master
|--------------------------------------------------------------------------
*/

Route::get('/maininbox', function () {
    return view('page/master/masterinbox');
});

/*
|--------------------------------------------------------------------------
| Route Review - Master
|--------------------------------------------------------------------------
*/


Route::get('/review', function () {
    return view('page/master/reviewmaster');
});

/*
|--------------------------------------------------------------------------
| Route Task - Master
|--------------------------------------------------------------------------
*/


Route::get('/taskmaster', function () {
    return view('taskmaster');
});

/*
|--------------------------------------------------------------------------
| Route User Management - Master
|--------------------------------------------------------------------------
*/


Route::get('/usermanagement', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Route 
|--------------------------------------------------------------------------
*/


Route::get('/goalmaster', function () {
    return view('welcome');
});
