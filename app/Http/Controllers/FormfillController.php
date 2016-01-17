<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ApplicantForm;
use Input;
use App\Applicant;
use App\Voucher;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Session;
use Image;
use Mail;
use Carbon\Carbon;

class FormfillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the edit form for blog post
     * We create a JsValidator instance based on shared validation rules
     * @param  string  $post_id
     * @return Response
     */

  
    public function index()
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
        $input = $request->all();
 

        $a=$appl->create($input);
      
        
        
        try {

            $data['link'] = url('/').'/voucher/voucher/'.$a->id;
            
        Mail::send('welcome', $data, function ($m) use ($a) {
            $m->from('drivinglicense@app.com', 'Driving License');

            $m->to($a->email, $a->firstname)->subject('hi laravel sent me!');
            
            
        });
             return 'Please check your mail'.$a->email;
        } 
        catch (\Exception $e) {
                return $e->getMessage();
        }
        
    }

    

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    // public function store(Applicant $appl, ApplicantForm $request)
    // {
    //     $input = $request->all();
    //     $destinationPath = "";
    //     if($request->hasFile('ppimg_filename'))
    //     {
    //         $destinationPath = $appl->upload($request->file('ppimg_filename'));

    //         // return ['message'=>file_exists($destinationPath)];
    //         // if(!file_exists($destinationPath)){
    //         //     mkdir($destinationPath, 0777, true);
    //         // }

    //         // $file = $request->file('ppimg_filename');
    //         //$filename = $file->getClientOriginalName();
    //         //$request->file('ppimg_filename')->move($destinationPath, $filename);
    //     }
    //     $input['ppimg_filename'] = $destinationPath;

    //     $a=$appl->create($input);

    //     // $a['ppimg_filename'] = $filename;
    //     return 'done';
  

    //    //$a=$appl->create($request->all());
    //    //return view('applicant_display')->with('applicants', $a);
    //     // Session::flash('flash_message', 'Task successfully added!');

    //     // return redirect()->back();
    //     //send mail to the user
    //     // link = <base_url>/voucher/store/$a->id;


       

    // } 





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
        $event = Applicant::all();
        return view('applicant_display')->with('applicants', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
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
          
        // if($id)
        // {
        //     $app = Applicant::find($id);
        //     return view('edit')->with(['applicants' => $app]);
        // }
        // return 'error';    
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
