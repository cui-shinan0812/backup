<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()) {

            $record = DB::table('profiles')->where('email', Auth::user()->email)->first();
            $enterprises = DB::table('enterprises')->where('user_id',Auth::id())->get();
            
            if(!$record) {
                $profile = new \App\Profile();
                $profile->email = Auth::user()->email;
                $profile->name = Auth::user()->name;
                $profile->user_id = Auth::id();
                $profile->vip_type = 'free';
                $profile->permission = 'normal';
                $profile->save();
                
                return view('home',['profile' => $profile,
                'enterprises' => $enterprises]);
            } else {
                $inquries = [];
                if($record->permission == 'admin')
                {
                    $inqs = DB::table('inquires')->get();
                    foreach($inqs as $inq)
                    {
                        $arr = [];
                        $profile = DB::table('profiles')->where('user_id',$inq->user_id)->first();
                        $arr['user'] = $profile;
                        $arr['inquiry'] = $inq;
                        array_push($inquries,$arr);
                    }
                }
                
                return view('home',['profile' => $record,
                'enterprises' => $enterprises,
                'inquries' => $inquries]);
            }
            
        } else
            return view('login');           
    }

    public function profileUpdate(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $location = $request->input('location');
        $city = $request->input('city');
        $country = $request->input('country');
        $zip_code = $request->input('zip_code');
        $tel = $request->input('tel');
        $wechat_account = $request->input('wechat_account');

        DB::table('profiles')->where('email',$email)
            ->update(['name' => $name, 'location' => $location, 'city' => $city, 'country' => $country, 'zip_code' => $zip_code, 'tel' => $tel, 'wechat_account' => $wechat_account]);

        return redirect()->route('home');
        //return view('home',['profile' => DB::table('profiles')->where('email',$email)->first()]);
    }



}
