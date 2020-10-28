<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\OpinionReply;

class OpinionReplyController extends Controller
{
    public function store(Request $request)
    {
    	$validations =Validator::make($request->all(),[
            'reply'=>'required',           
        ]);

        if($validations->fails())
        {
        	return back()->withErrors($validations)->withInput();
        }
        $opinion = new OpinionReply();
        $opinion->user_id = $request->user_id;
        $opinion->opinion_id = $request->opinion_id;
        $opinion->nick_name = $request->nick_name;
        $opinion->reply = $request->reply;
        if ($opinion->save())
        {
        	return back();
        }
    }

    public function destroy(Request $request,$id)
    {
        OpinionReply::where('id',$id)->delete();
        $request->session()->flash('msg',"Opinion Reply has been deleted successfully");
        return back();
    }
}
