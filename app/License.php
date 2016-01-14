<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table='licenses';
    protected $fillable=['license_no','issue_date','expiry_date','type','applicant_id'];
    //protected $touches=['post'];
    public function Applicant()
    {
    	
    	return $this->hasMany('App\Applicant');

    }
    public function Renew()
    {
    	return $this->hasMany('App\Renew');
    }
}
