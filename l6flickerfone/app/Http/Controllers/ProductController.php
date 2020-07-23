<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    
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
