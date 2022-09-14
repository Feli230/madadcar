@extends('layouts.app')
<link href="{{ asset('assets/styles/servicecard.css') }}" rel="stylesheet">

@section('content')


    {{--  <div class="col-6 justify-center">
        <h2>Enter Car Information</h2>
    </div>
    <div class="row">
        <div class="d-flex">
            <strong>Car Full Model</strong>
            <input type="text" name="carmodel">
        </div>
    </div>  --}}

      <div class="wrapper">
        <div class="img-area">
          <div class="inner-area">
            <img
              src="https://www.seekpng.com/png/detail/256-2564130_young-business-woman-png.png"
              alt="twitter"
            />
          </div>
        </div>
        <div class="name">Anjana smith</div>
        <div class="career">Student</div>
        <hr class="horizon" />
        <button class="about">About Me</button>
        <div class="info">
          <p>Name: Md??</p>
          <p>Age: ??r</p>
          <p></p>
          <p></p>
          <p>Blood: O+</p>
          <p>Email:</p>
          <p></p>
        </div>
        <p class="flow">Follow Me</p>
        <div class="social-icons">
          <a href="??" target="_blank" class="fb"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="??" target="_blank" class="messenger"
            ><i class="fab fa-facebook-messenger"></i
          ></a>
          <a href="??" target="_blank" class="insta"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="??" target="_blank" class="telegram"
            ><i class="fab fa-telegram-plane"></i
          ></a>
          <a href="??" target="_blank" class="email"
            ><i class="fas fa-envelope"></i
          ></a>
        </div>
      </div>
  
@endsection
