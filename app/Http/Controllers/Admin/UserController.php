<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestBooking;
use App\Models\Service;
use App\Models\User;


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

    public function previousRecords()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if($user->role == 'client'){
                return  redirect()->route('client-previousrecords');
            }
            else{
                return  redirect()->route('service-provider-previousrecords');   
            }
        }

    }
    public function getUSerInfo($id)
    {
        $query = User::select('*')->where('id', $id)->get();
        return $query[0];
    }
    public function getService($id)
    {
        $query = Service::select('service_type','service_price')->where('id', $id)->get();
        return $query[0];
    }

    public function clientpreviousRecords()

    {
        $count =0;
        $query = RequestBooking::where('client_id', Auth::id())->get();
        foreach ($query as $key ) {
            // dd($key->req_id);
            if($key->client_id ==  Auth::id())
            {
                $myrequest[$count] = $key;
                // dd($key);
                $user = $this->getUSerInfo(Auth::id());
                $myrequest[$count]['username'] = $user->name;
                if($key->sp_id != null)
                {
                    $user = $this->getUSerInfo($key->sp_id);
                    $myrequest[$count]['spname'] = $user->name;
                    
                    // dd($user);
                }
                $service = $this->getService($key->service_id);
                    $myrequest[$count]['service_type'] = $service->service_type;
                    $myrequest[$count]['price'] = $service->service_price;

                    $myrequest[$count]['count'] = $count+1;

                $count=$count+1;
            }
        }
        // dd($myrequest);

        return view('/client/previousrecords', compact('myrequest'));
        
    }

    public function serviceproviderpreviousRecords()
    {
        $count =0;
        $query = RequestBooking::where('sp_id', Auth::id())->get();
        foreach ($query as $key ) {
            // dd($key);
            if($key->sp_id ==  Auth::id())
            {
                $myrequest[$count] = $key;
                // dd($key);
                $user = $this->getUSerInfo(Auth::id());
                $myrequest[$count]['spName'] = $user->name;
                
                $user = $this->getUSerInfo($key->client_id);
                $myrequest[$count]['clientName'] = $user->name; 
                
                 
                $service = $this->getService($key->service_id);
                $myrequest[$count]['service_type'] = $service->service_type;
                $myrequest[$count]['price'] = $service->service_price;

                $myrequest[$count]['count'] = $count+1;

                $count=$count+1;
            }
        }
        // dd($myrequest); 
        return view('/service-provider/previousrecords', compact('myrequest'));

    }

}
