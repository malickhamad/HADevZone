<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Send Email
        Mail::raw(
            "Name: {$request->name}\n".
            "Email: {$request->email}\n".
            "Subject: {$request->subject}\n\n".
            "Message:\n{$request->message}",
            function ($message) {
                $message->to(env('CONTACT_EMAIL'))
                        ->subject('New Contact Form Submission');
            }
        );

        return response()->json([
            'status' => 'success',
            'message' => 'Email sent successfully. We will get back to you shortly.'
        ]);
    }
}
