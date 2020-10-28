<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\OpinionReply;
use App\User;
class ProductOpinion extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class,'product_id','id');
    }

    public function replies()
    {
    	return $this->hasMany(OpinionReply::class,'opinion_id','id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
