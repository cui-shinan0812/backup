<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmailForNewsController extends Controller
{
    //
    public function registerEmail(Request $request)
    {
        if(!DB::table('email_for_news')->where('email',$request->input('email'))->first())
        {
            $product = new \App\EmailForNews();
            $product->email = $request->input('email');
            $product->save();
        }

        return \App::make('redirect')->back()->with('flash_success', 'Thank you,!');
        
    }
}
