<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function handle(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'message' => 'required|min:20',
            'cookie_policy' => 'accepted',
        ]);

        return redirect()->back()->with('success', true);
    }
}