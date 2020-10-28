<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Category;
use App\Brand;
use App\ColorVariation;
use Session;
use DB;
use Image;
use App\ProductOpinion;
class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.products',compact('products'));
    }

    public function frontEndProducts()
    {
        $products = Product::all();
        $brands = Brand::select('brands.name','brands.id')->join('sma_products','brands.id','=','sma_products.brand_id')->distinct()->get();
        $colors = Product::select('color')->distinct()->get();
        return view('buy_used_mobile_phone',compact(['products','brands','colors']));
    }
    
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.pages.add_product',compact(['categories','brands']));
    }

    private function ResizeImage($img)
    {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/product', $filename1);
        $img->storeAs('public/admin/images/product/thumbnail', $filename1);
        $thumbnailpath = public_path('storage/admin/images/product/thumbnail/'.$filename1);
        Image::make($img->getRealPath())->resize(175,250)->save(public_path('storage/admin/images/product/thumbnail/175_'.$filename1));
        Image::make($img->getRealPath())->resize(700,700)->save(public_path('storage/admin/images/product/thumbnail/700_'.$filename1));
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage/admin/images/product/thumbnail/100_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage/admin/images/product/thumbnail/215_'.$filename1));
        Image::make($img->getRealPath())->resize(500,500)->save(public_path('storage/admin/images/product/thumbnail/500_'.$filename1));
        return $filename1;
    }

    private function ResizeImageOther($img)
    {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/product', $filename1);
        $img->storeAs('public/admin/images/product/thumbnail', $filename1);
        $thumbnailpath = public_path('storage/admin/images/product/thumbnail/'.$filename1);
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage/admin/images/product/thumbnail/100_'.$filename1));
        Image::make($img->getRealPath())->resize(700,700)->save(public_path('storage/admin/images/product/thumbnail/700_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage/admin/images/product/thumbnail/215_'.$filename1));
        Image::make($img->getRealPath())->resize(500,500)->save(public_path('storage/admin/images/product/thumbnail/500_'.$filename1));
        return $filename1;
    }
    
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'brand'=>'required',
            'code'=>'bail | required | numeric',
            'name'=>'bail | required | alpha_dash',
            'color'=>'required',
            'price'=>'bail | required | numeric',
            'quantity'=>'bail | required | numeric',
            'description'=>'required',
            'image1'=>'required|mimes:png,jpg,jpeg',
            'image2'=>'required|mimes:png,jpg,jpeg',
            'image3'=>'required|mimes:png,jpg,jpeg',
            'image4'=>'required|mimes:png,jpg,jpeg',
            'image5'=>'required|mimes:png,jpg,jpeg',
            'image6'=>'required|mimes:png,jpg,jpeg',
            'image7'=>'required|mimes:png,jpg,jpeg',
            'image8'=>'required|mimes:png,jpg,jpeg',
            'image9'=>'required|mimes:png,jpg,jpeg',
            'image10'=>'required|mimes:png,jpg,jpeg',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            // $ext1 = $request->file('image1')->extension();
            // $ext2 = $request->file('image2')->extension();
            // $ext3 = $request->file('image3')->extension();
            // // $ext4 = $request->file('video')->extension();
            // if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg') 
            // { $filename1= $request->file('image1')->store('admin/images/product','public'); }
            // else{ return back()->withErrors(['invalidImage1'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }

            // if ($ext2=='png' || $ext2=='jpg' || $ext2=='jpeg') 
            // { $filename2= $request->file('image2')->store('admin/images/product','public'); }
            // else{ return back()->withErrors(['invalidImage2'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }

            // if ($ext3=='png' || $ext3=='jpg' || $ext3=='jpeg') 
            // { $filename3= $request->file('image3')->store('admin/images/product','public'); }
            // else{ return back()->withErrors(['invalidImage3'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput(); }
            $filename1 = $this->ResizeImage($request->file('image1'));
            $filename2 = $this->ResizeImageOther($request->file('image2'));
            $filename3 = $this->ResizeImageOther($request->file('image3'));
            if($request->hasFile('image4')){$filename4 = $this->ResizeImageOther($request->file('image4'));}
            if($request->hasFile('image5')){$filename5 = $this->ResizeImageOther($request->file('image5'));}
            if($request->hasFile('image6')){$filename6 = $this->ResizeImageOther($request->file('image6'));}
            if($request->hasFile('image7')){$filename7 = $this->ResizeImageOther($request->file('image7'));}
            if($request->hasFile('image8')){$filename8 = $this->ResizeImageOther($request->file('image8'));}
            if($request->hasFile('image9')){$filename9 = $this->ResizeImageOther($request->file('image9'));}
            if($request->hasFile('image10')){$filename10 = $this->ResizeImageOther($request->file('image10'));}
            if(Product::where('code',$request->code)->orWhere('name',$request->name)->count() > 0)
            {
                

                $request->session()->flash('warningMsg',"Product is already exist");
                 return back()->withInput();
            }
            else
            {
                $product = Product::create([
                'brand_id' => $request->brand,
                'code'=> $request->code,
                'name'=>str_replace('_',' ',$request->name),
                'color' => $request->color,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'launch_announced' => $request->announced,
                'launch_status' => $request->status,
                'body_dimensions' => $request->dimension,
                'body_weight' => $request->weight,
                'body_build' => $request->build,
                'body_sim' => $request->sim,
                'display_type' => $request->type,
                'display_size' => $request->size,
                'display_resolution' => $request->resolution,
                'display_protection' => $request->protection,
                'platform_os' => $request->os,
                'platform_chipset' => $request->chipset,
                'platform_cpu' => $request->cpu,
                'platform_gpu' => $request->gpu,
                'memory_card_slot' => $request->card_slot,
                'memory_ram' => $request->ram,
                'memory_storage' => $request->storage,
                'main_type' => $request->main_type,
                'main_type_value' => $request->main_type_value,
                'main_feature' => $request->main_feature,
                'main_video' => $request->main_video,
                'selfie_single' => $request->selfie_single,
                'selfie_feature' => $request->selfie_feature,
                'selfie_video' => $request->selfie_video,
                'sound_loudspeaker' => $request->loudspeaker,
                'sound_jack' => $request->jack,
                'sound_mic'=> $request->mic,
                "comms_wlan" => $request->wlan,
                'comms_bluetooth' => $request->bluetooth,
                'comms_gps' => $request->gps,
                'comms_nfc' => $request->nfc,
                'comms_radio' => $request->radio,
                'comms_usb' => $request->usb,
                'feature_sensor' => $request->sensor,
                'battery_status' => $request->battery_type,
                'battery_talk_time' => $request->talk_time,
                'battery_music' => $request->music,
                'image'=> $filename1,
                'dimage' => $filename2,
                'dimage1' => $filename3,
                'img4'=> $filename4,
                'img5' => $filename5,
                'img6' => $filename6,
                'img7'=> $filename7,
                'img8' => $filename8,
                'img9' => $filename9,
                'img10' => $filename10,
                'description' => $request->description,
                'category_id' => $request->category,
                "video_link" => $request->video_link,  
                'os' => $request->brief_os,
                "processor" => $request->brief_processor,
                'memory' => $request->brief_memory,
                'storage' => $request->brief_storage,
                'camera' => $request->brief_camera,
                'size' => $request->brief_size,
                'resolution' => $request->brief_resolution,
                'connectivity' => $request->brief_connectivity,
                'battery' => $request->brief_battery,
                'height' => $request->brief_height,
                'width' => $request->brief_width,
                'depth' => $request->brief_depth,
                'brief_weight' => $request->brief_weight,
                'detail_check'=>$request->detail_check,
                'other_detail'=>$request->other_detail
                ]);
               
                if ($product)
                {
                    if(count($request->variation_color)>0)
                    {
                        for($i=0; $i<count($request->variation_color); $i++)
                        {
                            if($request->variation_color[$i] !='')
                            {
                                for($j=0; $j<count($request->variation_storage[$i]); $j++)
                                {
                                    $vari_img = $request->variation_image; 
                                    if(!empty($vari_img[$i]))
                                    {
                                        $f = $this->ResizeImageOther($vari_img[$i]);
                                    }

                                    $variation = new ColorVariation();
                                    $variation->product_id = $product->id;
                                    $variation->color = $request->variation_color[$i];
                                    $variation->storage = $request->variation_storage[$i][$j];
                                    $variation->price = $request->variation_price[$i][$j];
                                    $variation->img= $f;
                                    $variation->save();
                                }

                            }
                        }
                    }
                    

                    $request->session()->flash('msg',"Product has been added successfully");
                    return redirect()->route('Product.index');
                }
            }
        }
    }


    public function show($id)
    {
        $product = Product::where('id',$id)->first();
        $opinions = ProductOpinion::where('product_id',$id)->paginate(15);

        return view('product_detail',compact(['product','opinions']));
    }


      public function showTwo($id)
    {
        $product = Product::where('id',$id)->first();
        $opinions = ProductOpinion::where('product_id',$id)->paginate(15);
        return view('ProductDetailTwo',compact(['product','opinions']));
    }


    public function commonCode($data)
    {
        $output = "";
        $count = $data->count();
        if($count>0)
        {
            $i=0;
            foreach($data as $row)
            {
                $image = 'storage/'.$row->image;
                $output .= '<div class="row buyleft">
                        <a href="ProductDetail/'.$row->id.'"></a>
                        <div class="col-xs-12 mainboxbuy"><a href="ProductDetail/'.$row->id.'">
                          <div class="col-sm-3" align="center">
                              <img class="img-responsive img-thumbnail" src="'.asset($image).'">
                          </div>
                          </a>
                          <div class="col-sm-9">
                            <a style="color: black !important;" href="ProductDetail/'.$row->id.'">
                              <h3 id="buytextmain" style="font-size:20px;">'.ucwords($row->name).'</h3>

                              <p>dlkbjoidfv</p>
                              <div class="clearfix"></div>
                            </a>
                            <div class="row buymargintop"><a style="color: black !important;" href="ProductDetail/'.$row->id.'">
                              <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                              <p class="buyprice">PKR  '.$row->price.'</p>
                              <table class="table-bordered"><tbody><tr><td style="padding:5px;color:#444;background:#e0e0e1;">Fair</td><td style="padding:5px;background:#028f63;color:#fff;">Good</td><td style="padding:5px;color:#444;background:#e0e0e1;">Excellent</td></tr></tbody></table></div>
                              </a>
                              <div class=" col-sm-8 col-md-8 col-lg-8">
                                <a  style="color: black !important;" href="ProductDetail/'.$row->id.'">
                                  <table>
                                    <tbody>
                                      <tr>
                                        <td><b>Negotiable: </b> </td>
                                        <td><b>Yes</b></td>
                                      </tr>
                                      <tr>
                                        <td>From:</td>
                                        <td>Gujrat</td>
                                      </tr>
                                      <tr>
                                        <td>Brand:</td>
                                        <td>Apple</td>
                                      </tr>
                                      <tr>
                                        <td>Model:</td>
                                        <td>iphone x</td>
                                      </tr>
                                      <tr>
                                        <td>Network:</td>
                                        <td>unlocked</td>
                                      </tr>
                                      <tr>
                                        <td>PTA Approved:</td>
                                        <td>Yes</td>
                                      </tr>
                                      <tr>
                                        <td>Posted Date:</td>
                                        <td>2020-04-12 09:15:51</td>
                                      </tr>
                                  </tbody>
                                </table>
                                  </a><a href="ProductDetail/'.$row->id.'">
                                  <button class="btn-xs button3 buydetailsbtn">Contact / Details</button>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>';
            }
            
            
        }
        else
        {
            $output.="No Product is Available";
        }
        return $output;
    }// commonCode
    
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
            'color'=>'required',
            'price'=>'bail | required | numeric',
            'quantity'=>'bail | required | numeric',
            'description'=>'required',
            'image1'=>'mimes:png,jpg,jpeg',
            'image2'=>'mimes:png,jpg,jpeg',
            'image3'=>'mimes:png,jpg,jpeg'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if($request->hasFile('image1'))
            {
                $filename1 = $this->ResizeImage($request->file('image1'));
                // $ext1 = $request->file('image1')->extension();
                // if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
                // {
                //     $filename1= $request->file('image1')->store('admin/images/product','public');
                // }
                // else
                // {

                //      return back()->withErrors(['invalidImage1'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                // }
            }
            else
            {
                $filename1 = $request->oldImage1;
            }

            if($request->hasFile('image2'))
            {
                $filename2 = $this->ResizeImageOther($request->file('image2'));
                // $ext2 = $request->file('image2')->extension();
                // if ($ext2=='png' || $ext2=='jpg' || $ext2=='jpeg')
                // {
                //     $filename2= $request->file('image2')->store('admin/images/product','public');
                // }
                // else
                // {

                //      return back()->withErrors(['invalidImage2'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                // }
            }
            else
            {
                $filename2 = $request->oldImage2;
            }

            if($request->hasFile('image3'))
            {
                $filename3 = $this->ResizeImageOther($request->file('image3'));
                // $ext3 = $request->file('image3')->extension();
                // if ($ext3=='png' || $ext3=='jpg' || $ext3=='jpeg')
                // {
                //     $filename3= $request->file('image3')->store('admin/images/product','public');
                // }
                // else
                // {

                //      return back()->withErrors(['invalidImage3'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
                // }
            }
            else
            {
                $filename3 = $request->oldImage3;
            }

            if($request->hasFile('image4')){$filename4 = $this->ResizeImageOther($request->file('image4'));}else{$filename4 = $request->oldImage4;}
            if($request->hasFile('image5')){$filename5 = $this->ResizeImageOther($request->file('image5'));}else{$filename5 = $request->oldImage5;}
            if($request->hasFile('image6')){$filename6 = $this->ResizeImageOther($request->file('image6'));}else{$filename6 = $request->oldImage6;}
            if($request->hasFile('image7')){$filename7 = $this->ResizeImageOther($request->file('image7'));}else{$filename7 = $request->oldImage7;}
            if($request->hasFile('image8')){$filename8 = $this->ResizeImageOther($request->file('image8'));}else{$filename8 = $request->oldImage8;}
            if($request->hasFile('image9')){$filename9 = $this->ResizeImageOther($request->file('image9'));}else{$filename9 = $request->oldImage9;}
            if($request->hasFile('image10')){$filename10 = $this->ResizeImageOther($request->file('image10'));}else{$filename10 = $request->oldImage10;}

            $product = Product::find($id);
            $name = str_replace('_',' ',$request->name);
            $product->brand_id = $request->brand;
            $product->code= $request->code;
            $product->name = $name;
            $product->color = $request->color;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->launch_announced = $request->announced;
            $product->launch_status = $request->status;
            $product->body_dimensions = $request->dimension;
            $product->body_weight = $request->weight;
            $product->body_build = $request->build;
            $product->body_sim = $request->sim;
            $product->display_type = $request->type;
            $product->display_size = $request->size;
            $product->display_resolution = $request->resolution;
            $product->display_protection = $request->protection;
            $product->platform_os = $request->os;
            $product->platform_chipset = $request->chipset;
            $product->platform_cpu = $request->cpu;
            $product->platform_gpu = $request->gpu;
            $product->memory_card_slot = $request->card_slot;
            $product->memory_ram = $request->ram;
            $product->memory_storage = $request->storage;
            $product->main_type = $request->main_type;
            $product->main_type_value = $request->main_type_value;
            $product->main_feature = $request->main_feature;
            $product->main_video = $request->main_video;
            $product->selfie_single = $request->selfie_single;
            $product->selfie_feature = $request->selfie_feature;
            $product->selfie_video = $request->selfie_video;
            $product->sound_loudspeaker = $request->loudspeaker;
            $product->sound_jack = $request->jack;
            $product->sound_mic= $request->mic;
            $product->comms_wlan = $request->wlan;
            $product->comms_bluetooth = $request->bluetooth;
            $product->comms_gps = $request->gps;
            $product->comms_nfc = $request->nfc;
            $product->comms_radio = $request->radio;
            $product->comms_usb = $request->usb;
            $product->feature_sensor = $request->sensor;
            $product->battery_status = $request->battery_type;
            $product->battery_talk_time = $request->talk_time;
            $product->battery_music = $request->music;
            $product->image = $filename1;
            $product->dimage = $filename2;
            $product->dimage1 = $filename3;
            $product->img4 = $filename4;
            $product->img5 = $filename5;
            $product->img6 = $filename6;
            $product->img7 = $filename7;
            $product->img8 = $filename8;
            $product->img9 = $filename9;
            $product->img10 = $filename10;
            $product->description = $request->description;
            $product->category_id = $request->category;
            $product->video_link = $request->video_link;
            $product->os = $request->brief_os;
            $product->processor = $request->brief_processor;
            $product->memory = $request->brief_memory;
            $product->storage = $request->brief_storage;
            $product->camera = $request->brief_camera;
            $product->size = $request->brief_size;
            $product->resolution = $request->brief_resolution;
            $product->connectivity = $request->brief_connectivity;
            $product->battery = $request->brief_battery;
            $product->height = $request->brief_height;
            $product->width = $request->brief_width;
            $product->depth = $request->brief_depth;
            $product->brief_weight = $request->brief_weight;
            $product->detail_check = $request->detail_check;
            $product->other_detail = $request->other_detail;

            if ($product->save())
            {
                
                if(count($request->variation_color)>0)
                {
                    ColorVariation::where('product_id',$id)->delete();
                    for($i=0; $i<count($request->variation_color); $i++)
                    {
                        if($request->variation_color[$i] !='')
                        {
                            for($j=0; $j<count($request->variation_storage[$i]); $j++)
                            {
                                $vari_img = $request->variation_image; 
                                if(!empty($vari_img[$i]))
                                {
                                    $f = $this->ResizeImageOther($vari_img[$i]);
                                }
                                else{
                                    $f = $request->old_variation_img[$i];
                                }

                                $variation = new ColorVariation();
                                $variation->product_id = $product->id;
                                $variation->color = $request->variation_color[$i];
                                $variation->storage = $request->variation_storage[$i][$j];
                                $variation->price = $request->variation_price[$i][$j];
                                $variation->img= $f;
                                $variation->save();
                            }

                        }
                    }
                }
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

    public function Opinions($id)
    {
        $product = Product::where('id',$id)->first();
        $opinions = $product->opinions;
        return view('admin.pages.product_opinions',compact('opinions'));
    }
    public function liveSearch_old(Request $request)
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

    }// livesearch

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
         <p style="background-color: white;color: black;padding: 7px;font-weight: 600;border-style: none;">DEVICES  <button id="srchbtnid" onclick="hideagain();" style="margin-left: 269px;
          background-color: #f8f7f7;
          color: black;
       
          font-weight: 600;
          border-style: none; outline:none; cursor:pointer;">X</button></p>
        </div>
            ';
            if ($total>0)
            {
                foreach ($data as $row)
                {
                    $image = 'storage/admin/images/product/thumbnail/100_'.$row->image;
                    $output.='
                        <li>
                          <div class="row">
                            <div class="col-md-2">
                              <div id="setwidth" style="    height: 115px; width:100%;      margin-right: 115px;">
                                <img src="'.asset($image).'" style="  padding-left: 7px;  height: 91px;  ">
                                 </div>
                            </div>
                            <div class="col-md-10">
                              <div id="setwidth" style="    height: 115px; width:100%;       margin-top: -15px; margin-left: 24px; margin-right: 115px;">  
                                <a href="'.route("ProductDetail",$row->id).'">'. ucwords($row->name) .'         
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

    }// livesearch

   
    public function priceSearch(Request $request)
    {
        $output = "";
        if($request->ajax())
        { 
            $min = $request->minprice;
            $max = $request->maxprice;
            $data = Product::whereBetween('price',[$min,$max])->distinct()->get();
            $count = $data->count();
            return json_encode(array('priceData'=> $this->commonCode($data),'total'=>$count));  
        }
        

    }// priceSearch

     public function brandSearch(Request $request)
    {
        $output = "";
        if($request->ajax())
        { 
            $data = Product::where('brand_id',$request->brand)->get();
            $count = $data->count();
            return json_encode(array('priceData'=> $this->commonCode($data),'total'=>$count));
        }
        

    }// brnadSearch

    public function colorSearch(Request $request)
    {
        $output = "";
        if($request->ajax())
        { 
            $data = Product::where('color',$request->color)->get();
            $count = $data->count();
            return json_encode(array('priceData'=> $this->commonCode($data),'total'=>$count));  
        }
        

    }// colorSearch

    public function citySearch(Request $request)
    {
        $output = "";
        if($request->ajax())
        { 
            $data = Product::where('city',$request->city)->get();
            $count = $data->count();
            return json_encode(array('priceData'=> $this->commonCode($data),'total'=>$count));
        }
        

    }// citySearch



    public function adviceComparison($id)
    {
        $product = Product::where('id',$id)->first();
        return view('advice_comarison',compact('product'));
    }

     public function oldAdviceComparison()
    {
        return view('advice_comarison_old');
    }

    public function adviceComparisonAll(Request $request)
    {
        $query = $request->get('query');
        $hide = $request->get('hideFun');
        $product_list = Product::where('name','like','%'.$query.'%')->get();
        $total = $product_list->count();
        return view('partials.comparison_list',compact(['product_list','total','hide']));
    }

    public function singleCompareProductDetail(Request $request)
    {
        $product = Product::where('id',$request->id)->first();
        return view('partials.single_compare_product_detail',compact(['product']));
    }

    public function colorFilterStorage(Request $request)
    {
        $storage = ColorVariation::where([['product_id',$request->id],['color',$request->color]])->get();
        return view('partials.color_storage',compact('storage'));
    }

    public function colorFilterImg(Request $request)
    {
        $storage = ColorVariation::select('img')->where([['product_id',$request->id],['color',$request->color]])->first();
        return $storage->img;
    }

    public function StorageFilterPrice(Request $request)
    {
         $storage = ColorVariation::where([['product_id',$request->id],['color',$request->color],['storage',$request->storage]])->first();
         return $storage->price;
    }

    public function BrandProductDetail(Request $request)
    {
        $product = Product::where('id',$request->id)->first();
        return view('partials.brand_product_detail',compact(('product')));
    }

    public function BrandProductColorItem(Request $request)
    {
        $products = Product::join('variations','sma_products.id','=','variations.product_id')->where('variations.product_id',$request->id)->where('variations.color',$request->color)->select('sma_products.id','sma_products.name','sma_products.image','variations.product_id','variations.color','variations.storage','variations.price')->get();
        return view('partials.brand_single_color_product',compact('products'));
    }

    public function BrandProductEstimate(Request $request)
    {
        $csproduct = Product::join('variations','sma_products.id','=','variations.product_id')->where('variations.product_id',$request->id)->where('variations.color',$request->color)->where('variations.storage',$request->storage)->select('sma_products.id','sma_products.brand_id','sma_products.minor_dent_scratch','sma_products.major_dent_scratch','sma_products.original_accessories_available','sma_products.device_battery_status','sma_products.device_box_available','sma_products.screen_is_cracked','sma_products.name','sma_products.image','variations.color','variations.storage','variations.price')->first();
        return view('partials.brand_product_estimate',compact('csproduct'));
    }

    public function ShopPage()
    {
        $brands = Brand::select('brands.name','brands.id')->join('sma_products','brands.id','=','sma_products.brand_id')->distinct('brands.name')->get();
        $products = Product::orderBy('id','desc')->paginate(9);
        return view('shop', compact(['brands','products'])); 
    }

    public function ShopBrandProducts(Request $request)
    {
        $nView = $request->nView;
        $products =  Product::where('brand_id',$request->id)->orderBy('id','desc')->paginate($nView);
        return view('partials.shop_products_list',compact('products'))->render();
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $products = Product::orderBy('id','desc')->paginate(9);
      return view('partials.shop_products_list', compact('products'))->render();
     }
    }
    public function ShopViewProducts(Request $request)
    {
        $nView = $request->nView;
        $products =  Product::orderBy('id','desc')->paginate($nView);
        return view('partials.shop_products_list',compact('products'));
    }

    public function ShopPriceProducts(Request $request)
    {
        $query = $request->price;
        $nView = $request->nView;
        if($query=="Less than 20,000")
        {
            $products = Product::where('price', '<',20000)->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 20,000 and 30,000")
        {
            $products = Product::whereBetween('price',[20000,30000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 30,000 and 60,000")
        {
             $products = Product::whereBetween('price',[30000,60000])->orderBy('id','desc')->paginate($nView);
        }


        else if($query=="Between 60,000 and 1,00000")
        {
             $products = Product::whereBetween('price',[60000,100000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="More Than 1,00000")
        {
            $products = Product::where('price', '>',100000)->orderBy('id','desc')->paginate($nView);
        }

        return view('partials.shop_products_list',compact('products'));
    }

    public function ShopBrandPriceProducts(Request $request)
    {
        $query = $request->price;
        $id = $request->brand;
        $nView = $request->nView;
        if($query=="Less than 20,000")
        {
            $products = Product::where('brand_id',$id)->where('price', '<',20000)->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 20,000 and 30,000")
        {
            $products = Product::where('brand_id',$id)->whereBetween('price',[20000,30000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="Between 30,000 and 60,000")
        {
             $products = Product::where('brand_id',$id)->whereBetween('price',[30000,60000])->orderBy('id','desc')->paginate($nView);
        }


        else if($query=="Between 60,000 and 1,00000")
        {
             $products = Product::where('brand_id',$id)->whereBetween('price',[60000,100000])->orderBy('id','desc')->paginate($nView);
        }

        else if($query=="More Than 1,00000")
        {
            $products = Product::where('brand_id',$id)->where('price', '>',100000)->orderBy('id','desc')->paginate($nView);
        }

        return view('partials.shop_products_list',compact('products'));
    }

}
