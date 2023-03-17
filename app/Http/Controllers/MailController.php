<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Contact;

class MailController extends Controller
{
    //
    
    public function contactSendMail(Request $request)
    {
        $to = collect([['name' => '客服信箱','email'=>'peter777200067@gmail.com']]);
        //dd($request->name);
        $params = ['name' => $request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'message'=>$request->message,
        ];
        Mail::to($to)->send(new Contact($params));
        flash('已寄出訊息')->success()->important();
        return redirect('/contact');
    }
}
