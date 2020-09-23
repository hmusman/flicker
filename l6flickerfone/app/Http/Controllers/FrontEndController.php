<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\BuyNewSell;
use App\BlogSlider;

class FrontEndController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	$buynewsell = BuyNewSell::all();
    	$blogslider = BlogSlider::where('status',1)->get();
    	return view('index',compact(['products','buynewsell','blogslider']));
    } 

}
