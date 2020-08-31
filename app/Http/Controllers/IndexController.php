<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Session;

use Illuminate\Http\Request;

class IndexController extends Controller
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

    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null) \App::setLocale($lang);
    }

    public function home()
    {
        $recommend_products = $pickup_3ds = null;

        // if(app('App\Http\Controllers\RedisController')->check_redis_connection()) {
        //     if(!Redis::exists(':recommend_products'))
        //         Redis::set(':recommend_products',DB::table('products')->where('status','recommend')->limit(10)->get());
        //     if(!Redis::exists(':pickup_3ds'))
        //         Redis::set(':pickup_3ds',DB::table('products')->where('status','recommend')->limit(4)->get());
        //     if(!Redis::exists(':pickup_products'))
        //         Redis::set(':pickup_products',DB::table('products')->where('status','recommend')->limit(4)->get());

        //     $recommend_products = Redis::get(':recommend_products');
        //     $pickup_3ds = Redis::get(':pickup_3ds');
        //     $pickup_products = Redis::get(':pickup_products');
        // } else {
        //     $recommend_products = DB::table('products')->where('status','recommend')->limit(10)->get();
        //     $pickup_3ds = DB::table('products')->where('status','recommend')->limit(4)->get();
        //     $pickup_products = DB::table('products')->where('status','recommend')->limit(4)->get();
        // }

        $recommend_products = DB::table('products')->where('status','recommend')->limit(10)->get();
        $pickup_3ds = DB::table('products')->whereIn('id',[6,40])->get();
        $pickup_products = DB::table('products')->whereIn('id',[36,22,31])->get();
        
        $categories = \Config::get('constants.CATEGORY');

        // to define pickup product
        
        $favorite_list = $history_list = [];
        
        if(Auth::check())
        {
            //$favorite_list = DB::table('favorites')->latest()->limit(10)->get();
            //$history_list = DB::table('view_histories')->latest()->limit(10)->get();
        }

        return view('index',['recommend_products' => json_decode($recommend_products),
            'pickup_3ds' => json_decode($pickup_3ds),
            'pickup_products' => json_decode($pickup_products),
            'categories' => $categories,
            'favorite_list' => [],
            'history_list' => []]);
    }

    public function getEnterprisesByCategory(Request $request)
    {
        $enterprises = DB::table('enterprises')->where('category',$request->input('category'))->get();
        $top_rated_enterprises = [];
        return view('enterprise.list',['enterprises' => $enterprises,
        'top_rated_enterprises' => $top_rated_enterprises,
        'cities' => \Config::get('constants.CITIES'),
        'inquire_categories' => \Config::get('constants.INQUIRE_CATEGORIES')]);
    }

    public function getProductsByCategory(Request $request)
    {
        $products = DB::table('products')->where('category',$request->input('category'))->get();
        $top_rated_products = [];
        return view('product.list',['products' => $products,
        'top_rated_products' => $top_rated_products,
        'cities' => \Config::get('constants.CITIES'),
        'inquire_categories' => \Config::get('constants.INQUIRE_CATEGORIES')]);
    }

    public function getProduct(Request $request)
    {
        $product = DB::table('products')->where('id',$request->input('product_id'))->first();
        $enterprise = DB::table('enterprises')->where('id',$product->enterprise_id)->first();
        $recommend_products = DB::table('products')->where('id',$request->input('product_id'))->where('category',$product->category)->limit(4)->get();
        return view('product.single',['product' => $product,
        'enterprise' => $enterprise,
        'recommend_products' => $recommend_products,
        'inquire_categories' => \Config::get('constants.INQUIRE_CATEGORIES'),
        'query' => $product->id . ",product"]);
    }

    public function getEnterprise(Request $request)
    {
        if(app('App\Http\Controllers\RedisController')->check_redis_connection())
        {
            if(!Redis::get(':products_of_enterprise:' . $request->input('enterprise_id')))
                Redis::set(':products_of_enterprise:',DB::table('products')->where('enterprise_id',$request->input('enterprise_id'))->get());
            $products = Redis::get(':products_of_enterprise:' . $request->input('enterprise_id'));
            if(!Redis::exists(':enterprise:'.$request->input('enterprise_id')))
                Redis::set(':enterprise:'.$request->input('enterprise_id'),DB::table('enterprises')->where('id',$request->input('enterprise_id'))->get());
            $enterprise = Redis::get(':enterprise:' . $request->input('enterprise_id'));
        } else {
            $enterprise = DB::table('enterprises')->where('id',$request->input('enterprise_id'))->get();
            $products = DB::table('products')->where('enterprise_id',$request->input('enterprise_id'))->get();
        }

        return view('enterprise.single',['enterprise' => json_decode($enterprise)[0],'products' => json_decode($products)]);

    }

    public function quickView(Request $request)
    {
        $product = DB::table('products')->where('id',$request->input('product_id'))->first();
        $enterprise = DB::table('enterprises')->where('id',$product->enterprise_id)->first();
        return view('product.preview',['product' => $product,'enterprise' => $enterprise,'query' => $product->id .",product",'inquire_categories' => \Config::get('constants.INQUIRE_CATEGORIES')]);
    }

    public function inquiry(Request $request)
    {
        if(Auth::check()){
            return view('common.inquiry',['inquire_categories' => \Config::get('constants.INQUIRE_CATEGORIES'),'query' => $request->input('query')]);
        } else {
            return view('common.login');
        }
    }

    public function getRecommendEnterprises(Request $request)
    {
        $sets = array();
        $i = 0;
        $enterprises = DB::table('enterprises')->paginate(6);
        foreach($enterprises as $enterprise)
        {
            $products = DB::table('products')->where('enterprise_id',$enterprise->id)->limit(3)->get();
            $sets[$i]['enterprise'] = $enterprise;
            $sets[$i]['products'] = $products;
            $i++;
        }
        return view('enterprise.recommend',['sets' => $sets,'enterprises' => $enterprises]);
    }

    public function getRecommendProducts(Request $request)
    {
        $products = DB::table('products')->paginate(12);
        return view('product.recommend',['products' => $products]);
    }
    
}
