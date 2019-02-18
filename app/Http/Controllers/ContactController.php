<?php

namespace App\Http\Controllers;

use Session;
use App\Notifications\SendContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    // show contact form page (/pages/contact)
    public function showContact()
    {
        return view('/pages/contactus');
    }
    // send email to server containing users message (/pages/contact)
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required'
        ]);

        Notification::route('mail', 'testemail123123@gmail.com')
                        ->notify(new SendContactNotification($request));

        Session::flash('success', 'The email was sent successfully!');
        return redirect('/contact');


    }
}
