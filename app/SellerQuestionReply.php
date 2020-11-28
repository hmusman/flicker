<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SellerQuestion;
class SellerQuestionReply extends Model
{
    public function question()
    {
    	return $this->belongsTo(SellerQuestion::class,'question_id','id');
    }
}
