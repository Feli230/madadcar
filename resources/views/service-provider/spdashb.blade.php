@extends('layouts.app')

<!-- CSS only -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link href="{{ asset('assets/styles/service.css') }}" rel="stylesheet">

@section('content')

<div class="container">
  
  <form>
    
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
      
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
    
  </form>
      
  <p class="footer">
    a <a href="https://scotch.io/tutorials/css/google-material-design-input-boxes-in-css3" target="_blank">tutorial</a> by <a href="https://scotch.io" target="_blank">scotch.io</a>
  </p>
  
</div>


<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container">
  <h3>Profile</h3><br>
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
            <h4>serviceP</h4>
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

<div class="walletbtn">
<a href="{{route('walletpay')}}">
    <button type="button" class="btn btn-warning">Wallet</button>
</a>
</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container">
    <div class="clientloc">
        <h3>Client Location</h3>
    </div>
    {{--  <div class="map" id="{{}}" style="display: none">
        <iframe id="map" height="350 px" width="700px" src="https://maps.google.com/maps?q={{}},{{x}}&hl=es&z=14&amp;output=embed">
            <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
        </iframe>
    </div>  --}}
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container">
  <h3>Incoming request</h3><br>
        
        <div class="saracontent card">
                    <div class="card2 p-3" onclick="showmap()">    

                        <div class="d-flex align-items-center">

                            <div class="ml-3 w-100">
                                
                                <h4 class="mb-0 mt-0" style="text-align: center"></h4>

                                <div class="clientdetails">
                                <div class="mt-2">
                                    <p style="text-align: center"><strong>Name: </strong></p>
                                </div>
                                <div class="d-flex pr-1">
                                    <p><strong>Car Name: </strong></p>
                                    <p ><strong>Car Brand: </strong></p>
                                </div>
                                <div class="d-flex">
                                    <p><strong>Year: </strong></p>
                                    <p ><strong>Service Charges: </strong></p>
                                </div>
                                </div>
                                <div style="justify-content: center;" class="button mt-2 d-flex flex-row align-items-center">
                                    <button class="btn btn-sm btn-primary w-50" >Accept</button>
                                </div>

                            </div>

                        </div>
                    </div>
        </div>

        

       
  </div>
</div>
</div>


@endsection
