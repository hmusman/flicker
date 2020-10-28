<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;
class Meta extends Model
{
    public function page()
    {
    	return $this->belongsTo(Page::class);
    }
}
