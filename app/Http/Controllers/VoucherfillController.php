<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ApplicantForm;
use Carbon\Carbon;
use Input;
use App\Voucher;
use App\Applicant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VoucherfillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVoucher($id=null)
    {
        if($id == null){
            return '404';
        }
        $mytime = Carbon::now()->toDateString();

        
        
        return view('voucher')->with(['id'=>$id, 'date' => $mytime]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getResult(){
    $applicants=Applicant::all();


        if($applicants->license_type ='passed')
            return view('results')->with('result',$applicants);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postVoucher(Request $request, Voucher $vou)
    {
        $data = $request->all();
        $this->validate($request, [
            'voucher_id'=> 'required|numeric',
            'voucher_image'=> 'required | mimes:jpeg,jpg,bmp,png,gif '
        ]);

       $data = array(
              
              'voucher_id' => $request->input('voucher_id'),
              'applicants_id' => $request->input('applicants_id'),
              
              //'vImage' => $request['voucher_image']

          );
       $vimage = '';
       if($request->hasFile('voucher_image')){
        $vimage = $this->upload($request->file('voucher_image'));

       }
       $data['voucher_image'] = $vimage;
       $vou->insert($data);
       
       $applicant = Applicant::find($request->input('applicants_id'));
       $applicant->status = 1;
       $applicant->save();
       //to call upload function for image upload from Applicant.php
     //   $app = new Applicant;
     // $dest = $app->upload($request->file('asddf'))

        
        
        return view('thanks-voucher');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function upload($file){
        $date = date('Y_m_d_H_i_s');
        $destinationPath = "images/";
        //$file = $request->file('ppimg_filename');
        $filename = $date.'_'.$file->getClientOriginalName();
        $file->move($destinationPath, $filename);

        return $destinationPath.$filename;
    }

    public function destroy($id)
    {
        //
    }
}
