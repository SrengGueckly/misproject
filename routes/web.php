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
// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//     {
//     	$baseUrl=URL::to('/'); // baseUrl use every where with translate
// 		$lang=LaravelLocalization::getCurrentLocale();
// 		if($lang=='en') // check is lang now === default the url is normal without lang
// 		    $baseUrlLang=URL::to('/');
// 		else
// 		    $baseUrlLang=URL::to('/' . $lang) ; // baseUrl use every where with translate
// 		View::share('baseUrl',$baseUrl); // share baseUrl Normal(without language) to all view (globle)
// 		View::share('baseUrlLang',$baseUrlLang); // share baseUrlLang (with language) to all view (globle)
// 		View::share('lang',$lang); // share baseUrlLang (with language) to all view (globle)

		Route::get('/', function () {
		    return view('pages/index');
		});

		Route::get('/404',function(){
			return view('pages/404');
		});

		Route::get('/checkout',function(){
			return view('pages/checkout');
		});

		Route::get('/contact',function(){
			return view('pages/contact');
		});

		Route::get('/login',function(){
			return view('pages/login');
		});

		Route::get('/register',function(){
			return view('pages/register');
		});

		Route::get('/single',function(){
			return view('pages/single');
		});

		Route::get('/typo',function(){
			return view('pages/typo');
		});

		Route::get('/wishlist',function(){
			return view('pages/wishlist');
		});
		// Route::post('/single','PagesController@single');
		Route::get('/','PagesController@index');
		Route::post('/emptycard','PagesController@emptycard');
		Route::get('/product','PagesController@alltype');
		Route::get('/product/{category}','PagesController@type');
		Route::get('/product/{type}/{type_product}','PagesController@producttype');
		Route::get('/product/{type}/{type_product}/{sub_sub}','PagesController@subproducttype');
		Route::post('/addtocart','PagesController@addtocart');
		Route::post('/deleteproduct','PagesController@deleteproduct');
		Route::get('/single/{proid}','PagesController@single');
		Route::get('/search/{name}','PagesController@search');
		Route::post('/buynow','PagesController@buynow');
 // });