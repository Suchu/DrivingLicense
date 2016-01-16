<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Role;
use App\Permission;
use App\User;
use App\Applicant;
use App\Voucher;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

            
        }
    }

    public function getNew(){
        if(\Auth::user()->hasRole('New-entry')){


        return view('admin2.applicants');
        }
         return redirect('404');
    }
        public function getDisplay()
        {
            if(\Auth::user()->hasRole('admin')){

            $user = User::all();

        return view('Admin.userlists')->with('user', $user);
        }
    }

    public function getRegistered(){
        if(\Auth::user()->hasRole('New-entry')){


        return view('admin2.registered');
        }
         return redirect('404');

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
