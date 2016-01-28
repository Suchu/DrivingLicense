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
// use App\Exam_applicant;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\License;
use Carbon\Carbon;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        if(\Auth::user()->hasRole('admin'))
        {
        
        return view('Admin.admin');
        }
        elseif(\Auth::user()->hasRole('New-entry')){
        return view('admin2.admin2');
    }
    elseif(\Auth::user()->hasRole('Renew-license')){
        return view('admin3.admin3');
    }
    else{
        return view('auth.login');
    }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create_user()

    // {
    //     return view('admin');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the Roles.
     *
     * @return Response
     */
    // public function index()
    // {
    //     if (Auth::user()->hasRole('admin')) {
    //         return redirect('Admin/create-user');
    //     // }
    // }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function getCreate()
    {
         if(\Auth::user()->hasRole('admin'))
        {
        $all_roles = Role::lists('display_name', 'id');
        return view('Admin.create-user')->with('r', $all_roles);
        }
         return redirect('404');
        
    }
    // public function postindex()
    // {
    //     $input=Input::all();
    //     return view('create-user');
    // }
    /*store newly created resource in storage */
    public function postRegister(Request $request)
    {
        if(\Auth::user()->hasRole('admin')){
            $user_input = $request->all();
             $user_input['password'] = bcrypt($user_input['password']);
            $user_role = $user_input['roles_id'];
// 
            $user = User::create($user_input);
            session()->flash('user_created','The user has been successfully added !');
            $user->roles()->attach($user_role);

            return redirect('admin/display');

            // return view('Admin.userlists')->with('user',$user);

            
        }
    }



    // public function getNew(){
    //     if(\Auth::user()->hasRole('New-entry')){




    //     return view('admin2.applicants');
    //     }
    //      return redirect('404');
    // }




        public function getDisplay()
        {
            if(\Auth::user()->hasRole('admin')){

            $user = User::all();


        return view('Admin.userlists')->with('user', $user);
        }
    }

    
    public function getApprove($id=null)
    {
        if(\Auth::user()->hasRole('New-entry')){
            $uid =\Auth::user()->id;
            $voucher = Voucher::find($id);
            $voucher->ver_UID = $uid;
            $voucher->verification = 'verified';
            $voucher->save();
            return view('admin2/create-exam')->with('voucher', $voucher);
        }
        return redirect('auth/login');

    }
    // public function postExam(Request $request){
    //         if(\Auth::user()->hasRole('New-entry')){
    //             $exam = $request->all();
    //             $applicant = Applicant::find($request->input('applicant_id'));
    //             $eaxmid = $exam->id;
    //             $applicant = Applicant::find($request->input('applicant_id'));

    //         

    //     }
    public function postExam(Request $request){
    if(\Auth::user()->hasRole('New-entry')){
            $user_input = $request->all();
          
            $exam = $user_input['applicant_id'];
// 
            $examDet = Exam::create($user_input);

            
            $applicant = Applicant::find($exam);
            $applicant['code'] = $request->input('code');
            $examDet['type'] = $request->input('type');

            $applicant->exam_id = $examDet->id;
            $applicant->save();

            // return 'true';
             
            

            $data['exam_date'] = $examDet->date;
            $data['exam_code'] = $applicant->code;
            $data['name'] = $applicant->firstname;
             $data['venue'] = $examDet->type;
              $data['c_no'] = $applicant->citizenship;

            try {
            
        Mail::send('admin2.exam-detail', $data, function ($m) use ($applicant) {
            $m->from('drivinglicense@app.com', 'Driving License');

            $m->to($applicant->email, $applicant->firstname)->subject('Get exam card!');
      
            
            
        });
    
             // return view('admin2/registered');
        } 
        catch (\Exception $e) {
                return $e->getMessage();
        }
        return redirect('admin/registered');

        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function getApplicants(){
         if(\Auth::user()->hasRole('New-entry')){
           
            $applicants = Applicant::all();
            return view('admin2.applicants')->with('app',$applicants);
        


         }
    }
    public function getDetail($id=null){
         if($id==null)
            die("Help");
         if(\Auth::user()->hasRole('New-entry')){
            $applicants = Applicant::find($id);
            return view('admin2.detaileach')->with(['app'=>$applicants]);
         }
    }

    public function getRegistered(){
         if(\Auth::user()->hasRole('New-entry')){
            $applicants = Applicant::all();
            return view('admin2.registered')->with(['app'=>$applicants]);
         }
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getLicense($id=null){
        if(\Auth::user()->hasRole('New-entry')){
        
        if($id==null)
            return 'oops';
        
        //get the last license record and increment and send to view
        //else there is no record set the license number to 1000
        $license=new License;
        $last=License::all()->last();
        
        //return $license;
        $lastlic = $last->lic_no;
        //return $lastlic;
        $app = Applicant::find($id);

        foreach($app as $a)
        {
            if($lastlic==null)
                $license->lic_no=1000;
            else
                $license->lic_no=$lastlic+1;

            $entrylicense = new License;
            $entrylicense['applicant_id'] = $id;
            $applicant = Applicant::find($id);
            $applicant->status=2;
            $applicant->license_type='passed';
            $applicant->save();
            $today = date('Y-m-d');
            $timestamp = strtotime('+5 years');
            $fiveyears = date('Y-m-d', $timestamp);

            $entrylicense->lic_no = $license->lic_no;
            $entrylicense->issue_date = $today;
            $entrylicense->expiry_date = $fiveyears;
            $entrylicense->save();

            $applicant->exam_status='passed';

            

            return redirect()->back();  
      
        }
    }
    }
    /*
    *   update applicant status 2 and add the new licence record
    */
    public function getRenew($id=null){
        if(\Auth::user()->hasRole('New-entry')){
            
            $renew= new Renew;
            //$license=new License;
            $applicant = Applicant::find($id);
            $renew->lic_id=$applicant->license->id;
            $today = date('Y-m-d');
            $timestamp = strtotime('+5 years');
            $fiveyears = date('Y-m-d', $timestamp);
            $renew->renew_date=$today;
            $renew->new_expiry=$fiveyears; 
            $renew->save();
            $data['name'] = $applicant->firstname;

            try {
            
        Mail::send('admin2.revoueach', $data, function ($m) use ($applicant) {
            $m->from('drivinglicense@app.com', 'Driving License');

            $m->to($applicant->email, $applicant->firstname)->subject('Renewed Message!');
      
            
            
        });
    
             // return view('admin2/registered');
        } 
        catch (\Exception $e) {
                return $e->getMessage();
        }
        // return redirect('admin/registered');

        
            return redirect()->back();  
        
    }
}
    /*List of License Holders*/
    public function getLicholder()
    {
        if(\Auth::user()->hasRole('New-entry')){
        $applicants=Applicant::all();
        // return $applicants;
        return view('admin2.licholder')->with('app',$applicants);
    }

    }

    /*renew voucher results*/

     public function getRevoulist(){
         if(\Auth::user()->hasRole('New-entry')){
            $applicants = Applicant::all();
            return view('admin2.revoulist')->with(['app'=>$applicants]);
         }
        
    }

    /*renew voucher approve*/
    public function getRevouapprove($id=null){

    if(\Auth::user()->hasRole('New-entry')){
            $uid =\Auth::user()->id;
            $voucher = Voucher::find($id);
            $voucher->ver_UID = $uid;
            $voucher->verification = 'reverified';
            $voucher->save();
            return redirect('admin/registered'); 
    }
}




public function getShow()
    {
     if(\Auth::user()->hasRole('New-entry')){
        $applicants=Applicant::all();


        if($applicants->license_type ='passed')
            return view('admin2.passedresult')->with('app',$applicants);
    }
}
    
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
    public function getDestroy($id)
    {
        if(Auth::user()->hasRole('admin')){
            $user_delete = User::findOrFail($id);
            $user_delete->delete();

            session()->flash('user_created',"The user has been deleted !");
            return redirect('admin/display');
        }
    }
}
