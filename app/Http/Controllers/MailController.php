<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;



class MailController extends Controller
{
    //
    public function sendEmailTo(Request $request)
    {
        $object = [];
        $object['name'] = $request->input('name');
        $object['tel'] = $request->input('tel');
        $object['content'] = $request->input('content');
        $object['email'] = $request->input('email');

        Mail::to(env('STAFF_EMAIL','japan-oem@outlook.jp'))->send(new SendMailable($object)); //env('STAFF_EMAIL','japan-oem@outlook.com')
   
        return 'Email was sent';
    }
}
