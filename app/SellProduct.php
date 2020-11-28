<?php

namespace App;
use App\Category;
use App\Brand;
use App\User;
use App\SellerQuestion;

use Illuminate\Database\Eloquent\Model;

class SellProduct extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function Productbrand()
    {
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }

    public function questions()
    {
        return $this->hasMany(SellerQuestion::class,'product_id','id');
    }
}
