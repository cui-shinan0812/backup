<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
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
    
    public function blank(Request $request)
    {
        if(Auth::check() && $this->isCurrentAuthByEnterprise($request->input('enterprise_id'))) {
            
            return view('product.create',['enterprise_id' => $request->input('enterprise_id'),
            'category' =>  \Config::get('constants.CATEGORY'),
            'price_unit' => \Config::get('constants.PRODUCT_PRICE_UNIT'),
            'order_interval' => \Config::get('constants.ORDER_INTERVAL')]);
        } else
            return view('login');
    }

    public function view(Request $request)
    {
        if(Auth::check() && $this->isCurrentAuthByProduct($request->input('product_id'))) {
            $product = DB::table('products')->where('id',$request->input('product_id'))->first();
            $categories = \Config::get('constants.CATEGORY');
            
            $price_unit = \Config::get('constants.PRODUCT_PRICE_UNIT');
            $order_interval = \Config::get('constants.ORDER_INTERVAL');

            if (($key = array_search($product->category, $categories)) !== false) {
                unset($categories[$key]);
            }

            if(!is_null($product->price))
                if (($key = array_search(explode(",",$product->price)[1], $price_unit)) !== false) {
                    unset($price_unit[$key]);
                }
            if(!is_null($product->minimum_build_days))   
                if (($key = array_search(explode(",",$product->minimum_build_days)[1], $order_interval)) !== false) {
                    unset($order_interval[$key]);
                }

            return view('product.update',['product' => $product,
            'categories' => $categories,
            'enterprise_id' => $product->enterprise_id,
            'price_unit' => $price_unit,
            'order_interval' => $order_interval,
            'inquire_categories' => \Config::get('constants.INQUIRE_CATEGORIES')]);
        } else
            return view('login');
    }

    public function create(Request $request)
    {
        if(Auth::check()) {

            $name = $request->input('name');
            $enterprise_id = $request->input('enterprise_id');
            $category = $request->input('category');
            $comment = $request->input('comment');
            $price = $request->input('price');
            $price_unit = $request->input('price_unit');
            $build_at = $request->input('build_at');
            $minimum_order_quantity = $request->input('minimum_order_quantity');
            $minimum_build_days = $request->input('minimum_build_days');
            $order_interval = $request->input('order_interval');
            $three_d_url = $request->input('three_d_url');
            $video_url = $request->input('video_url');
            $other = $request->input('other');
            $icon_url = null;

            if($request->file('icon_url')) {
                $iconUploadFile = 'icon_url' . "." .$request->icon_url->getClientOriginalExtension();

                $icon_url = Storage::disk('public')->putFileAs(
                    "/images/users" . "/" . Auth::id() . "/" . $enterprise_id . "/products" . "/" . $name,
                    $request->file('icon_url'),
                    $iconUploadFile
                );
            }


            $image_array = array();

            for($i = 1;$i < 12;$i++)
            {
                $str = "image_" . $i . "_url";
                if($request->file($str)){
                    $iconUploadFile = $str . ".png";

                    $url = Storage::disk('public')->putFileAs(
                        "/images/users" . "/" . Auth::id() . "/" . $enterprise_id . "/products" . "/" . $name,
                        $request->file($str),
                        $iconUploadFile
                    );
                    $image_array[$i] = $url;
                } else 
                    $image_array[$i] = null;
            }

            $product = new \App\Product();
            $product->enterprise_id = $enterprise_id;
            $product->name = $name;
            $product->category = $category;
            $product->comment = $comment;
            
            if(is_null($price))
                $product->price = null;
            else
                $product->price = $price . "," . $price_unit;

            $product->build_at = $build_at;
            $product->minimum_order_quantity = $minimum_order_quantity;

            if(is_null($minimum_build_days))
                $product->minimum_build_days = null;
            else
                $product->minimum_build_days = $minimum_build_days . "," . $order_interval;

            $product->three_d_url = $three_d_url;
            $product->video_url = $video_url;
            $product->other = $other;
            $product->icon_url = $icon_url;
            
            $product->image_1_url = $image_array[1];
            $product->image_2_url = $image_array[2];
            $product->image_3_url = $image_array[3];
            $product->image_4_url = $image_array[4];
            $product->image_5_url = $image_array[5];
            $product->image_6_url = $image_array[6];
            $product->image_7_url = $image_array[7];
            $product->image_8_url = $image_array[8];
            $product->image_9_url = $image_array[9];
            $product->image_10_url = $image_array[10];
            $product->image_11_url = $image_array[11];
            $product->save();

            $products = DB::table('products')->where('enterprise_id',$enterprise_id)->get();

            return redirect()->route('enterprise.products',['enterprise_id' => $enterprise_id,
            'products' => $products]);
        } else
            return view('login');
    }

    public function update(Request $request)
    {
        $name = $request->input('name');
        $enterprise_id = $request->input('enterprise_id');
        $product_id = $request->input('product_id');
        $category = $request->input('category');
        $comment = $request->input('comment');
        $price = $request->input('price');
        $build_at = $request->input('build_at');
        $minimum_order_quantity = $request->input('minimum_order_quantity');
        $minimum_build_days = $request->input('minimum_build_days');
        $three_d_url = $request->input('three_d_url');
        $video_url = $request->input('video_url');
        $other = $request->input('other');
        $icon_url = null;

        if($request->file('icon_url')) {
            $iconUploadFile = 'icon_url' . "." .$request->icon_url->getClientOriginalExtension();

            $icon_url = Storage::disk('public')->putFileAs(
                "/images/users" . "/" . Auth::id() . "/" . $enterprise_id . "/products" . "/" . $name,
                $request->file('icon_url'),
                $iconUploadFile
            );
        }

        $image_array = array();

        for($i = 1;$i < 12;$i++)
        {
            $str = "image_" . $i . "_url";
            if($request->file($str)){
                $iconUploadFile = $str . ".png";

                $url = Storage::disk('public')->putFileAs(
                    "/images/users" . "/" . Auth::id() . "/" . $enterprise_id . "/products" . "/" . $name,
                    $request->file($str),
                    $iconUploadFile
                );
                $image_array[$i] = $url;
            } else 
                $image_array[$i] = null;
        }

        $record = DB::table('products')->where('id',$request->input('product_id'))->first();

        DB::table('products')->where('id',$product_id)
            ->update(['name' => $name,
            'category' => $category,
            'comment' => $comment,
            'price' => is_null($price)? null : $price . "," .$request->input('price_unit'),
            'build_at' => $build_at,
            'minimum_order_quantity' => $minimum_order_quantity,
            'minimum_build_days' => is_null($minimum_build_days)? null : $minimum_build_days . "," .$request->input('order_interval'),
            'three_d_url' => $three_d_url,
            'video_url' => $video_url,
            'other' => $other,
            'icon_url' => is_null($icon_url) ? $record->icon_url : $icon_url,
            'image_1_url' => is_null($image_array[1]) ? $record->image_1_url : $image_array[1],
            'image_2_url' => is_null($image_array[2]) ? $record->image_2_url : $image_array[2],
            'image_3_url' => is_null($image_array[3]) ? $record->image_3_url : $image_array[3],
            'image_4_url' => is_null($image_array[4]) ? $record->image_4_url : $image_array[4],
            'image_5_url' => is_null($image_array[5]) ? $record->image_5_url : $image_array[5],
            'image_6_url' => is_null($image_array[6]) ? $record->image_6_url : $image_array[6],
            'image_7_url' => is_null($image_array[7]) ? $record->image_7_url : $image_array[7],
            'image_8_url' => is_null($image_array[8]) ? $record->image_8_url : $image_array[8],
            'image_9_url' => is_null($image_array[9]) ? $record->image_9_url : $image_array[9],
            'image_10_url' => is_null($image_array[10]) ? $record->image_10_url : $image_array[10],
            'image_11_url' => is_null($image_array[11]) ? $record->image_11_url : $image_array[11]
            ]);

        $products = DB::table('products')->where('enterprise_id',$enterprise_id)->get();
        return view('enterprise.products',['enterprise_id' => $enterprise_id,
        'products' => $products]);
    }

    public function delete(Request $request)
    {
        if(Auth::check() && $this->isCurrentAuthByProduct($request->input('product_id'))) {
            DB::beginTransaction();
            try {
                DB::table('products')->where('id',$request->input('product_id'))->delete();
            } catch (Exception $e) {
                log::error($e->getMessage());
                return \App::make('redirect')->back()->with('alert', '削除失敗しました、管理人に連絡してください!');
            }
            DB::commit();
            return \App::make('redirect')->back()->with('alert', '削除しました');
        }
    }
    

    private function isCurrentAuthByEnterprise($enterprise_id)
    {
        $enterprise = DB::table('enterprises')->where('id',$enterprise_id)->first();
        if(Auth::id() == $enterprise->user_id)
            return true;
        else
            return false;
    }

    private function isCurrentAuthByProduct($product_id)
    {
        $product = DB::table('products')->where('id',$product_id)->first();
        if(is_null($product))
            return false;
        $enterprise = DB::table('enterprises')->where('id',$product->enterprise_id)->first();
        if(is_null($enterprise))
            return false;

        if(Auth::id() == $enterprise->user_id)
            return true;
        else
            return false;
    }

}
