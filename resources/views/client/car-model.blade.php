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

    
    <div class="car-model">
        <h3>Enter Car Model</h3>  
        <div class="login-box">
            <form method="POST" action="{{route('selectmap')}}">
              @csrf
              <input type="text" name="service" value="{{$service}}" hidden>
              <input type="text" name="class" value="{{$class}}" hidden>

              <div class="user-box">
                <input type="text" name="model" required>
                <label>Car Name</label>
              </div>
              <div class="user-box">
                <input type="text" name="carbrand" required>
                <label>Car Brand</label>
              </div>
              <div class="user-box">
                <input type="number" name="year" min="1900" max="2099" step="1" placeholder="2016">
                <label>Year</label>

              </div>
              <button type="submit" name="submit" class="btn btn-danger" id="btn">Continue</button>
              {{--  <button type="submit" name="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Next
              </button>  --}}
            </form>
        </div>
    </div>
    <div class="sprice">
      <h5>Price: {{$s_price}}</h5>
    </div>
    <div class="container client-container">
        <div class="card client-card {{$class}}">
        <div class="border client-border">
          @switch($service)


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
              
          
            
            </div>
        </div>
        </div>
        

    </div>
    
    
    
@endsection
