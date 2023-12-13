<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Create a new contact record
        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // You can add any additional logic here, such as sending emails, notifications, etc.

        
        return redirect()->route('contact.index')->with('success', 'Your message has been sent. Thank you!');
    }

    public function index()
    {
        // You can add logic to fetch and pass data to the view if needed
        return view('index');
    }
   
}
