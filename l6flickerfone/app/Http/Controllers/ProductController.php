<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Category;
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
        return view('admin.pages.add_product',compact('categories'));
    }

    
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'code'=>'bail | required | numeric',
            'name'=>'bail | required | alpha_dash',
            'price'=>'bail | required | numeric',
            'quantity'=>'bail | required | numeric',
            'description'=>'required',
            'image'=>'required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $ext = $request->file('image')->extension();
            if ($ext=='png' || $ext=='jpg' || $ext=='jpeg')
            {
                if(Product::where('code',$request->code)->orWhere('name',$request->name)->count() > 0)
                {
                    $request->session()->flash('warningMsg',"Product is already exist");
                     return back()->withInput();
                }
                else
                {
                    $filename= $request->file('image')->store('admin/images/product','public');
                    $product = new Product();
                    $name = str_replace('_',' ',$request->name);
                    $product->code= $request->code;
                    $product->name = $name;
                    $product->price = $request->price;
                    $product->quantity = $request->quantity;
                    $product->image = $filename;
                    $product->description = $request->description;
                    $product->category_id = $request->category; 
                    if ($product->save())
                    {
                        $request->session()->flash('msg',"Product has been added successfully");
                        return redirect()->route('Product.index');
                    }
                }
                

            }
            else
            {

                 return back()->withErrors(['invalidImage'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
            }
        }
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id)->first();
        return view('admin.pages.update_product',compact(['categories','product']));
    }

    
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
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
            $filename = "";
            if($request->hasFile('image'))
            {
                $ext = $request->file('image')->extension();
                if ($ext=='png' || $ext=='jpg' || $ext=='jpeg')
                {
                    $filename= $request->file('image')->store('admin/images/product','public');
                }
                else
                {

                     return back()->withErrors(['invalidImage'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                }
            }
            else
            {
                $filename = $request->oldImage;
            }

            $product = Product::find($id);
            $name = str_replace('_',' ',$request->name);
            $product->code= $request->code;
            $product->name = $name;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->image = $filename;
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
                    $output.='
                        <li style="width:80% !important; margin-left:10%!important; margin-right:10% !important;margin-bottom:2% !important; margin-top:2% !important;">
                          <div class="row">
                            <div class="col-md-12">
                              <div style="height: 200px; width:100%; border: 3px rgb(121, 123, 124) solid;     margin-right: 115px;">
                                <center>
                                  <image src="'.asset('storage/images/LiveSrchImages/images.png').'" />
                                </center>
                                <a href="#" style="text-align: center;">'. $row->name .'
                    
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
