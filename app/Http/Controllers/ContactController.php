<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

    }
    public function store(Request $request){
        $contact = $request->all();
        Contact::create($contact);
        return redirect()->route('front.index');
    }

}
