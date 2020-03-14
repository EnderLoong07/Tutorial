<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function show(){
        return view('payment');
        
    }
    
    public function store(){
        $email = request()->validate(['email'=> 'required|email']);
        
        /*
        Mail::raw('It works!', function($message){
            $message->to(request('email'))
                    ->subject('Hello There');
            
        });
        */

        Notification::send($email, new PaymentReceived());
       // Mail::to(request('email'))->send(new Contact());
        return redirect('/payment')->with('message','Payment Received!');
    }
}
