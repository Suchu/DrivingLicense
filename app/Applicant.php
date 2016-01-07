<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';
    protected $fillable =['firstname','lastname','image','per_address','temp_address','occupation','gender','email','phone','mobile','education','citizenship','age','bloodgroup','relative','institution','trainer','vehicle_type','date','fee'];
    public function voucher()
    {
    	return $this->hasMany('Voucher','foreign_key');
    }

    public function exam_applicant()
    {
    	return $this->hasMany('Exam_applicant');
    }

    public function license()
    {
    	return $this->belongsTo('License');
    }
}
