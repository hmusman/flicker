<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\pricecalculatorproduct\PriceCalculatorProduct;
class PriceColorVariation extends Model
{
    protected $table="price_variations";

    public function  product()
    {
    	return $this->belongsTo(PriceCalculatorProduct::class,'product_id','id');
    }
}
