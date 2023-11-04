<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\RoomsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/', [HotelsController::class, 'index'])
    ->name('landingpage');

Auth::routes();

// Route::get('/', 'HotelsController@index');

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::resource('hotels', HotelsController::class)
//     ->middleware('auth');

// Route::put('todos/{id}/mark-as-done', [TodoController::class, 'markAsDone'])
//     ->name('todos.markAsDone')
//     ->middleware('auth');

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])
//     ->name('home')
//     ->middleware('auth');