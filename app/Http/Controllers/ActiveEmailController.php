<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\ActiveEmail;

class ActiveEmailController extends Controller
{
    public function edit($id)
    {
    	$content = ActiveEmail::where('id',$id)->first();
    	return view('admin.pages.update_active_email',compact('content'));
    }

    public function update(Request $request , $id)
    {
    	$validations = Validator::make($request->all(),[
    		'content'=>'required'

    	]);

    	if ($validations->fails())
    	{
    		return back()->withErrors($validations)->withInput();
    	}

    	$content = ActiveEmail::find($id);
    	$content->content = $request->content;
    	if($content->save())
    	{
    		$request->session()->flash('msg','Active Email Template Has Updated Successfully');
    		return back();
    	}
    }
}
