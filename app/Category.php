<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\SellProduct;
class Category extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class,'category_id','id');
    }

    public function Sellproducts()
    {
    	return $this->hasMany(SellProduct::class,'category_id','id');
    }
}
