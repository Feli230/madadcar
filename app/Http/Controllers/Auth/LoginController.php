<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    
 

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    protected function setRedirect($role){
       if($role == "client"){
        $redirectTo = RouteServiceProvider::CLIENTHOME;
       }
       else{
        $redirectTo = RouteServiceProvider::SPHOME;
       }
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

           /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticated(Request $request, $user)
    {
        
        if ( $user->role == 'client') {
            $this->setRedirect('client');
            return view('client/home');
        }
        else if($user->role == 'service_provider') {
            $this->setRedirect('service-provider');
            return view('service-provider/home');
        }
        
    }


   
}
