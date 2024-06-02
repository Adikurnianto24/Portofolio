<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $details = [
            'name' => $request->input('form-name'),
            'email' => $request->input('form-email'),
            'subject' => $request->input('form-subject'),
            'message' => $request->input('form-message'),
        ];

        Mail::to('your_gmail_username@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}