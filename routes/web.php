<?php

use App\Http\Controllers\BoardingHouseController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/check-booking', [BookingController::class, 'check'])->name('check-booking');

Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/cities/{slug}', [CityController::class, 'show'])->name('city.show');

Route::get('/find-boarding', [BoardingHouseController::class, 'find'])->name('find-boarding');
Route::get('/find-boarding/{slug}', [BoardingHouseController::class, 'show'])->name('find-boarding.show');
Route::get('/find-boarding/{slug}/rooms', [BoardingHouseController::class, 'rooms'])->name('find-boarding.rooms');
Route::get('/find-result', [BoardingHouseController::class, 'findResults'])->name('find-boarding.results');

Route::get('/find-boarding/booking/{slug}', [BookingController::class, 'booking'])->name('booking');
Route::get('/find-boarding/booking/{slug}/information', [BookingController::class, 'information'])->name('booking.information');
Route::post('/find-boarding/booking/{slug}/information/save', [BookingController::class, 'saveInformation'])->name('booking.information.save');