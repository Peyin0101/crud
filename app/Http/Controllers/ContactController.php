<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function handle(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'message' => 'required|min:20',
            'cookie_policy' => 'accepted',
        ]);

        Mail::to('admin@website.be')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', true);
    }
}
