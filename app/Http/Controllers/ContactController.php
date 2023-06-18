<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        // Retrieve the form data
        $fullName = $request->input('full_name');
        $email = $request->input('email');
        $mobileNumber = $request->input('mobile_number');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Send the email
        $data = [
            'full_name' => $fullName,
            'email' => $email,
            'mobile_number' => $mobileNumber,
            'subject' => $subject,
            'message' => $message,
        ];

        Mail::send('emails.contact', $data, function ($message) {
            $message->to('contact.innotive@gmail.com', 'Innotive Contact')->subject('New Contact Message');
        });

        // Redirect back or show a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');

    }
}
