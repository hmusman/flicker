<?php

namespace App\Http\Controllers\pricecalculatorproducts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\pricecalculatorproduct\PriceCalculatorProduct;
use App\Category;
use App\Brand;
use App\PriceColorVariation;
use Session;
use DB;
class PriceCalculatorProductController extends Controller
{
   
    public function index()
    {
        $products = PriceCalculatorProduct::all();
        return view('admin.pages.pricecalculatorproducts.products',compact('products'));
    }
    
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.pages.pricecalculatorproducts.add_product',compact(['categories','brands']));
    }

    
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'brand'=>'required',
            'code'=>'bail | required | numeric',
            'name'=>'bail | required | alpha_dash',
            'image1'=>'required',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $ext1 = $request->file('image1')->extension();
            if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg') 
            { $filename1= $request->file('image1')->store('admin/images/pricecalculatorproduct','public'); }
            else{ return back()->withErrors(['invalidImage1'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }

            if(PriceCalculatorProduct::where('code',$request->code)->orWhere('name',$request->name)->count() > 0)
            {
                $request->session()->flash('warningMsg',"Product is already exist");
                 return back()->withInput();
            }
            else
            {
                $product = PriceCalculatorProduct::create([
                'brand_id' => $request->brand,
                'code'=> $request->code,
                'name'=>str_replace('_',' ',$request->name),
                'image'=> $filename1,
                'category_id' => $request->category,
                'minor_dent_scratch' => $request->minor_dent,
                'major_dent_scratch' => $request->major_dent,
                'original_accessories_available' => $request->original_accessories_available,
                'screen_is_cracked' => $request->screen_is_cracked,
                'device_box_available' => $request->device_box_available,
                'device_battery_status' => $request->device_battery_status,
                ]);
               
                if ($product)
                {
                    for($i=0; $i<count($request->variation_color); $i++)
                    {
                        if($request->variation_color[$i] !='')
                        {
                            for($j=0; $j<count($request->variation_storage[$i]); $j++)
                            {
                                $variation = new PriceColorVariation();
                                $variation->product_id = $product->id;
                                $variation->color = $request->variation_color[$i];
                                $variation->storage = $request->variation_storage[$i][$j];
                                $variation->price = $request->variation_price[$i][$j];
                                $variation->save();
                            }

                        }
                    }

                    $request->session()->flash('msg',"Product has been added successfully");
                    return redirect()->route('PriceCalculatorProduct.index');
                }
            }
        }
    }


    public function show($id)
    {
        $product = Product::where('id',$id)->first();
        return view('product_detail',compact('product'));
    }
    
    public function edit($id)
    {
        $categories = Category::all();
        $product = PriceCalculatorProduct::where('id',$id)->first();
        $brands = Brand::all();
        return view('admin.pages.pricecalculatorproducts.update_product',compact(['brands','categories','product']));
    }

    
   public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'brand'=>'required',
            'code'=>'bail | required | numeric',
            'name'=>'bail | required | alpha_dash',
        ]);

        if($validations->fails())
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
                    $filename1= $request->file('image1')->store('admin/images/pricecalculatorproduct','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage1'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename1 = $request->oldImage1;
            }

            $product = PriceCalculatorProduct::find($id);
            $name = str_replace('_',' ',$request->name);
            $product->brand_id = $request->brand;
            $product->code= $request->code;
            $product->name = $name;
            $product->image = $filename1;
            $product->category_id = $request->category; 
            $product->minor_dent_scratch = $request->minor_dent;
            $product->major_dent_scratch = $request->major_dent;
            $product->original_accessories_available = $request->original_accessories_available;
            $product->screen_is_cracked = $request->screen_is_cracked;
            $product->device_box_available = $request->device_box_available;
            $product->device_battery_status = $request->device_battery_status;

            if ($product->save())
            {
                PriceColorVariation::where('product_id',$id)->delete();
                for($i=0; $i<count($request->variation_color); $i++)
                {
                    if($request->variation_color[$i] !='')
                    {
                        for($j=0; $j<count($request->variation_storage[$i]); $j++)
                        {
                            $variation = new PriceColorVariation();
                            $variation->product_id = $product->id;
                            $variation->color = $request->variation_color[$i];
                            $variation->storage = $request->variation_storage[$i][$j];
                            $variation->price = $request->variation_price[$i][$j];
                            $variation->save();
                        }

                    }
                }
                $request->session()->flash('msg',"Product has been updated successfully");
                return redirect()->route('PriceCalculatorProduct.index');
            }
        }
            
    }

   
    public function destroy(Request $request, $id)
    {
        if(PriceCalculatorProduct::where('id',$id)->delete())
        {
            $request->session()->flash('msg',"Product has been deleted successfully");
            return redirect()->route('PriceCalculatorProduct.index');
        }
    }
 

    public function colorFilterStorage(Request $request)
    {
        $storage = ColorVariation::where([['cproduct_id',$request->id],['color',$request->color]])->get();
        return view('partials.color_storage',compact('storage'));
    }

    public function StorageFilterPrice(Request $request)
    {
         $storage = ColorVariation::where([['cproduct_id',$request->id],['color',$request->color],['storage',$request->storage]])->first();
         return $storage->price;
    }

    public function BrandProductDetail(Request $request)
    {
        $product = PriceCalculatorProduct::where('id',$request->id)->first();
        return view('partials.brand_product_detail',compact(('product')));
    }

    public function BrandProductColorItem(Request $request)
    {
        $products = PriceCalculatorProduct::join('price_variations','price_calculator_products.id','=','price_variations.product_id')->where('price_variations.product_id',$request->id)->where('price_variations.color',$request->color)->select('price_calculator_products.id','price_calculator_products.name','price_calculator_products.image','price_variations.product_id','price_variations.color','price_variations.storage','price_variations.price')->get();
        return view('partials.brand_single_color_product',compact('products'));
    }

    public function BrandProductEstimate(Request $request)
    {
        $csproduct = PriceCalculatorProduct::join('price_variations','price_calculator_products.id','=','price_variations.product_id')->where('price_variations.product_id',$request->id)->where('price_variations.color',$request->color)->where('price_variations.storage',$request->storage)->select('price_calculator_products.id','price_calculator_products.minor_dent_scratch','price_calculator_products.major_dent_scratch','price_calculator_products.original_accessories_available','price_calculator_products.device_battery_status','price_calculator_products.device_box_available','price_calculator_products.screen_is_cracked','price_calculator_products.name','price_calculator_products.image','price_variations.color','price_variations.storage','price_variations.price')->first();
        return view('partials.brand_product_estimate',compact('csproduct'));
    }

}
