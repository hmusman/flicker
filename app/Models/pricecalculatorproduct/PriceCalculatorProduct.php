<?php

namespace App\Models\pricecalculatorproduct;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;
use App\PriceColorVariation;
class PriceCalculatorProduct extends Model
{
	protected $fillable = [
		       'brand_id',
                'code',
                'name',
                'image',
                'category_id',
                'minor_dent_scratch',
                'major_dent_scratch',
                'original_accessories_available',
                'screen_is_cracked' ,
                'device_box_available',
                'device_battery_status'
	];
    protected $table = "price_calculator_products";
    
    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function Productbrand()
    {
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function variation_colors()
    {
        return $this->hasMany(PriceColorVariation::class,'product_id','id');
    }
}
