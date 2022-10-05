<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestBooking;
use App\Models\Service;
use App\Models\User;


class ServiceController extends Controller
{
    public function getUSerInfo($id)
    {
        $query = User::select('*')->where('id', $id)->get();
        return $query[0];
    }

    // get multiple requests against servie id
    public function getRequests($id)
    {
        $count = 0;

        $query = RequestBooking::select('*')->where('status', 'pending')->orderBy('req_id', 'desc')->get();
        $requests = null;
        $count = 0;
        foreach($query as $q){
            $service = Service::select('service_type','service_price')->where('id', $q->service_id)->get() ;
            $user = User::select('name', 'phone')->where('id', $q->client_id)->get() ;
            // $requestBookings = RequestBooking::select('car_model','car_brand','car_year','client_location','status','date')->where('sp_id')

            $requests[$count] = ['id'=> $q->req_id,'name' => $user[0]->name, 'phone' => $user[0]->phone , 'service' => $service[0]->service_type,'price' => $service[0]->service_price, 'model'=>$q->car_model, 'brand'=>$q->car_brand, 'year'=>$q->car_year, 'lat'=>json_decode($q->client_location)[0],'long'=>json_decode($q->client_location)[1], 'status'=>$q->status, 'date'=>$q->date ];
            $count = $count + 1;
        }

        // dd($requests);
        return $requests;



    }

    // get request against request id
    public function getRequest($id)
    {
        $query = RequestBooking::select('*')->where('req_id', $id)->get();
        $service = Service::select('service_type','service_price')->where('id', $query[0]->service_id)->get() ;
        $user = User::select('name', 'phone')->where('id', $query[0]->client_id)->get() ;

        $requests = ['id'=> $query[0]->req_id,'name' => $user[0]->name,'phone' => $user[0]->phone , 'service' => $service[0]->service_type,'price' => $service[0]->service_price, 'model'=>$query[0]->car_model, 'brand'=>$query[0]->car_brand, 'year'=>$query[0]->car_year, 'lat'=>json_decode($query[0]->client_location)[0],'long'=>json_decode($query[0]->client_location)[1], 'status'=>$query[0]->status, 'date'=>$query[0]->date ];
        // dd($requests);
        return $requests;
    }

    public function updateRequest($req_id, $sp_id )
    {
        $query = RequestBooking::select('status', 'sp_id')->where('req_id', $req_id)->first();
        if($query->status == 'pending'){
            $query = RequestBooking::select('*')->where('req_id', $req_id)->update(['status' => 'accepted','sp_id' => $sp_id]);
            return true;
        }
        elseif($query->sp_id == $sp_id)
        {
            return true;
        }
        return false;
    }
   
    public function index()
    {
        // dd(Auth::id());
       $user = $this->getUSerInfo(Auth::id());
       $username = $user->name;

        $requestBookings = $this->getRequests(Auth::id());    
        // dd($requestBookings);
        return view('service-provider.home', compact('requestBookings', 'username'));
    }
    

    public function acceptService($id, Request $request)
    {
        $user = $this->getUSerInfo(Auth::id());
        $username = $user->name;

        $acceptedService =  $this->getRequest($id);

        $status = $this->updateRequest($id,Auth::id() );

        if($status){
            return redirect()->route('getacceptservice', ['acceptedService' => $acceptedService, 'username' => $username ]);
        }
        else{
            return redirect()->back()->withErrors("request already accepted")->withInput();
        }
        
    }

    public function getAcceptService(Request $request)
    {
        // dd($request->input());
        $username = $request->username;
        $acceptedService = $request->acceptedService;
     return view('service-provider.home', compact('acceptedService', 'username'));
        
    }
    
}
