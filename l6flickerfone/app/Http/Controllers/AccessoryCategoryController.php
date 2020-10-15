<?php

namespace App\Http\Controllers;

use App\AccessoryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Brand;
use App\Accessory;
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


    public function NewCategoryAccessories($id)
    {
        $brands = Brand::select('brands.name','brands.id')->join('accessories','brands.id','=','accessories.brand_id')->distinct('brands.name')->get();
        $accessories = AccessoryCategory::join('accessories','accessory_categories.id','=','accessories.accessory_category_id')->where('accessories.accessory_category_id',$id)->distinct()->paginate(9);
        $accessorycategory= AccessoryCategory::where('id',$id)->first();
        return view('shop_accessory_category',compact(['accessories','brands','accessorycategory']));
    }

     public function ShopBrandAccessories(Request $request)
    {
        $nView = $request->nView;
        $accessories =  Accessory::where('accessory_category_id',$request->category_id)->where('brand_id',$request->id)->orderBy('id','desc')->paginate($nView);
        return view('partials.shop_accessories_list',compact(['accessories']));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $accessories = AccessoryCategory::join('accessories','accessory_categories.id','=','accessories.accessory_category_id')->where('accessories.accessory_category_id',$request->id)->orderBy('accessories.id','desc')->distinct()->paginate(9);
            return view('partials.shop_accessories_list', compact('accessories'))->render();
        }
    }
    public function ShopViewAccessories(Request $request)
    {
        $nView = $request->nView;
        $accessorycategory= AccessoryCategory::where('id',$request->category_id)->first();
        $accessories =  Accessory::where('accessory_category_id',$request->category_id)->orderBy('id','desc')->paginate($nView);
        return view('partials.shop_accessories_list',compact(['accessories','accessorycategory']));
    }

    public function ShopPriceAccessories(Request $request)
    {
        $query = $request->price;
        $nView = $request->nView;
        if($query=="Less than 500")
        {
            $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('price', '<',500)->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 500 and 3000")
        {
            $accessories = Accessory::where('accessory_category_id',$request->category_id)->whereBetween('price',[5,3000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 3000 and 6000")
        {
             $accessories = Accessory::where('accessory_category_id',$request->category_id)->whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate($nView);
        }


        else if($query=="Between 6000 and 10,000")
        {
             $accessories = Accessory::where('accessory_category_id',$request->category_id)->whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="More Than 10,000")
        {
            $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('price', '>',10000)->orderBy('id','desc')->paginate($nView);
        }

        return view('partials.shop_accessories_list',compact('accessories'));
    }

    public function ShopBrandPriceAccessories(Request $request)
    {
        $query = $request->price;
        $id = $request->brand;
        $nView = $request->nView;
        if($query=="Less than 500")
        {
            $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('brand_id',$id)->where('price', '<',500)->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 500 and 3000")
        {
            $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('brand_id',$id)->whereBetween('price',[500,3000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 3000 and 6000")
        {
             $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('brand_id',$id)->whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate($nView);
        }


        else if($query=="Between 6000 and 10,000")
        {
             $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('brand_id',$id)->whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="More Than 10,000")
        {
            $accessories = Accessory::where('accessory_category_id',$request->category_id)->where('brand_id',$id)->where('price', '>',10000)->orderBy('id','desc')->paginate($nView);
        }

        return view('partials.shop_accessories_list',compact('accessories'));
    }
}
