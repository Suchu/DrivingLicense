<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Role;
use App\Permission;
use App\User;
use App\Applicant;
use App\Voucher;
use App\Exam;
use App\Renew;
use Mail;

use App\Http\Controllers\Controller;

use App\License;
use Carbon\Carbon;
use DB;
use Input;



class RenewlicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function getRenew()
    {
        return view('renew');
    }

  
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**display issue_date and expiry_date with the entry of license number**/
    public function postRenew()
    {
        $input = Input::get('lic_no'); //lic_no is the name of the textbox

        $results = License::where('lic_no', '=', $input)->first();

        
        
        return view('renewshow')->with('result', $results);
   
    }

    

    public function getRevoucher($id=null)
    {
        if($id==null)
            return 'No page found';
        $app = Applicant::find($id);
        return view('revoucher')->with('app',$app);


    }

    public function postRevoucher(Request $request, Voucher $vou)
    {
        $data = $request->all();
        $this->validate($request, [
            'voucher_id'=> 'required|numeric',
            'voucher_image'=> 'required | mimes:jpeg,jpg,bmp,png,gif '
        ]);
        $data = array(
              
              'voucher_id' => $request->input('voucher_id'),
              'applicants_id' => $request->input('applicants_id'),
              'verification'=>'verifying',
              //'vImage' => $request['voucher_image']

          );
        $vimage = '';
       if($request->hasFile('voucher_image')){
        $vimage = $this->upload($request->file('voucher_image'));

       }
       $data['voucher_image'] = $vimage;

       $vou->insert($data);

       
       $applicant = Applicant::find($request->input('applicants_id'));
       $applicant->status = 4;

       $applicant->save();
       return 'done';
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function upload($file){
        $date = date('Y_m_d_H_i_s');
        $destinationPath = "images/";
        //$file = $request->file('ppimg_filename');
        $filename = $date.'_'.$file->getClientOriginalName();
        $file->move($destinationPath, $filename);

        return $destinationPath.$filename;
    }
}
