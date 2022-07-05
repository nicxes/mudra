<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormMailable;
use Illuminate\Support\Facades\Mail;

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

        $to = $request->email;
        $email = new FormMailable($data);
        Mail::to($to)->send($email);

        return redirect('/')->with('success', $data['firstname']);
    }
}
