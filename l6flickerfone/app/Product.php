<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;
use App\ColorVariation;
class Product extends Model
{
	protected $fillable = [
		 'brand_id',
                'code',
                'name',
                'color' ,
                'price',
                'quantity',
                'launch_announced',
                'launch_status',
                'body_dimensions',
                'body_weight',
                'body_build',
                'body_sim',
                'display_type',
                'display_size',
                'display_resolution',
                'display_protection',
                'platform_os',
                'platform_chipset',
                'platform_cpu',
                'platform_gpu',
                'memory_card_slot',
                'memory_ram',
                'memory_storage',
                'main_type',
                'main_type_value',
                'main_feature',
                'main_video',
                'selfie_single',
                'selfie_feature',
                'selfie_video',
                'sound_loudspeaker',
                'sound_jack',
                'sound_mic',
                "comms_wlan",
                'comms_bluetooth',
                'comms_gps',
                'comms_nfc',
                'comms_radio',
                'comms_usb',
                'feature_sensor',
                'battery_status',
                'battery_talk_time',
                'battery_music',
                'image',
                'dimage' ,
                'dimage1' ,
                'description',
                'category_id',
                "video_link",  
                'os',
                "processor",
                'memory',
                'storage',
                'camera',
                'size',
                'resolution',
                'connectivity',
                'battery' ,
                'height',
                'width',
                'depth',
                'brief_weight'
	];
    protected $table = "sma_products";
    
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
        return $this->hasMany(ColorVariation::class,'product_id','id');
    }
}
