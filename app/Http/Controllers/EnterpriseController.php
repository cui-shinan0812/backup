<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class EnterpriseController extends Controller
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

    public function view(Request $request)
    {
        if(Auth::check() && $this->isCurrentAuth($request->input('id'))) {
            $id = $request->input('id');
            $enterprise = DB::table('enterprises')->where('id',$id)->first();
            // category
            $category = \Config::get('constants.CATEGORY');
            $employees = \Config::get('constants.EMPLOYEES');
            $captital_scale = \Config::get('constants.CAPITAL_SCALE');
            $countries = \Config::get('constants.COUNTRIES');
            $cities = \Config::get('constants.CITIES');

            if (($key = array_search($enterprise->category, $category)) !== false) {
                unset($category[$key]);
            }

            if (($key = array_search($enterprise->city, $cities)) !== false) {
                unset($cities[$key]);
            }

            if (($key = array_search($enterprise->country, $countries)) !== false) {
                unset($countries[$key]);
            }

            if (($key = array_search($enterprise->employees, $employees)) !== false) {
                unset($employees[$key]);
            }

            $capital = explode(",",$enterprise->scale);


            if (($key = array_search($capital[1], $captital_scale)) !== false) {
                unset($captital_scale[$key]);
            }
            
            return view('enterprise.update',['enterprise' => $enterprise,
            'category' => $category,
            'employees' => $employees,
            'captital_count' => $capital[0],
            "captital_scale" => $captital_scale,
            'countries' => $countries,
            'cities' => $cities]);
        } else 
            return view('login');
        
    }

    public function create(Request $request)
    {
        if(Auth::check()) {

            $validator = \Validator::make($request->all(), [
                'icon_url' => 'max:3000',
            ],
            [
                'icon_url.max' => 'アップされているファイルが3000kbを超えている',
            ]);

            if($validator->passes()) {

                $name = $request->input('name');
                $location = $request->input('location');
                $city = $request->input('city');
                $country = $request->input('country');
                $zip_code = $request->input('zip_code');
                $tel = $request->input('tel');
                $phone = $request->input('phone');
                $ceo = $request->input('ceo');
                $ceo_phone = $request->input('ceo_phone');
                $category = $request->input('category');
                $comment = $request->input('comment');
                $employees = $request->input('employees');
                $scale = $request->input('scale');
                $unit = $request->input('unit');
                $video_url = $request->input('video_url');
                $icon_url = null;
                if($request->file('icon_url')) {
                    $iconUploadFile = 'icon_url' . "." .$request->icon_url->getClientOriginalExtension();
                    $icon_url = Storage::disk('public')->putFileAs(
                        "/images/users" . "/" . Auth::id() . "/enterprise" . "/" . $name,
                        $request->file('icon_url'),
                        $iconUploadFile
                    );
                }

                $enterprise = new \App\Enterprise();
                $enterprise->name = $name;
                $enterprise->user_id = Auth::id();
                $enterprise->location = $location;
                $enterprise->city = $city;
                $enterprise->country = $country;
                $enterprise->zip_code = $zip_code;
                $enterprise->tel = $tel;
                $enterprise->phone = $phone;
                $enterprise->ceo = $ceo;
                $enterprise->ceo_phone = $ceo_phone;
                $enterprise->category = $category;
                $enterprise->comment = $comment;
                $enterprise->employees = $employees;
                $enterprise->scale = $scale . "," .$unit;
                $enterprise->icon_url = $icon_url;
                $enterprise->video_url = $video_url;
                $enterprise->image_1_url = null;
                $enterprise->image_2_url = null;
                $enterprise->save();
    
                return redirect()->route('home');
            } else
                return response()->json([
                    "message" => $validator->messages()
                ],200); 
        } else 
            return view('login');
    }

    public function update(Request $request)
    {
        if(Auth::check() && $this->isCurrentAuth($request->input('id'))) {

            $validator = \Validator::make($request->all(), [
                'icon_url' => 'mimes:jpeg,png',
                'image_1_input' => 'mimes:jpeg,png',
                'image_2_input' => 'mimes:jpeg,png',
            ]);

            if($validator->passes()) {

                log::error($request);
                $name = $request->input('name');
                $location = $request->input('location');
                $city = $request->input('city');
                $country = $request->input('country');
                $zip_code = $request->input('zip_code');
                $tel = $request->input('tel');
                $phone = $request->input('phone');
                $ceo = $request->input('ceo');
                $ceo_phone = $request->input('ceo_phone');
                $category = $request->input('category');
                $comment = $request->input('comment');
                $employees = $request->input('employees');
                $scale = $request->input('scale') . "," . $request->input('unit');
                $video_url = $request->input('video_url');
                $icon_url = $image_1_url = $image_2_url = null;

                if($request->file('icon_url')) {
                    $iconUploadFile = 'icon_url' . "." .$request->icon_url->getClientOriginalExtension();
                    $icon_url = Storage::disk('public')->putFileAs(
                        "/images/users" . "/" . Auth::id() . "/enterprise" . "/" . $name,
                        $request->file('icon_url'),
                        $iconUploadFile
                    );
                }

                if( $request->file('image_1_input')) {
                    $iconUploadFile = 'image_1_url' . "." .$request->image_1_input->getClientOriginalExtension();
                    $image_1_url = Storage::disk('public')->putFileAs(
                        "/images/users" . "/" . Auth::id() . "/enterprise" . "/" . $name,
                        $request->file('image_1_input'),
                        $iconUploadFile
                    );
                    //$image_1_url = Storage::disk('s3')->putFileAs("/images/users" . "/" . Auth::id() . "/enterprise" . "/" . $name, $request->file('image_1_input'), 'image_1_url.' . $request->image_1_input->getClientOriginalExtension(), 'public');
                }

                if( $request->file('image_2_input')) {
                    $iconUploadFile = 'image_2_url' . "." .$request->image_2_input->getClientOriginalExtension();
                    $image_2_url = Storage::disk('public')->putFileAs(
                        "/images/users" . "/" . Auth::id() . "/enterprise" . "/" . $name,
                        $request->file('image_2_input'),
                        $iconUploadFile
                    );
                    //$image_2_url = Storage::disk('s3')->putFileAs("/images/users" . "/" . Auth::id() . "/enterprise" . "/" . $name, $request->file('image_2_input'), 'image_2_url.' . $request->image_2_input->getClientOriginalExtension(), 'public');
                }

                $record = DB::table('enterprises')->where('id',$request->input('id'))->first();
                
                DB::table('enterprises')->where('id',$request->input('id'))
                    ->update(['name' => $name,
                    'location' => $location,
                    'city' => $city, 
                    'country' => $country, 
                    'zip_code' => $zip_code,
                    'tel' => $tel,
                    'phone' => $phone,
                    'ceo' => $ceo, 
                    'ceo_phone' => $ceo_phone,
                    'category' => $category,
                    'comment' => $comment,
                    'employees' => $employees,
                    'scale' => $scale,
                    'video_url' => $video_url,
                    'icon_url' => is_null($icon_url) ? $record->icon_url : $icon_url,
                    'image_1_url' => is_null($image_1_url) ? $record->image_1_url : $image_1_url,
                    'image_2_url' => is_null($image_2_url) ? $record->image_2_url : $image_2_url]);
                
                return redirect()->route('home');
                }
            else {
                return response()->json([
                    "message" => $validator->messages()
                ],200);
            }
            
        } else
            return view('login');
    }

    public function getProducts(Request $request)
    {
        
        if(Auth::check() && $this->isCurrentAuth($request->input('enterprise_id'))) {
            $enterprise_id = $request->input('enterprise_id');
            $products = DB::table('products')->where('enterprise_id',$enterprise_id)->get();
            log::error($products);
            return view('enterprise.products',['products' => $products,'enterprise_id' => $enterprise_id]);
        } else 
            return view('login');
    }



    public function blank(Request $request)
    {
        return view('enterprise.create',['cities' => \Config::get('constants.CITIES'),'countries' => \Config::get('constants.COUNTRIES'),'category' => \Config::get('constants.CATEGORY')]);
    }

    private function isCurrentAuth($enterprise_id)
    {
        if(Auth::id() == DB::table('enterprises')->where('id',$enterprise_id)->first()->user_id)
            return true;
        else
            return false;
    }
    
}
