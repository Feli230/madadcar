@extends('layouts.app')

<!-- CSS only -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

<link href="{{ asset('assets/styles/style-admin.css') }}" rel="stylesheet">
@section('content')



<div class="container">
    <h2>Previous Requests</h2>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Client Name</th>
                <th>Service Type</th>
                <th>Price</th>
                <th>Car Model</th>
                <th>Car Brand</th>
                <th>Car Year</th>
                <th>Client Phone</th>
                <th>Comment</th>
                <th>Date</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
   
</div>



<script type="text/javascript">
    $(function () {
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('service-provider-previousrecords') }}",
          columns: [
            {data: 'req_id', name: 'req_id'},
            {data: 'client_name', name: 'client_name'},
            {data: 'service', name: 'service'},
            {data: 'price', name: 'price'},
            {data: 'car_model', name: 'car_model'},
            {data: 'car_brand', name: 'car_brand'},
            {data: 'car_year', name: 'car_year'},
            {data: 'client_phone', name: 'client_phone'},
            {data: 'comment', name: 'comment'},
            {data: 'date', name: 'date'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            
          ]
      });
      
    });
  </script>


@endsection


{{--  @foreach ($myrequest as $key )
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
@endforeach  --}}