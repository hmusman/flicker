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
Route::post('UserModalLogin', 'LoginAndRegisterController@UserModalLogin')->name('UserModalLogin');
Route::post('Register/Buyer', 'LoginAndRegisterController@buyer');
Route::post('Register/Seller', 'LoginAndRegisterController@seller');
Route::get('NewMobilePhones','ProductController@ShopPage')->name('Shop');
Route::get('NewAccessories','AccessoryController@ShopPage')->name('NewAccessories');
Route::get('ShopBrandProducts','ProductController@ShopBrandProducts')->name('ShopBrandProducts');
Route::get('ShopPriceProducts','ProductController@ShopPriceProducts')->name('ShopPriceProducts');
Route::get('ShopBrandPriceProducts','ProductController@ShopBrandPriceProducts')->name('ShopBrandPriceProducts');
Route::get('ShopBrandAccessories','AccessoryController@ShopBrandAccessories')->name('ShopBrandAccessories');
Route::get('ShopPriceAccessories','AccessoryController@ShopPriceAccessories')->name('ShopPriceAccessories');
Route::get('ShopBrandPriceAccessories','AccessoryController@ShopBrandPriceAccessories')->name('ShopBrandPriceAccessories');
Route::get('ShopViewAccessories','AccessoryController@ShopViewAccessories')->name('ShopViewAccessories');
Route::get('pagination/fetch_data', 'ProductController@fetch_data');
Route::get('pagination/accessory_fetch_data', 'AccessoryController@fetch_data');
Route::get('ShopViewProducts','ProductController@ShopViewProducts')->name('ShopViewProducts');
Route::get('BuyUsedAccessories','SellAccessoryController@frontEndAccessories')->name('BuyUsedAccessories');
Route::get('BuyUsedAccessoriesData','SellAccessoryController@BuyUsedAccessoriesData')->name('BuyUsedAccessoriesData');
Route::get('BuyUsedMobilePhones','SellProductController@frontEndProducts')->name('BuyUsedMobilePhones');
Route::get('BrandsSellProducts','SellProductController@BrandsSellProducts')->name('BrandsSellProducts');
Route::get('BrandsSellAccessories','SellAccessoryController@BrandsSellAccessories')->name('BrandsSellAccessories');
Route::get('BrandsPriceSellAccessories','SellAccessoryController@BrandsPriceSellAccessories')->name('BrandsPriceSellAccessories');
Route::get('CitySellAccessories','SellProductController@CitySellAccessories')->name('CitySellAccessories');
Route::get('BrandsPriceSellProducts','SellProductController@BrandsPriceSellProducts')->name('BrandsPriceSellProducts');
Route::get('PriceSellProducts','SellProductController@PriceSellProducts')->name('PriceSellProducts');
Route::get('PriceSellAccessories','SellProductController@PriceSellAccessories')->name('PriceSellAccessories');
Route::get('CitySellProducts','SellProductController@CitySellProducts')->name('CitySellProducts');
Route::get('CitySellAccessories','SellAccessoryController@CitySellAccessories')->name('CitySellAccessories');
Route::get('StatusSellProducts','SellProductController@StatusSellProducts')->name('StatusSellProducts');
Route::get('BrandsPriceCityStatusSellProducts','SellProductController@BrandsPriceCityStatusSellProducts')->name('BrandsPriceCityStatusSellProducts');
Route::get('BrandsPriceStatusSellProducts','SellProductController@BrandsPriceStatusSellProducts')->name('BrandsPriceStatusSellProducts');
Route::get('BrandsCityStatusSellProducts','SellProductController@BrandsCityStatusSellProducts')->name('BrandsCityStatusSellProducts');
Route::get('UpperCityPriceSellProducts','SellProductController@UpperCityPriceSellProducts')->name('UpperCityPriceSellProducts');
Route::get('PriceCityStatusSellProducts','SellProductController@PriceCityStatusSellProducts')->name('PriceCityStatusSellProducts');
Route::get('UpperPriceSellProducts','SellProductController@UpperPriceSellProducts')->name('UpperPriceSellProducts');
Route::get('UpperCitySellProducts','SellProductController@UpperCitySellProducts')->name('UpperCitySellProducts');
Route::get('PriceCitySellProducts','SellProductController@PriceCitySellProducts')->name('PriceCitySellProducts');
Route::get('UpperPriceSellAccessories','SellAccessoryController@UpperPriceSellAccessories')->name('UpperPriceSellAccessories');
Route::get('UpperCitySellAccessories','SellAccessoryController@UpperCitySellAccessories')->name('UpperCitySellAccessories');
Route::get('UpperCityPriceSellAccessories','SellAccessoryController@UpperCityPriceSellAccessories')->name('UpperCityPriceSellAccessories');

Route::get('PriceCitySellAccessories','SellAccessoryController@PriceCitySellAccessories')->name('PriceCitySellAccessories');
Route::get('CityStatusSellProducts','SellProductController@CityStatusSellProducts')->name('CityStatusSellProducts');
Route::get('PriceStatusSellProducts','SellProductController@PriceStatusSellProducts')->name('PriceStatusSellProducts');
Route::get('BrandsStatusSellProducts','SellProductController@BrandsStatusSellProducts')->name('BrandsStatusSellProducts');
Route::get('BrandsCitySellProducts','SellProductController@BrandsCitySellProducts')->name('BrandsCitySellProducts');
Route::get('BrandsCitySellAccessories','SellAccessoryController@BrandsCitySellAccessories')->name('BrandsCitySellAccessories');
Route::get('BrandsPriceCitySellProducts','SellProductController@BrandsPriceCitySellProducts')->name('BrandsPriceCitySellProducts');

Route::get('BrandsPriceCitySellAccessories','SellAccessoryController@BrandsPriceCitySellAccessories')->name('BrandsPriceCitySellAccessories');
Route::get('Sell','SellProductController@create')->name('Sell');
Route::get('BuyUsedMobilePhonesData','SellProductController@SellProductsData')->name('BuyUsedMobilePhonesData');
Route::view('ReviewDetail','review_detail');
Route::view('NewMobilePhonePrices','new_mobile_phone_prices');
Route::view('PriceCalculator','price_calculator');
Route::get('ProductDetail/{id}','ProductController@show')->name('ProductDetail');

Route::post('ProductOpinion','ProductOpinionsController@store')->name('ProductOpinion');
Route::get('ProductOpinionData','ProductOpinionsController@ProductOpinionData')->name('ProductOpinionData');
Route::get('ProductOpinionDataAscDesc','ProductOpinionsController@ProductOpinionDataAscDesc')->name('ProductOpinionDataAscDesc');
Route::get('ProductOpinionSearchData','ProductOpinionsController@ProductOpinionSearchData')->name('ProductOpinionSearchData');
Route::post('OpinionReply','OpinionReplyController@store')->name('OpinionReply');

Route::get('ProductDetailTwo/{id}','ProductController@showTwo')->name('ProductDetailTwo');

Route::get('pricesearch','ProductController@priceSearch')->name('pricesearch');
Route::get('brandsearch','ProductController@brandSearch')->name('brandsearch');
Route::get('colorsearch','ProductController@colorSearch')->name('colorsearch');
Route::get('citysearch','ProductController@citySearch')->name('citysearch');
Route::get('ColorFilterStorage','ProductController@colorFilterStorage')->name('ColorFilterStorage');
Route::get('ColorFilterImg','ProductController@colorFilterImg')->name('ColorFilterImg');
Route::get('StorageFilterPrice','ProductController@StorageFilterPrice')->name('StorageFilterPrice');
Route::get('PriceEstimateCalculator','BrandController@PriceEstimateCalculator')->name('PriceEstimateCalculator');
Route::get('/BrandProductsList/{id}','BrandController@BrandProductsList')->name('BrandProductsList');
Route::get('BrandProducts','BrandController@BrandProducts')->name('BrandProducts');
Route::get('BrandProductDetail','pricecalculatorproducts\PriceCalculatorProductController@BrandProductDetail')->name('BrandProductDetail');
Route::get('BrandProductColorItem','pricecalculatorproducts\PriceCalculatorProductController@BrandProductColorItem')->name('BrandProductColorItem');
Route::get('BrandProductEstimate','pricecalculatorproducts\PriceCalculatorProductController@BrandProductEstimate')->name('BrandProductEstimate');
Route::get('SellAccessory','SellAccessoryController@create')->name('SellAccessory.create');
// Route::get('pricesearch/{min?}/{max?}','ProductController@priceSearch')->name('pricesearch');
Route::prefix('Admin')->middleware('AdminLoginSessionCheck')->group(function(){
	Route::get('/','AdminController@index');
	Route::resource('Product','ProductController');
	Route::resource('/PriceCalculatorProduct','pricecalculatorproducts\PriceCalculatorProductController');
	Route::resource('/Category','CategoryController');
	Route::resource('AccessoryCategory','AccessoryCategoryController');
	Route::resource('Accessory','AccessoryController');
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
	// Route::get('/','SellProductController@create')->name('Sell');
	Route::post('Product','SellProductController@store')->name('Sell.Product.store');
	Route::post('SellAccessorySave','SellAccessoryController@store')->name('Sell.Accessory.store');
});

Route::group(['middleware'=>['LoginSessionCheck']],function(){
	// Route::get('BuyUsedMobilePhones','SellProductController@frontEndProducts');
	// Route::view('BuyUsedMobilePhones','buy_used_mobiles');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
