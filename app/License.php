<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table='licenses';
    protected $fillable=['lic_no','issue_date','expiry_date','type','applicant_id'];
    protected $dates=['created_at','expiry_date'];
    public function applicant()
    {
    	
    	return $this->belongsTo('App\Applicant','applicant_id');

    }
    public function renews()
    {
    	return $this->hasMany('App\Renew','lic_id');
    }
   
}
