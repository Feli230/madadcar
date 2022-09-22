<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestBooking;
use App\Models\Service;
use App\Models\User;
use DataTables;


class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if($user->role == 'client'){
                return view('client/home');
            }
            elseif($user->role == 'service_provider'){
                return  redirect()->route('service-provider-home');   
            }
            elseif($user->role == 'admin'){
                return  view('admin/home');   
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
            elseif($user->role == 'service_provider'){
                return  redirect()->route('service-provider-previousrecords');   
            }
            else
            {
                return view('admin/home'); 
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

    //records table for client
    
    public function adminClient(Request $request)
    {

        if ($request->ajax()) {
            $data = User::select('*')->where('role', 'client');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true); 
        }
        return view('/admin/adminclients');
        
    }

    //records table for sprovider
    public function adminService(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*')->where('role', 'service_provider');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true); 
        }
        return view('/admin/adminserviceproviders');
        
    }
//all record admin
   public function allRecords(Request $request)
   {

    if ($request->ajax()) {
        $data = RequestBooking::join('services', 'services.id', '=', 'request_bookings.service_id')
        ->join('users as client', 'client.id', '=', 'request_bookings.client_id')
        ->leftjoin('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
        ->select('request_bookings.*', 'client.name as client_name', 'sp.name as sp_name', 'services.service_type as service', 'services.service_price as price')
        ->get();
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                       $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true); 
    }

    return view('/admin/allrecords');
    
   }

  

}
