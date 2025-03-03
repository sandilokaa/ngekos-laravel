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
Route::get('/find-result', [BoardingHouseController::class, 'findResults'])->name('find-boarding.results');
