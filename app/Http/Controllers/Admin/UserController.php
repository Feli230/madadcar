<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if($user->role == 'client'){
                return view('client/home');
            }
            else{
                return  redirect()->route('service-provider-home');   
            }
        }
        return view('auth/role_selection');  
       
    }
}
