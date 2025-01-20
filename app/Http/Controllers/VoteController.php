<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        // Check if the user has already voted
        $existingVote = Vote::where('user_id', auth()->user()->id)->first();

        if ($existingVote) {
            // Redirect back with an error message
            return redirect()->route('front.vote')->with('error', 'You have already voted.');
        }
        // Create a new vote
        $vote = Vote::create([
            'user_id' => auth()->user()->id,
            'candidate_id' => $request->candidate_id,
        ]);

        // Redirect to the vote page with a success message
        return redirect()->route('front.vote')->with('success', 'Your vote has been recorded.');
    }
}
