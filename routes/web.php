<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/hc', function () {
    return response()->json([
        "message" => 'OK'
    ],200); 
}); 


Route::get('/news',function () {
    return view('event.news');
});

Route::get('/events',function () {
    return view('event.events');
});

Route::get('/loginModal',function (){
    return view('common.login');
});

Route::get('/japanoem',function () {
    return view('oem');
});

Route::get('/product/update',function () {
    return view('product.update');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['verify' => true]);

# without auth
// ホーム
Route::get('/','IndexController@home');

// ニュースのため、登録Eメール

Route::post('/news/registerEmail','EmailForNewsController@registerEmail');

//　問い合わせフォーム
Route::get('inquiry','IndexController@inquiry');

//enterprise list filter by category
Route::get('/enterprise/filterByCategory','IndexController@getEnterprisesByCategory');

// 単一商品ビューページ
Route::get('/product/single','IndexController@getProduct');

// quick view
Route::get('/product/quickView','IndexController@quickView');

// product list filter by category
Route::get('/product/filterByCategory','IndexController@getProductsByCategory');

Route::get('/enterprise/single','IndexController@getEnterprise');

Route::get('/enterprise/recommend','IndexController@getRecommendEnterprises');
Route::get('/product/recommend','IndexController@getRecommendProducts');

# need auth

// 商品リストページ
Route::get('/enterprise/products',[
    'as' => 'enterprise.products', 
    'uses' => 'EnterpriseController@getProducts'
  ]);
// アカウント
Route::get('/home', 'HomeController@index')->name('home');
// 企業更新ページ
Route::get('/enterprise/view','EnterpriseController@view');
// 企業作成ページ
Route::get('/enterprise/new','EnterpriseController@blank');

// 商品作成ページ
Route::get('/product/new','ProductController@blank');
// 商品更新ページ
Route::get('/product/view','ProductController@view');
// 商品削除
Route::get('/product/delete','ProductController@delete');

// 問い合わせ送信
Route::post('/sendInquiry','InquireController@sendInquiry');

Route::post('/enterprise/create','EnterpriseController@create');
Route::post('/enterprise/update','EnterpriseController@update');
Route::post('/profile/update','HomeController@profileUpdate');
Route::post('/charge/update','HomeController@chargeUpdate');
Route::post('/product/create','ProductController@create');
Route::post('product/update','ProductController@update');

// public sendEmailTo
Route::post('/send/email', 'MailController@sendEmailTo');
// locale
Route::get('setLocale/{locale}', function ($locale) {
    App::setLocale($locale);
    Session::put('applocale', $locale);
    return back();
});