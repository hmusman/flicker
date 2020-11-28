<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\ProductOpinion;
use App\OpinionReply;
use App\SellProduct;
use App\SellerQuestion;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function replies()
    {
        return $this->hasMany(OpinionReply::class,'user_id','id');
    }

    public function opinions()
    {
        return $this->hasMany(ProductOpinion::class,'user_id','id');
    }

    public function questions()
    {
        return $this->hasMany(SellerQuestion::class,'user_id','id');
    }

    public function sellproducts()
    {
        return $this->hasMany(SellProduct::class,'user_id','id');
    }

}
