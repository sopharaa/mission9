<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return response()->json($contacts, 200);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        return response()->json([
            'message' => 'Contact successfully created',
            'contact' => $contact
        ], 201);
    }
}
