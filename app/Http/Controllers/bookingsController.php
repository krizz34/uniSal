<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingsController extends Controller
{
    public function index()
    {
        // Fetch all bookings
        $bookings = Booking::all();
        return view('listBooking', compact('bookings'));
    }

    public function createBooking()
    {
        return view('createBooking');
    }

    public function pushToDB(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string',
        'mobile' => 'required|numeric|min:1000000000|max:9999999999',
        'bookingDate' => 'required|date',
        'bookingSlot' => 'required|string',
    ]);

    // Check if a booking already exists for the given bookingDate and bookingSlot
    $existingBooking = Booking::where('bookingDate', $request->bookingDate)
                                ->where('bookingSlot', $request->bookingSlot)
                                ->exists();

    if ($existingBooking) {
        return redirect()->back()->with('exist', 'Sorry! The slot is not available.');
    }

    // Create a new booking
    Booking::create($request->all());

    return redirect()->back()->with('success', 'Booking created successfully.');
}


    public function delete($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('updateBooking', compact('booking'));
    }

    public function update($id, Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|numeric|min:1000000000|max:9999999999',
            'bookingDate' => 'required|date',
            'bookingSlot' => 'required|string',
        ]);

        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        // Check if a booking already exists for the given bookingDate and bookingSlot
        $existingBooking = Booking::where('bookingDate', $request->bookingDate)
                                    ->where('bookingSlot', $request->bookingSlot)
                                    ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('exist', 'Sorry! The slot is not available.');
        }

        // Update the booking
        $booking->update($request->all());

        return redirect()->route('thenga')->with('success', 'Booking updated successfully.');
    }


}
