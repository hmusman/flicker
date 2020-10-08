<?php

namespace App\Http\Controllers;

use App\AccessoryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccessoryCategoryController extends Controller
{
    public function index()
    {
        $categories = AccessoryCategory::all();
        return view('admin.pages.accessory_categories')->with(compact('categories'));
    }

   
    public function create()
    {
        return view('admin.pages.add_accessory_category');
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(AccessoryCategory::where('title',$request->title)->count() >0)
            {
                $request->session()->flash('msg','Accessory Category is already exist');
                return back()->withInput();
            }
            $category = new  AccessoryCategory();
            $category->title = $request->title;
            if ($category->save())
            {
                $request->session()->flash('msg','Accessory Category has been added successfully');
                return redirect()->route('AccessoryCategory.index');
            }
        }
    }

     
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $category = AccessoryCategory::where('id',$id)->first();
        return view('admin.pages.update_accessory_category',compact('category'));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'title'=>'bail | required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            $category = AccessoryCategory::find($id);
            $category->title = $request->title;
            if ($category->save())
            {
                $request->session()->flash('msg','Accessory Category has been updated successfully');
                return redirect()->route('AccessoryCategory.index');
            }
        }
    }

   
    public function destroy(Request $request ,$id)
    {
       if(AccessoryCategory::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Accessory Category has been Deleted successfully');
            return redirect()->route('AccessoryCategory.index');
       }
       
    }

    public function AccessoryCategories(Request $request)
    {
        $categories = AccessoryCategory::all();
        $output = "";
    }
}
