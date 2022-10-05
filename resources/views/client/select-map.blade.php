@extends('layouts.app')
  <link href="{{ asset('assets/styles/brkdwn.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">   
  {{--  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>  --}}
  {{--  <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>  --}}
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="{{asset('js/mapInput.ts')}}"></script>
  <!-- playground-hide -->
 {{--  <!--  <script>
    const process = { env: {} };
    process.env.GOOGLE_MAPS_API_KEY ="AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg";
  </script> -->  --}}
  <!-- playground-hide-end -->
  <script>
    // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      let map, infoWindow;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 31.3787406 , lng: 74.2061816 },
          zoom: 12,
          
        });
        infoWindow = new google.maps.InfoWindow();

        const locationButton = document.createElement("button");

        locationButton.textContent = "Find My Location";
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
        locationButton.addEventListener("click", () => {
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                console.log(position.coords.latitude, position.coords.longitude);
                document.getElementById('lat').value=position.coords.latitude;
                document.getElementById('long').value=position.coords.longitude;

                const pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent("Your Location");
                infoWindow.open(map);
                map.setCenter(pos);
              },
              () => {
                handleLocationError(true, infoWindow, map.getCenter());
              }
            );
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        });
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
          browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
      }

      window.initMap = initMap;

      
  </script>
  

  <style>
    /* 
   * Always set the map height explicitly to define the size of the div element
   * that contains the map. 
   */
  #map {
    height: 50%;
  }

  /* 
   * Optional: Makes the sample page fill the window. 
   */
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  .custom-map-control-button {
    background-color: #fff;
    border: 0;
    border-radius: 2px;
    box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
    margin: 10px;
    padding: 0 0.5em;
    font: 400 18px Roboto, Arial, sans-serif;
    overflow: hidden;
    height: 40px;
    cursor: pointer;
  }
  .custom-map-control-button:hover {
    background: rgb(235, 235, 235);
  }
  </style>


@section('content')

 
          <div class="selected">

              <h3>Service Selected</h3>
          </div>
          <div class="border-line">
              <p style="border: 1px"></p>
          </div>
          
          <div class="map" id="map" style="height: 400px; width: 700px;">
          </div>
          {{--  <div id="infowindow-content">
            <span id="place-name" class="title"></span><br />
            <span id="place-address"></span>
          </div>  --}}
          

            {{--  <div class="input-group">
            <div class="form-outline">
              <input type="search" value="Search" id="search" class="form-control" />
            </div>
            <button type="button" class="btn btn-danger" value="fas fa-regular">
              <i class="fa-regular fa-magnifying-glass-location"></i>  
            </button>
          </div> 
            --}}
          
      
          
          

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
                  {{--  <div class="icons">

                    <h5>Name: {{$cardetails['model']}}</h5>
                    <h5>Brand: {{$cardetails['carbrand']}}</h5>
                    <h5>Year: {{$cardetails['year']}}</h5>
                    <h5>price: 700 </h5>
        
                  </div>  --}}
                  
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
           <div class="sprice">

            <h5>Name: {{$cardetails['model']}}</h5>
            <h5>Brand: {{$cardetails['carbrand']}}</h5>
            <h5>Year: {{$cardetails['year']}}</h5>
            <h5>Price: {{$cardetails['s_price']}}</h5>


          </div>
            <form method="POST" action="{{route('requestsent')}}">
              @csrf
    {{--  {{dd($cardetails);}}  --}}
    
              <input type="text" name="service" value="{{$cardetails['service']}}" hidden>
              <input type="text" name="class" value="{{$cardetails['class']}}" hidden>
              <input type="text" name="model" value="{{$cardetails['model']}}" hidden>
              <input type="text" name="carbrand" value="{{$cardetails['carbrand']}}" hidden>
              <input type="text" name="year" value="{{$cardetails['year']}}" hidden>
              <input type="text" name="s_price" value="{{$cardetails['s_price']}}" hidden>

    
              <div class="latlongs">
               
                <div class="textfield d-flex">
                  <input type="text" name="lat" id="lat" class="form-control" hidden>
                  <input type="text" name="long" id="long" class="form-control" hidden>
                </div>
              </div>
            
              <div class="nxtbtn">
                
                <button type="submit"  class="btn btn-danger">
                  Confirm Location
                </button>
              </div>
            </form>
         </div>
       
         {{--  <!-- Add the this google map apis to webpage -->  --}}
         <script
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm2WNZfAssTSlEeqF1l6ctTGBJoGOCbWg&callback=initMap&libraries=places&v=weekly"
         defer
       ></script>

@endsection


{{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCocSekq9y0XUjZticy_DIm6zI-wk5C944&callback=createMap&libraries=places" async defer></script>  --}}
