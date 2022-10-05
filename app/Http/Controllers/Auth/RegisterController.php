<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    protected function setRedirect($role){
       if($role == "client"){
        $this->redirectTo = RouteServiceProvider::CLIENTHOME;
       }
       elseif($role == "service_provider"){
        $redirectTo = RouteServiceProvider::SPHOME;
       }
       elseif($role == "admin"){
        $redirectTo = RouteServiceProvider::ADMINHOME;
       }
        
    }

        /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        if ( $user->role == 'client') {
            $this->setRedirect('client');
            return view('client/home');
        }
        else if($user->role == 'service_provider') {
            $this->setRedirect('service_provider');
            return view('service-provider/home');
        }
        else if($user->role == 'admin') {
            $this->setRedirect('admin');
            return view('admin/home');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role'=> ['required', 'string'],
            'cnic'=> ['required', 'min:12'],
            'phone'=> ['required', 'min:11'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'cnic' => $data['cnic'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
