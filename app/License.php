<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table='licenses';
    protected $fillable=['license_no','issue_date','expiry_date','type','applicant_id'];
    protected $dates=['created_at','expiry_date'];
    public function Applicant()
    {
    	
    	return $this->hasMany('App\Applicant','id');

    }
    public function Renew()
    {
    	return $this->hasMany('App\Renew','lic_id');
    }
    public function getExpiryDateAttribute($value)
{
    $cDate = Carbon::parse($date);
return $cDate->diffInDays();
}
}
