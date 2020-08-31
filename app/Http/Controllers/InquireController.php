<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class InquireController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function sendInquiry(Request $request)
    {
        
        if(Auth::check()){

           
            $arr = explode(",",$request->input('query'));
            $data = null;
            switch($arr[1]) {
                case 'enterprise':
                    $data = DB::table('enterprises')->where('id',$arr[0])->first();
                    break;
                case 'product':
                    $data = DB::table('products')->where('id',$arr[0])->first();
                    break;
                default:
                    return \App::make('redirect')->back()->with('alert', '問い合わせタイプが不明です');
            }

            DB::beginTransaction();
            try {
                $inquire = new \App\Inquire();
                $inquire->user_id = Auth::id();
                $inquire->title = $request->input('title');
                $inquire->category = $request->input('category');
                $inquire->contents = $request->input('contents');
                $inquire->inquire_id = $arr[0];
                $inquire->type = $arr[1];
                $inquire->save();
            } catch (Exception $e) {
                DB::rollback();
                return response()->json([
                    "message" => $e->getMessage()
                ],201);
            }
            DB::commit();
            return \App::make('redirect')->back()->with('alert', '問い合わせを相談されました、しばらく返却おまちください。');
        } else {
            return \App::make('redirect')->back()->with('alert', '認証されてなかったのため、ログインして再度やってみてください');
        }
    }
    
}
