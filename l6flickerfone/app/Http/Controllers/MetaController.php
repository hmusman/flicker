<?php

namespace App\Http\Controllers;

use App\Meta;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MetaController extends Controller
{
   
    public function index()
    {
        $metas =Meta::all();
        return view('admin.pages.metas',compact('metas'));
    }

    
    public function create()
    {
        $pages = Page::all();
        return view('admin.pages.add_meta',compact('pages'));
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'page'=>'required',
            'title'=>'bail | required | string | max:25',
            'content'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if(Meta::where('page_id',$request->page)->get()->count() >0)
            {
                $request->session()->flash('warningMsg','Meta is already exist');
                return back()->withInput();
            }
            $meta = new Meta();
            $meta->page_id= $request->page;
            $meta->title = $request->title;
            $meta->content = $request->content;
            $meta->save();
            $request->session()->flash('msg',"Meta added successfully");
            return redirect()->route('Meta.index');
        }
    }

   
    public function show(Meta $meta)
    {
        //
    }

    
    public function edit($id)
    {
        $meta =Meta::where('id',$id)->first();
        $pages = Page::all();
        return view('admin.pages.update_meta',compact(['meta','pages']));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'page'=>'required',
            'title'=>'bail | required | string | max:25',
            'content'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $meta = Meta::find($id);
            $meta->page_id= $request->page;
            $meta->title = $request->title;
            $meta->content = $request->content;
            $meta->save();
            $request->session()->flash('msg',"Meta updated successfully");
            return redirect()->route('Meta.index');
        }
    }

   
    public function destroy(Request $request, $id)
    {
        Meta::where('id',$id)->delete();
        $request->session()->flash('msg',"Meta deleted successfully");
        return redirect()->route('Meta.index');
    }
}
