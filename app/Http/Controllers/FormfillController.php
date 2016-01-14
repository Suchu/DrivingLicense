<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicantForm;
use App\Applicant;
use Image;
use Input;

use Mail;

class FormfillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
       return view('home');
       


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Applicant $appl, ApplicantForm $request)
    {   
       Input::file('image');
       $a = $appl->create($request->all());
      $data = array('name' => $a->firstname);
    try {
        
        Mail::send('welcome', $data, function($message)
    {
        
        $message->to('sulochana.bhujel92@gmail.com')
        ->subject('Hi there!  Laravel sent me!');
    });
        return 'okey';
    } catch (\Exception $e) {
        return $e->getMessage();
    }

    }
    public function upload() {

     // getting all of the post data
     $file = array('image' => Input::file('image'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function store()
    // {
    //     $fill = Input::all();
    //    return 'done';
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Applicant $applicant, Request $request)
    // {
    //     $a = $applicant->create($request->all());die;
    //    return 'done';
    // }

    // public function store(Applicant $appl, ApplicantForm $request)
    // {
       
     // checking file is valid.
  //   if (Input::file('image_path')->isValid()) {
  //     $destinationPath = 'uploads'; // upload path
  //     $extension = Input::file('image_image')->getClientOriginalExtension(); // getting image extension
  //     $fileName = rand(11111,99999).'.'.$extension; // renameing image
  //     Input::file('image_path')->move($destinationPath, $fileName); // uploading file to given path
  //     // sending back with message
  //     Session::flash('success', 'Upload successfully'); 
  //     return Redirect::to('upload');
  //   }
  //   else {
  //     // sending back with error message.
  //     Session::flash('error', 'uploaded file is not valid');
  //     return Redirect::to('upload');
  // }
    //    $a=$appl->create($request->all());die;        
    //      return 'Done';
    // }
    //define the image paths




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function create(){
    //     $vehicles = \DB:table('vehicle_type');
    //     return view('home')->with('vehicle_type', $vehicles);
    // }
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
