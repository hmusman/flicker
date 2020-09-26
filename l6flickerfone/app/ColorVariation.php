<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Models\pricecalculatorproduct\PriceCalculatorProduct;
class ColorVariation extends Model
{
    protected $table="variations";

    public function product()
    {
    	return $this->belongsTo(Product::class,'product_id','id');
    }

    public function price_calculator_cproduct()
    {
    	return $this->belongsTo(PriceCalculatorProduct::class,'cproduct_id','id');
    }
}
