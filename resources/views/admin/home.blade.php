@extends('layouts.app')
{{--  <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">  --}}
{{--  <link href="{{ asset('assets/styles/serviceprov.css') }}" rel="stylesheet">  --}}
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="{{ asset('assets/styles/style-admin.css') }}" rel="stylesheet">

@section('content')

    <div class="container client-container">
        <h1>Admin Panel</h1>
        <div class="d-flex mt-4">
            <div class="d-flex m-2">
              <div class="card red " style="width: 15rem; height:100px;">
                <div class="card-body">
                    <a href="{{route('deposit')}}">
                  <h6 class="card-title">Deposit</h6>
                    </a>
                </div>
           {{--  <div class="card-footer clickable-card text-muted">
                  <button type="button" class="btn btn-secondary btn-sm btn-block">
                    Action
                  </button>
                </div>   --}}
              </div>
            </div>
            <div class="d-flex m-2">
              <div class="card green " style="width: 15rem; height:100px;">
                <div class="card-body">
                 <a href="{{route('adminclients')}}">
                  <h6 class="card-title">Clients</h6>
                 </a>
                </div>
              </div>
            </div>
            <div class="d-flex m-2">
              <div class="card black " style="width: 15rem; height:100px;">
                <div class="card-body">
                 <a href="{{route('adminserviceproviders')}}">
                  <h6 class="card-title">Service Providers</h6>
                 </a>
                </div>
              </div>
            </div>
            <div class="d-flex m-2">
              <div class="card yellow " style="width: 15rem; height:100px;">
                <div class="card-body">
                 <a href="{{route('allrecords')}}">
                  <h6 class="card-title">All Records</h6>
                 </a>
                </div>
              </div>
            </div>

           
                {{--  <div class="d-flex m-2">
                <div class="card yellow " style="width: 15rem;">
                    <div class="card-body">
                    <h6 class="card-title">Services</h6>
                    <p class="card-text">No Action</p>
                    </div>
                </div>
                </div>
                <div class="d-flex m-2">
                <div class="card gray " style="width: 15rem;">
                    <div class="card-body">
                    <h6 class="card-title">Cars</h6>
                    <p class="card-text">No Action</p>
                    </div>
                </div>
                </div>  --}}
          </div>
          
    </div>  
@endsection
 