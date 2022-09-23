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
    public function getCurrentLocation(Type $var = null)
    {

    try {
        $lat = 0;
        $lng = 0;
        

        $GOOGLE_API_KEY_HERE = '';
        $data_location = "https://maps.google.com/maps/api/geocode/json?key=".$GOOGLE_API_KEY_HERE."&address=".str_replace(" ", "+", $address)."&sensor=false";
        $data = file_get_contents($data_location);
        dd($data);
        usleep(200000);
        // turn this on to see if we are being blocked
        // echo $data;
        $data = json_decode($data);
        if ($data->status=="OK") {
            $lat = $data->results[0]->geometry->location->lat;
            $lng = $data->results[0]->geometry->location->lng;

            if($lat && $lng) {
                return array(
                    'status' => true,
                    'lat' => $lat, 
                    'long' => $lng, 
                    'google_place_id' => $data->results[0]->place_id
                );
            }
        }
        if($data->status == 'OVER_QUERY_LIMIT') {
            return array(
                'status' => false, 
                'message' => 'Google Amp API OVER_QUERY_LIMIT, Please update your google map api key or try tomorrow'
            );
        }

    } catch (Exception $e) {

    }

    return array('lat' => null, 'long' => null, 'status' => false);

    }
    
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
// dd($request->input());
        $cardetails = $request->input();
        $service_id = $this->getServiceId($request->service);
        // getCurrentUserId();
        // dd(Auth::id());
        $user_id = Auth::id();
        $clientLocation =  [$request->lat, $request->long];
        // dd($clientLocation);
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

        

            
        return view('client/requestsent', compact('cardetails'));
    }

    public function checkStatus()
    {
        print(Auth::id());
        $service_id = DB::table('request_bookings')->select('status')->where('client_id', Auth::id())->orderBy('req_id', 'desc')->first();
        if($service_id->status == "accepted")
        {

        }
    }

    public function acceptReq()
    {
        print(Auth::id());
        $service_id = DB::table('request_bookings')->select('status')->where('client_id', Auth::id())->orderBy('req_id', 'desc')->first();
        if($service_id->status == "accepted")
        {

        }
        // print Auth::id();
        // return view('/home');
        
    }

    //wallet
    public function walletPay()
    {
        return view('service-provider/walletpay');
        
    }


}
