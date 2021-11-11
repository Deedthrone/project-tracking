<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\TaskController;
use App\Models\Type;

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
    return view('page/login'    , [
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


/*
|--------------------------------------------------------------------------
| Inbox 
|--------------------------------------------------------------------------
|
| All inbox function route
|
*/
Route::get('/inboxs', [InboxController::class, 'index']);

Route::get('/inboxs/{inbox:slug}', [InboxController::class, 'show']);

Route::get('/outboxs/{type:name}', [InboxController::class, 'outbox']);

// Route::get('/outboxs/{type:name}', function(Type $type){
//     return view('/page/outboxs', [
//         'title' => $type->name,
//         'inboxs' => $type->inboxs,  
//         'type' => $type->type
//     ]);
// });     

Route::get('{inbox:slug}', [InboxController::class, 'test']);

Route::get('/inbox', [InboxController::class, 'else']);

Route::get('/inbox', [InboxController::class, 'subindex']);

Route::get('/{inbox:slug}', [InboxController::class, 'test']);

// Route::get('/inboxs/{outbox:type}', [InboxController::class, 'outbox']);

// Route::get('/inboxs/{outbox:type}', function(Inboxs $type){
//     return view('category', [
//         'name' => $type->name,
//         'category' => $type->name
//     ]);
// });

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