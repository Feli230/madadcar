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
              <div class="user-box">
                <input type="text" name="model" required>
                <label>Car Model</label>
              </div>
              <div class="user-box">
                <input type="text" name="carbrand" required>
                <label>Car Brand</label>
              </div>
              <div class="user-box">
                <input type="number" name="year" min="1900" max="2099" step="1" value="2016">
                <label>Year</label>

              </div>
              <button type="submit" name="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Next
              </button>
            </form>
        </div>
    </div>
    <div class="container client-container">
        <div class="card client-card card0">
        <div class="border client-border">
            <h2>{{$service}}</h2>
            <div class="icons">
            {{--  <i class="fa fa-codepen">Car Brand</i>
            <i class="fa fa-instagram">Car Modal</i>
            <i class="fa fa-dribbble">Car Year</i>
            <i class="fa fa-twitter">farhan</i>
            <i class="fa fa-facebook">farhan</i>  --}}
            </div>
        </div>
        </div>
        

    </div>
    
    
    
@endsection
