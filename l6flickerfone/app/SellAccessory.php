<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
class SellAccessory extends Model
{
    public function Accessorybrand()
    {
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
