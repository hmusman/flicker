<?php

namespace App\Http\Controllers;

use App\SellProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\Brand;
use Image;
use DB;
class SellProductController extends Controller
{
    
    public function index()
    {
        //
    }

    public function frontEndProducts()
    {
        $products = SellProduct::orderBy('id','desc')->paginate(10);
        $brands = Brand::select('brands.name','brands.id')->join('sell_products','brands.id','=','sell_products.brand_id')->distinct()->get();
        $cities = DB::select('SELECT city,COUNT(city) total FROM `sell_products` GROUP by city');
        $colors = SellProduct::select('color')->distinct()->get();
        return view('buy_used_mobiles',compact(['products','brands','colors','cities']));
    }
    
    public function SellProductsData(Request $request)
    {
        $products = SellProduct::orderBy('id','desc')->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('sell',compact(['categories','brands']));
    }

   private function ResizeImage($img)
   {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/sellproduct', $filename1);
        $img->storeAs('public/admin/images/sellproduct/thumbnail', $filename1);
        $thumbnailpath = public_path('storage\admin\images\sellproduct\thumbnail\\'.$filename1);
        Image::make($img->getRealPath())->resize(175,214)->save(public_path('storage/admin/images/sellproduct/thumbnail/175_'.$filename1));
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage/admin/images/sellproduct/thumbnail/100_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage/admin/images/sellproduct/thumbnail/215_'.$filename1));
        Image::make($img->getRealPath())->resize(400,400)->save(public_path('storage/admin/images/sellproduct/thumbnail/400_'.$filename1));
        return $filename1;
   }

   private function ResizeImageOther($img)
   {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/sellproduct', $filename1);
        $img->storeAs('public/admin/images/sellproduct/thumbnail', $filename1);
       $thumbnailpath = public_path('storage\admin\images\sellproduct\thumbnail\\'.$filename1);
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage/admin/images/sellproduct/thumbnail/100_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage/admin/images/sellproduct/thumbnail/215_'.$filename1));
        Image::make($img->getRealPath())->resize(400,400)->save(public_path('storage/admin/images/sellproduct/thumbnail/400_'.$filename1));
        return $filename1;
   }
    public function store(Request $request)
    {
        $validations =Validator::make($request->all(),[
            'category'=>'required',
            'brand'=>'required',
            'model'=>"required",
            'color'=>"required",
            'price'=>'required',
            'minor'=>'required',
            'major'=>'required',
            'phone'=>'required',
            'accessory'=>'required',
            'screen'=>'required',
            'device'=>'required',
            'battery'=>'required',
            'image1'=>'required|mimes:png,jpg,jpeg',
            'image2'=>'required|mimes:png,jpg,jpeg',
            'image3'=>'required|mimes:png,jpg,jpeg',
            'image4'=>'mimes:png,jpg,jpeg',
            'image5'=>'mimes:png,jpg,jpeg',
            'image6'=>'mimes:png,jpg,jpeg',
            'image7'=>'mimes:png,jpg,jpeg',
            'image8'=>'mimes:png,jpg,jpeg',
            'pta'=>'required',
            'city'=>'required',
            'detail'=>'required'
        ]);
        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if($request->hasFile('image1'))
            {
                $filename1 = $this->ResizeImage($request->file('image1'));
            }
            
            if($request->hasFile('image2'))
            {
                $filename2 = $this->ResizeImageOther($request->file('image2'));
            }
            else
            {
                $filename2 ='';
            }


            if($request->hasFile('image3'))
            {
                $filename3 = $this->ResizeImageOther($request->file('image3'));
            }
            else
            {
                $filename3 ='';
            }


            if($request->hasFile('image4'))
            {
                $filename4 = $this->ResizeImageOther($request->file('image4'));
            }
            else
            {
                $filename4 ='';
            }


            if($request->hasFile('image5'))
            {
               $filename5 = $this->ResizeImageOther($request->file('image5'));
            }
            else
            {
                $filename5 ='';
            }


            if($request->hasFile('image6'))
            {
                $filename6 = $this->ResizeImageOther($request->file('image6'));
            }
            else
            {
                $filename6 ='';
            }

            if($request->hasFile('image7'))
            {
                $filename7 = $this->ResizeImageOther($request->file('image7'));
            }
            else
            {
                $filename7 ='';
            }

            if($request->hasFile('image8'))
            {
                $filename8 = $this->ResizeImageOther($request->file('image8'));
            }
            else
            {
                $filename8 ='';
            }

            if(SellProduct::where('user_id',$request->user_id)->where('model',$request->model)->get()->count()>0)
            {
                $request->session()->flash('warningMsg',"This is product you have already posted");
                return back()->withInput();
            }

            $product = new SellProduct();
            $product->user_id = $request->user_id;
            $product->category_id = $request->category;
            $product->brand_id = $request->brand;
            $product->model = $request->model;
            $product->color=$request->color;
            $product->price= $request->price;
            $product->minor_dent_scratch = $request->minor;
            $product->major_dent_scratch = $request->major;
            $product->original_accessories_available= $request->accessory;
            $product->screen_is_cracked = $request->screen;
            $product->device_box_available = $request->device;
            $product->device_battery_status = $request->battery;
            $product->device_status = $request->status;
            $product->pta = $request->pta;
            $product->city = $request->city;
            $product->phone = $request->phone;
            $product->img1 = $filename1;
            $product->img2 = $filename2;
            $product->img3 = $filename3;
            $product->img3 = $filename3;
            $product->img4 = $filename4;
            $product->img5 = $filename5;
            $product->img6 = $filename6;
            $product->img7 = $filename7;
            $product->img8 = $filename8;
            $product->detail = $request->detail;
            if($product->save())
            {
                $request->session()->flash('msg',"Your product has been posted");
                return back();
            }

        }
    }

    public function BrandsSellProducts(Request $request)
    {
        $products = SellProduct::whereIn('brand_id',$request->brands)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function CitySellProducts(Request $request)
    {
        $products = SellProduct::whereIn('city',$request->cities)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function StatusSellProducts(Request $request)
    {
        $products = SellProduct::whereIn('device_status',$request->statuses)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsPriceSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereBetween('price',[$fromPrice,$toPrice])->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }
   
    public function PriceSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsPriceCitySellProducts(Request $request)
    {
        $products="";
        $proArr = [];
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereIn('city',$request->cities)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsPriceCityStatusSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereIn('city',$request->cities)->whereIn('device_status',$request->statuses)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function PriceCityStatusSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('city',$request->cities)->whereIn('device_status',$request->statuses)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsPriceStatusSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereIn('device_status',$request->statuses)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function PriceStatusSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('device_status',$request->statuses)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsCityStatusSellProducts(Request $request)
    {
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereIn('city',$request->cities)->whereIn('device_status',$request->statuses)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function PriceCitySellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('city',$request->cities)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

     public function BrandsCitySellProducts(Request $request)
    {
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereIn('city',$request->cities)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsStatusSellProducts(Request $request)
    {
        $products="";
        $proArr = [];;
        $products = SellProduct::whereIn('brand_id',$request->brands)->whereIn('device_status',$request->statuses)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function BrandsPriceStatusSellProductsSellProducts(Request $request)
    {
        $fromPrice = intval($request->from);
        $toPrice = intval($request->to);
        $products = SellProduct::whereIn('device_status',$request->statuses)->where('price', '>=',$fromPrice)->where('price', '<=', $toPrice)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function CityStatusSellProducts(Request $request)
    {
        $products = SellProduct::whereIn('city',$request->cities)->whereIn('device_status',$request->statuses)->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function UpperCityPriceSellProducts(Request $request)
    {
        $query = $request->price;
        $city = $request->city;
        if($query=="Less than 20,000")
        {
            $products = SellProduct::where('city',$city)->where('price', '<',20000)->orderBy('id','desc')->paginate(10);
        }

        else if($query=="Between 20,000 and 30,000")
        {
            $products = SellProduct::where('city',$city)->whereBetween('price',[20000,30000])->orderBy('id','desc')->paginate(10);
        }

        else if($query=="Between 30,000 and 60,000")
        {
             $products = SellProduct::where('city',$city)->whereBetween('price',[30000,60000])->orderBy('id','desc')->paginate(10);
        }


        else if($query=="Between 60,000 and 1,00000")
        {
             $products = SellProduct::where('city',$city)->whereBetween('price',[60000,100000])->orderBy('id','desc')->paginate(10);
        }

        else if($query=="More Than 1,00000")
        {
            $products = SellProduct::where('city',$city)->where('price', '>',100000)->orderBy('id','desc')->paginate(10);
        }
        return view('partials.sell_products_list',compact('products'));
    }

    public function UpperPriceSellProducts(Request $request)
    {
        $query = $request->price;
        if($query=="Less than 20,000")
        {
            $products = SellProduct::where('price', '<',20000)->orderBy('id','desc')->paginate(10);
        }

        else if($query=="Between 20,000 and 30,000")
        {
            $products = SellProduct::whereBetween('price',[20000,30000])->orderBy('id','desc')->paginate(10);
        }

        else if($query=="Between 30,000 and 60,000")
        {
             $products = SellProduct::whereBetween('price',[30000,60000])->orderBy('id','desc')->paginate(10);
        }


        else if($query=="Between 60,000 and 1,00000")
        {
             $products = SellProduct::whereBetween('price',[60000,100000])->orderBy('id','desc')->paginate(10);
        }

        else if($query=="More Than 1,00000")
        {
            $products = SellProduct::where('price', '>',100000)->orderBy('id','desc')->paginate(10);
        }
        return view('partials.sell_products_list',compact('products'));
    }

    public function UpperCitySellProducts(Request $request)
    {
        $city = $request->city;
        $products = SellProduct::where('city',$city)->orderBy('id','desc')->paginate(10);
        return view('partials.sell_products_list',compact('products'));
    }

    public function UpperSearchSellProducts(Request $request)
    {
        $query = $request->get('query');
        $brands = Brand::where('name','like','%'.$query.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}

        if(!empty($brandArr))
        {
            $products = SellProduct::whereIn('brand_id',$brandArr)->distinct()->paginate(10);
        }

        else
        {
            $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->distinct()->paginate(10);
        }

        return view('partials.sell_products_list',compact('products'));
    }

    public function UpperSearchCitySellProducts(Request $request)
    {
        $query = $request->get('query');
        $brands = Brand::where('name','like','%'.$query.'%')->distinct()->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}

        if(!empty($brandArr))
        {
            $products = SellProduct::whereIn('brand_id',$brandArr)->where('sell_products.city','=',$request->city)->distinct()->paginate(10);
        }

        else
        {
            $products = SellProduct::where('sell_products.city','=',$request->city)->where('sell_products.model','like','%'.$query.'%')->distinct()->paginate(10);
        }
        
        return view('partials.sell_products_list',compact('products'));
    }

     public function UpperSearchPriceSellProducts(Request $request)
    {
        $price = $request->price;
        $query = $request->get('query');
        $brands = Brand::where('name','like','%'.$query.'%')->distinct('model')->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}

        if(!empty($brandArr))
        {
            if($price=="Less than 20,000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('price', '<',20000)->distinct()->paginate(10);
            }

            else if($price=="Between 20,000 and 30,000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->whereBetween('price',[20000,30000])->distinct()->paginate(10);
            }

            else if($price=="Between 30,000 and 60,000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->whereBetween('price',[30000,60000])->distinct()->paginate(10);
            }


            else if($price=="Between 60,000 and 1,00000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->whereBetween('price',[60000,100000])->distinct()->paginate(10);
            }

            else if($price=="More Than 1,00000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('price', '>',100000)->distinct()->paginate(10);
            }
        }
        
        else
        {
            if($price=="Less than 20,000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->where('price', '<',20000)->distinct()->paginate(10);
            }

            else if($price=="Between 20,000 and 30,000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->whereBetween('price',[20000,30000])->distinct()->paginate(10);
            }

            else if($price=="Between 30,000 and 60,000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->whereBetween('price',[30000,60000])->distinct()->paginate(10);
            }


            else if($price=="Between 60,000 and 1,00000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->whereBetween('price',[60000,100000])->distinct()->paginate(10);
            }

            else if($price=="More Than 1,00000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->were('price', '>',100000)->distinct()->paginate(10);
            }
        }
        return view('partials.sell_products_list',compact('products'));
    }

     public function UpperSearchCityPriceSellProducts(Request $request)
    {
        $price = $request->price;
        $query = $request->get('query');
        $brands = Brand::where('name','like','%'.$query.'%')->distinct('model')->get();
        foreach ($brands as $value){$brandArr['id'] = $value->id;}

        if(!empty($brandArr))
        {
            if($price=="Less than 20,000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('city','=',$request->city)->where('price', '<',20000)->distinct()->paginate(10);
            }

            else if($price=="Between 20,000 and 30,000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('city','=',$request->city)->whereBetween('price',[20000,30000])->distinct()->paginate(10);
            }

            else if($price=="Between 30,000 and 60,000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('city','=',$request->city)->whereBetween('price',[30000,60000])->distinct()->paginate(1);
            }


            else if($price=="Between 60,000 and 1,00000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('city','=',$request->city)->whereBetween('price',[60000,100000])->distinct()->paginate(10);
            }

            else if($price=="More Than 1,00000")
            {
                $products = SellProduct::whereIn('brand_id',$brandArr)->where('city','=',$request->city)->where('price', '>',100000)->distinct()->paginate(10);
            }
        }
        
        else
        {
            if($price=="Less than 20,000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->where('city','=',$request->city)->where('price', '<',20000)->distinct()->paginate(10);
            }

            else if($price=="Between 20,000 and 30,000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->where('city','=',$request->city)->whereBetween('price',[20000,30000])->distinct()->paginate(10);
            }

            else if($price=="Between 30,000 and 60,000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->where('city','=',$request->city)->whereBetween('price',[30000,60000])->distinct()->paginate(10);
            }


            else if($price=="Between 60,000 and 1,00000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->where('city','=',$request->city)->whereBetween('price',[60000,100000])->distinct()->paginate(10);
            }

            else if($price=="More Than 1,00000")
            {
                $products = SellProduct::where('sell_products.model','like','%'.$query.'%')->where('city','=',$request->city)->were('price', '>',100000)->distinct()->paginate(10);
            }
        }
        return view('partials.sell_products_list',compact('products'));
    }

    public function show($id)
    {
        $product = SellProduct::where('id',$id)->first();
        return view('sell_product_detail',compact(['product']));
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
