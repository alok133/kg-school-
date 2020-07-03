<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use App\Student;

class MailSend extends Controller
{
    public function mailsend($student)
    {
        $details = [
            'title' => 'Thank You!! Your Form Is Successfully Submitted',
            'body' => 'Body: This is for testing email using smtp'
        ];


        \Mail::to('')->send(new SendMail($details));
        return view('emails.thanks');
    }
}