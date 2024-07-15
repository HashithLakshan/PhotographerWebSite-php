<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Packages::all();
        return view('packages', compact('packages'));
    }

    public function home()
    {
        $packages = Packages::all();
        return view('packageshome', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pkg_name' => 'required',
            'pkg_price' => 'required',
            'pkg_line1' => 'required',
            'pkg_line2' => 'nullable',
            'pkg_line3' => 'nullable',
            'pkg_line4' => 'nullable',
            'pkg_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $request->file('pkg_photo')->store('photos', 'public');

        Packages::create([
            'pkg_name' => $request->pkg_name,
            'pkg_price' => $request->pkg_price,
            'pkg_line1' => $request->pkg_line1,
            'pkg_line2' => $request->pkg_line2,
            'pkg_line3' => $request->pkg_line3,
            'pkg_line4' => $request->pkg_line4,
            'pkg_photo' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Packages $packages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packages $packages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packages $packages)
    {
        //


        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packages $packages,$id )
    {
        $packages=Packages::find($id);

        $packages->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Package deleted successfully.');
    }
}
