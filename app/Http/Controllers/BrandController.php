<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\pricecalculatorproduct\PriceCalcultorProduct;
use App\Product;
class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.pages.brands')->with(compact('brands'));
    }

   
    public function create()
    {
        return view('admin.pages.add_brand');
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'required | min:4 | max:25',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            if(Brand::where('name',$request->name)->count() >0)
            {
                $request->session()->flash('msg','Brand is already exist');
                return back()->withInput();
            }
            $brand = new Brand();
            $brand->name = $request->name;
            if ($brand->save())
            {
                $request->session()->flash('msg','Brand has been added successfully');
                return redirect()->route('Brand.index');
            }
        }
    }

     
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $brand = Brand::where('id',$id)->first();
        // dd($brand);
        return view('admin.pages.update_brand',compact('brand'));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'name'=>'bail | required | min:4 | max:25',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            $brand = Brand::find($id);
            $brand->name = $request->name;
            if ($brand->save())
            {
                $request->session()->flash('msg','Brand has been updated successfully');
                return redirect()->route('Brand.index');
            }
        }
    }

   
    public function destroy(Request $request ,$id)
    {
       if(Brand::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Brand has been Deleted successfully');
            return redirect()->route('Brand.index');
       }
       
    }

    public function PriceEstimateCalculator()
    {
        $brands = Brand::join('price_calculator_products','brands.id','=','price_calculator_products.brand_id')->select('brands.name','brands.id')->get();
        return view('price_calculator',compact('brands'));
    }

    public function BrandProductsList($id)
    {
       $brand= Brand::where('id',$id)->first();
       $products = Product::where('brand_id',$id)->paginate(9);
       return view('front_brand_products_list',compact(['products','brand']));
    }

    public function BrandProducts(Request $request)
    {
        $brand = Brand::where('id',$request->id)->first();
        $products = $brand->price_calculator_products_list;
        return view('partials.brand_products',compact('products'));
    }
}
