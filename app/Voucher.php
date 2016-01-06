<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
	/*When a model belongsTo or belongsToMany another model, such as a Voucher 
	which belongs to a Applicant, it is sometimes helpful to update the parent's timestamp when the child model is updated. */
     protected $touches = ['post'];

    /**
     * Get the post that the Voucher belongs to.
     */
    public function post()
    {
        return $this->belongsTo('Applicant');
    }
}
