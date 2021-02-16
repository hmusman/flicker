<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\BuyNewSell;
use App\BlogSlider;
use App\Banner;

class FrontEndController extends Controller
{
    public function index()
    {
        $banners = Banner::first();
        // dd($banners);
    	$products = Product::all();
    	$buynewsell = BuyNewSell::all();
    	$blogslider = BlogSlider::where('status',1)->get();
    	return view('index',compact(['products','buynewsell','blogslider','banners']));
	} 
	public function indexmobile()
    {
    	$products = Product::all();
    	$buynewsell = BuyNewSell::all();
    	$blogslider = BlogSlider::where('status',1)->get();
    	return view('index_mobile',compact(['products','buynewsell','blogslider']));
    } 

}
