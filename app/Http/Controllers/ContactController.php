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

    public function sendQuote(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::raw(
            "New Quote Request\n\n".
            "Name: {$request->name}\n".
            "Email: {$request->email}\n".
            "Service: {$request->service}\n\n".
            "Project Details:\n{$request->message}",
            function ($message) use ($request) {
                $message->to(env('CONTACT_EMAIL'))
                        ->replyTo($request->email, $request->name)
                        ->subject('New Quote Request');
            }
        );

        return response()->json([
            'status'  => 'success',
            'message' => 'Quote request sent successfully.'
        ]);
    }
}
