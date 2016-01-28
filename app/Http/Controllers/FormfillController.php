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
use DB;


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
       $destinationPath = "";

        //passport sized image
        $ppimg = "";
        if($request->hasFile('ppimg_filename')){
            $ppimg = $this->upload($request->file('ppimg_filename'));
        }
        $input['ppimg_filename'] = $ppimg;

        //citizenship image
        $cimg = "";
        if($request->hasFile('cimg_filename')){
            $cimg = $this->upload($request->file('cimg_filename'));
        }
        $input['cimg_filename'] = $cimg;
        $input['status'] = 0;

        $cnumber = Applicant::where('citizenship', $input['citizenship'])->where('status', '!=', 0)->first();
        if($cnumber){
            return 'You cannot apply for 3 months!';
             }

        $a=$appl->create($input);

        
        try {
        

            $data['link'] = url('/').'/voucher/voucher/'.$a->id;
            
        Mail::send('welcome', $data, function ($m) use ($a) {
            $m->from('drivinglicense@app.com', 'Driving License');

            $m->to($a->email, $a->firstname)->subject('Hi! Welcome.');
        
            
            
        });
             return view('thankyou')->with('email', $a);
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
    public function show()
    {
        
    $applicants=Applicant::all();


        if($applicants->license_type ='passed')
            return view('results')->with('result',$applicants);
    
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
