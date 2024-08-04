<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\RestaurantAuthController;
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

// Home route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Customer authentication routes
Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::get('login', [CustomerAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [CustomerAuthController::class, 'login']);
    Route::get('register', [CustomerAuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [CustomerAuthController::class, 'register']);
    Route::post('logout', [CustomerAuthController::class, 'logout'])->name('logout');
});

// Restaurant authentication routes
Route::group(['prefix' => 'restaurant', 'as' => 'restaurant.'], function () {
    Route::get('login', [RestaurantAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [RestaurantAuthController::class, 'login']);
    Route::get('register', [RestaurantAuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RestaurantAuthController::class, 'register']);
    Route::post('logout', [RestaurantAuthController::class, 'logout'])->name('logout');
});
