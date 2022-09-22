@extends('layouts.app')
  <link href="{{ asset('assets/styles/brkdwn.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
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
                <i class="fa fa-instagram">Price: 700 </i>
                </div>
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
          <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>
        <fieldset>
          <input type="button" name="next" class="next action-button" value="Next"/>
          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
        </fieldset>
        <fieldset>
          <input type="button" name="next" class="next action-button" value="Submit"/>
          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
        </fieldset>
        <fieldset>
         
      </fieldset>        
        <div class="cancelbtn">
          <a href="#">
          <button type="button" class="btn btn-danger">Cancel Request</button>
          </a>
        </div>

      </form>

    </div>
    
    <script type="text/javascript">
      $(document).ready(function(){
      
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;
  
  setProgressBar(current);
  
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
      setProgressBar(++current);
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
      setProgressBar(--current);
  });
  
  function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
        .css("width",percent+"%")   
  }
  
  $(".submit").click(function(){
      return false;
  })
      
  });
  </script>
    
@endsection
