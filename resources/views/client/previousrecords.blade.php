@extends('layouts.app')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">


@section('content')



<div class="container">

    <div class="card">
        <div>
            <h2>Previous Requests</h2>
        </div>   

        <div class="table-responsive">
            <table id="madadcar" class="table text-nowrap text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Service Provider</th>
                        <th>Service</th>
                        <th>Car Model</th>
                        <th>Car Brand</th>
                        <th>Car Year</th>
                        <th>Comment</th>
                        <th>Client Location</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                        
                    @foreach ($myrequest as $key )
                        
                    <tr>
                        <td>{{$key['count']}}</td>
                        <td>{{$key['spname']?$key['spname']:"null"}}</td>
                        <td>{{$key['service_type']}}</td>
                        <td>{{$key['car_model']}}</td>
                        <td>{{$key['car_brand']}}</td>
                        <td>{{$key['car_year']}}</td>
                        <td>{{$key['comment']?$key['comment']:"null"}}</td>
                        <td>{{$key['client_location']}}</td>
                        @switch($key['status'])
                            @case('pending')
                                <td style="background-color: rgb(202, 202, 202);">{{$key['status']}}</td>
                                @break
                            @case('accepted')
                                <td  style="background-color: rgb(156, 228, 156);">{{$key['status']}}</td>
                                @break
                            @case('rejected')
                                <td  style="background-color: rgb(224, 165, 165);">{{$key['status']}}</td>
                                @break
                        
                            @default
                                
                        @endswitch
                        {{--  <td>{{$key['status']}}</td>  --}}
                        <td>{{$key['date']}}</td>
                        <td>{{$key['price']}}</td>
                      
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
           
        </div>
        
   </div>

</div>
<script>
    $(document).ready( function () {
        $('#madadcar').DataTable();
    } );
</script>

@endsection
