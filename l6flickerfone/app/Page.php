<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Meta;
class Page extends Model
{
    public function meta()
    {
    	return $this->hasOne(Meta::class);
    }
}
