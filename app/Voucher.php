<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';   

    protected $fillable =['voucher_date','voucher_id','fee','voucher_image','verification','ver_date','ver_UID','applicants_id'];
    protected $dateFormat = 'Y.m.d';
    protected $dates = ['voucher_date', 'ver_date'];

	/*When a model belongsTo or belongsToMany another model, such as a Voucher 
	which belongs to a Applicant, it is sometimes helpful to update the parent's timestamp when the child model is updated. */

    /**
     * Get the post that the Voucher belongs to.
     */
    public function applicant()
    {

        return $this->belongsTo('App\Applicant','applicants_id');
        

    }
 
public function getVoucherDateAttribute($date)
{
    return Carbon::parse($date)->format('Y-m-d');
}

}
