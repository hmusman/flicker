<?php

namespace App\Http\Controllers;

use App\SellProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\Brand;
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
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
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
                $ext1 = $request->file('image1')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename1= $request->file('image1')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage1'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            
            if($request->hasFile('image2'))
            {
                $ext1 = $request->file('image2')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename2= $request->file('image2')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage2'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename2 ='';
            }


            if($request->hasFile('image3'))
            {
                $ext1 = $request->file('image3')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename3= $request->file('image3')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage3'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename3 ='';
            }


            if($request->hasFile('image4'))
            {
                $ext1 = $request->file('image4')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename4= $request->file('image4')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage4'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename4 ='';
            }


            if($request->hasFile('image5'))
            {
                $ext1 = $request->file('image5')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename5= $request->file('image5')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage5'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename5 ='';
            }


            if($request->hasFile('image6'))
            {
                $ext1 = $request->file('image6')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename6= $request->file('image6')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage6'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename6 ='';
            }



            if($request->hasFile('image7'))
            {
                $ext1 = $request->file('image7')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename7= $request->file('image7')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage7'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename7 ='';
            }

            if($request->hasFile('image8'))
            {
                $ext1 = $request->file('image8')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename8= $request->file('image8')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage8'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename8 ='';
            }

            if($request->hasFile('image9'))
            {
                $ext1 = $request->file('image9')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename9= $request->file('image9')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage9'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename9 ='';
            }

            if($request->hasFile('image10'))
            {
                $ext1 = $request->file('image10')->extension();
                if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                {
                    $filename10= $request->file('image10')->store('admin/images/sellproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage10'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
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
