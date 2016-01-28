<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';

   

    protected $fillable =['firstname','lastname','ppimg_filename','cimg_filename','per_address','temp_address','occupation','gender','email','phone','mobile','education','citizenship','age','bloodgroup','relative','institution','trainer','vehicle_type','date','status','license_type'];

    public function vouchers()
    {
    	return $this->hasMany('App\Voucher','applicants_id');
    }

    public function exams()
    {
    	return $this->belongsTo('App\Exam');
    }

    public function license()
    {
    	return $this->hasOne('App\License', 'applicant_id');
    }


//     public function upload($input){
//         $destinationPath = url('/')."/offerimages";
//         // return ['message'=>file_exists($destinationPath)];
//         if(!file_exists($destinationPath)){
//             mkdir($destinationPath, 0777, true);
//         }

//         // $file = $request->file('ppimg_filename');
//         //$filename = $input->getClientOriginalName();
//         //$request->file('ppimg_filename')->move($destinationPath, $filename);

//         return $destinationPath;
//     }
 
}
