<?php

Route::view('/', 'index');
Route::get('Login', 'LoginAndRegisterController@index');
Route::get('live_search/action', 'ProductController@liveSearch')->name('live_search.action');
Route::get('Logout', 'LoginAndRegisterController@logout');
Route::post('LoginSession', 'LoginAndRegisterController@login');
Route::post('Register/Buyer', 'LoginAndRegisterController@buyer');
Route::post('Register/Seller', 'LoginAndRegisterController@seller');
// Route::view('BuyUsedMobilePhones','buy_used_mobile_phone');
// Route::view('ProductDetail','product_detail');
Route::view('ReviewDetail','review_detail');
Route::view('NewMobilePhonePrices','new_mobile_phone_prices');
Route::view('PriceCalculator','price_calculator');
Route::get('ProductDetail/{id}','ProductController@show')->name('ProductDetail.show');

Route::prefix('Admin')->group(function(){
	Route::get('/','AdminController@index');
	Route::resource('/Product','ProductController');
	Route::resource('/Category','CategoryController');
	Route::resource('/Brand','BrandController');
});


Route::group(['middleware'=>['LoginSessionCheck']],function(){
	Route::view('BuyUsedMobilePhones','buy_used_mobile_phone');
});