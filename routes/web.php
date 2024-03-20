<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;


Route::get('/', function () {
    return view('welcome');
});

// Route to display booking form
Route::get('/bookings/create', [BookingsController::class, 'create'])->name('bookings.create');

// Route to store booking
Route::post('/bookings', [BookingsController::class, 'store'])->name('bookings.store');
