<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renew extends Model
{
    protected $table='renews';
    protected $fillable=['lic_id','renew_date','new_expiry'];
    //protected $touches=['post'];
    public function License()
    {
    	return $this->belongsTo('App\License');

    }
}
