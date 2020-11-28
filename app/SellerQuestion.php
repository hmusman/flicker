<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SellerQuestionReply;
use App\SellProduct;
use App\User;
class SellerQuestion extends Model
{
    public function replies()
    {
    	return $this->hasMany(SellerQuestionReply::class,'question_id','id');
    }

    public function product()
    {
    	return $this->belongsTo(SellProduct::class,'product_id','id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
