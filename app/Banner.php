<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banners";
	protected $fillable = [
				'buy_image',
                'new_image',
                'sell_image',
                'static_image1',
                'static_image2',
                'static_image3',
                'carousel_image',
                'calculator_image',
                
                
	];
}
