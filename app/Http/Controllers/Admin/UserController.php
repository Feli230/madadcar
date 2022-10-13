<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestBooking;
use App\Models\Service;
use App\Models\User;
use App\Models\Payment;

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

    public function clientpreviousRecords(Request $request)

    {
        if ($request->ajax()) {
            $data = RequestBooking::join('services', 'services.id', '=', 'request_bookings.service_id')
            ->join('users as client', 'client.id', '=', 'request_bookings.client_id')
            ->leftjoin('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
            ->select('request_bookings.*', 'client.name as client_name', 'sp.name as sp_name', 'sp.phone as sp_phone' , 'services.service_type as service', 'services.service_price as price')
            ->where('request_bookings.client_id', Auth::id())
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
        

        return view('/client/previousrecords');
        
    }

    public function serviceproviderpreviousRecords(Request $request)
    {
        // $data = RequestBooking::join('services', 'services.id', '=', 'request_bookings.service_id')
        //     ->join('users as client', 'client.id', '=', 'request_bookings.client_id')
        //     ->leftjoin('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
        //     ->select('request_bookings.*', 'client.name as client_name', 'sp.name as sp_name', 'client.phone as client_phone' , 'services.service_type as service', 'services.service_price as price')
        //     ->where('request_bookings.sp_id', Auth::id())
        //     ->get();
        // dd($data);

        if ($request->ajax()) {
            $data = RequestBooking::join('services', 'services.id', '=', 'request_bookings.service_id')
            ->join('users as client', 'client.id', '=', 'request_bookings.client_id')
            ->leftjoin('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
            ->select('request_bookings.*', 'client.name as client_name', 'sp.name as sp_name', 'client.phone as client_phone' , 'services.service_type as service', 'services.service_price as price')
            ->where('request_bookings.sp_id', Auth::id())
            ->get();
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="/walletpay/'.$row->req_id.'" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true); 
        }
        // $count =0;
        // $query = RequestBooking::where('sp_id', Auth::id())->get();
        // foreach ($query as $key ) {
        //     // dd($key);
        //     if($key->sp_id ==  Auth::id())
        //     {
        //         $myrequest[$count] = $key;
        //         // dd($key);
        //         $user = $this->getUSerInfo(Auth::id());
        //         $myrequest[$count]['spName'] = $user->name;
                
        //         $user = $this->getUSerInfo($key->client_id);
        //         $myrequest[$count]['clientName'] = $user->name; 
                
                 
        //         $service = $this->getService($key->service_id);
        //         $myrequest[$count]['service_type'] = $service->service_type;
        //         $myrequest[$count]['price'] = $service->service_price;

        //         $myrequest[$count]['count'] = $count+1;

        //         $count=$count+1;
        //     }
        // }
        // dd($myrequest); 


        return view('/service-provider/previousrecords');

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

    //deopsit
    public function Deposit(Request $request)

  {
    $data = Payment::select('*')->get();
    // dd($data);
    if ($request->ajax()) {
       
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                       $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deposit'.$row->id.'">
                       View
                     </button>';
                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true); 
    }

    return view('/admin/admindeposit', compact('data'));

  }


//all record admin
   public function allRecords(Request $request)
   {
    // $data = RequestBooking::join('services', 'services.id', '=', 'request_bookings.service_id')
    //     ->join('users as client', 'client.id', '=', 'request_bookings.client_id')
    //     ->leftjoin('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
    //     ->select('request_bookings.*', 'client.name as client_name', 'sp.name as sp_name', 'services.service_type as service', 'services.service_price as price')
    //     ->get();

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
    // $sum =0;
    // foreach($data as $d)
    // {
    //     $sum = $sum + $d->price;
// , compact('sum')
    // }

    return view('/admin/allrecords');
    
   }

   public function getTotalPrice()
   {
    $data = RequestBooking::join('services', 'services.id', '=', 'request_bookings.service_id')
        ->select('services.service_price as price')
        ->get();
        $sum = 0;
        foreach($data as $pp)
        {
            $sum = $sum + $pp->price;
        }
    return response()->json($sum);
   }

  //upload pic
  public function imageUpload()

  {

      return view('imageUpload');

  }

  

  /**

   * Display a listing of the resource.

   *

   * @return \Illuminate\Http\Response

   */

  public function imageUploadPost(Request $request)

  {

      $request->validate([

          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);

      $imageName = time().'.'.$request->image->extension();  
      $request->image->move(public_path('assets/depositImages'), $imageName);
      /* Store $imageName name in DATABASE from HERE */

      $payment = new Payment;
      $payment->request_id = $request->req_id ;
      $payment->status = "unpaid" ;
      $payment->image = $imageName ;
      $payment->save() ;

      return back()

          ->with('Reciept Send Succesfully')

          ->with('image',$imageName); 

  }

  public function serviceDashboard()
  {
    return view('/service-provider/spdashb');
    
  }

  public function statusupdate($id)
  {
    $payment_status = Payment::where('id', $id)->update(['status' => "paid"]);
    return response()->json($id);
  }
  

}

