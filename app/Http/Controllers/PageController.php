<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index()
    {
        $pages =Page::all();
        return view('admin.pages.pages',compact('pages'));
    }

    
    public function create()
    {
        return view('admin.pages.add_page');
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if(Page::where('name',$request->page)->get()->count() >0)
            {
                $request->session()->flash('warningMsg','Page is already exist');
                return back()->withInput();
            }
            $page = new Page();
            $page->name= $request->name;
            $page->save();
            $request->session()->flash('msg',"Page added successfully");
            return redirect()->route('Page.index');
        }
    }

   
    public function show(Page $page)
    {
        //
    }

    
    public function edit($id)
    {
        $page =Page::where('id',$id)->first();
        return view('admin.pages.update_page',compact('page'));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $page = Page::find($id);
            $page->name= $request->name;
            $page->save();
            $request->session()->flash('msg',"Page updated successfully");
            return redirect()->route('Page.index');
        }
    }

   
    public function destroy(Request $request, $id)
    {
        Page::where('id',$id)->delete();
        $request->session()->flash('msg',"Page deleted successfully");
        return redirect()->route('Page.index');
    }
}
