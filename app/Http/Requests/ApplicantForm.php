<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


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
            'firstname' => 'required',
<<<<<<< HEAD
=======
            //'image' => 'required | mimes:jpeg,jpg,bmp,png | max:1000',
>>>>>>> bfdeb5556f3be8e8284c576f83cb36f9a6804956
            // 'lastname' => 'required',
            // 'address' => 'required',
            // 'gender' => 'required',
            // 'email' => 'required|email|unique:users'
            // 'phone' => 'required',
            // 'education' => 'required',
            // 'citizenship' => 'required',
            // 'age' => 'required',
            // 'bloodgroup' => 'required',
            // 'lastname' => 'required',
        ];
    }
}
