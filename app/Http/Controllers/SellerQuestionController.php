<?php

namespace App\Http\Controllers;

use App\SellerQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SellerQuestionController extends Controller
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
            'comment'=>'required'
        ]);
        if ($validations->passes())
        {
            $question = new SellerQuestion;
            $question->user_id = $request->user_id;
            $question->product_id = $request->product_id;
            $question->question = $request->comment;
            $question->save();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SellerQuestion  $sellerQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(SellerQuestion $sellerQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SellerQuestion  $sellerQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerQuestion $sellerQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SellerQuestion  $sellerQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerQuestion $sellerQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SellerQuestion  $sellerQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerQuestion $sellerQuestion)
    {
        //
    }
}
