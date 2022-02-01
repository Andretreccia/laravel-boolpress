<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\MarkdownContactFormEail;
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
        //return (new MarkdownContactFormEail($validated))->render();
        //Mail::to('admin@example.com')->send(new ContactFormMail($validated));
        Mail::to('admin@example.com')->send(new MarkdownContactFormEail($validated));
        //return (new ContactFormMail($validated))->render();
        return redirect()->back()->with('message', 'mail inviata con successo');
    }
}