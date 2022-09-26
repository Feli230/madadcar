@extends('layouts.app')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="{{ asset('assets/styles/style-admin.css') }}" rel="stylesheet">



@section('content')



<div class="container">
    <h1>All Records</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Service Provider Name</th>
                <th>Service Type</th>
                <th> Price</th>
                <th> Car Name</th>
                <th> Car Brand</th>
                <th> Car Year</th>
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
          ajax: "{{ route('allrecords') }}",
          columns: [
              {data: 'req_id', name: 'req_id'},
              {data: 'client_name', name: 'client_name'},
              {data: 'sp_name', name: 'sp_name'},
              {data: 'service', name: 'service'},
              {data: 'price', name: 'price'},
              {data: 'car_model', name: 'car_model'},
              {data: 'car_brand', name: 'car_brand'},
              {data: 'car_year', name: 'car_year'},
              {data: 'comment', name: 'comment'},
              {data: 'client_location', name: 'client_location'},
              {data: 'status', name: 'status'},
              {data: 'date', name: 'date'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
              

          ]
      });
    });
  </script>
 

  <script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'/getTotalPrice',
            success:function(data){
                console.log(data);
            }
        });
    });
</script>

@endsection
