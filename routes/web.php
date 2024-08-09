<?php
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\RestaurantAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
<<<<<<< HEAD

    // Routes protected by the customer authentication middleware
    Route::middleware('auth:customer')->group(function() {
        Route::get('dashboard', [CustomerAuthController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update'); // Use PUT method for updating profile
=======
    Route::get('dashboard', [CustomerAuthController::class, 'dashboard'])->name('dashboard')->middleware('auth:customer');
    
    // Profile routes
    Route::middleware('auth:customer')->group(function() {
        Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update'); // Use PUT method
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
    });
});

// Restaurant authentication routes
Route::group(['prefix' => 'restaurant', 'as' => 'restaurant.'], function () {
    Route::get('login', [RestaurantAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [RestaurantAuthController::class, 'login']);
    Route::get('register', [RestaurantAuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RestaurantAuthController::class, 'register']);
    Route::post('logout', [RestaurantAuthController::class, 'logout'])->name('logout');

    // Routes protected by the restaurant authentication middleware
    Route::middleware('auth:restaurant')->group(function() {
        Route::get('dashboard', [RestaurantAuthController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update'); // Use PUT method for updating profile
    });
});
