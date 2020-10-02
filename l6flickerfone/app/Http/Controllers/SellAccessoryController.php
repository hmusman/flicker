<?php

namespace App\Http\Controllers;

use App\SellAccessory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\AccessoryCategory;
use App\Brand;
use Image;
use DB;
class SellAccessoryController extends Controller
{
    public function create()
    {
        $brands = Brand::all();
        $categories = AccessoryCategory::all();
        return view('sell_accessory',compact(['brands','categories']));
    }

    private function ResizeImage($img)
    {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/sellaccessory', $filename1);
        $img->storeAs('public/admin/images/sellaccessory/thumbnail', $filename1);
        Image::make($img->getRealPath())->resize(175,250)->save(public_path('storage\admin\images\sellaccessory\thumbnail\175_'.$filename1));
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage\admin\images\sellaccessory\thumbnail\100_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage\admin\images\sellaccessory\thumbnail\215_'.$filename1));
        Image::make($img->getRealPath())->resize(400,400)->save(public_path('storage\admin\images\sellaccessory\thumbnail\400_'.$filename1));
        return $filename1;
    }

    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required',
            'price'=>'bail | required',
            'img'=>'required | mimes:jpg,png,jpeg',
            'category'=>'required',
            'brand'=>'required',
            'city'=>'required',
            'phone'=>'required',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(SellAccessory::where('name',$request->name)->count() >0)
            {
                $request->session()->flash('warningMsg','Accessory is already exist');
                return back()->withInput();
            }

            $accessory = new  SellAccessory();
            $accessory->user_id=$request->user_id;
            $accessory->accessory_category_id=$request->category;
            $accessory->brand_id = $request->brand;
            $accessory->name = $request->name;
            $accessory->price = $request->price;
            $accessory->city = $request->city;
            $accessory->phone = $request->phone;
            $accessory->img = $this->ResizeImage($request->file('img'));
            if ($accessory->save())
            {
                $request->session()->flash('msg','Accessory has been added successfully');
                return back();
            }
        }
    }

    public function frontEndAccessories()
    {
        $accessories = SellAccessory::orderBy('id','desc')->paginate(1);
        $brands = Brand::select('brands.name','brands.id')->join('sell_accessories','brands.id','=','sell_accessories.brand_id')->distinct()->get();
        $cities = DB::select('SELECT city,COUNT(city) total FROM `sell_accessories` GROUP by city');
        return view('buy_used_accessories',compact(['accessories','brands','cities']));
    }

    public function BuyUsedAccessoriesData(Request $request)
    {
        $accessories = SellAccessory::orderBy('id','desc')->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }
}
