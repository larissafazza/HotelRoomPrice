<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HotelsController::class, 'index'])->name('landingpage');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');
    
Route::resource('hotels', HotelsController::class)
    ->middleware('auth');

Route::get('hotels/{hotel}', [HotelsController::class, 'show'])
    ->name('hotels.show')
    ->withoutMiddleware('auth');

Route::resource('rooms', RoomsController::class)
        ->middleware('auth');
    
Route::get('rooms/{room}', [RoomsController::class, 'show'])
    ->name('rooms.show')
    ->withoutMiddleware('auth');
    
Route::get('rooms/create/{hotel}', [RoomsController::class, 'create'])
    ->name('rooms.create');
    
Route::resource('prices', PricesController::class)
    ->middleware('auth');

Route::get('prices', [PricesController::class, 'index'])
    ->name('prices.index')
    ->withoutMiddleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
