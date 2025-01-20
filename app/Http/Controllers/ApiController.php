<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Vote;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function userlist()
    {
        $users = User::all();
        return response()->json([
            'users' => $users
        ]);
    }
public function user_login(Request $request){
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {

        return response()->json([
            'message' => 'Login successful',
            'user' => Auth::user()
        ], 200);
    }

    return response()->json([
        'message' => 'email do not match our records'
    ], 401);
}
    public function deleteuser(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return response() -> json([
            'message' => 'delete successfully '.$id
        ]);
    }
    public function updateuser(Request $request, string $id)
    {
        $data = $request->all();
        User::findOrFail($id)->update($data);

        return response()-> json([
            'message'=> 'update successfully'
        ]);
    }
public function contactstore(Request $request){
    $contact = $request->all();
    Contact::create($contact);
    return response()->json([
        'contact'=>$contact
    ]);
}
public function contactlist()
    {
        $contacts = Contact::all();
        return response()->json([
            'contacts' => $contacts
        ]);
    }
 public function vote_list()
    {
        $votes = Vote::all();
        return response()->json([
            'votes' => $votes
        ]);
    }
public function vote(Request $request)
{
    // Validate the incoming request data

    // Check if the user has already voted
    $existingVote = Vote::where('user_id', $request->user_id)->first();
    if ($existingVote) {
        return response()->json(['message' => 'You have already voted.'], 403);
    }

    // Create a new vote
    $vote = Vote::create([
        'user_id' => $request->user_id,
        'candidate_id' => $request->candidate_id,
    ]);

    // Redirect to the vote page with a success message
    return response()->json([
        'message' => 'Vote recorded successfully.',
        'vote' => $vote
    ], 200);
}






}
