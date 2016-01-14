<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_applicant extends Model
{
    protected $table='exam_applicants';
    protected $fillable=['exam_id','applicant_id','status'];
    //protected $touches=['post'];
    public function Exam()
    {
    	return $this->belongsTo('App\Exam');
    	
    }
      public function exam_applicants()
    {
    	return $this->belongsTo('App\Applicant');
    	
    }
}
