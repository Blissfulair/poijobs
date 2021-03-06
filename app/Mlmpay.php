<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mlmpay extends Model
{
    protected $guarded = ['id'];

    public function currency()
    {
        return $this->belongsTo('App\Currency','currency_id','id');
    }

  public function paymentmethod()
    {
        return $this->belongsTo('App\PaymentMethod','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
