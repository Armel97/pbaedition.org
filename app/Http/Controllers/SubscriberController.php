<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Notifications\NewSubscriberNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SubscriberController extends BaseController
{
    public function subscribe(Request $request){
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = Subscriber::create([
            'email'=>$request->email,
            'status'=>'Actif',
        ]);
     
        Notification::route('mail', $request->email)->notify(new NewSubscriberNotification($request->email));


        return  $this->sendResponse([],'Abonnement effectué avec succès.');

    }
}
