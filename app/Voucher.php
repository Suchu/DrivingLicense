<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';   

    protected $fillable =['voucher_date','voucher_id','fee','voucher_image','verification','ver_date','ver_UID','applicants_id'];

	/*When a model belongsTo or belongsToMany another model, such as a Voucher 
	which belongs to a Applicant, it is sometimes helpful to update the parent's timestamp when the child model is updated. */
     protected $touches = ['post'];

    /**
     * Get the post that the Voucher belongs to.
     */
    public function post()
    {
        return $this->belongsTo('App\Applicant');
    }
}
