<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Models\pricecalculatorproduct\PriceCalculatorProduct;
class Brand extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class,'brand_id','id');
    }

    public function price_calculator_products_list()
    {
    	return $this->hasMany(PriceCalculatorProduct::class,'brand_id','id');
    }
}
