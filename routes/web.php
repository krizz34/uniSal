<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route to display booking form
Route::get('/create', [BookingsController::class, 'createBooking'])->name('bookings.createBooking');

// Route to store booking
Route::post('/bookings', [BookingsController::class, 'pushToDB'])->name('bookings.pushToDB');

Route::get('/listBookings', [BookingsController::class, 'index'])->name('thenga');

// Route to delete booking
Route::delete('/bookings/{id}', [BookingsController::class, 'delete'])->name('bookings.delete');

// Route to edit booking
Route::get('/bookings/{id}/edit', [BookingsController::class, 'edit'])->name('bookings.edit');

// Route to update booking
Route::put('/bookings/{id}', [BookingsController::class, 'update'])->name('bookings.update');




