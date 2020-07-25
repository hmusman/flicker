<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.products',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.pages.add_product',compact(['categories','brands']));
    }

    
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'brand'=>'required',
            'code'=>'bail | required | numeric',
            'name'=>'bail | required | alpha_dash',
            'price'=>'bail | required | numeric',
            'quantity'=>'bail | required | numeric',
            'description'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $ext1 = $request->file('image1')->extension();
            $ext2 = $request->file('image2')->extension();
            $ext3 = $request->file('image3')->extension();

            if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg') 
            { $filename1= $request->file('image1')->store('admin/images/product','public'); }
            else{ return back()->withErrors(['invalidImage1'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }

            if ($ext2=='png' || $ext2=='jpg' || $ext2=='jpeg') 
            { $filename2= $request->file('image2')->store('admin/images/product','public'); }
            else{ return back()->withErrors(['invalidImage2'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }

            if ($ext3=='png' || $ext3=='jpg' || $ext3=='jpeg') 
            { $filename3= $request->file('image3')->store('admin/images/product','public'); }
            else{ return back()->withErrors(['invalidImage3'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }

            if(Product::where('code',$request->code)->orWhere('name',$request->name)->count() > 0)
            {
                $request->session()->flash('warningMsg',"Product is already exist");
                 return back()->withInput();
            }
            else
            {
                $product = new Product();
                $name = str_replace('_',' ',$request->name);
                $product->brand_id = $request->brand;
                $product->code= $request->code;
                $product->name = $name;
                $product->price = $request->price;
                $product->quantity = $request->quantity;
                $product->image = $filename1;
                $product->dimage = $filename2;
                $product->dimage1 = $filename3;
                $product->description = $request->description;
                $product->category_id = $request->category; 
                if ($product->save())
                {
                    $request->session()->flash('msg',"Product has been added successfully");
                    return redirect()->route('Product.index');
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
        $product = Product::where('id',$id)->first();
        $brands = Brand::all();
        return view('admin.pages.update_product',compact(['brands','categories','product']));
    }

    
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'brand'=>'required',
            'code'=>'bail | required | numeric',
            'name'=>'bail | required | alpha_dash',
            'price'=>'bail | required | numeric',
            'quantity'=>'bail | required | numeric',
            'description'=>'required'
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
                    $filename1= $request->file('image1')->store('admin/images/product','public');
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

            if($request->hasFile('image2'))
            {
                $ext2 = $request->file('image2')->extension();
                if ($ext2=='png' || $ext2=='jpg' || $ext2=='jpeg')
                {
                    $filename2= $request->file('image2')->store('admin/images/product','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage2'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename2 = $request->oldImage2;
            }

            if($request->hasFile('image3'))
            {
                $ext3 = $request->file('image3')->extension();
                if ($ext3=='png' || $ext3=='jpg' || $ext3=='jpeg')
                {
                    $filename3= $request->file('image3')->store('admin/images/product','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage3'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename3 = $request->oldImage3;
            }

            $product = Product::find($id);
            $name = str_replace('_',' ',$request->name);
            $product->brand_id = $request->brand;
            $product->code= $request->code;
            $product->name = $name;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->image = $filename1;
            $product->dimage = $filename2;
            $product->dimage1 = $filename3;
            $product->description = $request->description;
            $product->category_id = $request->category; 
            if ($product->save())
            {
                $request->session()->flash('msg',"Product has been updated successfully");
                return redirect()->route('Product.index');
            }
        }
            
    }

   
    public function destroy(Request $request, $id)
    {
        if(Product::where('id',$id)->delete())
        {
            $request->session()->flash('msg',"Product has been deleted successfully");
            return redirect()->route('Product.index');
        }
    }

   
    public function liveSearch(Request $request)
    {
        if ($request->ajax())
        {

            $query = $request->get('query');
            if ($query!='')
            {
                $data = Product::where('name','like','%'.$query.'%')->get();
            }
            $total = $data->count();
            $output = '
                <div>
                  <button onclick="hideagain();" style="background-color: #ccc;color: black;padding: 7px;width: 39px;font-weight: 600;border-style: none;">X</button>
                </div>
                <div style="width:80%; margin:0px auto; text-align:center;margin-bottom:10px; ">Yours Items : '.$total.'</div>
            ';
            if ($total>0)
            {
                foreach ($data as $row)
                {
                    $image = 'storage/'.$row->image;
                    $output.='
                        <li style="width:80% !important; margin-left:10%!important; margin-right:10% !important;margin-bottom:2% !important; margin-top:2% !important;">
                          <div class="row">
                            <div class="col-md-12">
                              <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;     margin-right: 115px;">
                                <center>
                                  <image src="'.asset($image).'"  style="margin-top:3px; width:130px; height:130px;" />
                                </center>
                                <a href="/ProductDetail/'.$row->id.'" style="text-align: center;">'. $row->name .'
                    
                                  <h6>PKR '.$row->price.'</h6>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>

                    ';
                }
            }
            
            $records = array('product_data'=>$output);
            echo json_encode($records);
        }

    }
}
