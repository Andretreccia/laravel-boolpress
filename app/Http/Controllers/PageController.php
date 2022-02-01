<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    //
    public function contacts()
    {
        return view('guest.contacts.form');
    }
    public function sendContact(Request $request)
    {
        //ddd($request->all());
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'content' => 'required'
        ]);
        Mail::to('admin@example.com')->send(new ContactFormMail($validated));
        //return (new ContactFormMail($validated))->render();
        return redirect()->back()->with('message', 'mail inviata con successo');
    }
}