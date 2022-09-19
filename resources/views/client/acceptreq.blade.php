@extends('layouts.app')
  <link href="{{ asset('assets/styles/brkdwn.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
@section('content')
    <div class="selected">
        <h3>Service Selected</h3>
    </div>
    <div class="border-line">
        <p style="border: 1px"></p>
    </div>
  
          <div class="ontway">
            <h3>{{}} Has accepted your request</h3>
          </div>

          <div class="map">
            <iframe id="map" height="350 px" width="700px" src="https://maps.google.com/maps?q={{$cardetails['lat']}},{{$cardetails['long']}}&hl=es&z=14&amp;output=embed">
              <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
          </iframe>
          </div>

          

            
         
          <div class="cancelbttn">
            <a href="#">
            <button type="button" class="btn btn-danger"> Cancel </button>
        </a>
       
          </div>
          <div class="nxtbtn"
          <a>
            <button type="button" class="btn btn-success"> Request Completed</button>
        </a>

          

    <div class="container client-container">
        <div class="card client-card {{$cardetails['class']}}">
        <div class="border client-border">

          @switch($cardetails['service'])


          @case('breakdown')
          <h2>Break Down</h2>
          @break

          
          @case('battery')
          <h2>Battery</h2>
          @break
          
          @case('carlock')
          <h2>Car Lock</h2>
          @break
          
          @case('refueling')
          <h2>Refueling</h2>
          @break
          
          @case('towtruck')
          <h2>Tow Truck</h2>
          @break
          
          @case('flattyre')
          <h2>Flat tyre</h2>
          @break
          
          @case('carwash')
          <h2>Car Wash</h2>
          @break

          @case('others')
          <h2>Others</h2>
          @break

        @endswitch
            <div class="icons">
            <i class="fa fa-codepen"> Name: {{$cardetails['model']}}</i>
            <i class="fa fa-instagram">Brand: {{$cardetails['carbrand']}}</i>
            <i class="fa fa-dribbble"> Year: {{$cardetails['year']}}</i>
            <i class="fa fa-dribbble">Latitude: {{$cardetails['lat']}}</i>
            <i class="fa fa-dribbble">Longitude: {{$cardetails['long']}}</i>


            
            </div>
        </div>
        </div>
        

    </div>
    
    
    
@endsection
