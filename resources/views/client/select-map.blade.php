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
        
          <div class="map">
            <iframe height="350 px" width="700px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Beaconhouse%20National%20University+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
            </iframe>
          </div>

            <div class="input-group">
            <div class="form-outline">
              <input type="search" value="Search" id="search" class="form-control" />
            </div>
            <button type="button" class="btn btn-danger" value="fas fa-regular">
              <i class="fa-regular fa-magnifying-glass-location"></i>  
            </button>
          </div>   
        <form method="POST" action="{{route('requestsent')}}">
          @csrf
          <input type="text" name="service" value="{{$request->service}}" hidden>
          <input type="text" name="model" value="{{$request->model}}" hidden>
          <input type="text" name="carbrand" value="{{$request->carbrand}}" hidden>
          <input type="text" name="year" value="{{$request->year}}" hidden>


          <div class="latlongs">
            <div class="maplatlong">
              <span class="input-group-text">Latitude and Longitude </span>
            </div>
            <div class="textfield d-flex">
              <input type="text" name="lat" id="lat" class="form-control">
              <input type="text" name="long" id="long" class="form-control">
            </div>
          </div>
         
          <div class="nxtbtn">
            
            <button type="submit"  class="btn btn-danger">
              Confirm Location
            </button>
          </div>
        </form>
          <div class="backbtn">
            <a href="#">
              <button type="button" class="btn btn-outline-warning">
                Back
              </button>
              </a>
          </div>
          

          <div class="container client-container">
            <div class="card client-card card0">
                <div class="border client-border">
                  <h2>{{$request->service}}</h2>
                  <div class="icons">
                    <i class="fa fa-codepen">Name: {{$request->model}}</i>
                    <i class="fa fa-instagram">Brand: {{$request->carbrand}}</i>
                    <i class="fa fa-dribbble">Year: {{$request->year}}</i>
                  </div>
                  {{--  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif  --}}
              </div>
           </div>
         </div>
    
       
         {{--  <!-- Add the this google map apis to webpage -->  --}}
      
      
          
@endsection
