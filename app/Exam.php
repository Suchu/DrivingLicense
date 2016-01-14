<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table="exams";
    protected $fillable=['type','date','exam_capacity'];
   // protected $touches=['post'];

    /**
     * Get the post that the Voucher belongs to.
     */
    public function Exam_applicant()
    {
        return $this->hasMany('App\Exam_applicant');
    }

}
