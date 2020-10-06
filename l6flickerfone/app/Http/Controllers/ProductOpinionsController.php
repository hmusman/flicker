<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\ProductOpinion;
use App\Product;
class ProductOpinionsController extends Controller
{
    public function store(Request $request)
    {
    	$validations =Validator::make($request->all(),[
            'comment'=>'required',           
        ]);

        if($validations->fails())
        {
        	return back()->withErrors($validations)->withInput();
        }
        $opinion = new ProductOpinion();
        $opinion->user_id = $request->user_id;
        $opinion->product_id = $request->product_id;
        $opinion->nick_name = $request->nick_name;
        $opinion->comment = $request->comment;
        if ($opinion->save())
        {
        	return back();
        }
    }

    public function ProductOpinionData(Request $request)
    {
         if($request->ajax())
         {
            $opinions = ProductOpinion::where('product_id',intval($request->id))->paginate(15);
            $product = Product::where('id',$request->id)->first();
            return response()->json([
                'output'=> view('partials.product_opinions_list', compact(['opinions','product']))->render(),
                'pagination'=>$opinions->links()->render(),
            ]);
              
         }
    }

    public function ProductOpinionDataAscDesc(request $request)
    {
        if($request->ajax())
         {
            $opinions = ProductOpinion::where('product_id',intval($request->id))->orderBy('id',$request->order)->paginate(15);
            $product = Product::where('id',$request->id)->first();
            return response()->json([
                'output'=> view('partials.product_opinions_list', compact(['opinions','product']))->render(),
                'pagination'=>$opinions->links()->render(),
            ]);
         }
    }

    public function ProductOpinionSearchData(Request $request)
    {
        if($request->ajax())
         {
            $opinions = ProductOpinion::where('product_id',intval($request->id))->where('comment','like','%'.$request->get('query').'%')->paginate(15);
            $product = Product::where('id',$request->id)->first();
            return response()->json([
                'output'=> view('partials.product_opinions_list', compact(['opinions','product']))->render(),
                'pagination'=>$opinions->links()->render(),
            ]);
         }
    }
}
