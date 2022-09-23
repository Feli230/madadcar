@extends('layouts.app')

<!-- CSS only -->
<link href="{{ asset('assets/styles/serviceprov.css') }}" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@section('content')




     
    <div class="panel-body">

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif

    

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

    

        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

    

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>

     

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

     

            </div>

        </form>


    </div>




        <div class="text-center">
            <h2>Wallet Pay</h2>
        </div>   

        <div class="walletcard">
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
                    <h4>Wallet</h4>
                    </div>
                </div>
                </div>
                <div class="d-flex justify-content-around my-2 pt-75">

                <div class="totlamt d-flex">
                     <h4>Total Amount:</h4>
                     <p style="position:absolute; left:227">500</p>
                    
                </div>
                <div class="cmmsn d-flex ">
                    <h4>Commission:</h4>
                    <p style="position:absolute; left:227">20%</p>
                   </div>
               
                </div>
                <hr>
                <div class="amntpay d-flex ">
                    <h4>Amount Payable:</h4>
                    <p style="position:absolute; left:240">100</p>
                   </div>
               
                </div>
               
            </div>
            </div>
            <!-- /User Card -->
        </div>


        

       

@endsection
