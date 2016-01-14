<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;
use validator;
//use App\Providers\ValidatorServiceProvider;


class ApplicantForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return true;
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             // 'firstname' => 'required|max:50|alpha',
             // 'lastname' => 'required|alpha',
             // //'image' => 'required ',             
             // 'per_address' => 'required|string|min:10',
             // 'temp_address' => 'required|string|min:5',
             // 'occupation' => 'required',
             // 'gender' => 'required|in:male,female',
             // 'email' => 'required|email|min:6|max:200|unique:users',
             // 'phone' => 'required|numeric|digits_between:8,25',
             // 'mobile'=>'numeric|digits_between:8,25|nepal_phone',
             // 'education' => 'required',
             // 'citizenship' => 'required|numeric|min:3',
             // 'age' => 'required|numeric|min:18',
             // 'bloodgroup' => 'required',
             // 'relative' => 'required|',
             // 'vehicle_type' => 'required',           
             // 'fee' => 'required',
             // 'status' => 'in:0,1,2',
             // 'license_type'=>'required',
             //'voucher_id'=>'required|numeric',

           
        ];
    }
     // Here we can do more with the validation instance...

}

