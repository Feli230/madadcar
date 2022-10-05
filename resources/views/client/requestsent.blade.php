@extends('layouts.app')
  <link href="{{ asset('assets/styles/brkdwn.css') }}" rel="stylesheet">
  {{--  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">   --}}
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
@section('content')
    <div class="selected">
        <h3>Service Selected</h3>
    </div>
    <div class="border-line">
        <p style="border: 1px"></p>
    </div>
    
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
                <p> Name: {{$cardetails['model']}}</p>
                <p>Brand: {{$cardetails['carbrand']}}</p>
                <p> Year: {{$cardetails['year']}}</p>
                <p>Latitude: {{$cardetails['lat']}}</p>
                <p>Longitude: {{$cardetails['long']}}</p>
                <p>Price: {{$cardetails['s_price']}} </p>
                </div>  --}}
            </div>  
           
        
          </div>
          
      <form class="stepformheader" method="POST" action="{{route('acceptreq')}}">
        @csrf
          <ul id="progressbar">
            <li class="active" id="account"><strong>Verifing and Assign to Servive Provider</strong></li>
            <li id="personal"><strong>On the Way</strong></li>
            <li id="payment"><strong>Work is in progress</strong></li>
            <li id="confirm"><strong>Complete</strong></li>
          </ul>
          {{--  <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
          </div>  --}}
        <div class="">
          <iframe id="map" height="350 px" width="700px" src="https://maps.google.com/maps?q={{$cardetails['lat']}},{{$cardetails['long']}}&hl=es&z=14&amp;output=embed">
            <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
          </iframe>
        </div>  
        <fieldset>
          <input type="button" name="next" class="next action-button" id="firstNext" value="Next" hidden/>
        </fieldset>
        <fieldset>
          <input type="button" name="next" class="next action-button" id="secondNext"  value="Next" hidden/>
          <input type="button" name="previous" class="previous action-button-previous"  id="firstPrev"   value="Previous" hidden/>
        </fieldset>
        <fieldset>
          <input type="button" name="next" class="next action-button"  id="thirdNext"   value="Submit" hidden/>
          <input type="button" name="previous" class="previous action-button-previous"  id="secondPrev"  value="Previous" hidden/>
        </fieldset>   

        <div class="cancelbtn" id="cancel">
          
          <a href="/" type="button" name="cancel"  class="btn btn-danger">Cancel Request</a>
          
        </div>
        <div class="servicepdetails" id="sp_detail">
          
        
          
        </div>

      </form>

      <div class="sprice">
        <h5> Name: {{$cardetails['model']}}</h5>
        <h5>Brand: {{$cardetails['carbrand']}}</h5>
        <h5> Year: {{$cardetails['year']}}</h5>
        <h5>Price: {{$cardetails['s_price']}} </h5>
        </div>



{{--  {{dd($booking, $cardetails)}}  --}}
      <input type="text" name="bookingid" id="bookingid" value="{{$booking->req_id}}" hidden />
    <input type="text" name="service" id="service" value="{{$cardetails['service']}}" hidden/>
    <input type="text" name="classes" id="classes" value="{{$cardetails['class']}}" hidden/>
    <input type="text" name="model" id="model" value="{{$cardetails['model']}}"hidden />
    <input type="text" name="carbrand" id="carbrand" value="{{$cardetails['carbrand']}}"hidden />
    <input type="text" name="year" id="year" value="{{$cardetails['year']}}"hidden />
    <input type="text" name="lat" id="lat" value="{{$cardetails['lat']}}" hidden/>
    <input type="text" name="long" id="long" value="{{$cardetails['long']}}" hidden/>

    </div>
   

    <script type="text/javascript">
      $(document).ready(function(){

       
          const id = document.getElementById('bookingid').value;
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
                $('#rateus').modal('show');
               }
            });
          });
      
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;
  
  
  $(".next").click(function(){
      
      current_fs = $(this).parent();
      next_fs = $(this).parent().next();
      
      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
      
      //show the next fieldset
      next_fs.show(); 
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
          step: function(now) {
              // for making fielset appear animation
              opacity = 1 - now;
  
              current_fs.css({
                  'display': 'none',
                  'position': 'relative'
              });
              next_fs.css({'opacity': opacity});
          }, 
          duration: 500
      });
  });
  
  $(".previous").click(function(){
      
      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();
      
      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
      
      //show the previous fieldset
      previous_fs.show();
  
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
          step: function(now) {
              // for making fielset appear animation
              opacity = 1 - now;
  
              current_fs.css({
                  'display': 'none',
                  'position': 'relative'
              });
              previous_fs.css({'opacity': opacity});
          }, 
          duration: 500
      });
  });
  
  
  
  $(".submit").click(function(){
      return false;
  })
      
  });
  </script>

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  
  
  <script>
    setInterval(function () {
      var id = $("#bookingid").val();
        $.ajax({
           type:'POST',
           url:'/getspinfo',
           headers: {
                  'X-CSRF-TOKEN' : $('input[name="_token"]').val()
            },
            data : {
                  id: id,
              },
           success:function(data) {
            console.log(data);
            
            document.getElementById('sp_detail').innerHTML  = "<h4>Service Provider: "+ data.sp_name + " <br>Contact Info: "+ data.sp_phone+" </h4>";

           }
           
        });
     }, 10000);
    </script>
  
  <script>
     setInterval(function () {
      var id = $("#bookingid").val();
      
     
        $.ajax({
           type:'POST',
           url:'/getupdate',
           headers: {
                  'X-CSRF-TOKEN' : $('input[name="_token"]').val()
            },
            data : {
                  id: id,
              },
           success:function(data) {
            console.log(data);
          
            if (data == 'pending') {
            }
            else if(data == 'accepted'){
              document.getElementById("firstNext").click();
              document.getElementById("cancel").style.display='none';

            }
            else if(data == 'workinprogress'){
              document.getElementById("firstNext").click();
              document.getElementById("secondNext").click();
              document.getElementById("cancel").style.display='none';

            }
            else if(data == 'completed'){
              document.getElementById("firstNext").click();
              document.getElementById("secondNext").click();
              document.getElementById("thirdNext").click();
              document.getElementById("cancel").style.display='none';
              $('#rateus').modal('show');

            }
            else if(data == 'failed'){
              $('#cacelRequest').modal('show');
            }
  
           }
           
        });
     }, 10000);
  </script>


    
@endsection
