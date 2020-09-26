<?php

Route::get('/', 'FrontEndController@index')->name('home');
Route::get('Login', 'LoginAndRegisterController@index')->name('Login');
Route::get('AdminLogin', 'LoginAndRegisterController@adminIndex');
Route::post('AdminSession', 'LoginAndRegisterController@adminLogin')->name('AdminSession');
Route::get('Admin/Logout', 'LoginAndRegisterController@adminLogout')->name('AdminLogout');
Route::get('live_search/action', 'ProductController@liveSearch')->name('live_search.action');
Route::get('AdviceComparison/{id}','ProductController@adviceComparison')->name('AdviceComparison');
Route::get('OldAdviceComparison','ProductController@oldadviceComparison')->name('OldAdviceComparison');
Route::get('AdviceComparisonAll','ProductController@adviceComparisonAll')->name('AdviceComparisonAll');
Route::get('SingleCompareProductDetail','ProductController@singleCompareProductDetail')->name('SingleCompareProductDetail');
Route::get('AdviceComparison3','ProductController@adviceComparison2')->name('AdviceComparison2');
Route::get('Logout', 'LoginAndRegisterController@logout');
Route::post('LoginSession', 'LoginAndRegisterController@login');
Route::post('Register/Buyer', 'LoginAndRegisterController@buyer');
Route::post('Register/Seller', 'LoginAndRegisterController@seller');
Route::get('Shop','ProductController@ShopPage')->name('Shop');
Route::get('ShopBrandProducts','ProductController@ShopBrandProducts')->name('ShopBrandProducts');
Route::get('ShopPriceProducts','ProductController@ShopPriceProducts')->name('ShopPriceProducts');
Route::get('ShopBrandPriceProducts','ProductController@ShopBrandPriceProducts')->name('ShopBrandPriceProducts');
Route::get('ShopViewProducts','ProductController@ShopViewProducts')->name('ShopViewProducts');
Route::get('BuyUsedMobilePhones','SellProductController@frontEndProducts')->name('BuyUsedMobilePhones');
// Route::view('BuyUsedMobilePhones','buy_used_mobile_phone');
// Route::view('ProductDetail','product_detail');
Route::view('ReviewDetail','review_detail');
Route::view('NewMobilePhonePrices','new_mobile_phone_prices');
Route::view('PriceCalculator','price_calculator');
Route::get('ProductDetail/{id}','ProductController@show')->name('ProductDetail');
Route::get('pricesearch','ProductController@priceSearch')->name('pricesearch');
Route::get('brandsearch','ProductController@brandSearch')->name('brandsearch');
Route::get('colorsearch','ProductController@colorSearch')->name('colorsearch');
Route::get('citysearch','ProductController@citySearch')->name('citysearch');
Route::get('ColorFilterStorage','ProductController@colorFilterStorage')->name('ColorFilterStorage');
Route::get('StorageFilterPrice','ProductController@StorageFilterPrice')->name('StorageFilterPrice');
Route::get('PriceEstimateCalculator','BrandController@PriceEstimateCalculator')->name('PriceEstimateCalculator');
Route::get('BrandProducts','BrandController@BrandProducts')->name('BrandProducts');
Route::get('BrandProductDetail','pricecalculatorproducts\PriceCalculatorProductController@BrandProductDetail')->name('BrandProductDetail');
Route::get('BrandProductColorItem','pricecalculatorproducts\PriceCalculatorProductController@BrandProductColorItem')->name('BrandProductColorItem');
Route::get('BrandProductEstimate','pricecalculatorproducts\PriceCalculatorProductController@BrandProductEstimate')->name('BrandProductEstimate');
// Route::get('pricesearch/{min?}/{max?}','ProductController@priceSearch')->name('pricesearch');
Route::prefix('Admin')->middleware('AdminLoginSessionCheck')->group(function(){
	Route::get('/','AdminController@index');
	Route::resource('/Product','ProductController');
	Route::resource('/PriceCalculatorProduct','pricecalculatorproducts\PriceCalculatorProductController');
	Route::resource('/Category','CategoryController');
	Route::resource('/Brand','BrandController');
	Route::resource('/Meta','MetaController');
	Route::resource('/Page','PageController');
	Route::resource('IndexBuyNewSellSection','BuyNewSellController');
	Route::resource('BlogSlider','BlogSliderController');
	Route::post('BlogInActive','BlogSliderController@BlogInActive')->name('BlogInActive');
	Route::post('BlogActive','BlogSliderController@BlogActive')->name('BlogActive');
	Route::resource('/User','UserController');
	Route::get('User/Active/{id?}','UserController@active')->name('User.Active');
	Route::get('/User/Block/{id?}','UserController@block')->name('User.Block');
});

Route::prefix('Sell')->middleware('SellLoginSessionCheck')->group(function(){
	Route::get('/','SellProductController@create')->name('Sell');
	Route::post('Product','SellProductController@store')->name('Product.store');
});

Route::group(['middleware'=>['LoginSessionCheck']],function(){
	// Route::get('BuyUsedMobilePhones','SellProductController@frontEndProducts');
	// Route::view('BuyUsedMobilePhones','buy_used_mobiles');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
