<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Banner;
use Image;

class BannerController extends Controller
{
     public function index()
    {
        $banners = Banner::all();
        return view('admin.pages.banners')->with(compact('banners'));
    }

     public function create()
    {
        $banners = Banner::all();
        // dd($banners);
        return view('admin.pages.add_banner');
    }

     private function ResizeImage($img)
    {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/banner', $filename1);
        Image::make($img->getRealPath())->resize(175,250)->save(public_path('storage\admin\images\banner\175_'.$filename1));
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage\admin\images\banner\100_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage\admin\images\banner\215_'.$filename1));
        Image::make($img->getRealPath())->resize(400,400)->save(public_path('storage\admin\images\banner\400_'.$filename1));
        return $filename1;
    }
    private function ResizeImageOther($img)
    {
        $fileNameWithExtension = $img->getClientOriginalName();
        $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
        $ext1 = $img->getClientOriginalExtension();
        $time = time();
        $filename1 = $time.'_'.md5($filename).'.'.$ext1;
        $img->storeAs('public/admin/images/banner', $filename1);
        $thumbnailpath = public_path('storage/admin/images/banner/'.$filename1);
        Image::make($img->getRealPath())->resize(100,100)->save(public_path('storage/admin/images/banner/100_'.$filename1));
        Image::make($img->getRealPath())->resize(700,700)->save(public_path('storage/admin/images/banner/700_'.$filename1));
        Image::make($img->getRealPath())->resize(215,215)->save(public_path('storage/admin/images/banner/215_'.$filename1));
        Image::make($img->getRealPath())->resize(500,500)->save(public_path('storage/admin/images/banner/500_'.$filename1));
        return $filename1;
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        $validations = Validator::make($request->all(),[
            'buy_image'=>'required | mimes:jpg,png,jpeg',
            'new_image'=>'required | mimes:jpg,png,jpeg',
            'sell_image'=>'required | mimes:jpg,png,jpeg',
            'static_image1'=>'required | mimes:jpg,png,jpeg',
            'static_image2'=>'required | mimes:jpg,png,jpeg',
            'static_image3'=>'required | mimes:jpg,png,jpeg',
            'carousel_image'=>'required | mimes:jpg,png,jpeg',
            'calculator_image'=>'required | mimes:jpg,png,jpeg',
           ]);
        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(Banner::where('buy_image',$request->buy_image)->count() >0)
            {
                $request->session()->flash('msg','banners is already exist');
                return back()->withInput();
            }
            $banners = new  Banner();
             
            $banners->buy_image=$this->ResizeImage($request->file('buy_image'));
            $banners->new_image=$this->ResizeImage($request->file('new_image'));
            $banners->sell_image=$this->ResizeImage($request->file('sell_image'));
            $banners->static_image1=$this->ResizeImage($request->file('static_image1'));
            $banners->static_image2=$this->ResizeImage($request->file('static_image2'));
            $banners->static_image3=$this->ResizeImage($request->file('static_image3'));
            $banners->carousel_image=$this->ResizeImage($request->file('carousel_image'));
            $banners->calculator_image=$this->ResizeImage($request->file('calculator_image'));
            // dd($banners);
            if ($banners->save())
            {
                $request->session()->flash('msg','banners has been added successfully');
                return redirect()->route('Banner.index');
            }
    }
    }

     public function edit($id)
    {
        // dd($id);
         $banners = Banner::where('id',$id)->first();
        // dd($banners);
        return view('admin.pages.update_banner',compact('banners'));
    }

    public function update(Request $request,$id)
    {
                // dd($request->all());
             $validations = Validator::make($request->all(),[
            'buy_image'=>'mimes:jpg,png,jpeg',
            'new_image'=>'mimes:jpg,png,jpeg',
            'sell_image'=>'mimes:jpg,png,jpeg',
            'static_image1'=>'mimes:jpg,png,jpeg',
            'static_image2'=>'mimes:jpg,png,jpeg',
            'static_image3'=>'mimes:jpg,png,jpeg',
            'carousel_image'=>'mimes:jpg,png,jpeg',
            'calculator_image'=>'mimes:jpg,png,jpeg',
           ]);
        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
        
            if($request->hasFile('buy_image'))
            {
                $filename1 = $this->ResizeImage($request->file('buy_image'));
             }
            else {$filename1 = $request->oldbuy_Image; }
            if($request->hasFile('new_image'))
            {
                $filename2 = $this->ResizeImage($request->file('new_image'));
             }
            else{$filename2 = $request->oldbuy_Image; }
            if($request->hasFile('sell_image'))
            {
                $filename3 = $this->ResizeImage($request->file('sell_image'));
             }
            else{ $filename3 = $request->oldnew_Image; }
            if($request->hasFile('static_image1'))
            {
                $filename4 = $this->ResizeImage($request->file('static_image1'));
             }
            else{ $filename4 = $request->oldstatic_image1;}
            if($request->hasFile('static_image2'))
            {
                $filename5 = $this->ResizeImage($request->file('static_image2'));
             }
            else { $filename5 = $request->oldstatic_image2;  }
            if($request->hasFile('static_image3'))
            {
                $filename6 = $this->ResizeImage($request->file('static_image3'));
             }
            else{$filename6 = $request->oldstatic_image3;}
            if($request->hasFile('carousel_image'))
            {
                $filename7 = $this->ResizeImage($request->file('carousel_image'));
             }
            else{$filename7 = $request->oldcarousel_image;}
            if($request->hasFile('calculator_image'))
            {
                $filename8 = $this->ResizeImage($request->file('calculator_image'));
             }
            else { $filename8 = $request->oldcalculator_image;}
            
            
                // dd($request->all());
            $banners =Banner::find($id);
            // dd($banners);
            $banners->buy_image = $filename1;
            $banners->new_image = $filename2;
            $banners->sell_image = $filename3;
            $banners->static_image1 = $filename4;
            $banners->static_image2 = $filename5;
            $banners->static_image3 = $filename6;
            $banners->carousel_image = $filename7;
            $banners->calculator_image = $filename8;
            // dd($banners);
            if ($banners->save())
            {
            $request->session()->flash('msg','banners has been update successfully');
                return redirect()->route('Banner.index');
            }
        
        }
        
    }

    public function destroy(Request $request ,$id)
    {
       if(Banner::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Banner has been Deleted successfully');
            return redirect()->route('Banner.index');
       }
       
    }







}