<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Role;
use App\Permission;
use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('Admin.createUser');
        
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
    public function create()
    {
        if (Auth::user()->hasRole('admin')) {
            $drop_perms = Permission::lists('display_name', 'id');
            return view('Admin/create-user')->with('drop_perms', $drop_perms);
        }
    }
    // public function postindex()
    // {
    //     $input=Input::all();
    //     return view('create-user');
    // }
    /*store newly created resource in storage */
    public function post(Request $request)
    {
        if(Auth::user()->hasRole('suchu')){
            $user_input = $request->all();
            $user_input['password'] = bcrypt($user_input['password']);
            $user_role = $user_input['roles_id'];

            //$user = User::create($user_input);
            session()->flash('user_created','The user has been successfully added !');
            $user->roles()->attach($user_role);
    }
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
