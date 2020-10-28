<?php

namespace App\Http\Controllers;

use App\BuyNewSell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyNewSellController extends Controller
{
   
    public function index()
    {
        $data = BuyNewSell::all();
        return view('admin.pages.view_buy_new_sell',compact('data'));
    }

  
    public function create()
    {
        return view('admin.pages.add_buy_new_sell');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = BuyNewSell::where('id',$id)->first();
        return view('admin.pages.update_buy_new_sell',compact('data'));
    }

   
    public function update(Request $request, $id)
    {

        $validations = Validator::make($request->all(),[
            'title'=>'required',
            'detail'=>'required|max:150',
        ]);
        if($validations->fails())
            return back()->withErrors($validations)->withInput();
        
        if($request->hasFile('img'))
        {
            $ext1 = $request->file('img')->extension();
            if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
            {
                $filename= $request->file('img')->store('admin/images/buynewsell','public');
            }
            else
            {

                 return back()->withErrors(['invalidImg'=>"Please Select (.png,.jpg,.jpeg) Image"])->withInput();   
            }
        }
        else
        {
            $filename = $request->oldImg;
        }

        $row = BuyNewSell::find($id);
        $row->title =$request->title;
        $row->detail = $request->detail;
        $row->img = $filename;
        if($row->save())
        {
            $request->session()->flash('msg','Data Updated Successfully');
            return redirect(route('IndexBuyNewSellSection.index'));
        } 
    }

    public function destroy($id)
    {
        //
    }
}
