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
            'price'=>'bail | required',
            'image1'=>'required | mimes:jpg,png,jpeg',
            'brand'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'detail'=>'required',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            //  if(SellAccessory::where('name',$request->model)->count() >0)
            // {
            //     $request->session()->flash('warningMsg','Accessory is already exist');
            //     return back()->withInput();
            // }

            $accessory = new  SellAccessory();
            $accessory->user_id=$request->user_id;
            // $accessory->accessory_category_id=$request->category;
            $accessory->brand_id = $request->brand;
            // $accessory->name = $request->model;
            $accessory->price = $request->price;
            $accessory->city = $request->city;
            $accessory->phone = $request->phone;
            $accessory->img = $this->ResizeImage($request->file('image1'));
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

     public function BrandsSellAccessories(Request $request)
    {
        $accessories = SellAccessory::whereIn('brand_id',$request->brands)->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function BrandsPriceSellAccessories(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $accessories = SellAccessory::whereIn('brand_id',$request->brands)->whereBetween('price',[$fromPrice,$toPrice])->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function BrandsCitySellAccessories(Request $request)
    {
        $accessories = SellAccessory::whereIn('brand_id',$request->brands)->whereIn('city',$request->cities)->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function BrandsPriceCitySellAccessories(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $accessories = SellAccessory::whereIn('brand_id',$request->brands)->whereIn('city',$request->cities)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function CitySellAccessories(Request $request)
    {
        $accessories = SellAccessory::whereIn('city',$request->cities)->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function PriceCitySellAccessories(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $accessories = SellAccessory::whereIn('city',$request->cities)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function PriceSellAccessories(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $accessories = SellAccessory::where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function UpperSearchSellAccessories(Request $request)
    {
        $query = $request->get('query');
        $brands = Brand::where('name','like','%'.$query.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}

        if(!empty($brandArr))
        {
            $accessories = SellAccessory::whereIn('brand_id',$brandArr)->distinct()->paginate(10);
            return view('partials.sell_accessories_list',compact('accessories'));
        }

        
    }

    public function UsedAccessoriesList(Request $request)
    {
        $query = $request->get('query');
        $brands = Brand::where('name','like','%'.$query.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}

        if(!empty($brandArr))
        {
            $accessories_list = SellAccessory::whereIn('brand_id',$brandArr)->distinct()->get();
            return view('partials.used_accessories_list',compact('accessories_list'));
        }

        
    }

    public function UpperCityPriceSellAccessories(Request $request)
    {
        $query = $request->price;
        $city = $request->city;
        if($query=="Less than 500")
        {
            $accessories = SellAccessory::where('city',$city)->where('price', '<',500)->orderBy('id','desc')->paginate(1);
        }

        else if($query=="Between 500 and 3000")
        {
            $accessories = SellAccessory::where('city',$city)->whereBetween('price',[5,3000])->orderBy('id','desc')->paginate(1);
        }

        else if($query=="Between 3000 and 6000")
        {
             $accessories = SellAccessory::where('city',$city)->whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate(1);
        }


        else if($query=="Between 6000 and 10,000")
        {
             $accessories = SellAccessory::where('city',$city)->whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate(1);
        }

        else if($query=="More Than 10,000")
        {
            $accessories = SellAccessory::where('city',$city)->where('price', '>',10000)->orderBy('id','desc')->paginate(1);
        }

        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function UpperSearchCityPriceSellAccessories(Request $request)
    {
        $brand = $request->get('query');
        $query = $request->price;
        $city = $request->city;
        $brands = Brand::where('name','like','%'.$brand.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}
        if(!empty($brandArr))
        {
            if($query=="Less than 500")
            {
                $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('city',$city)->where('price', '<',500)->orderBy('id','desc')->paginate(1);
            }

            else if($query=="Between 500 and 3000")
            {
                $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('city',$city)->whereBetween('price',[5,3000])->orderBy('id','desc')->paginate(1);
            }

            else if($query=="Between 3000 and 6000")
            {
                 $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('city',$city)->whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate(1);
            }


            else if($query=="Between 6000 and 10,000")
            {
                 $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('city',$city)->whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate(1);
            }

            else if($query=="More Than 10,000")
            {
                $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('city',$city)->where('price', '>',10000)->orderBy('id','desc')->paginate(1);
            }

            return view('partials.sell_accessories_list',compact('accessories'));
        }
        
    }

    public function UpperSearchPriceSellAccessories(Request $request)
    {
        $brand = $request->get('query');
        $query = $request->price;
        $brands = Brand::where('name','like','%'.$brand.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}
        if(!empty($brandArr))
        {

            if($query=="Less than 500")
            {
                $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('price', '<',500)->orderBy('id','desc')->paginate(1);
            }

            else if($query=="Between 500 and 3000")
            {
                $accessories = SellAccessory::whereIn('brand_id',$brandArr)->whereBetween('price',[5,3000])->orderBy('id','desc')->paginate(1);
            }

            else if($query=="Between 3000 and 6000")
            {
                 $accessories = SellAccessory::whereIn('brand_id',$brandArr)->whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate(1);
            }


            else if($query=="Between 6000 and 10,000")
            {
                 $accessories = SellAccessory::whereIn('brand_id',$brandArr)->whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate(1);
            }

            else if($query=="More Than 10,000")
            {
                $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('price', '>',10000)->orderBy('id','desc')->paginate(1);
            }
            return view('partials.sell_accessories_list',compact('accessories'));

        }
        

        
    }

    public function UpperSearchCitySellAccessories(Request $request)
    {
        $brand = $request->get('query');
        $city = $request->city;
        $brands = Brand::where('name','like','%'.$brand.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}
        if (!empty($brandArr))
        {
           $accessories = SellAccessory::whereIn('brand_id',$brandArr)->where('city',$city)->orderBy('id','desc')->paginate(1);
            return view('partials.sell_accessories_list',compact('accessories'));
        }
        
    }

    public function UpperPriceSellAccessories(Request $request)
    {
        $query = $request->price;
        if($query=="Less than 500")
        {
            $accessories = SellAccessory::where('price', '<',500)->orderBy('id','desc')->paginate(1);
        }

        else if($query=="Between 500 and 3000")
        {
            $accessories = SellAccessory::whereBetween('price',[5,3000])->orderBy('id','desc')->paginate(1);
        }

        else if($query=="Between 3000 and 6000")
        {
             $accessories = SellAccessory::whereBetween('price',[3000,6000])->orderBy('id','desc')->paginate(1);
        }


        else if($query=="Between 6000 and 10,000")
        {
             $accessories = SellAccessory::whereBetween('price',[6000,10000])->orderBy('id','desc')->paginate(1);
        }

        else if($query=="More Than 10,000")
        {
            $accessories = SellAccessory::where('price', '>',10000)->orderBy('id','desc')->paginate(1);
        }

        return view('partials.sell_accessories_list',compact('accessories'));
    }

    public function UpperCitySellAccessories(Request $request)
    {
        $city = $request->city;
        $accessories = SellAccessory::where('city',$city)->orderBy('id','desc')->paginate(1);
        return view('partials.sell_accessories_list',compact('accessories'));
    }

}
