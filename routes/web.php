<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LocationsController;

use App\Http\Controllers\PackagesController;

use App\Http\Controllers\ChangeAboutController;

use App\Http\Controllers\PaymentsController;

use App\Http\Controllers\BookingNewController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('homepage');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home',[HomeController::class,'index']);

//locations
Route::resource('locations', LocationsController::class);
Route::get('/locationshome', [LocationsController::class, 'home'])->name('locations.home');
Route::get('/locations', [LocationsController::class, 'index'])->name('locations.index');
Route::post('/locations', [LocationsController::class, 'store'])->name('locations.store');
Route::delete('/locations_delete/{id}', [LocationsController::class, 'destroy'])->name('locations_delete');

//packages
Route::resource('packages', PackagesController::class);
Route::get('/packageshome', [PackagesController::class, 'home'])->name('packages.home');
Route::get('/packages', [PackagesController::class, 'index'])->name('packages.index');
Route::post('/packages', [PackagesController::class, 'store'])->name('packages.store');
Route::delete('/packages/{id}', [PackagesController::class, 'destroy'])->name('packages.destroy');

//booking
Route::get('/bookings', [BookingNewController::class, 'index'])->name('booking');
Route::get('/bookinghome', [BookingNewController::class, 'home'])->name('booking.home');
Route::get('/bookings', [BookingNewController::class, 'index'])->name('booking.index');
Route::post('/bookinghome', [BookingNewController::class, 'store'])->name('booking.store');
Route::post('/bookings/{id}/update', [BookingNewController::class, 'update'])->name('booking.update');
Route::get('/mybookings', [BookingNewController::class, 'mybookings'])->name('booking.mybookings');

Route::get('/about',[ChangeAboutController::class,'index'])->name('about');

Route::get('/payment',[PaymentsController::class,'index'])->name('payment');

Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::delete('/users_delete/{id}', [UserController::class, 'destroy'])->name('users_delete');


Route::get('/images', [BookingController::class, 'index'])->name('images.index');

Route::get('/about', [BookingController::class, 'home'])->name('about.home');