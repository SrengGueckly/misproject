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