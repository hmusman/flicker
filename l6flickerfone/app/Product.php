<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;
class Product extends Model
{
    protected $table = "sma_products";
    
    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
