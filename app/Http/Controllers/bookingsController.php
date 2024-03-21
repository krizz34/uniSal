<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('listBooking', compact('bookings'));
    }

    public function createBooking()
    {
        return view('createBooking');
    }

    public function pushToDB(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'mobile' => 'required|numeric|min:1000000000|max:9999999999',
        'bookingDate' => 'required|date',
        'bookingSlot' => 'required|string',
    ]);

    $existingBooking = Booking::where('bookingDate', $request->bookingDate)
                                ->where('bookingSlot', $request->bookingSlot)
                                ->exists();

    if ($existingBooking) {
        return redirect()->back()->with('exist', 'Sorry! The slot is not available.');
    }

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
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|numeric|min:1000000000|max:9999999999',
            'bookingDate' => 'required|date',
            'bookingSlot' => 'required|string',
        ]);

        $booking = Booking::findOrFail($id);

        $existingBooking = Booking::where('bookingDate', $request->bookingDate)
                                    ->where('bookingSlot', $request->bookingSlot)
                                    ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('exist', 'Sorry! The slot is not available.');
        }

        $booking->update($request->all());

        return redirect()->route('routeTo:listBooking')->with('success', 'Booking updated successfully.');
    }


}
