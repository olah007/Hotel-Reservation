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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function() {return "Goodbye!"; });

Route::get('/rooms/{roomType?}', 'App\Http\Controllers\ShowRoomsController');

Route::resource('bookings', 'App\Http\Controllers\BookingController');

// Route::get('/bookings', [App\Http\Controllers\BookingController::class, 'index']);
// Route::get('/bookings/create', [App\Http\Controllers\BookingController::class, 'create']);
// Route::post('/bookings', [App\Http\Controllers\BookingController::class, 'store']);
// Route::get('/bookings/{booking}', [App\Http\Controllers\BookingController::class, 'show']);
// Route::get('/bookings/{booking}/edit', [App\Http\Controllers\BookingController::class, 'edit']);
// Route::put('/bookings/{booking}', [App\Http\Controllers\BookingController::class, 'update']);
// Route::delete('/bookings/{booking}', [App\Http\Controllers\BookingController::class, 'destroy']);

