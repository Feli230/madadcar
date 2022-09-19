@extends('layouts.app')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@section('content')



<div class="container">

    <div class="card">
        <div>
            <h2>Previous Requests</h2>
        </div>   

        <div class="table-responsive">
            <table class="table text-nowrap text-center">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Service</th>
                        <th>Car Model</th>
                        <th>Car Brand</th>
                        <th>Car Year</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myrequest as $key )
                    <tr>
                        <td>{{$key['clientName']}}</td>
                        <td>{{$key['service_type']}}</td>
                        <td>{{$key['car_model']}}</td>
                        <td>{{$key['car_brand']}}</td>
                        <td>{{$key['car_year']}}</td>
                        <td>{{$key['comment']?$key['comment']:"null"}}</td>
                        <td>{{$key['date']}}</td>
                        <td>{{$key['price']}}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
   </div>

</div>
@endsection
