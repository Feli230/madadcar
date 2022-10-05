<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">  --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    {{--  <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>  --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
          .mybutton{
            border: 0px;
            height: 50px;
            width: 50px;
            color: gray;
            background-color: white;
            margin-left: 10px;
            font-size:35px;
          }
          #a{
            margin-right: 10px;
          }
    </style>


    <script>
        function stara(){
            var btn1 = document.getElementById("a").style.color = "gold";
            var input = document.getElementById("rate").value = "1"
            var btn2 = document.getElementById("b").style.color = "gray";
            var btn3 = document.getElementById("c").style.color = "gray";
            var btn4 = document.getElementById("d").style.color = "gray";
            var btn5 = document.getElementById("e").style.color = "gray";
          }
          function starb(){
            var btn1 = document.getElementById("a").style.color = "gold";
            var btn2 = document.getElementById("b").style.color = "gold";
            var input = document.getElementById("rate").value = "2"
            var btn3 = document.getElementById("c").style.color = "gray";
            var btn4 = document.getElementById("d").style.color = "gray";
            var btn5 = document.getElementById("e").style.color = "gray";
          }
          function starc(){
            var btn1 = document.getElementById("a").style.color = "gold";
            var btn2 = document.getElementById("b").style.color = "gold";
            var btn3 = document.getElementById("c").style.color = "gold";
            var input = document.getElementById("rate").value = "3"
            var btn4 = document.getElementById("d").style.color = "gray";
            var btn5 = document.getElementById("e").style.color = "gray";
          }
          function stard(){
            var btn1 = document.getElementById("a").style.color = "gold";
            var btn2 = document.getElementById("b").style.color = "gold";
            var btn3 = document.getElementById("c").style.color = "gold";
            var btn4 = document.getElementById("d").style.color = "gold";
            var input = document.getElementById("rate").value = "4"
            var btn5 = document.getElementById("e").style.color = "gray";
          }
          function stare(){
            var btn1 = document.getElementById("a").style.color = "gold";
            var btn2 = document.getElementById("b").style.color = "gold";
            var btn3 = document.getElementById("c").style.color = "gold";
            var btn4 = document.getElementById("d").style.color = "gold";
            var btn5 = document.getElementById("e").style.color = "gold";
            var input = document.getElementById("rate").value = "5"
          }
          
    </script>
</head>

<body>
    <!-- Modal -->
<div class="modal fade" id="cacelRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Your Request has been Caneled
      </div>
      <div class="modal-footer">
        <a href="/" type="button" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rateus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route('comtsreviews')}}">
            @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col=12">

                    @if (isset($booking->req_id))
                        @php 
                        $id = $booking->req_id;
                        @endphp
                    @else
                        @php
                        $id = null;
                        @endphp
                    @endif
                    <input type="text" name="req_id" id="req_id" value="{{$id}}" hidden />

                    <input type="number" name="rate" id="rate" value="" hidden/>
                    <div id="stars" class="d-flex">
                    <div class="mybutton" onclick="stara()" id="a">
                        ★
                    </div>
                    <div class="mybutton" onclick="starb()" id="b">
                        ★
                    </div>
                    <div class="mybutton" onclick="starc()" id="c">
                        ★
                    </div>
                    <div class="mybutton" onclick="stard()" id="d">
                        ★
                    </div>
                    <div class="mybutton" onclick="stare()" id="e">
                        ★
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <h3>Comments/Complaint</h3>
                    <textarea name="comment" id="comment" placeholder="Comments" style="width:400px; height:80px;">
                    </textarea>
                </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('previousrecords')}}" >
                                        {{ __('Previous Record') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                               
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main">
            @yield('content')
        </main>
    </div>
</body>
</html>
