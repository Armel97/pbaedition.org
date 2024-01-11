<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends BaseController
{
    public function sendEmail(Request $request){
        $mailData = $request->all();
        $mailData = [
            'email' => $request->email,
            'maison' => 'info@pbaeditions.org',
            'name' => $request->name,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'body' => $request->message,
        ];
         
        Mail::to('info@pbaeditions.org')->send(new ContactMail($mailData));
        
        return  $this->sendResponse($mailData,'Message envoyé avec succès.');
    }
}
