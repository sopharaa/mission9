<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CanProfileController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view your profile.');
        }
        $user = Auth::user();
        return view('candidate.page.profile', compact('user'));
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->where('role', 'candidate')->firstOrFail();
        return view('candidate.page.editprofile', compact('user'));
    }
    public function update(Request $request, $id){
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Retrieve the user
        $user = User::findOrFail($id);

        // Get all the request data
        $data = $request->all();

        // Check if an image has been uploaded
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Debugging: Check if the file was uploaded
            if ($image->isValid()) {
                // Store the image in the public/profiles directory
                $path = $image->storeAs('public/profiles', $filename);

                // Debugging: Check if the file was stored correctly
                if ($path) {
                    $data['profile'] = $filename;
                } else {
                    return redirect()->back()->with('error', 'Failed to store the image.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid image file.');
            }
        }

        // Update the user with the new data
        $updated = $user->update($data);

        // Debugging: Check if the user was updated
        if ($updated) {
            return redirect()->route('can.profile')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update the profile.');
        }
    }


}
