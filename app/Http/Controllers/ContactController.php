<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactMessage::create($request->all());

        return redirect('/contact')->with('success', 'Bericht verzonden!');
    }

    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view('admin.messages', compact('messages'));
    }
}