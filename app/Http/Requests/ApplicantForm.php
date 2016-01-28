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


            'firstname' => 'required|max:50|alpha',
             'lastname' => 'required|alpha',
             'ppimg_filename' => 'required|mimes:jpeg,jpg,bmp,png ',
             'cimg_filename' => 'required|mimes:jpeg,jpg,bmp,png ',             
             'phone' => 'required|numeric|digits_between:8,25',
             'mobile'=>'numeric|digits_between:8,25|nepal_phone',
             'email' => 'required|email|min:6|max:200|unique:users',
             'per_address' => 'required|string',
             'temp_address' => 'required|string',
             //'occupation' => 'required',
             'gender' => 'required|in:male,female',        
             //'education' => 'required',
             'citizenship' => 'required|numeric',
             'age' => 'required|numeric|min:18|max:60',
             'bloodgroup' => 'required',
             //'relative' => 'required|',
             'vehicle_type' => 'required',
           

        ];
    }
     // Here we can do more with the validation instance...

}

