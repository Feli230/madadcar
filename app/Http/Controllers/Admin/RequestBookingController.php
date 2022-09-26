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
    public function walletPay()
    {
        return view('service-provider/walletpay');
        
    }

    //ajax call to  get  the status
    public function getUpdate(Request $request )
    {
        $status = RequestBooking::select('status')->where('req_id', $request->id )->get();
        return response()->json($status[0]->status);
    }


    //ajax call from sp to chnage the status
    public function cancelRequest(Request $request )
    {
        RequestBooking::where('req_id', $request->id)->update(['status' => "failed"]);
        return response()->json('Request Canceled');
    }

    //ajax call from sp to chnage the status
    public function workRequest(Request $request )
    {
        RequestBooking::where('req_id', $request->id)->update(['status' => "workinprogress"]);
        return response()->json('Work in Progress');
    }
    //ajax call from sp to chnage the status
    public function completeRequest(Request $request )
    {
        RequestBooking::where('req_id', $request->id)->update(['status' => "completed"]);
        return response()->json('Completed Request');
    }


    //after complete the request from sp
    public function requestComplete()
    {
        //return to the page where amunt is showing
    }


    
}
