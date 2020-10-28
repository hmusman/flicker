<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\BlockEmail;

class BlockEmailController extends Controller
{
    public function edit($id)
    {
    	$content = BlockEmail::where('id',$id)->first();
    	return view('admin.pages.update_block_email',compact('content'));
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

    	$content = BlockEmail::find($id);
    	$content->content = $request->content;
    	if($content->save())
    	{
    		$request->session()->flash('msg','Block Email Template Has Updated Successfully');
    		return back();
    	}
    }
}
