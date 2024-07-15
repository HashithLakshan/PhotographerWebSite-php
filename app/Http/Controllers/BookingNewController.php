<?php

namespace App\Http\Controllers;

use App\Models\BookingNew;
use App\Models\Locations;
use App\Models\Packages;

use Illuminate\Http\Request;

class BookingNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = BookingNew::with('location', 'package')->get();
        return view('bookings',compact('bookings'));
    }

    public function home()
    {
        $locations = Locations::all(); // Example: Retrieve locations from the database
        $packages = Packages::all(); // Example: Retrieve packages from the database
        return view('bookinghome',compact('locations', 'packages'));
    }

    public function mybookings()
    {
        $bookings = BookingNew::with('location', 'package')->get();
        return view('mybooks',compact('bookings'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|exists:locations,id',
            'package' => 'required|exists:packages,id',
            'date' => 'required|date',
            
            
        ]);

        $booking = new BookingNew();
        $booking->name = $validated['name'];
        $booking->location_id = $validated['location'];
        $booking->package_id = $validated['package'];
        $booking->date = $validated['date'];
        $booking->save();

        return redirect()->back()->with('success', 'Booking created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingNew $bookingNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookingNew $bookingNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookingNew $bookingNew, $id)
    {
        $bookingNew = BookingNew::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);
    
        $bookingNew->update([
            'status' => $request->status,
        ]);
    
        return redirect()->back()->with('success', 'Settle successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingNew $bookingNew)
    {
        //
    }
}
