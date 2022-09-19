@extends('layouts.app')
<link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">

@section('content')

    <div class="container client-container">
        <div class="card client-card card0">
        <a href="{{route('select-service', ['breakdown', 'card0'] )}}" class="border client-border">
            <h2>BREAK DOWN</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </a>
        </div>
        <div class="card client-card card1">
        <a href="{{route('select-service', ['battery', 'card1'] )}}" class="border client-border">
            <h2>BATTERY</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </a>
        </div>
        <div class="card client-card card2">
        <a href="{{route('select-service', ['carlock', 'card2'] )}}"class="border client-border">
            <h2>CAR LOCK</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </a>
        </div>
        <div class="card client-card card3">
            <a href="{{route('select-service', ['towtruck', 'card3'] )}}" class="border client-border">
            <h2>TOW TRUCK</h2>
            <div class="icons">
                <i class="fa fa-codepen" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-dribbble" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            </a>
        </div>
        <div class="card client-card card4">
            <a href="{{route('select-service', ['flattyre', 'card4'] )}}" class="border client-border">
            <h2>FLAT TYRE</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            </a>
        </div>
        <div class="card client-card card5">
            <a href="{{route('select-service', ['refueling' , 'card5'] )}}" class="border client-border">
            <h2>REFUELING</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            </a>
        </div>
        <div class="card client-card card6">
            <a href="{{route('select-service', ['carwash', 'card6'] )}}" class="border client-border">
            <h2>CAR WASH</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            </a>
        </div>
        <div class="card client-card card7">
            <a href="{{route('select-service', ['others', 'card7'] )}}" class="border client-border">
            <h2>OTHER</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            </a>
        </div>
    </div>
    {{--  <div class='scrolling-text'>
        <h2 class="scrolling-text-content">Scroll Right</h2>
    </div>  --}}
    {{--  <div class="scroll-arrow">
        <img src="{{URL::asset('/assets/images/black-arrow.png')}}" alt="profile Pic" height="100" width="100">
    </div>
    <div class="scroll-text">
        <h3>scroll right</h3>
    </div>  --}}
    {{--  <div class="container client-container">
        <div class="card client-card card0">
            <div class="border client-border">
            <h2>Al Pacino</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <div class="card client-card card1">
            <div class="border client-border">
            <h2>Ben Stiller</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </div>
        </div>
        <div class="card client-card card2">
            <div class="border client-border">
            <h2>Patrick Stewart</h2>
            <div class="icons">
            <i class="fa fa-codepen" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-dribbble" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </div>
        </div>
    </div>  --}}
@endsection
