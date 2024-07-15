<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Locations::all();
        return view('locations', compact('locations'));
    }

    public function home()
    {
        $locations = Locations::all();
        return view('locationshome', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'loc_name' => 'required|string|max:255',
            'loc_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('loc_photo')->store('public');

        $location = new Locations;
        $location->loc_name = $request->loc_name;
        $location->loc_photo = Storage::url($path);
        $location ->provience = $request->provience;
        $location->save();

        return redirect()->back()->with('success', 'Location created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Locations $locations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Locations $locations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Locations $locations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Locations $locations, $id)
    {
        //


        $locations=Locations::find($id);

        $locations->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Package deleted successfully.');
    }
}
