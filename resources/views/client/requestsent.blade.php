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
    {{--  <div class="car-model">
        <h3>Enter Car Model</h3>
        <div class="login-box">
            <form>
              <div class="user-box">
                <input type="text" name="Model" required>
                <label>Car Model</label>
              </div>
              <div class="user-box">
                <input type="text" name="carbrand" required>
                <label>Car Brand</label>
              </div>
              <div class="user-box">
                <input type="number" min="1900" max="2099" step="1" value="2016">
                <label>Year</label>

              </div>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Next
              </a>
            </form>
        </div>
    </div>  --}}
          {{--  <div class="map">
            <iframe height="350 px" width="700px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
            </iframe>
          </div>  --}}
          {{--  <div class="input-group">
            <div class="form-outline">
              <input type="search" value="Search" id="form1" class="form-control" />
              
            </div>
            <button type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
          </div>  --}}
          <div class="ontway">
            <h3>Waiting for Service Provider ...</h3>
          </div>

          <form method="POST" action="{{route('acceptreq')}}">
            @csrf
          <div class="map">
            <iframe id="map" height="350 px" width="700px" src="https://maps.google.com/maps?q={{$cardetails['lat']}},{{$cardetails['long']}}&hl=es&z=14&amp;output=embed">
              <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
          </iframe>
          </div>

          

            
         
          <div class="nxtbtn">
            <a href="#">
            <button type="button" class="btn btn-danger">Cancel Request</button>
            </a>
          </div>

          </form>

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
