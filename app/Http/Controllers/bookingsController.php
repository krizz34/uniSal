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
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|numeric',
            'bookingDate' => 'required|date',
            'bookingSlot' => 'required|string',
        ]);

        // Create a new booking
        Booking::create($request->all());

        return redirect()->back()->with('success', 'Booking created successfully.');
    }
}
