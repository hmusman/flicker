<?php

Route::get('/', 'FrontEndController@index')->name('home');
Route::view('/blog', 'blog')->name('blog');

Route::view('/forum','forum')->name('forum');
Route::get('/mobile', 'FrontEndController@indexmobile')->name('homemobile');
Route::get('/personcontact/{id}', 'SellProductController@person_contact')->name('personcontact');
Route::get('/students/{id}','SellProductController@getDataByid');//<-show data/////
// Route::post('/student/update/{id}','SellProductController@updateStudent')->name('student.update');

Route::get('Login', 'LoginAndRegisterController@index')->name('Login');
// add facbook social Button
Route::get('/social-login/redirect/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
Route::get('/social-login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');
// add google social Button
Route::get('/social-login_g/redirect/{provider}', 'Auth\LoginController@redirectToProvidergoogle')->name('social.login_g');
Route::get('/social-login_g/{provider}/callback', 'Auth\LoginController@handleProviderCallbackgoogle')->name('social.callback');
// add Instagrame social Button
// Route::get('/social-login_insta/redirect/{provider}', 'Auth\LoginController@redirectToProviderInstagram')->name('social.login_insta');
// Route::get('/social-loging_insta/{provider}/callback', 'Auth\LoginController@handleProviderCallbackInstagram')->name('social.callback');


Route::get('/users/login', 'HomeController@login')->name('user.login');


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
Route::post('Register/Seller','LoginAndRegisterController@seller');
Route::get('NewMobilePhones','ProductController@ShopPage')->name('Shop');
Route::get('NewAccessories','AccessoryController@ShopPage')->name('NewAccessories');
Route::get('NewCategoryAccessories/{id}','AccessoryCategoryController@NewCategoryAccessories')->name('NewCategoryAccessories');
Route::get('ShopBrandProducts','ProductController@ShopBrandProducts')->name('ShopBrandProducts');
Route::get('ShopPriceProducts','ProductController@ShopPriceProducts')->name('ShopPriceProducts');
Route::get('ShopBrandPriceProducts','ProductController@ShopBrandPriceProducts')->name('ShopBrandPriceProducts');
Route::get('ShopBrandAccessories','AccessoryController@ShopBrandAccessories')->name('ShopBrandAccessories');
Route::get('ShopPriceAccessories','AccessoryController@ShopPriceAccessories')->name('ShopPriceAccessories');
Route::get('ShopBrandPriceAccessories','AccessoryController@ShopBrandPriceAccessories')->name('ShopBrandPriceAccessories');
Route::get('ShopViewAccessories','AccessoryController@ShopViewAccessories')->name('ShopViewAccessories');
Route::get('/NewShopBrandAccessories','AccessoryCategoryController@ShopBrandAccessories')->name('NewShopBrandAccessories');
Route::get('/NewShopPriceAccessories','AccessoryCategoryController@ShopPriceAccessories')->name('NewShopPriceAccessories');
Route::get('/NewShopBrandPriceAccessories','AccessoryCategoryController@ShopBrandPriceAccessories')->name('NewShopBrandPriceAccessories');
Route::get('/NewShopViewAccessories','AccessoryCategoryController@ShopViewAccessories')->name('NewShopViewAccessories');

Route::get('pagination/fetch_data', 'ProductController@fetch_data');
Route::get('pagination/accessory_fetch_data', 'AccBuyUsedMobilePhonesessoryController@fetch_data');
Route::get('pagination/accessory_category_fetch_data', 'AccessoryCategoryController@fetch_data');
Route::get('ShopViewProducts','ProductController@ShopViewProducts')->name('ShopViewProducts');
Route::get('BuyUsedAccessories','SellAccessoryController@frontEndAccessories')->name('BuyUsedAccessories');
Route::get('BuyUsedAccessoriesData','SellAccessoryController@BuyUsedAccessoriesData')->name('BuyUsedAccessoriesData');

Route::get('BuyUsedMobilePhones','SellProductController@frontEndProducts')->name('BuyUsedMobilePhones');

Route::get('BrandsSellProducts','SellProductController@BrandsSellProducts')->name('BrandsSellProducts');
Route::get('BrandsSellAccessories','SellAccessoryController@BrandsSellAccessories')->name('BrandsSellAccessories');
Route::get('BrandsPriceSellAccessories','SellAccessoryController@BrandsPriceSellAccessories')->name('BrandsPriceSellAccessories');
Route::get('ProductEstimateData','LoginAndRegisterController@ProductEstimateData')->name('ProductEstimateData');
Route::get('CitySellAccessories','SellProductController@CitySellAccessories')->name('CitySellAccessories');
Route::get('BrandsPriceSellProducts','SellProductController@BrandsPriceSellProducts')->name('BrandsPriceSellProducts');
Route::get('PriceSellProducts','SellProductController@PriceSellProducts')->name('PriceSellProducts');
Route::get('PriceSellAccessories','SellAccessoryController@PriceSellAccessories')->name('PriceSellAccessories');
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
Route::get('UpperSearchSellProducts','SellProductController@UpperSearchSellProducts')->name('UpperSearchSellProducts');
Route::get('UpperSearchSellAccessories','SellAccessoryController@UpperSearchSellAccessories')->name('UpperSearchSellAccessories');
Route::get('UpperSearchCitySellAccessories','SellAccessoryController@UpperSearchCitySellAccessories')->name('UpperSearchCitySellAccessories');
Route::get('UpperSearchPriceSellAccessories','SellAccessoryController@UpperSearchPriceSellAccessories')->name('UpperSearchPriceSellAccessories');
Route::get('UpperSearchCityPriceSellAccessories','SellAccessoryController@UpperSearchCityPriceSellAccessories')->name('UpperSearchCityPriceSellAccessories');

Route::get('UpperSearchCitySellProducts','SellProductController@UpperSearchCitySellProducts')->name('UpperSearchCitySellProducts');
Route::get('UpperSearchPriceSellProducts','SellProductController@UpperSearchPriceSellProducts')->name('UpperSearchPriceSellProducts');
Route::get('UpperSearchCityPriceSellProducts','SellProductController@UpperSearchCityPriceSellProducts')->name('UpperSearchCityPriceSellProducts');

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
Route::get('AccessoryCategories','AccessoryCategoryController@AccessoryCategories')->name('AccessoryCategories');
Route::get('UsedProductsList','SellProductController@UsedProductsList')->name('UsedProductsList');
Route::get('UsedAccessoriesList','SellAccessoryController@UsedAccessoriesList')->name('UsedAccessoriesList');
Route::get('BrandsPriceCitySellAccessories','SellAccessoryController@BrandsPriceCitySellAccessories')->name('BrandsPriceCitySellAccessories');
Route::get('SortByOrderSellProducts','SellProductController@SortByOrderSellProducts')->name('SortByOrderSellProducts');
Route::get('SortByPriceSellProducts','SellProductController@SortByPriceSellProducts')->name('SortByPriceSellProducts');
Route::get('SortByOrderPriceSellProducts','SellProductController@SortByOrderPriceSellProducts')->name('SortByOrderPriceSellProducts');

Route::get('Sell','SellProductController@create')->name('Sell');
Route::get('BuyUsedMobilePhonesData','SellProductController@SellProductsData')->name('BuyUsedMobilePhonesData');
Route::view('ReviewDetail','review_detail');
Route::view('NewMobilePhonePrices','new_mobile_phone_prices');
Route::view('PriceCalculator','price_calculator');
Route::get('ProductDetail/{id}','ProductController@show')->name('ProductDetail');
Route::get('SellProductDetail/{id}','SellProductController@show')->name('SellProductDetail');
Route::post('SellProductQuestion','SellerQuestionController@store')->name('SellProductQuestion');

Route::post('ProductOpinion','ProductOpinionsController@store')->name('ProductOpinion');
Route::get('ProductOpinionData','ProductOpinionsController@ProductOpinionData')->name('ProductOpinionData');
Route::get('ProductOpinionDataAscDesc','ProductOpinionsController@ProductOpinionDataAscDesc')->name('ProductOpinionDataAscDesc');
Route::get('ProductOpinionSearchData','ProductOpinionsController@ProductOpinionSearchData')->name('ProductOpinionSearchData');
Route::post('OpinionReply','OpinionReplyController@store')->name('OpinionReply');
Route::post('QuestionReply','SellerQuestionReplyController@store')->name('QuestionReply');

Route::get('ProductDetailTwo/{id}','ProductController@showTwo')->name('ProductDetailTwo');

Route::get('pricesearch','ProductController@priceSearch')->name('pricesearch');
Route::get('brandsearch','ProductController@brandSearch')->name('brandsearch');
Route::get('colorsearch','ProductController@colorSearch')->name('colorsearch');
Route::get('citysearch','ProductController@citySearch')->name('citysearch');
Route::get('ColorFilterStorage','ProductController@colorFilterStorage')->name('ColorFilterStorage');
// change color of buton and image
Route::post('Changecolorbtn','ProductController@Changecolorbtn')->name('Changecolorbtn');

Route::get('ColorFilterImg','ProductController@colorFilterImg')->name('ColorFilterImg');
Route::get('StorageFilterPrice','ProductController@StorageFilterPrice')->name('StorageFilterPrice');
Route::get('PriceEstimateCalculator','BrandController@PriceEstimateCalculator')->name('PriceEstimateCalculator');
Route::get('/BrandProductsList/{id}','BrandController@BrandProductsList')->name('BrandProductsList');
Route::get('BrandProducts','BrandController@BrandProducts')->name('BrandProducts');
Route::get('BrandProductDetail','pricecalculatorproducts\PriceCalculatorProductController@BrandProductDetail')->name('BrandProductDetail');
Route::get('EmailTest','LoginAndRegisterController@emailTest')->name('EmailTest');
Route::get('BrandProductColorItem','pricecalculatorproducts\PriceCalculatorProductController@BrandProductColorItem')->name('BrandProductColorItem');
Route::get('BrandProductEstimate','pricecalculatorproducts\PriceCalculatorProductController@BrandProductEstimate')->name('BrandProductEstimate');
Route::get('SellAccessory','SellAccessoryController@create')->name('SellAccessory.create');
// Route::get('pricesearch/{min?}/{max?}','ProductController@priceSearch')->name('pricesearch');
Route::prefix('admin')->middleware('AdminLoginSessionCheck')->group(function(){
	Route::get('/','AdminController@index');
	Route::get('/adminuser','AdminController@adminuser')->name('adminuser');
	Route::post('/adminuserupdate','AdminController@adminupdate')->name('admin.updateadmin');
	Route::delete('/adminuserdelete/{id}','AdminController@admindelete')->name('admin.deleteadmin');
	Route::resource('products','ProductController');
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
	Route::get('ProductOpinions/{id}','ProductController@Opinions')->name('Admin.ProductOpinions');
	Route::get('ProductOpinionReplies/{id}','ProductOpinionsController@Replies')->name('Admin.ProductOpinionReplies');
	Route::resource('/User','UserController');
	Route::get('User/Active/{id?}','UserController@active')->name('User.Active');
	Route::get('/User/Block/{id?}','UserController@block')->name('User.Block');
	Route::delete('Opinion/destroy/{id}','ProductOpinionsController@destroy')->name('Opinion.destroy');
	Route::delete('Reply/destroy/{id}','OpinionReplyController@destroy')->name('Reply.destroy');
	Route::get('Welcome/{id}/Edit','WelcomeEmailController@edit')->name('Welcome.Email.Edit');
	Route::post('Welcome/{id}/Update','WelcomeEmailController@update')->name('Welcome.Email.update');
	Route::get('Active/{id}/Edit','ActiveEmailController@edit')->name('Active.Email.Edit');
	Route::post('Active/{id}/Update','ActiveEmailController@update')->name('Active.Email.update');
	Route::get('Block/{id}/Edit','BlockEmailController@edit')->name('Block.Email.Edit');
	Route::post('Block/{id}/Update','BlockEmailController@update')->name('Block.Email.update');
});

Route::prefix('Sell')->middleware('SellLoginSessionCheck')->group(function(){
	// Route::get('/','SellProductController@create')->name('Sell');
	Route::post('Product','SellProductController@store')->name('Sell.Product.store');
	Route::post('/Accessory','SellAccessoryController@store')->name('Sell.Accessory.store');
});

Route::group(['middleware'=>['LoginSessionCheck']],function(){
	// Route::get('BuyUsedMobilePhones','SellProductController@frontEndProducts');
	// Route::view('BuyUsedMobilePhones','buy_used_mobiles');
});

Auth::routes(['verify'=>true]);

// Route::get('/home', 'HomeController@index')->name('home');
