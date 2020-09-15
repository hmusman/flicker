<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ColorVariation extends Model
{
    protected $table="variations";

    public function product()
    {
    	return $this->belongsTo(Product::class,'product_id','id');
    }
}
