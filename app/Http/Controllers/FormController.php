<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class FormController extends Controller
{
    public function send(Request $request) {
        $request->validate ([
            'fullname' => 'required',
            'dni' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
        ]);

        $data = [
            'firstname' => strtok($request->fullname, " "),
            'fullname' => $request->fullname,
            'dni' => $request->dni,
            'email' => $request->email,
            'tel' => $request->tel,
            'message' => $request->message,
        ];

        $contact = Contact::where('dni', $request->dni)->first();

        if (!$contact) {
            Contact::create($data);
        }

        $email = new FormMailable($data);
        Mail::to($request->email)->send($email);

        return redirect('/')->with('success', $data['firstname']);
    }
}
