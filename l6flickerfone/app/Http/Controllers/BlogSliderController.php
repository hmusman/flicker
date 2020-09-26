<?php

namespace App\Http\Controllers;

use App\BlogSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogSliderController extends Controller
{
    
    public function index()
    {
        
        $data = BlogSlider::all();
        return view('admin.pages.view_blog_slider',compact('data'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
       
       
    }

   
    public function edit($id)
    {
        $data = BlogSlider::where('id',$id)->first();
        return view('admin.pages.update_blog_slider',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'detail'=>'required|max:170',
        ]);
        if($validations->fails())
            return back()->withErrors($validations)->withInput();
        
        if($request->hasFile('img'))
        {
            $ext1 = $request->file('img')->extension();
            if ($ext1=='png' || $ext1=='jpg' || $ext1=='jpeg')
            {
                $filename= $request->file('img')->store('admin/images/blogslider','public');
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

        $row =BlogSlider::find($id);
        $row->detail = $request->detail;
        $row->img = $filename;
        if($row->save())
        {
            $request->session()->flash('msg','Data Updated Successfully');
            return redirect(route('BlogSlider.index'));
        } 
    }

   
    public function destroy($id)
    {
        //
    }

    public function BlogActive(Request $request)
    {
       for($i=0;$i<count($request->checkboxes);$i++)
       {
            $id = $request->checkboxes[$i];
            $row = BlogSlider::find($id);
            $row->status =1;
            $row->save();
       }
       $request->session()->flash('msg','Status has been changed');
       return redirect(route('BlogSlider.index'));
    }

     public function BlogInActive(Request $request)
    {
       for($i=0;$i<count($request->checkboxes);$i++)
       {
            $id = $request->checkboxes[$i];
            $row = BlogSlider::find($id);
            $row->status =0;
            $row->save();
       }
       $request->session()->flash('msg','Status has been changed');
       return redirect(route('BlogSlider.index'));
    }
}
