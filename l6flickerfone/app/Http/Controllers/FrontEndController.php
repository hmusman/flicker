<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontEndController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('index',compact('products'));
    } 
}
