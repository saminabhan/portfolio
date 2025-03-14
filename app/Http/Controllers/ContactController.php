<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('sami.nabhan20@gmail.com')->send(new HelloMail($validated));

        // Return a JSON response
        return response()->json(['message' => 'Email sent successfully!']);
    }
}
