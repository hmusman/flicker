<?php

namespace App\Http\Controllers;

use App\Accessory;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Validator;
use App\Brand;
use App\AccessoryCategory;
use Image;
class AccessoryController extends Controller
{
    public function index()
    {
        $accessories = Accessory::all();
        return view('admin.pages.view_accessories')->with(compact('accessories'));
    }

    private function ResizeImage($img)
    {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/accessory', $filename1);
        $img->storeAs('public/admin/images/accessory/thumbnail', $filename1);
        Image::make($img->getRealPath())->resize(175,250)->save(public_path('storage\admin\images\accessory\thumbnail\175_'.$filename1));
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage\admin\images\accessory\thumbnail\100_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage\admin\images\accessory\thumbnail\215_'.$filename1));
        Image::make($img->getRealPath())->resize(400,400)->save(public_path('storage\admin\images\accessory\thumbnail\400_'.$filename1));
        return $filename1;
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = AccessoryCategory::all();
        return view('admin.pages.add_accessory',compact(['brands','categories']));
    }

     public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required',
            'price'=>'bail | required',
            'img'=>'required | mimes:jpg,png,jpeg',
            'category'=>'required',
            'brand'=>'required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(Accessory::where('name',$request->name)->count() >0)
            {
                $request->session()->flash('msg','Accessory is already exist');
                return back()->withInput();
            }

            $accessory = new  Accessory();
            $accessory->accessory_category_id=$request->category;
            $accessory->brand_id = $request->brand;
            $accessory->name = $request->name;
            $accessory->price = $request->price;
            $accessory->img = $this->ResizeImage($request->file('img'));
            if ($accessory->save())
            {
                $request->session()->flash('msg','Accessory has been added successfully');
                return redirect()->route('Accessory.index');
            }
        }
    }

    public function edit($id)
    {
        $categories = AccessoryCategory::all();
        $data = Accessory::where('id',$id)->first();
        $brands = Brand::all();
        return view('admin.pages.update_accessory',compact(['brands','categories','data']));
    }

    public function update(Request $request,$id)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required',
            'price'=>'bail | required',
            'img'=>'mimes:jpg,png,jpeg',
            'category'=>'required',
            'brand'=>'required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            if($request->hasFile('img')){$this->ResizeImage($request->file('img'));}
            else{$f = $request->oldImg;}
            $accessory =Accessory::find($id);
            $accessory->accessory_category_id=$request->category;
            $accessory->brand_id = $request->brand;
            $accessory->name = $request->name;
            $accessory->price = $request->price;
            $accessory->img = $f;
            if ($accessory->save())
            {
                $request->session()->flash('msg','Accessory has been updated successfully');
                return redirect()->route('Accessory.index');
            }
        }
    }

    public function destroy(Request $request ,$id)
    {
       if(Accessory::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Accessory has been Deleted successfully');
            return redirect()->route('Accessory.index');
       }
       
    }


    public function ShopPage()
    {
        $brands = Brand::select('brands.name','brands.id')->join('accessories','brands.id','=','accessories.brand_id')->distinct('brands.name')->get();
        $accessories = Accessory::orderBy('id','desc')->paginate(9);
        return view('shop_accessory', compact(['brands','accessories'])); 
    }

    public function ShopBrandAccessories(Request $request)
    {
        $nView = $request->nView;
        $accessories =  Accessory::where('brand_id',$request->id)->orderBy('id','desc')->paginate($nView);
        return view('partials.shop_accessories_list',compact('accessories'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $accessories = Accessory::orderBy('id','desc')->paginate(9);
            return view('partials.shop_accessories_list', compact('accessories'))->render();
        }
    }
    public function ShopViewAccessories(Request $request)
    {
        $nView = $request->nView;
        $accessories =  Accessory::orderBy('id','desc')->paginate($nView);
        return view('partials.shop_accessories_list',compact('accessories'));
    }

    public function ShopPriceAccessories(Request $request)
    {
        $query = $request->price;
        $nView = $request->nView;
        if($query=="Less than 500")
        {
            $accessories = Accessory::where('price', '<',500)->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 500 and 3000")
        {
            $accessories = Accessory::whereBetween('price',[5,3000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 3000 and 6000")
        {
             $accessories = Accessory::whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate($nView);
        }


        else if($query=="Between 6000 and 10,000")
        {
             $accessories = Accessory::whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="More Than 10,000")
        {
            $accessories = Accessory::where('price', '>',10000)->orderBy('id','desc')->paginate($nView);
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
            $accessories = Accessory::where('brand_id',$id)->where('price', '<',500)->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 500 and 3000")
        {
            $accessories = Accessory::where('brand_id',$id)->whereBetween('price',[500,3000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 3000 and 6000")
        {
             $accessories = Accessory::where('brand_id',$id)->whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate($nView);
        }


        else if($query=="Between 6000 and 10,000")
        {
             $accessories = Accessory::where('brand_id',$id)->whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="More Than 10,000")
        {
            $accessories = Accessory::where('brand_id',$id)->where('price', '>',10000)->orderBy('id','desc')->paginate($nView);
        }

        return view('partials.shop_accessories_list',compact('accessories'));
    }
}