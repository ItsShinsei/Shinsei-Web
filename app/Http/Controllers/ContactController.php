<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Send email or store data
    return back()->with('success', 'Message sent!');
}
    public function index() {
        return view('pages.contact');
    }
}
