<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownContactFormEail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function show_c_page()
    {
        return view('guest.contacts.form');
    }

    public function sendStoreContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'content' => 'required'
        ]);
        $contact = Contact::create($validated);
        Mail::to('admin@example.com')->send(new MarkdownContactFormEail($contact));
        return redirect()->back()->with('message', 'mail inviata con successo');
    }
}