<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductOpinion;
use App\User;
class OpinionReply extends Model
{
    public function opinion()
    {
    	return $this->belongsTo(ProductOpinion::class,'opinion_id','id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
