<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'name'=>'bail | required | min:5 | max:25',
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
        $brand = Brand::find($id)->first();
        return view('admin.pages.update_brand',compact('brand'));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'name'=>'bail | required | min:5 | max:25',
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
}
