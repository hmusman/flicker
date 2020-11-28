<?php

namespace App\Http\Controllers;

use App\SellerQuestionReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SellerQuestionReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'reply'=>'required'
        ]);
        if ($validations->passes())
        {
            $reply = new SellerQuestionReply;
            $reply->question_id = $request->question_id;
            $reply->reply = $request->reply;
            $reply->save();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SellerQuestionReply  $sellerQuestionReply
     * @return \Illuminate\Http\Response
     */
    public function show(SellerQuestionReply $sellerQuestionReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SellerQuestionReply  $sellerQuestionReply
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerQuestionReply $sellerQuestionReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SellerQuestionReply  $sellerQuestionReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerQuestionReply $sellerQuestionReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SellerQuestionReply  $sellerQuestionReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerQuestionReply $sellerQuestionReply)
    {
        //
    }
}
