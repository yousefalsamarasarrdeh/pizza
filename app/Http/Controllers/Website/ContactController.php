<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('website.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tell_us' => 'required|string',
            'order_details' => 'required|string',
            'date' => 'required|date',
            'store' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'tell_us' => $request->tell_us,
            'order_details' => $request->order_details,
            'date' => $request->date,
            'store' => $request->store,
            'comment' => $request->comment,
        ]);

        return redirect()->route('contacts.create')->with('success', 'Contact saved successfully.');
    }
}
