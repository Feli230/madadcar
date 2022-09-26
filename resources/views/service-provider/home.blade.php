@extends('layouts.app')


<!-- CSS only -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
{{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">  --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
{{--  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>  --}}
<link href="{{ asset('assets/styles/service.css') }}" rel="stylesheet">

@section('content-profile')
@include('layouts/profile')
@endsection
    
@section('content')
<section class="app-user-view-account">



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
        
        <div class="walletbtn">
        <a href="{{route('walletpay')}}">
            <button type="button" class="btn btn-warning">Wallet</button>
        </a>
        </div>
          </div>
        </div>
        
        <div class="w3-third">
          <div class="w3-card w3-container">
         @if(isset($requestBookings))   

            <div class="clientloc">
                <h3>Client Location</h3>
            </div>
            @foreach($requestBookings as $request)
            <div class="map" id="{{$request['id']}}" style="display: none">
                <iframe id="map" height="550px" width="100%" src="https://maps.google.com/maps?q={{$request['lat']}},{{$request['long']}}&h1=en&z=14&amp;output=embed">
                    <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
                </iframe>
            </div>
            @endforeach
        
        @elseif(!isset($acceptedService) && !isset($requestBookings))
            <div class="clientloc">
                <h3>Client Location</h3>
            </div>
            <br>
            <div class="map" >
               <p>NO REQUEST RECEIVED</p>
            </div>

        
         @endif


         @if(isset($acceptedService))
            <div class="clientloc">
                <h3>Client Location</h3>
            </div>
            <div class="map" id="{{$acceptedService['id']}}" >
                <iframe id="map" height="450px" width="100%" src="https://maps.google.com/maps?q={{$acceptedService['lat']}},{{$acceptedService['long']}}&h1=en&z=14&amp;output=embed">
                    <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
                </iframe>
            </div>
    
            <div class="row cancelbtn mt-5 ">
                
                <div class="col-6 actionButton" id="cancel"  style="align-content: center">
                    <a href="/" type="button" class="btn btn-sm btn-outline-danger" name="cancel" >Cancel Request</a>
                </div>
                
                @if ($acceptedService['status'] == 'accepted')
                    <div class="col-6 actionButton" id="work" style="align-content: center; display: block" >
                        <button class="btn btn-sm btn-outline-primary" name="work" >Strart Working</button>
                    </div>
                    <div class="col-6 actionButton" id="complete" style="align-content: center; display:none;">
                        <button class="btn btn-sm btn-outline-success" name="complete"  data-toggle="modal" data-target="#exampleModal" >Complete</button>
                    </div>
                @else
                    <div class="col-6 actionButton" id="" style="align-content: center; display: none;" >
                        <button class="btn btn-sm btn-outline-primary" name="work" >Strart Working</button>
                    </div>
                    <div class="col-6 actionButton" id="complete" style="align-content: center; display:block;">
                        <button class="btn btn-sm btn-outline-success" name="complete" data-toggle="modal" data-target="#exampleModal" >Complete</button>
                    </div>
                @endif
                
               

                  <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Request Completed</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <p class="col-6"><strong>Car Name: </strong>{{$acceptedService['model']}}</p>
                                <p class="col-6"><strong>Car Brand: </strong>{{$acceptedService['brand']}}</p>
                            </div>
                            <div class="row">
                                <p class="col-6"><strong>Year: </strong>{{$acceptedService['year']}}</p>
                                <p class="col-6"><strong>Service Charges: </strong>{{$acceptedService['price']}}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  --}}
                            <a href="/" type="button" class="btn btn-success"><i class=" fa fa-check fa-2x"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                                    

               
            </div>
    
            <input type="text" name="reqid" id="reqid"value="{{$acceptedService['id']}}" hidden  />
        @endif

          </div>
        </div>
        

        <div class="w3-third">
          <div class="w3-card w3-container">
      @if(isset($requestBookings))   
          <h3>Incoming request</h3><br>
                
                <div class="saracontent card">
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
    @elseif(!isset($acceptedService) && !isset($requestBookings))
    <h3>Incoming request</h3><br>
    <p>NO REQUEST RECEIVED</p>
    @endif
            
            
    @if(isset($acceptedService))
    {{--  {{dd($acceptedService)}}  --}}
        <div class="incoming">
            <h3 style="text-align: center">Accepted Request</h3>
        </div>
        <div class="saracontent">
            @csrf
            <div class="card2 p-3" >    

                <div class="d-flex align-items-center">

                    <div class="ml-3 w-100">
                        
                        <h4 class="mb-0 mt-0" style="text-align: center">{{$acceptedService['service']}}</h4>

                        <div class="clientdetails">
                            <div class="mt-2">
                                <p style="text-align: center"><strong>Name: </strong>{{$acceptedService['name']}}</p>
                            </div>
                            <div class="">
                                <p><strong>Car Name: </strong>{{$acceptedService['model']}}</p>
                                <p><strong>Car Brand: </strong>{{$acceptedService['brand']}}</p>
                            </div>
                            <div class="">
                                <p><strong>Year: </strong>{{$acceptedService['year']}}</p>
                                <p><strong>Service Charges: </strong>{{$acceptedService['price']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endif
               
          </div>
        </div>
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
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
       
        <script type="text/javascript">
            $(document).ready(function(){
                const id = document.getElementById('reqid').value;
        console.log(id);
                $("#cancel").click(function(){
                    $.ajax({
                     type:'GET',
                     url:'/cancelRequest',
                    data : {
                            id: id
                        },
                     success:function(data) {
                      console.log(data);

                     }
                  });
                });
                $("#work").click(function(){
                    this.style.display = 'none';
                    document.getElementById('complete').style.display = 'block';
                    $.ajax({
                     type:'GET',
                     url:'/workRequest',
                     data : {
                            id: id
                        },
                     success:function(data) {
                      console.log(data);
                     }
                  });
                });
                $("#complete").click(function(){
                    $.ajax({
                     type:'GET',
                     url:'/completeRequest',
                     data : {
                            id: id
                        },
                     success:function(data) {
                      console.log(data);

        
                    
                     }
                  });
                });
            });
            </script>
            
            <script>
        
               function getMessage() {
                var id = $("#bookingid").val();
                  $.ajax({
                     type:'POST',
                     url:'/getupdate',
                     headers: {
                            'X-CSRF-TOKEN' : $('input[name="_token"]').val()
                      },
                      data : {
                            
                        },
                     success:function(data) {
                      console.log(data);
                      
                        $("#msg").html(data.msg);
                     }
                     
                  });
               }
            </script>
    
</section>
@endsection

