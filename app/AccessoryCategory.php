<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Accessory;
class AccessoryCategory extends Model
{
    public function accessories()
    {
    	return $this->hasMany(Accessory::class,'accessory_category_id','id');
    }
}
