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
        // dd($service_id[0]->id);
        return $service_id[0]->id;
        
    }

    public function selectService($service)
    {

        return view('client/car-model', compact('service'));
    }

    public function selectMap(Request $request)
    {

        // dd($request->input());
        // $validated = $request->validate([
        //     'model' => 'required',
        //     'carbrand' => 'required',
        //     'year' => 'required',
        // ]);
        // dd($request->input());
        return view('client/select-map', compact('request'));
    }

    public function requestSent(Request $request)
    {
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

        

            
        return view('client/requestsent', compact('request'));
    }

}
