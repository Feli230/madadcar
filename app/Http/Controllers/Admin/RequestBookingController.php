<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestBooking;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RequestBookingController extends Controller
{
    
    public function getServiceId($service)
    {
        $service_id = DB::table('Services')->where('service_type', $service)->get();
       // dd($service_id);
        return $service_id[0]->id;
        
    }

    public function selectService($service, $class)
    {
         $price = DB::table('Services')->select('service_price')->where('service_type',$service)->get();
        $s_price = $price[0]->service_price;
        // dd($s_price);

        return view('client/car-model', compact('service','class','s_price'));
    }

    public function selectMap(Request $request)
    {


        // dd($request->input());
        $validated = $request->validate([
            'model' => 'required',
            'carbrand' => 'required',
            'year' => 'required',
        ]);

       
        $cardetails = $request->input();
        // $this->getCurrentLocation();
        return view('client/select-map', compact('cardetails'));
    }

    public function requestSent(Request $request)
    {
        if($request->lat == null && $request->long == null)
        {
            return redirect()->back()->withErrors("location not selected")->withInput();
        }
        else{
            $cardetails = $request->input();
            $service_id = $this->getServiceId($request->service);
            $user_id = Auth::id();
            $clientLocation =  [$request->lat, $request->long];
            $clientLocation = json_encode($clientLocation);
            $booking = new RequestBooking;
            $booking->client_id = $user_id;
            $booking->sp_id = null;
            $booking->service_id = $service_id;
            $booking->car_model = $request->model;
            $booking->car_brand = $request->carbrand;
            $booking->car_year = $request->year;
            $booking->client_location = $clientLocation;
            $booking->comment = null;
            $booking->status = "pending";
            $booking->date = date('Y-m-d');
            $booking->save();
            return redirect()->route('waiting', ['cardetails'=> $cardetails, 'booking'=> $booking]);
        }
    }

    public function waiting(Request $request)
    {

        $booking = RequestBooking::select('*')->where('req_id', $request->booking)->first();
        // dd($booking, $request->cardetails);
        $cardetails = $request->cardetails;
        return view('client/requestsent', compact('cardetails','booking'));
        
    }

    //wallet
    public function walletPay($id)
    {
        // dd($id);
        $booking = RequestBooking::select('sp_id')->where('req_id', $id)->first();
        $service = Service::select('*')->where('id', $booking->sp_id)->first();
        // dd($service);
        return view('service-provider/walletpay', compact('id', 'service'));
        
    }

    //ajax call to  get  the status
    public function getUpdate(Request $request)
    {
        $status = RequestBooking::select('status')->where('req_id', $request->id )->get();
        return response()->json($status[0]->status);
    }

    //ajax call to  get  the sp INfo
    public function getspInfo(Request $request)
    {
        $spinfo = RequestBooking::join('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
        ->select( 'sp.name as sp_name', 'sp.phone as sp_phone')
        ->where('request_bookings.req_id', $request->id)->first();
        return response()->json($spinfo);
    }
    

    //ajax call from sp to chnage the status when click on cancel request 
    public function cancelRequest(Request $request )
    {
        RequestBooking::where('req_id', $request->id)->update(['status' => "failed"]);
        return response()->json('Request Canceled');
    }

    //ajax call from sp to chnage the status when clicked on work in progress
    public function workRequest(Request $request )
    {
        RequestBooking::where('req_id', $request->id)->update(['status' => "workinprogress"]);
        return response()->json('Work in Progress');
    }
    //ajax call from sp to chnage the status when clicked on complete from service provider
    public function completeRequest(Request $request )
    {
        RequestBooking::where('req_id', $request->id)->update(['status' => "completed"]);
        return response()->json('Completed Request');
    }


    //after complete the request from sp
    public function requestComplete()
    {
        $spinfo = RequestBooking::join('users as sp', 'sp.id', '=', 'request_bookings.sp_id')
        ->select( 'sp.name as sp_name', 'sp.phone as sp_phone')
        ->where('request_bookings.req_id', '426')->first();

        dd($spinfo);
    }


    //coments and reviews
    public function comtsReviews(Request $request)
    {
        // dd($request->input());
        $review = ['comment' => $request->comment, 'review' => $request->rate];
        RequestBooking::where('req_id', $request->req_id)->update(['comment' => $review]);

        return redirect()->route('user.index');
        
    }
    
}
