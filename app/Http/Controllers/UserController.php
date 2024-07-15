<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }




    public function destroy(User $user,$id )
    {
        $user=User::find($id);

        $user->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Package deleted successfully.');
    }
}
