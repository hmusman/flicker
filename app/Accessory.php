<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AccessoryCategory;
use App\Brand;
class Accessory extends Model
{
    public function category()
    {
    	return $this->belongsTo(AccessoryCategory::class,'accessory_category_id','id');
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
