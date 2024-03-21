<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/create', [BookingsController::class, 'createBooking'])->name('routeTo:createBooking');

Route::post('/bookings', [BookingsController::class, 'pushToDB'])->name('routeTo:pushToDB');

Route::get('/listBookings', [BookingsController::class, 'index'])->name('routeTo:listBooking');

Route::delete('/bookings/{id}', [BookingsController::class, 'delete'])->name('bookings.delete');

Route::get('/bookings/{id}/edit', [BookingsController::class, 'edit'])->name('bookings.edit');

Route::put('/bookings/{id}', [BookingsController::class, 'update'])->name('bookings.update');




