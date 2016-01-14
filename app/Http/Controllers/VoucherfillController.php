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
    public function index($id=null)
    {
        if($id == null){
            return '404';
        }

        return view('voucher')->with(['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request, Voucher $vou)
    {

       $data = array(
              'voucher_date' => $request->input('date'),
              'voucher_id' => $request->input('voucher_id'),
              'applicants_id' => $request->input('applicants_id'),

              //'vImage' => $request['voucher_image']

          );
       //to call upload function for image upload from Applicant.php
     //   $app = new Applicant;
     // $dest = $app->upload($request->file('asddf'))

        $vou->insert($data);
        
        return Redirect::to('home');
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
    public function destroy($id)
    {
        //
    }
}
