@extends('layouts.app')
<link href="{{ asset('assets/styles/serviceprov.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



@section('content-profile')
@include('layouts/profile')
@endsection
    
@section('content')
<section class="app-user-view-account">



    <div class="border-line">
        <p style="border: 1px"></p>
    </div>

    
    @if(isset($requestBookings))   
        <div class="incoming">
            <h3 style="text-align: center">Incoming Requests</h3>
        </div>
        <div class="saracontent">
            @foreach($requestBookings as $request)
                <form method="POST" action="{{route('service-provider-accept-service',["id"=>$request['id']])}}">
                    @csrf
                    <div class="card2 p-3" onclick="showmap({{$request['id']}})">    

                        <div class="d-flex align-items-center">

                            <div class="ml-3 w-100">
                                
                                <h4 class="mb-0 mt-0" style="text-align: center">{{$request['service']}}</h4>

                                <div class="clientdetails">
                                <div class="mt-2">
                                    <p style="text-align: center"><strong>Name: </strong>{{$request['name']}}</p>
                                </div>
                                <div class="d-flex pr-1">
                                    <p><strong>Car Name: </strong>{{$request['model']}}</p>
                                    <p style="position: absolute; left:193px;"><strong>Car Brand: </strong>{{$request['brand']}}</p>
                                </div>
                                <div class="d-flex">
                                    <p><strong>Year: </strong>{{$request['year']}}</p>
                                    <p style="position: absolute; left:193px;"><strong>Service Charges: </strong>{{$request['price']}}</p>
                                </div>
                                </div>
                                <div style="justify-content: center;" class="button mt-2 d-flex flex-row align-items-center">
                                    <button class="btn btn-sm btn-primary w-50" >Accept</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            @endforeach
        </div>

        <div class="border-line2">
            <p style="border: 1px"></p>
        </div>

        <div class="clientloc">
            <h3>Client Location</h3>
        </div>
        @foreach($requestBookings as $request)
        <div class="map" id="{{$request['id']}}" style="display: none">
            <iframe id="map" height="350 px" width="700px" src="https://maps.google.com/maps?q={{$request['lat']}},{{$request['long']}}&hl=es&z=14&amp;output=embed">
                <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
            </iframe>
        </div>
        @endforeach
    @endif

    @if(isset($acceptedService))
    {{--  {{dd($acceptedService)}}  --}}
        <div class="incoming">
            <h3 style="text-align: center">Accepted Request</h3>
        </div>
        <div class="saracontent" style="height: 92vh; left: 1160px;">
                    @csrf
                    <div class="card2 p-3" >    

                        <div class="d-flex align-items-center">

                            <div class="ml-3 w-100">
                                
                                <h4 class="mb-0 mt-0" style="text-align: center">{{$acceptedService['service']}}</h4>

                                <div class="clientdetails">
                                <div class="mt-2">
                                    <p style="text-align: center"><strong>Name: </strong>{{$acceptedService['name']}}</p>
                                </div>
                                <div class="d-flex pr-1">
                                    <p><strong>Car Name: </strong>{{$acceptedService['model']}}</p>
                                    <p style="position: absolute; left:193px;"><strong>Car Brand: </strong>{{$acceptedService['brand']}}</p>
                                </div>
                                <div class="d-flex">
                                    <p><strong>Year: </strong>{{$acceptedService['year']}}</p>
                                    <p style="position: absolute; left:193px;"><strong>Service Charges: </strong>{{$acceptedService['price']}}</p>
                                </div>
                                </div>
                            

                            </div>

                        </div>
                    </div>
        </div>

        <div class="border-line2">
            <p style="border: 1px"></p>
        </div>

        <div class="clientloc">
            <h3>Client Location</h3>
        </div>
    
        <div class="map" id="{{$acceptedService['id']}}" >
            <iframe id="map" height="350 px" width="700px" src="https://maps.google.com/maps?q={{$acceptedService['lat']}},{{$acceptedService['long']}}&hl=es&z=14&amp;output=embed">
                <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
            </iframe>
        </div>

        <div class="cancelbtn" style="align-content: center">
            <button class="btn btn-sm btn-outline-danger" >Cancel Request</button>
        </div>
    
    @endif
 {{--  </div>  --}}
   
    
    
    

    <div class="profile">
        <!-- User Card -->
        <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-xl-3">
                
            </div>
            </div>
            <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
                <div class="user-info text-center">
                <h4>{{$username}}</h4>
                <span class="badge bg-light-success">Active</span>
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
                <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
                </span>
                <div class="ms-75">
                <h4 class="mb-0">500</h4>
                <small style="position: absolute; left: 24px;">Request Completed</small>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
                </span>
                <div class="ms-75">
                <h4 class="mb-0">568</h4>
                <small>Ratings</small>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
                </span>
                <div class="ms-75">
                <h4 class="mb-0">Rs.1.2k</h4>
                <small>Wallet</small>
                </div>
            </div>
            </div>
            <hr>
           
        </div>
        </div>
        <!-- /User Card -->
    </div>
        

    <script>
        function showmap(id)
        {
            var ele = document.getElementsByClassName('map');
            for(let i=0; i<ele.length; i++)
            {
                ele[i].style.display = 'none';
            }

           document.getElementById(id).style.display = "block";
           
        }
    </script>
    {{--  console.log(document.getElementById('map').src = "https://maps.google.com/maps?q="+lat+","+long+"&hl=es&z=14&amp;output=embed");  --}}

</section>
@endsection

