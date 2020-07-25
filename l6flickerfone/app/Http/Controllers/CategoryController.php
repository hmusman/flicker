<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.categories')->with(compact('categories'));
    }

   
    public function create()
    {
        return view('admin.pages.add_category');
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | min:5 | max:25',
            'description'=>'bail | required | min:5 | max:100'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(Category::where('title',$request->title)->count() >0)
            {
                $request->session()->flash('msg','Category is already exist');
                return back()->withInput();
            }
            $category = new  Category();
            $category->title = $request->title;
            $category->description = $request->description;
            if ($category->save())
            {
                $request->session()->flash('msg','Category has been added successfully');
                return redirect()->route('Category.index');
            }
        }
    }

     
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $category = Category::find($id)->first();
        return view('admin.pages.update_category',compact('category'));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'title'=>'bail | required | min:5 | max:25',
            'description'=>'bail | required | min:5 | max:100'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            $category = Category::find($id);
            $category->title = $request->title;
            $category->description = $request->description;
            if ($category->save())
            {
                $request->session()->flash('msg','Category has been updated successfully');
                return redirect()->route('Category.index');
            }
        }
    }

   
    public function destroy(Request $request ,$id)
    {
       if(Category::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Category has been Deleted successfully');
            return redirect()->route('Category.index');
       }
       
    }
}
