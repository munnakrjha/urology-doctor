<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate incoming data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'nullable|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Add your logic here (e.g., save to DB or send email)

        // 3. Redirect back with a success message
        return back()->with('success', 'Thank you for reaching out! We will contact you soon.');
    }
}