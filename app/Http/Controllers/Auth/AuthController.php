<?php namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Input;



class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest', ['except' => 'getLogout']);
    // }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|confirmed|min:6',
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function postLogin(Request $request)
    {
        
       // return 'login';

        if (\Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
           // return 'hi';
            // return redirect('create-user');
            $this->validate($request, [
            'email'=> 'required',
            'password'=> 'required ',
        ]);
            return redirect()->intended($this->redirectPath());
            
        }
        return redirect($this->loginPath())
                        ->withInput($request->only('email'))
                        ->withErrors([
                            'email' => $this->getFailedLoginMessage(),
                            ]);
    }

    public function postRegister(Request $request)
    {
        
    $user_input = $request->all();
    $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'password'=> 'required ',
        ]);
    $user_input['password'] = bcrypt($request->input('password'));
    $user = User::create($user_input);
    

    return redirect('auth/login');

    // return redirect('');
    }
}

