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
                        <th>Service Provider</th>
                        <th>Service Type</th>
                        <th>Price</th>
                        <th>Car Model</th>
                        <th>Car Brand</th>
                        <th>Car Year</th>
                        <th>Service Provider Phone</th>
                        <th>Comment</th>
                        <th>Client Location</th>
                        <th>Status</th>
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
          ajax: "{{ route('client-previousrecords') }}",
          columns: [
            {data: 'req_id', name: 'req_id'},
            {data: 'sp_name', name: 'sp_name'},
            {data: 'service', name: 'service'},
            {data: 'price', name: 'price'},
            {data: 'car_model', name: 'car_model'},
            {data: 'car_brand', name: 'car_brand'},
            {data: 'car_year', name: 'car_year'},
            {data: 'sp_phone', name: 'sp_phone'},
            {data: 'comment', name: 'comment'},
            {data: 'client_location', name: 'client_location'},
            {data: 'status', name: 'status'},
            {data: 'date', name: 'date'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
  </script>
{{--  <script>
    $(document).ready( function () {
        $('#madadcar').DataTable();
    } );
</script>  --}}

@endsection

{{--  @php
                    $total = $total + $key['price'];
                    @endphp  --}}
                    {{--  <tr>
                    <td colspan="8">Total</td>
                    <td>{{$total}}</td>

                   </tr>  --}}
                   {{--                    
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
                        <td>{{$key['date']}}</td>
                        <td>{{$key['price']}}</td>
                      
                    </tr>

                    

                    @endforeach  --}}