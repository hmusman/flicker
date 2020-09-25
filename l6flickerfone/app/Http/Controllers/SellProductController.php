<?php

namespace App\Http\Controllers;

use App\SellProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\Brand;
use Image;
class SellProductController extends Controller
{
    
    public function index()
    {
        //
    }

     public function frontEndProducts()
    {
        $products = SellProduct::orderBy('id','desc')->get();
        $brands = Brand::select('brands.name','brands.id')->join('sell_products','brands.id','=','sell_products.brand_id')->distinct()->get();
        $colors = SellProduct::select('color')->distinct()->get();
        return view('buy_used_mobiles',compact(['products','brands','colors']));
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
        $filename1 = $time.'_'.$filename.'.'.$ext1;
        $img->storeAs('public/admin/images/sellproduct', $filename1);
        $img->storeAs('public/admin/images/sellproduct/thumbnail', $filename1);
        $thumbnailpath = public_path('storage/admin/images/sellproduct/thumbnail/'.$filename1);
        Image::make($thumbnailpath)->resize(175,250)->save(public_path('storage/admin/images/sellproduct/thumbnail/175_'.$filename1));
        Image::make($thumbnailpath)->resize(100,100)->save(public_path('storage/admin/images/sellproduct/thumbnail/100_'.$filename1));
        Image::make($thumbnailpath)->resize(215,215)->save(public_path('storage/admin/images/sellproduct/thumbnail/215_'.$filename1));
        Image::make($thumbnailpath)->resize(400,400)->save(public_path('storage/admin/images/sellproduct/thumbnail/400_'.$filename1));
        return $filename1;
   }

   private function ResizeImageOther($img)
   {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.$filename.'.'.$ext1;
        $img->storeAs('public/admin/images/sellproduct', $filename1);
        $img->storeAs('public/admin/images/sellproduct/thumbnail', $filename1);
        $thumbnailpath = public_path('storage/admin/images/sellproduct/thumbnail/'.$filename1);
        Image::make($thumbnailpath)->resize(100,100)->save(public_path('storage/admin/images/sellproduct/thumbnail/100_'.$filename1));
        Image::make($thumbnailpath)->resize(215,215)->save(public_path('storage/admin/images/sellproduct/thumbnail/215_'.$filename1));
        Image::make($thumbnailpath)->resize(400,400)->save(public_path('storage/admin/images/sellproduct/thumbnail/400_'.$filename1));
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
            'pta'=>'required',
            'city'=>'required'
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

            if($request->hasFile('image9'))
            {
                $filename9 = $this->ResizeImageOther($request->file('image9'));
            }
            else
            {
                $filename9 ='';
            }

            if($request->hasFile('image10'))
            {
                $filename10 = $this->ResizeImageOther($request->file('image10'));
            }
            else
            {
                $filename10 ='';
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
            $product->img9 = $filename9;
            $product->img10 = $filename10;
            if($product->save())
            {
                $request->session()->flash('msg',"Your product has been posted");
                return back();
            }

        }
    }

   
    public function show($id)
    {
        //
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
